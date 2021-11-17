<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $device_id 设备号
 * @property string $type 手机类型
 * @property int $game_type 埋点类型，1.弹窗，2.小助手
 * @property int $popup_id 弹窗id
 * @property string $notice_id 消息id
 * @property int $num 次数
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandGameRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_game_record';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'game_type' => 'integer', 'popup_id' => 'integer', 'num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}