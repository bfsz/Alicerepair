<?php

namespace App\Models\Repairers;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BxPurchasebx extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'bx_purchasebx';

}
