<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model {

    protected $fillable = ["name","surname"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "surname" => "required",
    ];

    public $timestamps = false;

    // Relationships

}
