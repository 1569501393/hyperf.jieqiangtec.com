<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 广告组名称
 * @property int $supplier_id 广告主id
 * @property string $thumbnail 缩略图
 * @property string $avatar 头像-影响前端头像展示
 * @property string $details 详情介绍
 * @property string $advert_group_url 页面/图片 链接
 * @property int $status 状态 1暂停 2启用
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $media_type video或image
 * @property string $origin_url 阿里云视频url
 * @property string $origin_id 阿里云视频ID
 * @property int $link_type 1 页面展示类型；2 下载类型
 * @property string $meta 素材信息：宽高，长度
 * @property string $nick_name 昵称
 */
class IbrandAdvertGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_group';
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
    protected $casts = ['id' => 'integer', 'supplier_id' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'link_type' => 'integer'];
}