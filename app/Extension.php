<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Extension extends Model {

	protected $fillable = [
        'name',
        'type',
        'creation_date',
        'author',
        'author_email',
        'author_url',
        'copyright',
        'licence',
        'version',
        'description'
    ];

}
