<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    protected $table = 'service_sub_category';
    protected $primaryKey = 'id';
    protected $fillable = ['service_category_id','image','name','slug'];



    function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id', 'id');
    }

 public function service()
{
    return $this->belongsTo(Service::class, 'service_sub_id', 'id');
}




}
