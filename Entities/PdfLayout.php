<?php

namespace Modules\Pdf\Entities;

use Illuminate\Database\Eloquent\Model;

class PdfLayout extends Model
{
    protected $fillable = ['id', 'title', 'description', 'path', 'selected'];
}
