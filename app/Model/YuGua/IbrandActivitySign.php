<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户ID
 * @property int $activity_status 活动标识，1.瓜分金豆
 * @property int $status 状态值，0.默认未报名，1.报名成功，3.领取成功
 * @property string $sign_at 报名日期
 * @property int $point 领取得到金豆
 * @property string $activity_at 领取时间
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandActivitySign extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_sign';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'activity_status' => 'integer', 'status' => 'integer', 'point' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}