<?php

namespace App\Admin\Repositories\Repairers;

use App\Models\Repairers\BxPurchasebx as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BxPurchasebx extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
