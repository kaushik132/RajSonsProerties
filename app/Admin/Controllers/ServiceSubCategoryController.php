<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ServiceSubCategory;
use \App\Models\ServiceCategory;

class ServiceSubCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Service Sub Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServiceSubCategory());

        $grid->column('id', __('Id'));
        $grid->column('serviceCategory.name', __('Service category id'));
        $grid->column('image', __('Image'))->image('/uploads/',50,50);
        $grid->column('name', __('Name'));
        // $grid->column('slug', __('Slug'));


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
        $show = new Show(ServiceSubCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('service_category_id', __('Service category id'));
        $show->field('image', __('Image'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
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
        $form = new Form(new ServiceSubCategory());

        $form->select('service_category_id', __('Service category id'))->options(ServiceCategory::pluck('name', 'id'));
        $form->image('image', __('Image'));
        $form->text('name', __('Name'));
        $form->hidden('slug', __('Slug'));

        return $form;
    }
}
