<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $apprentice_total 邀请当日徒弟数量,用户邀请徒弟的总和
 * @property int $apprentice_cash_times 徒弟提现次数的总和
 * @property int $apprentice_cash_per 徒弟总提现次数/邀请好友数量*100
 * @property int $apprentice_retention_one 徒弟次日留存数：成功邀请的徒弟，在第2天还有登录的人数
 * @property int $apprentice_retention_one_rate 徒弟次日留存率：徒弟次日留存数/邀请当日徒弟数量
 * @property int $apprentice_retention_two 徒弟2日留存数：成功邀请的徒弟，在第3天还有登录的人数
 * @property int $apprentice_retention_two_rate 徒弟2日留存率：徒弟2日留存数/邀请当日徒弟数量
 * @property int $apprentice_retention_three 徒弟3日留存数：成功邀请的徒弟，在第4天还有登录的人数
 * @property int $apprentice_retention_three_rate 徒弟3日留存率：徒弟3日留存数/邀请当日徒弟数量
 * @property int $apprentice_retention_four 徒弟4日留存数：成功邀请的徒弟，在第5天还有登录的人数
 * @property int $apprentice_retention_four_rate 徒弟4日留存率：徒弟4日留存数/邀请当日徒弟数量
 * @property int $apprentice_retention_five 徒弟5日留存数：成功邀请的徒弟，在第6天还有登录的人数
 * @property int $apprentice_retention_five_rate 徒弟5日留存率：徒弟5日留存数/邀请当日徒弟数量
 * @property int $apprentice_retention_six 徒弟6日留存数：成功邀请的徒弟，在第7天还有登录的人数
 * @property int $apprentice_retention_six_rate 徒弟6日留存率：徒弟6日留存数/邀请当日徒弟数量
 * @property int $apprentice_retention_seven 徒弟7日留存数：成功邀请的徒弟，在第8天还有登录的人数
 * @property int $apprentice_retention_seven_rate 徒弟7日留存率：徒弟7日留存数/邀请当日徒弟数量
 * @property int $status 转换状态:1 正常 2已拉黑
 * @property int $day 日期（20210716）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandInviteUserAuditRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_invite_user_audit_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'apprentice_total' => 'integer', 'apprentice_cash_times' => 'integer', 'apprentice_cash_per' => 'integer', 'apprentice_retention_one' => 'integer', 'apprentice_retention_one_rate' => 'integer', 'apprentice_retention_two' => 'integer', 'apprentice_retention_two_rate' => 'integer', 'apprentice_retention_three' => 'integer', 'apprentice_retention_three_rate' => 'integer', 'apprentice_retention_four' => 'integer', 'apprentice_retention_four_rate' => 'integer', 'apprentice_retention_five' => 'integer', 'apprentice_retention_five_rate' => 'integer', 'apprentice_retention_six' => 'integer', 'apprentice_retention_six_rate' => 'integer', 'apprentice_retention_seven' => 'integer', 'apprentice_retention_seven_rate' => 'integer', 'status' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}