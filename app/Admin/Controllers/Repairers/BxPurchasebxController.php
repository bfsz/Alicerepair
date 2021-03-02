<?php

namespace App\Admin\Controllers\Repairers;

use App\Admin\Repositories\Repairers\BxPurchasebx;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BxPurchasebxController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BxPurchasebx(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('no');
            $grid->column('name');
            $grid->column('total_amount');
            $grid->column('picture');
            $grid->column('apply_by');
            $grid->column('approved_by');
            $grid->column('approval_comments');
            $grid->column('status');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

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
        return Show::make($id, new BxPurchasebx(), function (Show $show) {
            $show->field('id');
            $show->field('no');
            $show->field('name');
            $show->field('total_amount');
            $show->field('picture');
            $show->field('apply_by');
            $show->field('approved_by');
            $show->field('approval_comments');
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
        return Form::make(new BxPurchasebx(), function (Form $form) {
            $form->display('id');
            $form->text('no');
            $form->text('name');
            $form->text('total_amount');
            $form->text('picture');
            $form->text('apply_by');
            $form->text('approved_by');
            $form->text('approval_comments');
            $form->text('status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
