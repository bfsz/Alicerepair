<?php

namespace App\Models\Student;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class StudentBxRepairorder extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'bx_repairorder';
    
}
