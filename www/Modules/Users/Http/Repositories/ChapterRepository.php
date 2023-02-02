<?php

namespace Modules\Users\Repositories;

use App\Models\{Chapter, ChapterContent};
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Http\Repositories\Interfaces\ChapterRepositoryInterface;

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
