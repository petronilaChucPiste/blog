<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    protected $fillable = ["name","description"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "description" => "required",
    ];

    public $timestamps = false;

    // Relationships

}
