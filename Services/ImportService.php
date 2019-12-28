<?php

namespace Modules\Pdf\Services;

use Modules\Pdf\Repositories\SettingPdfRepository;

class ImportService {

    public function setting($data)
    {
        SettingPdfRepository::update($data);
    }

    public function records()
    {

    }

}
