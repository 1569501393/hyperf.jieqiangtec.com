<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 活动名称
 * @property string $img_url 图片
 * @property int $ac_type 类型
 * @property string $type 活动类型 inner-自身活动 outer-站外 tuia-第三方活动 game-第三方活动
 * @property int $activity_id 自身活动id
 * @property string $jump_url 活动链接
 * @property int $status 状态:1 开启;2 关闭
 * @property int $is_overdue 状态:1 正常;2 过期
 * @property int $sort 排序
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandGameActivity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_game_activity';
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'yugua';
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
    protected $casts = ['id' => 'integer', 'ac_type' => 'integer', 'activity_id' => 'integer', 'status' => 'integer', 'is_overdue' => 'integer', 'sort' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}