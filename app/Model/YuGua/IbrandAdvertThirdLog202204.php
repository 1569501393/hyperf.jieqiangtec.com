<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $url 广告
 * @property int $type 广告位：1.开屏 2.信息流 3.签到 4.看视频 5.开启自动播放
 * @property int $user_id 用户ID
 * @property string $uuid 请求唯一id
 * @property int $action 用户操作：1视频开始；2视频暂停，3视频结束，4视频点击，5图片展示，6图片点击
 * @property int $client 客户端，1.安卓 2.ios
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $way 1穿山甲，2优量汇
 */
class IbrandAdvertThirdLog202204 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_third_log_202204';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'user_id' => 'integer', 'action' => 'integer', 'client' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'way' => 'integer'];
}