<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property int $type 
 * @property int $video_id 
 * @property int $video_length 
 * @property int $length 
 * @property int $progress 
 * @property string $tags 
 * @property string $media_id 
 * @property string $meta 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $index 
 */
class IbrandVideoPlayLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_video_play_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'type' => 'integer', 'video_id' => 'integer', 'video_length' => 'integer', 'length' => 'integer', 'progress' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'index' => 'integer'];
}