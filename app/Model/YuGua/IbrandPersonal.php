<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $type 素材类型: 1个人中心banner,2首页活动按钮
 * @property int $status 是否开启，1.开启，2.停用
 * @property int $app_type app端，1.安卓，2.IOS
 * @property string $banner_name banner名称
 * @property int $send_type 发送用户类型 1.默认 2.新增用户 3.活跃用户 4.注册未提现用户 5.活动提现用户：选择活动提现，需手动填写提现标签，例如“D18” 6.参与活动用户 7.手动导入用户：导入用户的uid
 * @property int $booth 展示位置: 1.首页 2.任务页面 3.个人中心页 4.热点页面 5.消息页
 * @property string $send_type_starttime 类型时间筛选
 * @property string $send_type_endtime 类型时间筛选
 * @property string $send_activity_label 活动提现标签
 * @property string $send_userid 发送用户集合
 * @property string $jump_advert 选择广告平台
 * @property int $jump_type 跳转链接类型 1.站内跳转 2.站外跳转
 * @property string $jump_link 跳转链接
 * @property int $sort 排序
 * @property string $banner_url banner图片
 * @property int $popup_site 弹窗弹出位置 1.首页 2.任务页
 * @property int $popup_tian 弹窗弹出天数
 * @property int $popup_ci 弹窗弹出次数
 * @property int $popup_status 弹窗有效期 1.永久  2.设置时间
 * @property string $starts_at 弹窗开始时间
 * @property string $ends_at 弹窗结束时间
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandPersonal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_personal';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'app_type' => 'integer', 'send_type' => 'integer', 'booth' => 'integer', 'jump_type' => 'integer', 'sort' => 'integer', 'popup_site' => 'integer', 'popup_tian' => 'integer', 'popup_ci' => 'integer', 'popup_status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}