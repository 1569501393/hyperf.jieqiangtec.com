<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $gift_activity_id 
 * @property string $gift_activity_type 
 * @property string $type 
 * @property int $value 
 * @property string $overdue_type 
 * @property int $overdue_value 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandGiftAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_gift_actions';
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
    protected $casts = ['id' => 'integer', 'gift_activity_id' => 'integer', 'value' => 'integer', 'overdue_value' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}