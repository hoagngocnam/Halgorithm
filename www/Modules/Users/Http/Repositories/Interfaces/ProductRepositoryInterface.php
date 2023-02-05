<?php

namespace Modules\Users\Http\Repositories\Interfaces;

interface ProductRepositoryInterface
{
	public function addCategory(int $productId, array $categoryIds): bool;
}

