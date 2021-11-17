<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id  转转乐抽奖记录表
 * @property string $record_date 记录日期
 * @property int $type 类型，1：老用户，2：新用户
 * @property int $enter_user_num 进入活动页人数
 * @property int $enter_count_num 进入活动页次数
 * @property int $lot_user_num 抽奖人数
 * @property int $lot_count_num 抽奖次数
 * @property int $lot_next_user_num 次日抽奖人数：当天抽奖，第二天还有抽奖的人数
 * @property int $consume_point 当天消耗金豆：抽奖次数x1000
 * @property int $grant_point 当天发放金豆
 * @property int $video_watch_user_num 免费金豆视频观看人数
 * @property int $video_watch_count_num 免费金豆视频观看次数
 * @property int $transfer_count_num 余额换取金豆笔数
 * @property string $balance_consume_num 余额消耗总数
 * @property int $withdraw_1_num 1元提现次数
 * @property int $withdraw_3_num 3元提现次数
 * @property int $video_3_user 金豆广告观看人数
 * @property int $video_3_count 金豆广告观看次数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandActivityLotReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_lot_report';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'enter_user_num' => 'integer', 'enter_count_num' => 'integer', 'lot_user_num' => 'integer', 'lot_count_num' => 'integer', 'lot_next_user_num' => 'integer', 'consume_point' => 'integer', 'grant_point' => 'integer', 'video_watch_user_num' => 'integer', 'video_watch_count_num' => 'integer', 'transfer_count_num' => 'integer', 'withdraw_1_num' => 'integer', 'withdraw_3_num' => 'integer', 'video_3_user' => 'integer', 'video_3_count' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}