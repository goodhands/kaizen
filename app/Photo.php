<?php
/**
 * Base class for all photo operations
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;
use App\Category;
use App\Tag;
use BeyondCode\Comments\Comment;

class Photo extends Model
{

    use HasComments;

    public function getRouteKeyName(){
        return 'slug';
    }

    /**
     * the experience convention means 'how you experience the photo'
     */
    public function parent() {
        return $this->morphTo('experience');
    }

    /**
     * fetch the owner of the photo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Like a photo
     */
    public function like($user = null){
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }

    /**
     * Fetch the likes a post has
     */
    public function likes(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     * Fetch the tags of this photo
     */
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
