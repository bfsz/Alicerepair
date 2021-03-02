<?php

namespace App\Admin\Repositories\Manager;

use App\Models\Manager\BxPurchasebxSp as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BxPurchasebxSp extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
