<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $platform 平台 1:安卓，2:iOS
 * @property int $type 类型 
 * @property int $code_id 代码位表id
 * @property int $operator_id 操作者uid
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class AdvertCodePosition extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advert_code_position';
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'shanya';
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
    protected $casts = ['id' => 'integer', 'platform' => 'integer', 'type' => 'integer', 'code_id' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}