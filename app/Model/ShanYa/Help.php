<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $pid 父级id
 * @property int $sort 排序，值越大越靠前
 * @property string $title 标题
 * @property int $text_id 文本内容id
 * @property string $url 链接
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class Help extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'help';
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
    protected $casts = ['id' => 'integer', 'pid' => 'integer', 'sort' => 'integer', 'text_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}