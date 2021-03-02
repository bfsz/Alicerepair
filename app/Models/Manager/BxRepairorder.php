<?php

namespace App\Models\Manager;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BxRepairorder extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'bx_repairorder';
    
}
