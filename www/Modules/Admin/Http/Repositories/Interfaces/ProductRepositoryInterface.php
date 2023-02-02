<?php

namespace Modules\Admin\Repositories\Interfaces;

interface ProductRepositoryInterface
{
	public function addCategories(int $productId, array $categoryIds): bool;
}

