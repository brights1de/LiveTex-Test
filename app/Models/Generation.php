<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{

    protected $table = 'generations';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function peoples()
    {
        return $this->hasMany('App\Models\People', 'generation_id');
    }

}
