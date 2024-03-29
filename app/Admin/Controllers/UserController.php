<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name_sei', __('Name sei'));
        $grid->column('name_mei', __('Name mei'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'));
        $grid->column('phone_number1', __('Phone number1'));
        $grid->column('phone_number2', __('Phone number2'));
        $grid->column('phone_number3', __('Phone number3'));
        $grid->column('post_code1', __('Post code1'));
        $grid->column('post_code2', __('Post code2'));
        $grid->column('adress', __('Adress'));
        $grid->column('birthday', __('Birthday'));
        $grid->column('password', __('Password'));
        $grid->column('remember_token', __('Remember token'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name_sei', __('Name sei'));
        $show->field('name_mei', __('Name mei'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('phone_number1', __('Phone number1'));
        $show->field('phone_number2', __('Phone number2'));
        $show->field('phone_number3', __('Phone number3'));
        $show->field('post_code1', __('Post code1'));
        $show->field('post_code2', __('Post code2'));
        $show->field('adress', __('Adress'));
        $show->field('birthday', __('Birthday'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User());

        $form->text('name_sei', __('Name sei'));
        $form->text('name_mei', __('Name mei'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->text('phone_number1', __('Phone number1'));
        $form->text('phone_number2', __('Phone number2'));
        $form->text('phone_number3', __('Phone number3'));
        $form->text('post_code1', __('Post code1'));
        $form->text('post_code2', __('Post code2'));
        $form->text('adress', __('Adress'));
        $form->date('birthday', __('Birthday'))->default(date('Y-m-d'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
