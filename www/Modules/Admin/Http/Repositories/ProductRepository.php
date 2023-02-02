<?php

namespace Modules\Admin\Repositories;

use App\Models\{
    Product
};
use Modules\Admin\Repositories\Interfaces\ProductRepositoryInterface;
use Exception;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected $model;

    public function __construct(
        Product $model
    ) {
        $this->model = $model;
    }

    public function paginate(array $params = []): object
    {
        $query = $this->model::query();

        if (!empty($params['store_id'])) {
            $query->where('store_id', $params['store_id']);
        }
        if (!empty($params['category_id'])) {
            $query->where('category_id', $params['category_id']);
        }
        if (!empty($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }

        $query->orderBy('updated_at', 'desc');

        return $query->with(['category' => function ($query) {
            $query->select('id', 'name');
        }])
            ->paginate(10);
    }

    public function addCategories(int $productId, array $categoryIds): bool
    {
        //        try {
        $categories = [];
        foreach ($categoryIds as $categoryId) {
            $categories[] = [
                'product_id' => $productId,
                'category_id' => $categoryId
            ];
        }
        $this->modelCategoryProduct::insert($categories);
        return true;
        //        } catch (Exception $exception) {
        //            return false;
        //        }
    }
}
