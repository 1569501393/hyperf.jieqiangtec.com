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

use App\Model\Text;

class DbController extends AbstractController
{
    /**
     * @return array
     *
     * http://hyperf.qltech.test/db/index
     */
    public function index()
    {
        $text = Text::query()->where('id', 1)->first(['id', 'name']);
        // dd('$text===', $text);

        return ['text' => $text];
    }
}
