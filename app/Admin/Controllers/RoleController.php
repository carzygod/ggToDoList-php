<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Role;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class RoleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Role(), function (Grid $grid) {
            $grid->column('display_name','角色展示');
            $grid->column('guard_name','接口名');
            $grid->column('name','角色名');
            $grid->disableFilterButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
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
        return Show::make($id, new Role(), function (Show $show) {
            $show->field('id');
            $show->field('display_name');
            $show->field('guard_name');
            $show->field('name');
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
        return Form::make(new Role(), function (Form $form) {
            $form->display('id');
            $form->text('display_name');
            $form->text('guard_name');
            $form->text('name');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
