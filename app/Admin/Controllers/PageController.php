<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Page;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Page(), function (Grid $grid) {
            $grid->column('id','ID')->sortable();
            $grid->column('isShowed','是否展示');
            $grid->column('mpUrl','原文URL');
            $grid->column('msg','文章内容');
            $grid->column('likes','收藏数')->sortable();
            $grid->column('stars','喜欢数')->sortable();
            $grid->column('uid','发布用户');
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->rightSide();
                $filter->equal('id', '文章ID');
                $filter->like('msg', '文章关键字');
                $filter->equal('uid', '发布者的ID');
                $filter->equal('isShowed', '展示状态');
        
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
        return Show::make($id, new Page(), function (Show $show) {
            $show->field('id');
            $show->field('isShowed');
            $show->field('likes');
            $show->field('mpUrl');
            $show->field('msg');
            $show->field('stars');
            $show->field('uid');
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
        return Form::make(new Page(), function (Form $form) {
            $form->display('id');
            $form->text('isShowed');
            $form->text('likes');
            $form->text('mpUrl');
            $form->text('msg');
            $form->text('stars');
            $form->text('uid');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
