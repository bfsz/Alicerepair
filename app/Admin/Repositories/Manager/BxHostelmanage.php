<?php

namespace App\Admin\Repositories\Manager;

use App\Models\Manager\BxHostelmanage as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BxHostelmanage extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

}
