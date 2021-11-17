<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $action action:产生积分变化的动作，用于查询
 * @property string $note 积分变化的提示信息
 * @property string $value 积分变化数值，可为负数
 * @property string $valid_time 积分有效期 为空时永久有效
 * @property int $status 
 * @property string $item_type 
 * @property int $item_id 积分变化动作对应表的id
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandPointHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_point_history';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'status' => 'integer', 'item_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}