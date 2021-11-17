<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $advert_type 广告源
 * @property int $request_total 请求量
 * @property int $return_total 返回量
 * @property string $fill_rate 填充率
 * @property int $exposure_total 曝光量
 * @property string $exposure_rate 曝光率
 * @property int $click_total 点击量
 * @property string $click_rate 点击率
 * @property int $fail_total 异常量
 * @property string $fail_rate 异常率
 * @property int $trans_success_times 转化成功次数
 * @property int $trans_success_users 转化成功人数
 * @property string $trans_per 人均转换次数
 * @property string $trans_rate 转化率
 * @property int $record_at 记录日期:20210531
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertCoralRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_coral_record';
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
    protected $casts = ['id' => 'integer', 'advert_type' => 'integer', 'request_total' => 'integer', 'return_total' => 'integer', 'exposure_total' => 'integer', 'click_total' => 'integer', 'fail_total' => 'integer', 'trans_success_times' => 'integer', 'trans_success_users' => 'integer', 'record_at' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}