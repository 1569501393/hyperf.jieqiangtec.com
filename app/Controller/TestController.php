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

use stdClass;

class TestController extends AbstractController
{

    /**
     * @return array
     */
    public function indexGet()
    {
        $method = $this->request->getMethod();
        $request['all'] = $this->request->all();
        $request['attributes'] = $this->request->getAttributes();

        $user = new stdClass();
        $user->name = 'jieqiang';
        $user->age = 18;
        // dd('$user===', $user, $user->age);
        return ['method' => $method, 'request' => $request, 'user' => $user];
    }

    /**
     * @return array
     */
    public function indexPost()
    {
        $method = $this->request->getMethod();
        $request = $this->request->all();

        return ['method' => $method, 'request' => $request];
    }

    /**
     * @return array
     */
    public function indexPut()
    {
        $method = $this->request->getMethod();
        $request = $this->request->all();
        return ['method' => $method, 'request' => $request];
    }

    /**
     * @return array
     */
    public function indexPatch()
    {
        $method = $this->request->getMethod();
        $request = $this->request->all();
        return ['method' => $method, 'request' => $request];
    }

    /**
     * @return array
     */
    public function indexDelete()
    {
        $method = $this->request->getMethod();
        $request = $this->request->all();
        return ['method' => $method, 'request' => $request];
    }

    /**
     * @return array
     */
    public function indexHead()
    {
        $method = $this->request->getMethod();
        $request = $this->request->all();
        return ['method' => $method, 'request' => $request];
    }
}
