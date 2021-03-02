<?php

namespace App\Admin\Repositories\Repairers;

use App\Models\Repairers\BxType as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BxType extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    /**
     * Notes: 筛选栏options数据
     * User: 62726
     * Date: 2021/3/2
     * Time: 17:05
     * @return \Illuminate\Support\Collection
     */
    public function getJson()
    {
        return Model::all()->pluck('name', 'id');
    }
}
