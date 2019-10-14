<?php
/**
 * Any image uploaded belongs to our {Commons} collection.
 * Otherwise stated, they may belong to Projects.
 * 
 * Tablename: Commons
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Commons extends Model
{
    public function photos(){
        return $this->morphMany(Photo::class, 'experience');
    }
}
