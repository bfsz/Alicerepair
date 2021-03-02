<?php

namespace App\Admin\Controllers\Repairers;

use App\Admin\Repositories\Repairers\BxType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BxTypeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BxType(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name')->label('info');
            $grid->column('description');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->quickSearch(['id', 'name']);
            $grid->showQuickEditButton();
            $grid->enableDialogCreate();
            $grid->showColumnSelector();
            $grid->disableEditButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('name');
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
        return Show::make($id, new BxType(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
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
        return Form::make(new BxType(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->textarea('description');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
