<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $taggable_id 
 * @property string $taggable_type 
 * @property string $tag_name 
 * @property string $tag_slug 
 */
class TaggingTagged extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tagging_tagged';
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
    protected $casts = ['id' => 'integer', 'taggable_id' => 'integer'];
}