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
namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id
 * @property string $name 名称
 * @property string $title 标题
 * @property string $desc 描述
 * @property string $content 内容
 * @property int $type 文本类型 1.帮助中心 2.特别鸣谢
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class Text extends Model
{
    // [2021-08-15 22:58:46] sql.INFO: [0.43] update `text` set `deleted_at` = '1629039526', `text`.`updated_at` = '1629039526' where `id` = '2' and `text`.`deleted_at` is null [] []
    // 软删除 deleted_at is null
    // use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'text';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'shanya';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];

    protected $dateFormat = 'U';
}
