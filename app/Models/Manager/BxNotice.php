<?php

namespace App\Models\Manager;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class BxNotice extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'bx_notice';
    
}
