<?php

namespace Modules\Admin\Http\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface BaseRepositoryInterface
{
    public function paginate();

    public function list(): Collection;

    public function first(int $id, array $conditions = []): object;

    public function add(array $insert): object;

    public function update(int $id, array $update): bool;

    public function logicDelete(int $id): bool;

    public function physicalDelete(int $id): bool;
}
