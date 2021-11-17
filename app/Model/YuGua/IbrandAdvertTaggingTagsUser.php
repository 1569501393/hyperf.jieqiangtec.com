<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $tag_id 
 * @property string $mobile 
 * @property int $user_id 
 * @property int $tag_group_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertTaggingTagsUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_tagging_tags_user';
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
    protected $casts = ['id' => 'integer', 'tag_id' => 'integer', 'user_id' => 'integer', 'tag_group_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}