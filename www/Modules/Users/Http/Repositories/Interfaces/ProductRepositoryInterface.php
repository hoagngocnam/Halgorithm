<?php

namespace Modules\Users\Repositories\Interfaces;

interface ProductRepositoryInterface
{
	public function addCategory(int $productId, array $categoryIds): bool;
}

