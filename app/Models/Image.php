<?php
/**
 * @author Michael Lawson <mlawson1986@gmail.com>
 */

namespace StreamBlog\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * StreamBlog\Models\Image
 *
 * @property integer $image_id
 * @property string $image_title
 * @property string $image_description
 * @property integer $album_key
 * @property integer $author_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 */
class Image extends Model {

    protected $primaryKey = 'image_id';
}