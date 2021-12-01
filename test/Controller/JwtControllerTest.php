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
namespace HyperfTest\Controller;

use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class JwtControllerTest extends HttpTestCase
{
    public function testJwtControllerEncode()
    {
        $uri = 'jwt/encode';
        $res = $this->get($uri);
        dump('$res==', $res);
        $this->assertTrue(true);
    }

    public function testJwtControllerDecode()
    {
        $uri = 'jwt/decode';
        $header = ['authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ7XCJuYW1lXCI6XCJqaWVxaWFuZ1wiLFwiYWdlXCI6MTh9IiwiaXNzIjoiaHR0cDovL2V4YW1wbGUuY29tIiwiZXhwIjoxNjM4MzYzMTY5LCJuYmYiOjE2MzgzNTk1NjksImlhdCI6MTYzODM1OTU2OSwianRpIjoiZm9vIn0.zBchgXPueXHox6zYEkN-jL3phXg2bUhQPtXcXgjHjwYwZ66sA4IvduMw30y_rhqMzfyOX-rFrdUVZ4ng0g8jqw'];

        $data = [];
        $res = $this->get($uri, $data, $header);
        dump('$res==', $res);
        $this->assertTrue(true);
    }
}
