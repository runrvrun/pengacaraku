<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_metum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'document_metas';

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
    protected $fillable = ['document_id', 'meta_name', 'meta_value'];

    public function document()
    {
        return $this->belongsTo('App\Document');
    }
    
}
