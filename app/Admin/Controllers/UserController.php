<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use App\Admin\Metrics\Examples;
use Dcat\Admin\Http\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
           // $grid->column('id')->sortable();
           // $grid->column('email');
            $grid->column('name','用户名');
            $grid->column('phone','手机号');
            $grid->column('level','用户等级')->sortable();
            $grid->column('status','用户状态')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->rightSide();
                $filter->equal('id', '用户ID');
                $filter->like('name', '用户名关键字');
                $filter->equal('phone', '用户手机号');
                $filter->equal('status', '展示状态');
                $filter->equal('level', '用户等级');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new User(), function (Show $show) {
            $show->field('id');
            $show->field('email');
            $show->field('email_verified_at');
            $show->field('level');
            $show->field('name');
            $show->field('password');
            $show->field('phone');
            $show->field('phone_verified_at');
            $show->field('remember_token');
            $show->field('status');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('email');
            $form->text('email_verified_at');
            $form->text('level');
            $form->text('name');
            $form->text('password');
            $form->text('phone');
            $form->text('phone_verified_at');
            $form->text('remember_token');
            $form->text('status');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
