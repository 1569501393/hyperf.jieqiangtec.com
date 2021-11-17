<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $user_id 
 * @property int $followable_id 
 * @property string $followable_type 
 * @property string $relation follow/like/subscribe/favorite/upvote/downvote
 * @property string $deleted_at 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Followable extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'followables';
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
    protected $casts = ['user_id' => 'integer', 'followable_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}