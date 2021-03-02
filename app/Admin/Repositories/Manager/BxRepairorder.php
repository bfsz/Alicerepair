<?php

namespace App\Admin\Repositories\Manager;

use App\Models\Manager\BxRepairorder as Model;
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
