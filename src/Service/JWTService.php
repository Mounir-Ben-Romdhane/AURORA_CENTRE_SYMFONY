<?php
namespace App\Service;

use DateTimeImmutable;
use Symfony\Bundle\MakerBundle\Str;

class JWTService 
{
    // On génère le token

    /**
     * Génération du JWT
     * @param array $header
     * @param array $payload
     * @param string $secret
     * @param int $validity
     * @return string
     */

    public function generate(array $header, array $payload, string $secret, int $validity = 10800 ): string
    {
        if($validity > 0)
        {
            $now = new DateTimeImmutable();
            $exp = $now->getTimestamp() + $validity;
    
            $payload['iat'] = $now->getTimestamp();
            $payload['exp'] = $exp;
        }

        

        // On encode en base64
        $base64Header = base64_encode(json_encode($header));
        $base64Payload = base64_encode(json_encode($payload));

        // On "nettoie" les valeurs encodéées (retrait des +, / et +)
        $base64Header = str_replace(['+' , '/' , '='], ['-','_',''],$base64Header);
        $base64Payload = str_replace(['+' , '/' , '='], ['-','_',''],$base64Payload );

        // On genere la signature 
        $secret = base64_encode($secret);

        $signature = hash_hmac('sha256' , $base64Header.'.'.$base64Payload, $secret , true);

        $bas64Signature = base64_encode($signature);

        $bas64Signature = str_replace(['+' , '/' , '='], ['-','_',''],$bas64Signature );

        // On crée le token 
        $jwt = $base64Header.'.'.$base64Payload.'.'.$bas64Signature;

        return $jwt;
    }

    // On vérifier que le token est valide ( correctement formé)

    public function isValid(string $token): bool
    {
        return preg_match(
            '/^[a-zA-z0-9\-\_\=]+\.[a-zA-z0-9\-\_\=]+\.[a-zA-z0-9\-\_\=]+$/',
            $token
        ) === 1;
    }

    // On récupère le Payload
    public function getPayload(string $token): array
    {
        // On démote le token 
        $array = explode('.',$token);

        // On décode le payload
        $payload = json_decode(base64_decode($array[1]),true);

        return $payload;
    } 

    // On récupère le Header
    public function getHeader(string $token): array
    {
        // On démote le token 
        $array = explode('.',$token);

        // On décode le header
        $header = json_decode(base64_decode($array[0]),true);

        return $header;
    } 

    // On vérifie si le token a expiré
    public function isExpired(string $token): bool
    {
        // On va chercher le Payload
        $payload = $this->getPayload($token);
        
        $now = new DateTimeImmutable();

        return $payload['exp'] < $now->getTimestamp();
    } 

    // On vérifie la signature du token
    public function check(string $token, string $secret)
    {
        // On récupere le header et le payload
        $header = $this->getHeader($token);
        $payload = $this->getPayload($token);

        // On regenere un token
        $verifToken =$this->generate($header,$payload, $secret ,0);

        return $token === $verifToken;
    } 

}