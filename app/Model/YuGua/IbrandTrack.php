<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id，外键关联 user 表 id 字段
 * @property string $terminal 发起终端: 安卓, ios
 * @property string $channel 渠道
 * @property int $page_id 页面id
 * @property string $action action: 埋点动作，用于查询
 * @property string $note 文字描述，用于展示
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandTrack extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_track';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'page_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}