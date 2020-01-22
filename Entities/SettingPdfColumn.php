<?php

namespace Modules\Pdf\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingPdfColumn extends Model
{
    protected $fillable = ['name', 'show', 'alias'];
}
