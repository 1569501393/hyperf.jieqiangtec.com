<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $user_id 用户id
 * @property int $advert_video_times 激励视频累计广告次数
 * @property int $rotor_cash_times 大转盘提现次数
 * @property int $voice_cash_times 语音红包提现次数
 * @property int $coral_cash_times 珊瑚提现次数
 * @property int $active_cash_times 活动提现次数
 * @property string $point 用户总积分
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 * @property int $advert_filling_tag 快手填充是否异常，1正常 2异常
 */
class IbrandUserExtendCopy1 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_extend_copy1';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'advert_video_times' => 'integer', 'rotor_cash_times' => 'integer', 'voice_cash_times' => 'integer', 'coral_cash_times' => 'integer', 'active_cash_times' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer', 'advert_filling_tag' => 'integer'];
}