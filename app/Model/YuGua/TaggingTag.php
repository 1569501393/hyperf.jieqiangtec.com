<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $slug 
 * @property string $name 
 * @property int $suggest 
 * @property int $count 
 * @property int $tag_group_id 
 */
class TaggingTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tagging_tags';
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
    protected $casts = ['id' => 'integer', 'suggest' => 'integer', 'count' => 'integer', 'tag_group_id' => 'integer'];
}