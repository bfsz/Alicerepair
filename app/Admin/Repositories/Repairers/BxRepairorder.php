<?php

namespace App\Admin\Repositories\Repairers;

use App\Models\Repairers\BxRepairorder as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BxRepairorder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
