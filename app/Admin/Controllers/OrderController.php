<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('date', __('Date'));
        $grid->column('cake_size', __('Cake size'));
        $grid->column('cupcakes', __('Cupcakes'));
        $grid->column('flavour', __('Flavour'));
        $grid->column('fillings', __('Fillings'));
        $grid->column('toppings', __('Toppings'));
        $grid->column('theme', __('Theme'));
        $grid->column('food_allergies', __('Food allergies'));
        $grid->column('delivery', __('Delivery'));
        $grid->column('status', __('Status'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('date', __('Date'));
        $show->field('cake_size', __('Cake size'));
        $show->field('cupcakes', __('Cupcakes'));
        $show->field('flavour', __('Flavour'));
        $show->field('fillings', __('Fillings'));
        $show->field('toppings', __('Toppings'));
        $show->field('theme', __('Theme'));
        $show->field('food_allergies', __('Food allergies'));
        $show->field('delivery', __('Delivery'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Order());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->mobile('phone', __('Phone'));
        $form->text('date', __('Date'));
        $form->text('cake_size', __('Cake size'));
        $form->text('cupcakes', __('Cupcakes'));
        $form->text('flavour', __('Flavour'));
        $form->text('fillings', __('Fillings'));
        $form->text('toppings', __('Toppings'));
        $form->text('theme', __('Theme'));
        $form->text('food_allergies', __('Food allergies'));
        $form->text('delivery', __('Delivery'));
        $form->text('status', __('Status'))->default('pending');

        return $form;
    }
}
