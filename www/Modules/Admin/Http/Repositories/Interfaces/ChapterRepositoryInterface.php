<?php

namespace Modules\Admin\Repositories\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;

interface ChapterRepositoryInterface
{
	public function content(array $conditions): LengthAwarePaginator;
}
