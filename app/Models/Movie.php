<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

    protected $fillable = ["name","year","genre_id", "director_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "year" => "required|numeric",
        "genre_id" => "required|numeric",
        "director_id" => "required|numeric"
    ];

    public $timestamps = false;

    public function director()
    {
        return $this->belongsTo("App\Director");
    }

    public function genre()
    {
        return $this->belongsTo("App\Genre");
    }


}
