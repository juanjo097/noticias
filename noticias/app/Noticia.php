<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'noticia';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'summary',
                           'content', 'url_normalized'];
}
