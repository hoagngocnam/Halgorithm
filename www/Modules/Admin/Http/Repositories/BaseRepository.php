<?php

namespace Modules\Admin\Http\Repositories;

use App\Exceptions\AccountException;
use App\Models\LoginHistory;
use Illuminate\Database\Eloquent\Collection;
use Modules\Admin\Http\Repositories\Interfaces\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function paginate(array $conditions = []): object
    {
        return $this->model::orderBy('updated_at', 'desc')
            ->paginate(10);
    }

    public function list(): Collection
    {
        return $this->model::all();
    }

    public function first(int $id, array $conditions = []): object
    {
        return $this->model::where($conditions)->find($id);
    }

    public function add(array $insert): object
    {
        return $this->model::create($insert);
    }

    public function update(array $conditions, array $update): bool
    {
        return $this->model::where($conditions)
            ->update($update);
    }

    public function logicDelete(int $id): bool
    {
        return $this->model::where(['id' => $id])
            ->delete();
    }

    public function physicalDelete(int $id): bool
    {
        return $this->model::where(['id' => $id])
            ->forceDelete();
    }
}
