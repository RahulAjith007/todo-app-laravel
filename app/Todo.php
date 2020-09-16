<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=['title','completed'];

    //for finding with title(change title with id for id)//

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }
}
