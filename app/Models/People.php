<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $table = 'peoples';
    protected $fillable = ['name', 'surname', 'age', 'gender', 'family_id', 'generation_id'];
    public $timestamps = false;

    public function family()
    {
        return $this->belongsTo('App\Models\Family', 'id');
    }

}
