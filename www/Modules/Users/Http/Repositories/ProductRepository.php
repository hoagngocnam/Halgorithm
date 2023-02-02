<?php

namespace Modules\Users\Repositories;

use App\Models\{
    Product,
    CategoryProduct
};
use Modules\Admin\Repositories\Interfaces\ProductRepositoryInterface;
use Exception;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected $model;
    protected $modelCategoryProduct;

    public function __construct(
        Product $model,
    ) {
        $this->model = $model;
    }

    public function addCategories(int $productId, array $categoryIds): bool
    {
        try {
            foreach ($categoryIds as $categoryId) {
                $this->modelCategoryProduct::create([
                    'product_id' => $productId,
                    'category_id' => $categoryId
                ]);
            }
        } catch (Exception $exception) {
            return false;
        }
    }
}
