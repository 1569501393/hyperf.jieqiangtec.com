<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $queue 
 * @property string $payload 
 * @property int $attempts 
 * @property int $reserved_at 
 * @property int $available_at 
 * @property \Carbon\Carbon $created_at 
 */
class Job extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs';
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
    protected $casts = ['id' => 'integer', 'attempts' => 'integer', 'reserved_at' => 'integer', 'available_at' => 'integer', 'created_at' => 'datetime'];
}