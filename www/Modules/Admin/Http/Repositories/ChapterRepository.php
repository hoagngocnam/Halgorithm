<?php

namespace Modules\Admin\Repositories;

use App\Models\{
    Chapter,
    ChapterContent
};
use Modules\Admin\Repositories\Interfaces\ChapterRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ChapterRepository extends BaseRepository implements ChapterRepositoryInterface
{
    protected $model;
    private ChapterContent $modelChapterContent;

    public function __construct(
        Chapter $model,
        ChapterContent $modelChapterContent
    ) {
        $this->model = $model;
        $this->modelChapterContent = $modelChapterContent;
    }

    public function content(array $conditions): LengthAwarePaginator
    {
        return $this->modelChapterContent::where($conditions)->paginate(10);
    }
}
