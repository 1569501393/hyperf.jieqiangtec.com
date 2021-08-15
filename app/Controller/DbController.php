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
        $text = Text::query()->get(['id', 'name']);
        // dd('$text===', $text);

        return ['text' => $text];
    }

    /**
     * @param mixed $id
     * @return array
     *
     * http://hyperf.qltech.test/db/1
     */
    public function show($id)
    {
        // $text = Text::query()->where('id', intval($id))->first(['id', 'name']);
        $text = Text::query()->find($id, ['id', 'name']);
        // dd('$text===', $text);

        return ['text' => $text];
    }

    /**
     * @return array
     */
    public function create()
    {
        $values['name'] = $this->request->query('name', '');
        $values['title'] = $this->request->query('title', '');
        $values['desc'] = $this->request->query('desc', '');
        $text = Text::query()->insertGetId($values);
        // dd('$text===', $text);

        return ['text' => $text];
    }

    /**
     * @param mixed $id
     * @return array
     */
    public function update($id)
    {
        // $text = Text::query()->where('id', 1)->first(['id', 'name']);
        $values['name'] = $this->request->query('name', '');
        $values['title'] = $this->request->query('title', '');
        $values['desc'] = $this->request->query('desc', '');
        $text = Text::query()->where('id', $id)->update($values);
        // dd('$text===', $text);

        return ['text' => $text];
    }

    /**
     * @param mixed $id
     * @return array
     */
    public function destory($id)
    {
        // $text = Text::query()->where('id', 1)->first(['id', 'name']);
        $text = Text::query()->where('id', $id)->delete();
        // dd('$text===', $text);

        return ['text' => $text];
    }

    /**
     * @param mixed $id
     * @return array
     */
    public function edit($id)
    {
        $text = Text::query()->where('id', $id)->first(['id', 'name']);
        // dd('$text===', $text);

        return ['text' => $text];
    }
}
