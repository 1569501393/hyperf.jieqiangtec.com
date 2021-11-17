<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $type 
 * @property int $user_id 
 * @property string $title 
 * @property string $avatar 
 * @property string $location 
 * @property string $media_id 
 * @property string $external_media_id 
 * @property string $media_url 
 * @property int $length 
 * @property string $description 
 * @property string $advert_url 
 * @property string $advert_html 
 * @property string $advert_charge_type 
 * @property int $add_comment_count 
 * @property int $add_praise_count 
 * @property int $add_forward_count 
 * @property int $comment_count 
 * @property int $praise_count 
 * @property int $forward_count 
 * @property int $topic_id 
 * @property int $status 
 * @property int $is_recommend 
 * @property string $recommended_at 
 * @property int $supplier_id 
 * @property int $sort 
 * @property string $meta 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandHotvideo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_hotvideo';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'user_id' => 'integer', 'length' => 'integer', 'add_comment_count' => 'integer', 'add_praise_count' => 'integer', 'add_forward_count' => 'integer', 'comment_count' => 'integer', 'praise_count' => 'integer', 'forward_count' => 'integer', 'topic_id' => 'integer', 'status' => 'integer', 'is_recommend' => 'integer', 'supplier_id' => 'integer', 'sort' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}