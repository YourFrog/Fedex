<?php

namespace AppBundle\Controller;

use AppBundle\Entity;
use Kreait\Firebase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package AppBundle\Controller
 *
 * @Route("/web")
 */
class WebController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $params = [];

        return $this->render('/web/index.html.twig', $params);
    }

    /**
     * @Route("/send", name="homepagexxx")
     */
    public function sendAction(Request $request)
    {
        $message = Firebase\Messaging\CloudMessage::withTarget('token', 'dhxa69OEOao:APA91bGmGrnMTMM04WbpkfJkRg0m1pa2YHxbx_AU62y6bGArApKWAXj7TbkaHfD4jBl3tMvGD-ngWun0517SGQTQ2bz896m942ZpJhQn_j8a6FCliFLzxI20jgGL39f0-04-0CfVSV4E');
        $message = $message->withNotification([
            'title' => 'Please enter the title of your message',
            'body' => 'Please enter the body of your message',
        ]);

        $acc = Firebase\ServiceAccount::fromArray([
  "type" => "service_account",
  "project_id" => "toilet-557d1",
  "private_key_id" => "a0d518143a3bcd72c7d6b531c44957fbc9c0b539",
  "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEuwIBADANBgkqhkiG9w0BAQEFAASCBKUwggShAgEAAoIBAQDu1lNXh9GmMPL6\n+wBmAVEmtu7bruZCqbds9aeQ/Mo7HM4IlbSGADqDuFB54r2/5Xskok3sdCI6AyWW\nXbPVBZXnwY65FGZZ+5P2n+PGvL2aDqhVa5u1NwwFfely0DVme9WJr9oF6AGF9VB5\nx1beogMjaq4thCm/Zd+E0YQNf/LJIBlpiZzQRVY+afKxuccVR6ZPhF2dw1tb6GwK\nytoeO3Klj036FydCjkufkiuBaIxn+1nQYrDv0wY2SybfnaFGgs0GRJLG4AfelLRv\n1aMZDIjl54ehmxLV9hHIlzY7tYpq0EyGO3dA/NWVra6/cfFffq6sNIYsKQzkARCF\nPFogCJb/AgMBAAECgf8xmfwKXFVYrnxyo1jx1lQu4M8P0MMBapMtjdcUcBY6heuZ\nh33Lq+slxUxGrqW5tMReV1bXmfGBxXreP5eZe2TRPOGR49Vd2rcKq9TM8WXEbkbc\ny/xf0OQuP81mitc28YDnl3MwHCmKKJMODNgoZH1CXbrOuSPycWB6X7ONGjAnP0dN\nomA665E1LX78cSokeHdJyB14VAiUOBhbO0/6wVeoEGami11RSqNsb/pg/S3puftj\nCuVaIorYA3jaSlX7MG9cfQ5Wz4Vr25f4nH10Wrq2lGg46dALf+LTsMaf2z4+Aws4\n1HKFOQ9Kz5c9hMwmxCClNgj0BeH6RDQkDiSmDK0CgYEA/DcpNUPXvHqFP0gYbrMR\nSt/AGTajQmZyC1anojXdwFjzSzsS71CglkBFnTiQfzyJ6Jcut+t4PJWzog5xDrxP\nnzXguw/v6NacHtcdi3fdzYusVKxE4BJiLc67c8oPLdTRzRv96zAxog1uVvA4uXG0\nz53lzCV5YcX7capUbZc6BRsCgYEA8mvGQ0kyY2GcS+cenP4M6DwEIXxDZAnp5ylV\nxCHSHXUvZTlCvdN79vHLBfC6FA/PCfTfJnb2+3w1smbIJ00WsS6m2VjiWUzEWW4A\ngT5ro8ERsRpQaYkYowGDyo60pFYrqm1Bi/vpT4wUkiVd87LmOI98Z2EXLexZ0EEu\nyD4MZ+0CgYAzHXLKir9UQXhzxMa+2Keuhv5Fnd8ke+KtDZjXtRcF/oEARC6oNaz2\nBnyVSntubfR9IPak66HolWZcd5TOKbfxSlgLUUWL6MKnNW2VcGuRVrdMScWDq/Yd\n1oIDC3ZcEX+blAq3+YJ1l0c/c1vrqXG9igCiiQ26lQdKl/yYYUeu9QKBgQDtvtbN\nTG73WlZfdkXmr5zW8W0Xrfell7dmdnpfhM+9Bh06R6L16f+sWsvCgqjrXemtmRJ0\ndb2ZO+KpmPV43biAggEuLWanL4ttLV2fYylLiuCf8O+l4Mdhre2jbLsqZDwkw0vC\nTocs9XODNNRkWTJBjC70cBq8dgxLGnIX/gpKrQKBgC3KUwVkjZRnwgiOMLfj+8sG\nCgwlq/ayjmouClkoF2Fpq+oMfBtyJGtMw70/3ZeJiAJmpG87juffH+frsW6fYo2p\nS+ndqfe6g1/SOK2kIP+/NJOIoN6vxWVnmVY+HvwwfjWdvpUqn70ewzRR5Sej/aqp\n5C+Va0aKqc+Pm95b1L3N\n-----END PRIVATE KEY-----\n",
  "client_email" => "firebase-adminsdk-kokng@toilet-557d1.iam.gserviceaccount.com",
  "client_id" => "102199828741986734495",
  "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
  "token_uri" => "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-kokng%40toilet-557d1.iam.gserviceaccount.com"

        ]);

        $factory = new Firebase\Factory();
        $firebase = $factory->withServiceAccount($acc)->create();


        $result = $firebase->getMessaging()->send($message);

        var_dump($result);
        die();

        $deviceToken = 'aaaa';
        $server_key = 'AAAAd-OlQhc:APA91bGyoDUs3ppxN6fzzOU4U-QTM6Z8nmirvfpomBU6l8PHrUL0BUB5t5OTxc98CWByT6WVuJIHeWUorTrKJAsJ5ApUsw4spGHy8JG4fcMlaCnwlUFLmu5Q1H7oKl8vZqEr70CK6xfm';

        $url = 'https://iid.googleapis.com/iid/v1:batchAdd';
        //$url = "https://iid.googleapis.com/iid/v1:batchRemove";
//        $fields['registration_tokens'] = $deviceToken;
        $fields['topic'] = '/topics/my-app';
        $headers = array(
            'Content-Type:application/json',
            'Authorization:key='.$server_key
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);

        var_dump($result);exit;
    }

}
