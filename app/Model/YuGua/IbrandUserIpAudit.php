<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property string $model 机型
 * @property string $channel 注册渠道
 * @property string $ip ip
 * @property int $ip_num ip数量
 * @property string $ipd ipd
 * @property int $ipd_num ipd数量
 * @property string $login_times 登录时间
 * @property int $login_num 登录次数
 * @property int $video_advert_request 激励请求数量
 * @property int $video_advert_failed 激励请求失败数量
 * @property int $video_ks_request 快手激励请求数量
 * @property int $video_ks_failed 快手激励请求失败数量
 * @property int $video_show 激励视频展示量
 * @property int $video_click 激励视频点击量
 * @property int $video_click_rate 激励视频点击率，激励点击数量/激励展示数量*100
 * @property int $cash_times 提现次数
 * @property int $audit_time 审核时间
 * @property int $status 转换状态:0 待处理 1审核通过 2已拉黑
 * @property int $date 记录日期:20210928
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandUserIpAudit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_ip_audit';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'ip_num' => 'integer', 'ipd_num' => 'integer', 'login_num' => 'integer', 'video_advert_request' => 'integer', 'video_advert_failed' => 'integer', 'video_ks_request' => 'integer', 'video_ks_failed' => 'integer', 'video_show' => 'integer', 'video_click' => 'integer', 'video_click_rate' => 'integer', 'cash_times' => 'integer', 'audit_time' => 'integer', 'status' => 'integer', 'date' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}