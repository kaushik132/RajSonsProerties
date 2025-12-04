<?php

namespace App\Observers;

use App\Models\ServiceCategory;
use Illuminate\Support\Str;

class ServiceCategoryObserver
{
    /**
     * Handle the ServiceCategory "created" event.
     */
    public function creating(ServiceCategory $serviceCategory): void
    {
        $serviceCategory->slug = Str::slug($serviceCategory->name);


    }
    public function updating(ServiceCategory $serviceCategory): void
{
    $serviceCategory->slug = Str::slug($serviceCategory->name);
}

    public function created(ServiceCategory $serviceCategory): void
    {
        //
    }

    /**
     * Handle the ServiceCategory "updated" event.
     */
    public function updated(ServiceCategory $serviceCategory): void
    {


    }

    /**
     * Handle the ServiceCategory "deleted" event.
     */
    public function deleted(ServiceCategory $serviceCategory): void
    {
        //
    }

    /**
     * Handle the ServiceCategory "restored" event.
     */
    public function restored(ServiceCategory $serviceCategory): void
    {
        //
    }

    /**
     * Handle the ServiceCategory "force deleted" event.
     */
    public function forceDeleted(ServiceCategory $serviceCategory): void
    {
        //
    }
}
