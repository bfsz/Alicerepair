<?php

namespace App\Admin\Controllers\Repairers;

use App\Admin\Repositories\Repairers\BxRepairorder;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BxRepairorderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BxRepairorder(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('single_no');
            $grid->column('type');
            $grid->column('problem_description');
            $grid->column('dormitory_block');
            $grid->column('dormitory_no');
            $grid->column('damage_photos');
            $grid->column('single_time');
            $grid->column('single_by');
            $grid->column('repairs_by');
            $grid->column('repair_status');
            $grid->column('completion_time');
            $grid->column('repair_description');
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
        return Show::make($id, new BxRepairorder(), function (Show $show) {
            $show->field('id');
            $show->field('single_no');
            $show->field('type');
            $show->field('problem_description');
            $show->field('dormitory_block');
            $show->field('dormitory_no');
            $show->field('damage_photos');
            $show->field('single_time');
            $show->field('single_by');
            $show->field('repairs_by');
            $show->field('repair_status');
            $show->field('completion_time');
            $show->field('repair_description');
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
        return Form::make(new BxRepairorder(), function (Form $form) {
            $form->display('id');
            $form->text('single_no');
            $form->text('type');
            $form->text('problem_description');
            $form->text('dormitory_block');
            $form->text('dormitory_no');
            $form->text('damage_photos');
            $form->text('single_time');
            $form->text('single_by');
            $form->text('repairs_by');
            $form->text('repair_status');
            $form->text('completion_time');
            $form->text('repair_description');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
