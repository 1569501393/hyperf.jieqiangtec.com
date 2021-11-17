<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $channel_name 主渠道名称
 * @property string $channel 主渠道号
 * @property string $charge_name 负责人
 * @property string $point 返点
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandChannelLord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_lords';
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
    protected $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}