<?php

namespace Modules\Users\Repositories;

use App\Models\ChapterContent;
use Modules\Admin\Http\Repositories\Interfaces\ChapterRepositoryInterface;

class ChapterContentRepository extends BaseRepository implements ChapterRepositoryInterface
{
    protected $model;

    public function __construct(ChapterContent $model)
    {
        $this->model = $model;
    }
}
