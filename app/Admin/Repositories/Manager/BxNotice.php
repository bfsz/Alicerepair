<?php

namespace App\Admin\Repositories\Manager;

use App\Models\Manager\BxNotice as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BxNotice extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
