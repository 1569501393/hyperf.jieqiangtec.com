<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $content 
 * @property int $posterable_id 
 * @property string $posterable_type 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Poster extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posters';
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
    protected $casts = ['id' => 'integer', 'posterable_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}