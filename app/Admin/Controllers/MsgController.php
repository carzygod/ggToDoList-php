<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Msg;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class MsgController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Msg(), function (Grid $grid) {
            $grid->column('id','ID')->sortable();
            $grid->column('formId','发送者');
            $grid->column('toId','接收者');
            $grid->column('isShowed','是否展示');
            $grid->column('mid','文章ID');
            $grid->column('msg','消息内容');
            $grid->column('stars','点赞数');
            $grid->column('likes','收藏数');
            $grid->column('uid','发送用户');

            $grid->showFilter();

    
            $grid->filter(function (Grid\Filter $filter) {
                                
                $filter->rightSide();
                //$filter->expand();
                $filter->equal('id', '留言ID');
                $filter->like('msg', '留言关键字');
                $filter->equal('formid', '发送者的ID');
                $filter->equal('toid', '接收者的ID');
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
        return Show::make($id, new Msg(), function (Show $show) {
            $show->field('id');
            $show->field('formId');
            $show->field('isShowed');
            $show->field('likes');
            $show->field('mid');
            $show->field('msg');
            $show->field('stars');
            $show->field('toId');
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
        return Form::make(new Msg(), function (Form $form) {
            $form->display('id');
            $form->text('formId');
            $form->text('isShowed');
            $form->text('likes');
            $form->text('mid');
            $form->text('msg');
            $form->text('stars');
            $form->text('toId');
            $form->text('uid');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
