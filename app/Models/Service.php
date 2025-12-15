<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
   protected $fillable = [
        'service_id','service_sub_id','title','slug','location','beds_number','baths_number',
        'size_of_area','price','star','description','thumb_image','gallery','itinerary',
        'property_type','area','furnishing','parking','location_map',
        'question','answer','seo_title','seo_description','seo_keyword',
        'status','for_sale','agent_number','agent_email','agent_name','varify_agent_year'
    ];

    protected $casts = [
        'gallery'   => 'array',
        'itinerary' => 'array',

    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_id', 'id');
    }

 public function servicesubCategory()
{
    return $this->belongsTo(ServiceSubCategory::class, 'service_sub_id', 'id');
}

public function features()
{
    return $this->belongsTo(Features::class, 'itinerary', 'id');

}

}
