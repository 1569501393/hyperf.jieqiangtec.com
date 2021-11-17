<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $notice_id notice表id
 * @property int $user_id user表id
 * @property int $type 消息类型,与notice type一致.
 * @property int $status 阅读状态.0:未读; 1:已读.
 * @property int $push_status 实时推送状态.0:无需推送; 1:已推送; 2:未推送; 3:推送中.
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class NoticeUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notice_user';
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
    protected $casts = ['id' => 'integer', 'notice_id' => 'integer', 'user_id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'push_status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}