<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $status 
 * @property int $user_id 
 * @property string $type 
 * @property string $group 
 * @property string $mobile 
 * @property string $description 
 * @property string $note 
 * @property string $images 
 * @property int $notice_status 是否已发送过系统通知  1-未发送  2-已发送
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandFeedbackList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_feedback_list';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'user_id' => 'integer', 'notice_status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}