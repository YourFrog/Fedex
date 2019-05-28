<?php

namespace AppBundle\Controller;

use AppBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        die('zz');
    }

    /**
     * @Route("/list", name="list")
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\Toilet::class);

        $toilets = $repository->findBy([], ['id' => 'ASC']);

        $response = [];
        $response['toilets'] = [];

        /** @var Entity\Toilet $toilet */
        foreach($toilets as $toilet) {
            $response['toilets'][] = [
                'id' => $toilet->getId(),
                'name' => $toilet->getName(),
                'reservations' => count($toilet->getReservations()),
                'stan' => strtolower($toilet->getStan()),
                'date_of_light' => $toilet->getDateOfLight() == null ? null : $toilet->getDateOfLight()->format('Y-m-d H:i:s')
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @param string $toiletHash
     *
     * @Route("/details-by-hash/{toiletHash}", name="details_by_hash")
     */
    public function detailsByHash(string $toiletHash, Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\Toilet::class);

        /** @var Entity\Toilet $toilet */
        $toilet = $repository->findOneBy(['androidHash' => $toiletHash]);

        return $this->detailsAction($toilet, $request);
    }

    /**
     * @param Request $request
     *
     * @Route("/details/{id}", name="details")
     */
    public function detailsAction(Entity\Toilet $toilet, Request $request)
    {
        $now = new \DateTime();

        /** @var Entity\ToiletReservation[] $reservations */
        $reservations = $toilet->getReservations();

        $response = [];
        $response['detail'] = [
            'id' => $toilet->getId(),
            'name' => $toilet->getName(),
            'stan' => $toilet->getStan()
        ];
        $response['reservations'] = [];
        $isFirst = false;
      
        if( count($reservations) > 0 ) {
            $reservation = $reservations[0];

            // Pierwszy element powinien otrzymać szanse akceptacji jeżeli światło się nie pali bądź pali się powyżej 5 minut
            if ($reservation->getDateOfGive() == null ) {
                $reservation->setDateOfGive(new \DateTime());

                $em = $this->getDoctrine()->getManager();
                $em->persist($reservation);
                $em->flush();
              
                $isFirst = true;
            }
        }
      

        /** @var Entity\ToiletReservation $reservation */
        foreach($reservations as $key => $reservation) {
            $dateOfGive = $reservation->getDateOfGive();

            if( $dateOfGive == null ) {
                $waiting = $now->getTimestamp() - $reservation->getAdded()->getTimestamp();
            } else {
                $waiting = $dateOfGive->getTimestamp() - $reservation->getAdded()->getTimestamp();
            }

            if( $reservation->getDateOfAccept() === null && $reservation->getDateOfGive() !== null ) {

                // Jeżeli mineło ponad 2 minuty to go usuńmy..
                if( !$isFirst && ($now->getTimestamp() - 30 >= $reservation->getDateOfGive()->getTimestamp() - 3600 * 2) ) {

       //       var_dump($reservation->getDateOfGive(), $reservation->getDateOfAccept());
     // var_dump($now->getTimestamp(), $reservation->getDateOfGive()->getTimestamp() - 3600 * 2);
     // var_dump($now->getTimestamp() - 30 >= $reservation->getDateOfGive()->getTimestamp() - 3600 * 2); die();
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($reservation);
                    $em->flush();

                    continue;
                }
            }

            if( $reservation->getDateOfAccept() !== null ) {

                // Jeżeli mineło ponad 10 minut to go usuńmy..
                if( $now->getTimestamp() - 10 * 60 >= $reservation->getDateOfAccept()->getTimestamp() - 3600 * 2 ) {

                    $em = $this->getDoctrine()->getManager();
                    $em->remove($reservation);
                    $em->flush();

                    continue;
                }
            }

            $response['reservations'][] = [
                'client_hash' => $reservation->getClientHash(),
                'waiting' => $waiting,
                'added' => $reservation->getAdded()->format('Y-m-d H:i:s'),
                'date_of_give' => $reservation->getDateOfGive() == null ? null : $reservation->getDateOfGive()->format('Y-m-d H:i:s'),
                'date_of_accept' => $reservation->getDateOfAccept() == null ? null : $reservation->getDateOfAccept()->format('Y-m-d H:i:s')
            ];
        }

        return new JsonResponse($response);
    }
  
    
    /**
     * @param Request $request
     *
     * @Route("/register-by-hash/{toiletHash}", name="register-by-hash")
     */
    public function registerByHashAction(string $toiletHash, Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\Toilet::class);

        /** @var Entity\Toilet $toilet */
        $toilet = $repository->findOneBy(['androidHash' => $toiletHash]);

        $register = new Entity\ToiletReservation();
        $register->setClientHash($toiletHash);
        $register->setToilet($toilet);
        $register->setAdded(new \DateTime());
        $register->setDateOfGive(new \DateTime());
        $register->setDateOfAccept(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($register);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    /**
     * @param Request $request
     *
     * @Route("/register/{id}/andoid/{androidID}", name="register")
     */
    public function registerAction(Entity\Toilet $toilet, string $androidID, Request $request)
    {
        $register = new Entity\ToiletReservation();
        $register->setClientHash($androidID);
        $register->setToilet($toilet);
        $register->setAdded(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($register);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    /**
     * @param string $toiletHash
     * @param Request $request
     *
     * @Route("/unregister-by-hash/{toiletHash}", name="unregister_by_hash")
     */
    public function unregisterByHashAction(string $toiletHash,  Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\Toilet::class);

        /** @var Entity\Toilet $toilet */
        $toilet = $repository->findOneBy(['androidHash' => $toiletHash]);
        return $this->unregisterAction($toilet, $toiletHash, $request);
    }

    /**
     * @param Request $request
     *
     * @Route("/unregister/{id}/andoid/{androidID}", name="unregister")
     */
    public function unregisterAction(Entity\Toilet $toilet, string $androidID, Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\ToiletReservation::class);

        $register = $repository->findOneBy(['toilet' => $toilet, 'client_hash' => $androidID]);

        $em = $this->getDoctrine()->getManager();
        $em->remove($register);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    /**
     * @param Request $request
     *
     * @Route("/accept/{id}/andoid/{androidID}", name="accept")
     */
    public function acceptAction(Entity\Toilet $toilet, string $androidID, Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\ToiletReservation::class);

        /** @var Entity\ToiletReservation $register */
        $register = $repository->findOneBy(['toilet' => $toilet, 'client_hash' => $androidID]);
        $register->setDateOfAccept(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($register);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    /**
     * @param Request $request
     *
     * @Route("/dirt/{id}", name="dirt")
     */
    public function dirtAction(Entity\Toilet $toilet, Request $request)
    {
        $toilet->setStan('brudna');

        $em = $this->getDoctrine()->getManager();
        $em->persist($toilet);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    /**
     * @param Request $request
     *
     * @Route("/clean/{id}", name="clean")
     */
    public function cleanAction(Entity\Toilet $toilet, Request $request)
    {
        $toilet->setStan('czysta');

        $em = $this->getDoctrine()->getManager();
        $em->persist($toilet);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    /**
     * @param Request $request
     *
     * @Route("/light/toiletHash/{toiletHash}/light/{light}", name="light")
     */
    public function lightAction(string $toiletHash, int $light, Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Entity\Toilet::class);

        /** @var Entity\Toilet $toilet */
        $toilet = $repository->findOneBy(['androidHash' => $toiletHash]);

        if( $toilet == null ) {
            return new JsonResponse(["Error"]);
        }

        $date = new \DateTime();

        if( $light == 0 ) {
            $date = null;
        }

        $this->removeReservation($toilet);
        $toilet->setDateOfLight($date);

        $em = $this->getDoctrine()->getManager();
        $em->persist($toilet);
        $em->flush();

        return new JsonResponse(["OK"]);
    }

    private function removeReservation(Entity\Toilet $toilet)
    {
        $now = new \DateTime();

        /** @var Entity\ToiletReservation[] $reservations */
        $reservations = $toilet->getReservations();

        /** @var Entity\ToiletReservation $reservation */
        foreach($reservations as $key => $reservation) {
            if( $reservation->getDateOfAccept() !== null ) {

                // Jeżeli mineło ponad 10 minut to go usuńmy..
                if( $now->getTimestamp() - $reservation->getDateOfAccept()->getTimestamp() >= 40 ) {

                    $em = $this->getDoctrine()->getManager();
                    $em->remove($reservation);
                    $em->flush();
                }
            }
        }
    }
}
