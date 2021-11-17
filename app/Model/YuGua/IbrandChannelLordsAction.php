<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $lords_channel 主渠道
 * @property string $channel 子渠道
 * @property string $virtual_amt 导入金额
 * @property string $cost 返点
 * @property string $point 消耗
 * @property int $active_user 活跃用户
 * @property int $new_active_user 激活数
 * @property int $reg_user 注册数
 * @property int $ci_active 次活数
 * @property int $advert_click 广告总点击数
 * @property int $advert_show 广告总展示数
 * @property int $new_advert_click 新用户广告总点击数
 * @property int $new_advert_show 新用户广告总展示数
 * @property int $new_cash_times 新用户提现数
 * @property int $cash_times 总提现数
 * @property int $total_cash_times 总提现数
 * @property string $charge 负责人
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $new_video_total 新用户激励视频展示总次数
 * @property int $new_video_per 新用户人均激励视频展示次数
 */
class IbrandChannelLordsAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_lords_action';
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
    protected $casts = ['id' => 'integer', 'active_user' => 'integer', 'new_active_user' => 'integer', 'reg_user' => 'integer', 'ci_active' => 'integer', 'advert_click' => 'integer', 'advert_show' => 'integer', 'new_advert_click' => 'integer', 'new_advert_show' => 'integer', 'new_cash_times' => 'integer', 'cash_times' => 'integer', 'total_cash_times' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'new_video_total' => 'integer', 'new_video_per' => 'integer'];
}