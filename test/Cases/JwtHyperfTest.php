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
namespace HyperfTest\Cases;

use Carbon\Carbon;
use Firebase\JWT\Key;
use Hyperf\Utils\ApplicationContext;
use HyperfExt\Jwt\Claims\Collection;
use HyperfExt\Jwt\Claims\Expiration;
use HyperfExt\Jwt\Claims\IssuedAt;
use HyperfExt\Jwt\Claims\Issuer;
use HyperfExt\Jwt\Claims\JwtId;
use HyperfExt\Jwt\Claims\NotBefore;
use HyperfExt\Jwt\Claims\Subject;
use HyperfExt\Jwt\Contracts\CodecInterface;
use HyperfExt\Jwt\Contracts\ManagerInterface;
use HyperfExt\Jwt\Exceptions\TokenBlacklistedException;
use HyperfExt\Jwt\Manager;
use HyperfExt\Jwt\Payload;
use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class JwtHyperfTest extends HttpTestCase
{


    public function testJwtHyperfEncode()
    {
        // $jwt = ApplicationContext::getContainer()->get(\HyperfExt\Jwt\Jwt::class);
        $jwtManager = ApplicationContext::getContainer()->get(ManagerInterface::class);

        // 标准声明的字段有:
        // 1.iss token的发行者
        // 2.sub 该jwt所面向的用户
        // 3.aud 接收该jwt的一方
        // 4.exp token的失效时间
        // 5.nbf 在此时间段之前,不会被处理
        // 6.iat jwt发布时间
        // 7.jti jwt唯一标识,防止重复使用
        $now = Carbon::now()->timestamp;
        $claims = [
            new Subject(json_encode(['name' => 'jieqiang', 'age' => 18])),
            new Issuer('http://example.com'),
            new Expiration($now + 3600),
            new NotBefore($now),
            new IssuedAt($now),
            new JwtId('foo'),
        ];

        // $jwtEncode = $jwt->getPayload();

        $collection = Collection::make($claims);
        $payload = new Payload($collection);
        // $jwtEncode = $jwt::encode($payload, $key, $alg);
        // eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImF1ZCI6Imh0dHA6XC9cL2V4YW1wbGUuY29tIiwiaWF0IjoxMzU2OTk5NTI0LCJuYmYiOjEzNTcwMDAwMDB9.KcNaeDRMPwkRHDHsuIh1L2B01VApiu3aTOkWplFjoYI
        // dump($payload);

        $jwtEncode = $jwtManager->encode($payload);
        // $jwtEncode = $jwtManager::encode($payload);
        dump($jwtEncode);

        // $jwtDecode = $jwt::decode($jwtEncode, new Key($key, $alg));
        try {
            $jwtDecode = $jwtManager->decode($jwtEncode);
        } catch (TokenBlacklistedException $e) {
            dump($e->getMessage());

        }
        // {#1017
        //     +"iss": "http://example.org"
        //     +"aud": "http://example.com"
        //     +"iat": 1356999524
        //     +"nbf": 1357000000
        // }
        dump($jwtDecode, $jwtDecode->get());

        // $this->assertTrue(true);
    }
}
