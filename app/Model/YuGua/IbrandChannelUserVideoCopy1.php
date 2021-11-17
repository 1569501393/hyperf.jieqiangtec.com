<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property string $date 日期
 * @property string $channel 渠道
 * @property int $new_active_user 激活数
 * @property int $reg_user 注册数
 * @property int $video_one_num 激励1次及以上用户数
 * @property int $video_two_num 激励2次及以上用户数
 * @property int $video_three_num 激励3次及以上用户数
 * @property int $video_four_num 激励4次及以上用户数
 * @property int $video_five_num 激励5次及以上用户数
 * @property int $video_six_num 激励6次及以上用户数
 * @property int $video_seven_num 激励7次及以上用户数
 * @property int $video_eight_num 激励8次及以上用户数
 * @property int $video_nine_num 激励9次及以上用户数
 * @property int $video_ten_num 激励10次及以上用户数
 * @property int $video_eleven_num 激励11次及以上用户数
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property string $deleted_at 删除时间
 */
class IbrandChannelUserVideoCopy1 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_user_video_copy1';
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
    protected $casts = ['id' => 'integer', 'new_active_user' => 'integer', 'reg_user' => 'integer', 'video_one_num' => 'integer', 'video_two_num' => 'integer', 'video_three_num' => 'integer', 'video_four_num' => 'integer', 'video_five_num' => 'integer', 'video_six_num' => 'integer', 'video_seven_num' => 'integer', 'video_eight_num' => 'integer', 'video_nine_num' => 'integer', 'video_ten_num' => 'integer', 'video_eleven_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}