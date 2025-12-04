<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $table = 'features';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image'];


    public function service()
    {
        return $this->hasMany(Service::class, 'itinerary', 'id');
    }
}
