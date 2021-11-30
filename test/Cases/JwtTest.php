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

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Hyperf\Utils\ApplicationContext;
use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class JwtTest extends HttpTestCase
{
    public function testJwtEncode()
    {
        $jwt = ApplicationContext::getContainer()->get(JWT::class);
        $key = 'example_key';
        $alg = 'HS256';

        // 标准声明的字段有:
        // 1.iss token的发行者
        // 2.sub 该jwt所面向的用户
        // 3.aud 接收该jwt的一方
        // 4.exp token的失效时间
        // 5.nbf 在此时间段之前,不会被处理
        // 6.iat jwt发布时间
        // 7.jti jwt唯一标识,防止重复使用
        $payload = [
            'iss' => 'http://example.org',
            'aud' => 'http://example.com',
            'iat' => 1356999524,
            'nbf' => 1357000000,
            'info' => ['name' => 'jieqiang', 'age' => 18],
        ];
        $jwtEncode = $jwt::encode($payload, $key, $alg);
        // eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImF1ZCI6Imh0dHA6XC9cL2V4YW1wbGUuY29tIiwiaWF0IjoxMzU2OTk5NTI0LCJuYmYiOjEzNTcwMDAwMDB9.KcNaeDRMPwkRHDHsuIh1L2B01VApiu3aTOkWplFjoYI
        dump($jwtEncode);

        $jwtDecode = $jwt::decode($jwtEncode, new Key($key, $alg));
        // {#1017
        //     +"iss": "http://example.org"
        //     +"aud": "http://example.com"
        //     +"iat": 1356999524
        //     +"nbf": 1357000000
        // }
        dump($jwtDecode, $jwtDecode->info->age);

        $this->assertTrue(true);
    }
}
