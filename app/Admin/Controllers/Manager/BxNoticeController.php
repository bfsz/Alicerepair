<?php

namespace App\Admin\Controllers\Manager;

use App\Admin\Repositories\Manager\BxNotice;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class BxNoticeController extends AdminController
{
    /**
     * 公告管理表格
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BxNotice(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('creator');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->quickSearch(['name']);
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * 公告管理表单
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new BxNotice(), function (Show $show) {
            $show->html(function () {
                $contents = $this->contents;
                return '<div class="card" style="text-align: center">
                            <div class="card-body">' . $contents . '</div>
                        </div>';
            });
            $show->field('creator');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * 公告管理表单
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new BxNotice(), function (Form $form) {
            $user_name = Admin::user()->name;
            $form->display('id');
            $form->text('name');
            $form->editor('contents');
            $form->text('creator')->value($user_name);
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
