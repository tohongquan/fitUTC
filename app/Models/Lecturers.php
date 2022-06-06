<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    use \Encore\Admin\Traits\Resizable;
    use HasFactory;
    public function subjectSet(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SubjectsSet::class);
    }
}
