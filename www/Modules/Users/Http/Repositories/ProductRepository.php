<?php

namespace Modules\Users\Repositories;

use App\Models\{CategoryProduct, Product};
use Exception;
use Modules\Admin\Http\Repositories\Interfaces\ProductRepositoryInterface;

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
