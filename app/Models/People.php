<?php namespace App\Models;

class People extends \Kalnoy\Nestedset\Node
{

    protected $table = 'peoples';
    protected $fillable = ['name', 'surname', 'age', 'gender', 'spouse'];
    public $timestamps = false;

    public function spouse()
    {
        return $this->belongsTo('App\Models\People', 'spouse', 'id');
    }

}
