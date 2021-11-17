<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $ip pod ip
 * @property \Carbon\Carbon $created_at 创建时间
 */
class K8sPod extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'k8s_pod';
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
    protected $casts = ['id' => 'integer', 'ip' => 'integer', 'created_at' => 'datetime'];
}