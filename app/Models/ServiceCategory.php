<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_category';
    protected $fillable = [
        'image',
        'name',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keyword',
    ];

    function serviceSubCategories()
    {
        return $this->hasMany(ServiceSubCategory::class, 'service_category_id', 'id');
    }

    function services()
    {
        return $this->hasMany(Service::class, 'service_id', 'id');
    }
}
