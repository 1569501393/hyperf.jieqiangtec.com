<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property int $video_id 
 * @property string $tag_names 视频标签
 * @property int $length 浏览时长
 * @property int $start_timestamp 开始时间
 * @property int $end_timestamp 结束时间
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandUserVideoRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_video_record';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'video_id' => 'integer', 'length' => 'integer', 'start_timestamp' => 'integer', 'end_timestamp' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}