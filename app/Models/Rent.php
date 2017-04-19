<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model {

    protected $fillable = ["date_start", "date_end", "movie_id", "client_id", "returned"];

    protected $dates = [];

    public static $rules = [
        "date_start" => "required|date",
        "date_end" => "required|date",
        "movie_id" => "required|numeric",
        "client_id" => "required|numeric", 
        
    ];

    public $timestamps = false;

    public function movie()
    {
        return $this->belongsTo("App\Models\Movie");
    }

    public function client()
    {
        return $this->belongsTo("App\Models\Client");
    }


}
