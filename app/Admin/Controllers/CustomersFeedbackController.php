<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CustomersFeedback;

class CustomersFeedbackController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomersFeedback';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomersFeedback());

        $grid->column('id', __('Id'));

        $grid->column('name', __('Name'));

        $grid->column('image', __('Image'))->image('/uploads/','50','50');




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
        $show = new Show(CustomersFeedback::findOrFail($id));

        $show->field('id', __('Id'));

        $show->field('name', __('Name'));

        $show->field('image', __('Image'));

        $show->field('location', __('Location'));

        $show->field('star', __('Star'));

        $show->field('feedback', __('Feedback'));

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
        $form = new Form(new CustomersFeedback());

        $form->text('name', __('Name'));

        $form->image('image', __('Image'));

        $form->text('location', __('Location'));

        $form->text('star', __('Star'));

        $form->textarea('feedback', __('Feedback'));

        return $form;
    }
}
