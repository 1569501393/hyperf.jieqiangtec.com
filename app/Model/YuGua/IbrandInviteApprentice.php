<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 父用户id
 * @property int $apprentice_uid 徒弟用户id
 * @property int $apprentice_balance 徒弟总余额
 * @property int $apprentice_cashed_amount 徒弟已提现余额
 * @property int $apprentice_cashed_times 徒弟已提现次数
 * @property int $apprentice_login_one 徒弟次日登录时间
 * @property int $apprentice_login_two 徒弟2日登录时间
 * @property int $apprentice_login_three 徒弟3日登录时间
 * @property int $apprentice_login_four 徒弟4日登录时间
 * @property int $apprentice_login_five 徒弟5日登录时间
 * @property int $apprentice_login_six 徒弟6日登录时间
 * @property int $apprentice_login_seven 徒弟7日登录时间
 * @property int $active_time 激活时间
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandInviteApprentice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_invite_apprentices';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'apprentice_uid' => 'integer', 'apprentice_balance' => 'integer', 'apprentice_cashed_amount' => 'integer', 'apprentice_cashed_times' => 'integer', 'apprentice_login_one' => 'integer', 'apprentice_login_two' => 'integer', 'apprentice_login_three' => 'integer', 'apprentice_login_four' => 'integer', 'apprentice_login_five' => 'integer', 'apprentice_login_six' => 'integer', 'apprentice_login_seven' => 'integer', 'active_time' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}