<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Change Table Name (by default Laravel makes plurals, for example Posts from Post)
    protected $table = 'posts'; // change posts in something you wish
    // Change Primary Key
    public $primaryKey = 'id'; // change id in something you wish
    // Change Timestamps
    public $timestamps = true; // default setting is true
}
