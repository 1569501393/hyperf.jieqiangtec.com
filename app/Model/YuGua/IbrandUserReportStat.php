<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $channel 渠道名称
 * @property int $new_device 新增登录设备
 * @property int $new_user 注册用户
 * @property int $cash_user 提现用户
 * @property int $play_video_user 刷视频用户
 * @property int $watch_video_user 看广告用户
 * @property int $click_ad_user 点广告用户
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandUserReportStat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_report_stat';
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
    protected $casts = ['id' => 'integer', 'new_device' => 'integer', 'new_user' => 'integer', 'cash_user' => 'integer', 'play_video_user' => 'integer', 'watch_video_user' => 'integer', 'click_ad_user' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}