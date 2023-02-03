<?php

namespace Modules\Users\Repositories\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;

interface ChapterRepositoryInterface
{
	public function content(array $conditions): LengthAwarePaginator;
}
