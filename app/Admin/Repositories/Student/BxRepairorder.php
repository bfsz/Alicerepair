<?php

namespace App\Admin\Repositories\Student;

use App\Models\Student\StudentBxRepairorder as Model;
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
