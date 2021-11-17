<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户ID
 * @property string $date 
 * @property int $show_times 展示次数
 * @property int $click_times 点击次数
 * @property string $url 广告
 * @property int $type 广告位：1.开屏 2.信息流 3.签到 4.看视频 5.开启自动播放
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $way 1穿山甲，2优量汇
 */
class IbrandAdvertThirdRecord202204 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_third_record_202204';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'show_times' => 'integer', 'click_times' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'way' => 'integer'];
}