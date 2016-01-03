<?php
/**
 * @author Michael Lawson <mlawson1986@gmail.com>
 */

namespace StreamBlog\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * StreamBlog\Models\Comment
 *
 * @property integer $comment_id
 * @property integer $post_id
 * @property string $comment_body
 * @property integer $author_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 */
class Comment extends Model {

    protected $primaryKey = 'comment_id';

}