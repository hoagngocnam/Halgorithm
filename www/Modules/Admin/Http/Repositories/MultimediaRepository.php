<?php

namespace Modules\Admin\Repositories;

use App\Models\Multimedia;

class MultimediaRepository extends BaseRepository
{
    protected $model;

    public function __construct(
        Multimedia $model
    ) {
        $this->model = $model;
    }
}
