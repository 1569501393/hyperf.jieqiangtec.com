<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 
 * @property int $times 时间段：1:0-1点，2:1-2点
 * @property int $times_count 超级加倍完成次数
 * @property int $num_count 超级加倍完成人数
 * @property int $cash_num_count 超级加倍提现人数
 * @property int $cash_total_count 所有提现笔数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandSuperDoubleReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_super_double_report';
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
    protected $casts = ['id' => 'integer', 'times' => 'integer', 'times_count' => 'integer', 'num_count' => 'integer', 'cash_num_count' => 'integer', 'cash_total_count' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}