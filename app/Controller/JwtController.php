<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf-2021.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Carbon\Carbon;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use HyperfExt\Jwt\Claims\Collection;
use HyperfExt\Jwt\Claims\Expiration;
use HyperfExt\Jwt\Claims\IssuedAt;
use HyperfExt\Jwt\Claims\Issuer;
use HyperfExt\Jwt\Claims\JwtId;
use HyperfExt\Jwt\Claims\NotBefore;
use HyperfExt\Jwt\Claims\Subject;
use HyperfExt\Jwt\Contracts\JwtFactoryInterface;
use HyperfExt\Jwt\Contracts\ManagerInterface;
use HyperfExt\Jwt\Exceptions\JwtException;
use HyperfExt\Jwt\Exceptions\TokenBlacklistedException;
use HyperfExt\Jwt\Jwt;
use HyperfExt\Jwt\Payload;

class JwtController extends AbstractController
{
    /**
     * @Inject
     */
    protected ManagerInterface $jwtManager;

    /**
     * @Inject
     */
    protected JwtFactoryInterface $jwtFactory;

    /**
     * @Inject
     */
    protected Jwt $jwt;

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function encode(RequestInterface $request, ResponseInterface $response)
    {
        $now = Carbon::now()->timestamp;
        $claims = [
            new Subject(json_encode(['name' => 'jieqiang2', 'age' => 18])),
            new Issuer('http://example.com'),
            new Expiration($now + 3600),
            new NotBefore($now),
            new IssuedAt($now),
            new JwtId(1),
        ];

        $collection = Collection::make($claims);
        $payload = new Payload($collection);
        // $jwtEncode = $jwt::encode($payload, $key, $alg);
        // eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImF1ZCI6Imh0dHA6XC9cL2V4YW1wbGUuY29tIiwiaWF0IjoxMzU2OTk5NTI0LCJuYmYiOjEzNTcwMDAwMDB9.KcNaeDRMPwkRHDHsuIh1L2B01VApiu3aTOkWplFjoYI
        // dump($payload);

        $jwtEncode = $this->jwtManager->encode($payload);
        // $jwtEncode = $jwtManager::encode($payload);
        dump($jwtEncode);

        // 加入黑名单
        $this->jwtManager->invalidate($jwtEncode);

        // 获取 accessToken
        $accessToken = $jwtEncode->get();
        dump('$accessToken==', $accessToken, $this->jwt->getToken());

        try {
            $jwtDecode = $this->jwtManager->decode($jwtEncode);
            // {#1017
            //     +"iss": "http://example.org"
            //     +"aud": "http://example.com"
            //     +"iat": 1356999524
            //     +"nbf": 1357000000
            // }
            dump($jwtDecode, $jwtDecode->get());
        } catch (TokenBlacklistedException $e) {
            dump($e->getMessage());
        }


        return $response->raw('Hello Hyperf23!');
    }

    public function decode()
    {
        $token = $this->jwt->getToken();
        if ($token) {
            try {
                $jwtDecode = $this->jwtManager->decode($token);
                dump('$token==', $token, $jwtDecode);
            } catch (JwtException $e) {
                dump($e->getMessage());
            }
        }

    }
}
