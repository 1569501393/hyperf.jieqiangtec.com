<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $type 
 * @property int $user_id 
 * @property string $avatar 
 * @property string $location 
 * @property string $media_id 
 * @property string $external_media_id 外部视频id
 * @property string $media_url 
 * @property int $length 
 * @property string $description 
 * @property string $advert_url 
 * @property int $add_comment_count 
 * @property int $add_praise_count 
 * @property int $add_forward_count 
 * @property int $comment_count 
 * @property int $praise_count 
 * @property int $forward_count 
 * @property int $status 
 * @property int $is_recommend 
 * @property string $recommended_at 
 * @property int $style_type 视频类型:1竖屏 2横屏,做热点视频
 * @property int $new_recommend_order 新人视频排序
 * @property int $video_type 视频类型
 * @property int $topic_id 话题id
 * @property string $meta 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $title 
 * @property int $sort 
 * @property string $advert_html 
 * @property int $supplier_id 
 * @property int $is_new_recommend 新人推荐
 * @property string $new_recommend_at 新人推荐时间
 */
class IbrandVideo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_video';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'user_id' => 'integer', 'length' => 'integer', 'add_comment_count' => 'integer', 'add_praise_count' => 'integer', 'add_forward_count' => 'integer', 'comment_count' => 'integer', 'praise_count' => 'integer', 'forward_count' => 'integer', 'status' => 'integer', 'is_recommend' => 'integer', 'style_type' => 'integer', 'new_recommend_order' => 'integer', 'video_type' => 'integer', 'topic_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'sort' => 'integer', 'supplier_id' => 'integer', 'is_new_recommend' => 'integer'];
}