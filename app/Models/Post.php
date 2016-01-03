<?php
/**
 * @author Michael Lawson <mlawson1986@gmail.com>
 */

namespace StreamBlog\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * StreamBlog\Models\Post
 *
 * @property integer $post_id
 * @property string $title
 * @property string $subject
 * @property string $body
 * @property integer $author_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 */
class Post extends Model {

    protected $primaryKey = 'post_id';

}