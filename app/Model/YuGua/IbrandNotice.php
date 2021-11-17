<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户ID
 * @property string $title 
 * @property string $type 
 * @property int $mstype 描述类型  1-文本  2-图片
 * @property string $description 
 * @property string $url 
 * @property string $html 
 * @property string $meta 
 * @property int $status 消息类型  1-系统消息  2-用户消息
 * @property int $appstatus app端  1-全部  2-安卓端  3-ios端
 * @property int $jump_status 跳转类型  1-默认跳转  2-填跳转链接
 * @property string $jump_info 超链接提示
 * @property int $url_jl 点击链接奖励  1-无  2-金豆奖励
 * @property string $url_jljd 奖励金豆
 * @property int $if_push 推送时间  1-立即推送  2-定时推送 3-撤回
 * @property string $push_time 定时推送时间
 * @property int $send_type 发送用户类型 1.默认 2.新增用户 3.活跃用户 4.注册未提现用户 5.活动提现用户：选择活动提现，需手动填写提现标签，例如“D18” 6.参与活动用户 7.手动导入用户：导入用户的uid
 * @property string $send_type_starttime 类型时间筛选
 * @property string $send_type_endtime 类型时间筛选
 * @property string $send_activity_label 活动提现标签
 * @property string $send_userid 发送用户集合
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $description_img 描述图片
 */
class IbrandNotice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_notice';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'mstype' => 'integer', 'status' => 'integer', 'appstatus' => 'integer', 'jump_status' => 'integer', 'url_jl' => 'integer', 'if_push' => 'integer', 'send_type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}