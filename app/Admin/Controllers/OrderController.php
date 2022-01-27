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

        $grid->column('id', __('Id'));
        $grid->column('order_date', __('Order date'));
        $grid->column('delivery_date', __('Delivery date'));
        $grid->column('note', __('Note'));
        $grid->column('user_id', __('User id'));
        $grid->column('order_status', __('Order status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show->field('order_date', __('Order date'));
        $show->field('delivery_date', __('Delivery date'));
        $show->field('note', __('Note'));
        $show->field('user_id', __('User id'));
        $show->field('order_status', __('Order status'));
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

        $form->text('order_date', __('Order date'));
        $form->text('delivery_date', __('Delivery date'));
        $form->text('note', __('Note'));
        $form->number('user_id', __('User id'));
        $form->text('order_status', __('Order status'));

        return $form;
    }
}
