<?php

namespace App\Admin\Controllers\Manager;

use App\Admin\Repositories\Manager\BxHostelmanage;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class BxHostelmanageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BxHostelmanage(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('hostel_name');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            // 快捷查询
            $grid->quickSearch(['hostel_name']);
            // 筛选查询
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
        return Show::make($id, new BxHostelmanage(), function (Show $show) {
            $show->field('id');
            $show->field('hostel_name');
            $show->html(function () {
                $contents = $this->hostel_info;
                return '<div class="card" style="text-align: center">
                            <div class="card-body">' . $contents . '</div>
                        </div>';
            });
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
        return Form::make(new BxHostelmanage(), function (Form $form) {
            $form->display('id');
            $form->text('hostel_name');
            $form->editor('hostel_info');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
