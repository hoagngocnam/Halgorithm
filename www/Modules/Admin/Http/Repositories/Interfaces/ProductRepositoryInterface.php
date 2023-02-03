<?php

namespace Modules\Admin\Http\Repositories\Interfaces;

interface ProductRepositoryInterface
{
	public function addCategories(int $productId, array $categoryIds): bool;
}

