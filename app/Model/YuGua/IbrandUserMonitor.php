<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $type 机型
 * @property int $ip ip
 * @property string $sn sn
 * @property string $channel channel
 * @property string $version version
 * @property string $androidid androidid
 * @property string $oaid oaid
 * @property string $imei imei
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $monitor_type 是否有sim卡，1有sim卡，2无sim卡
 */
class IbrandUserMonitor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_monitors';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'ip' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'monitor_type' => 'integer'];
}