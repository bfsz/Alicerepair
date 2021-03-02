<?php
namespace App\Admin\Renderable;

use App\Models\Repairers\BxType;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class TypeTable extends LazyRenderable
{
    public function grid(): Grid
    {
        // 获取外部传递的参数
        $id = $this->id;

        return Grid::make(new BxType(), function (Grid $grid) {
            $grid->column('id');
            $grid->column('name');
            $grid->column('description');
            $grid->column('created_at');
            $grid->column('updated_at');

            // 指定行选择器选中时显示的值的字段名称
            // 指定行选择器选中时显示的值的字段名称
            // 指定行选择器选中时显示的值的字段名称
            // 如果表格数据中带有 “name”、“title”或“username”字段，则可以不用设置
            $grid->rowSelector()->titleColumn('name');

            $grid->quickSearch(['id', 'name', 'description']);

            $grid->paginate(10);
            $grid->disableActions();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('name')->width(4);
                $filter->like('description')->width(4);
            });
        });
    }
}
