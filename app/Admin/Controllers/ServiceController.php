<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Service;
use \App\Models\ServiceCategory;
use \App\Models\ServiceSubCategory;
use \App\Models\Features;

class ServiceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Service';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Service());

        $grid->column('id', __('Id'));
        $grid->column('serviceCategory.name', __('Service id'));
        $grid->column('servicesubCategory.name', __('Service sub id'));
        $grid->column('title', __('Title'));

        $grid->column('thumb_image', __('Thumb image'))->image('/uploads/',70,70);

          $states = [
            'on' => ['value' => 1, 'text' => 'Active', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => 'InActive', 'color' => 'default'],
        ];
        $grid->column('status', __('Is Featured'))->switch($states);

        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Service::findOrFail($id));


        $show->field('id', __('Id'));
        $show->field('service_id', __('Service id'));
        $show->field('service_sub_id', __('Service sub id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('location', __('Location'));
        $show->field('beds_number', __('Beds number'));
        $show->field('baths_number', __('Baths number'));
        $show->field('size_of_area', __('Size of area'));
        $show->field('price', __('Price'));
        $show->field('star', __('Star'));
        $show->field('description', __('Description'));
        $show->field('thumb_image', __('Thumb image'));
        $show->field('gallery', __('Gallery'));
        $show->field('itinerary', __('Itinerary'));
        $show->field('property_type', __('Property type'));
        $show->field('area', __('Area'));
        $show->field('furnishing', __('Furnishing'));
        $show->field('parking', __('Parking'));
        $show->field('location_map', __('Location map'));
        $show->field('question', __('Question'));
        $show->field('answer', __('Answer'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_description', __('Seo description'));
        $show->field('seo_keyword', __('Seo keyword'));
        $show->field('status', __('Status'));
        $show->field('for_sale', __('For sale'));
        $show->field('agent_number', __('Agent number'));
        $show->field('agent_email', __('Agent email'));
        $show->field('agent_name', __('Agent name'));
        $show->field('varify_agent_year', __('Varify agent year'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Service());
        $form->tab('Fillter', function ($form) {
            $form->select('service_id', __('Service id'))->options(ServiceCategory::pluck('name', 'id'))->default(null)->rules('required');
          $form->select('service_sub_id', __('Service Sub Id'))
    ->options(
        ServiceSubCategory::all()->mapWithKeys(function ($item) {

            $categoryName = optional($item->serviceCategory)->name;

            return [
                $item->id => $item->name . ' (' . $categoryName . ')'
            ];
        })
    );
        });

        $form->tab('Details', function ($form) {

            $form->text('title', __('Title'));

           $form->hidden('slug');

          $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->title)));
        });
            $form->text('location', __('Location'));
            $form->text('beds_number', __('Beds number'));
            $form->text('baths_number', __('Baths number'));
            $form->text('size_of_area', __('Size of area'));
            $form->text('price', __('Price'));
            $form->text('star', __('Star'));
            $form->ckeditor('description', __('Description'));
        });

               $form->tab('Image', function ($form) {
        $form->image('thumb_image', __('Thumb image'));
        $form->multipleImage('gallery', __('Gallery'));
    });
        $form->tab('Itinerary', function ($form) {

        $form->multipleSelect('itinerary', __('Itinerary'))->options(Features::pluck('name', 'id'))->default(null)->rules('required');
            $form->text('property_type', __('Property type'));
        $form->text('area', __('Area'));
        $form->text('furnishing', __('Furnishing'));
        $form->text('parking', __('Parking'));
               $form->textarea('location_map', __('Location map'));
        });

     $form->tab('FAQ', function ($form) {
        $form->textarea('question', __('Question'));
        $form->textarea('answer', __('Answer'));
        });
        $form->tab('SEO & Others', function ($form) {
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_description', __('Seo description'));
        $form->textarea('seo_keyword', __('Seo keyword'));

        });

             $form->tab('Status', function ($form) {
                    $form->switch('status', __('Is Featured'))->options([
    1 => 'Active',
    0 => 'Inactive',
]);
                       $form->switch('for_sale', __('Is Sale'))->options([
    1 => 'Active',
    0 => 'Inactive',
]);
        });
             $form->tab('Agent Details', function ($form) {
        $form->text('agent_number', __('Agent number'));
        $form->text('agent_email', __('Agent email'));
        $form->text('agent_name', __('Agent name'));
        $form->text('varify_agent_year', __('Varify agent year'));
        });

        return $form;
    }
}
