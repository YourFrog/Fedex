<?php

namespace AppBundle\Service\Account;

use AppBundle\Soap\Request\Account\RegisterRequest;
use AppBundle\Validator;
use AppBundle\Entity;
use AppBundle\ValidationManager;
use AppBundle\Soap\Request\Account\AccountRegister;
use AppBundle\Soap\Response;
use Doctrine\ORM\EntityManagerInterface;

/**
 *  Serwis obsługujący rejestrację
 */
class RegisterService
{
    /**
     *  Validatory do endpoint'a
     *
     * @var ValidationManager
     */
    private $validatorManager;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     *  Konto które zostało założone
     *
     * @var Entity\Account\Account
     */
    private $account;

    /**
     *  Konstruktor
     *
     * @param ValidationManager $validatorManager
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(ValidationManager $validatorManager, EntityManagerInterface $entityManager)
    {
        $this->validatorManager = $validatorManager;
        $this->entityManager = $entityManager;
    }

    /**
     *  Zarejestrowanie nowego konta
     *
     * @param RegisterRequest $data
     *
     * @return bool Informacja czy założenie konta się powiodło
     */
    public function register(RegisterRequest $data): bool
    {
        if( $this->validatorManager->isValid($data) == false ) {
            return false;
        }

        try {
            $this->prepareAccount($data);
            $this->saveAccount();

            $this->entityManager->persist($this->account);
            $this->entityManager->flush();
        } catch(\Exception $e) {
            return false;
        }

        return true;
    }

    /**
     *  Błędy do jakich doszło podczas zakładania konta
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->validatorManager->getErrorMessages();
    }

    /**
     *  Token identyfikujący założone konto
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->account->getId();
    }

    /**
     *  Utworzenie konta pasującego do requestu
     *
     * @param RegisterRequest $request
     */
    private function prepareAccount(RegisterRequest $request): void
    {
        $account = new Entity\Account\Account();

        $salt = md5(uniqid());

        $account->setEmail($request->email);
        $account->setLogin($request->login);
        $account->setSalt($salt);
        $account->setPassword(md5($salt . $request->password));

        $this->account = $account;
    }

    /**
     *  Zapisanie konta
     */
    private function saveAccount(): void
    {
        $this->entityManager->persist($this->account);
        $this->entityManager->flush();
    }
}