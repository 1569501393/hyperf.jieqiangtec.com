<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $imei imei
 * @property string $oaid oaid
 * @property string $androidid androidid
 * @property int $imei_num imei_num提现总数
 * @property int $oaid_num oaid_num提现总数
 * @property int $androidid_num androidid提现总数
 * @property int $record_at 记录时间格式20210101
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandBalanceDevice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_balance_device';
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
    protected $casts = ['id' => 'integer', 'imei_num' => 'integer', 'oaid_num' => 'integer', 'androidid_num' => 'integer', 'record_at' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}