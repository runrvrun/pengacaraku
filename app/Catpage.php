<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catpage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'catpages';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['catpage_author', 'catpage_title', 'catpage_subtitle', 'catpage_headerimg', 'catpage_content', 'catpage_faq', 'catpage_status', 'slug'];

    
}
