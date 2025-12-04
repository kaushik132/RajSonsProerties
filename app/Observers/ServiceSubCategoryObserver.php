<?php

namespace App\Observers;

use App\Models\ServiceSubCategory;
use Illuminate\Support\Str;



class ServiceSubCategoryObserver
{
    /**
     * Handle the ServiceSubCategory "created" event.
     */
    public function creating(ServiceSubCategory $serviceSubCategory): void
    {
        $serviceSubCategory->slug = Str::slug($serviceSubCategory->name);
    }

    public function updating(ServiceSubCategory $serviceSubCategory): void
    {
        $serviceSubCategory->slug = Str::slug($serviceSubCategory->name);
    }




    public function created(ServiceSubCategory $serviceSubCategory): void
    {
        //
    }

    /**
     * Handle the ServiceSubCategory "updated" event.
     */
    public function updated(ServiceSubCategory $serviceSubCategory): void
    {
        //
    }

    /**
     * Handle the ServiceSubCategory "deleted" event.
     */
    public function deleted(ServiceSubCategory $serviceSubCategory): void
    {
        //
    }

    /**
     * Handle the ServiceSubCategory "restored" event.
     */
    public function restored(ServiceSubCategory $serviceSubCategory): void
    {
        //
    }

    /**
     * Handle the ServiceSubCategory "force deleted" event.
     */
    public function forceDeleted(ServiceSubCategory $serviceSubCategory): void
    {
        //
    }
}
