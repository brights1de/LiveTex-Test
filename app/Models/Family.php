<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    protected $table = 'families';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function peoples()
    {
        return $this->hasMany('App\Models\People', 'family_id');
    }

}
