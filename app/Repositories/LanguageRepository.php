<?php

namespace App\Repositories;

use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Models\Language;

class LanguageRepository extends BaseRepository implements LanguageRepositoryInterface
{
    protected $model;
    public function __construct(
        Language $model
    ) {
        $this->model = $model;
    }

    public function languagePagination(
        array $column = ['*'],
        array $condition = [],
        int $perPage = 1,
        array $extend = [],
        array $orderBy = ['id', 'DESC'],
        array $join = [],
        array $relations = [],
    ) {
        $query = $this->model->select($column);

        $query->where(function ($query) use ($condition) {
            if (isset($condition['keyword']) && !empty($condition['keyword'])) {
                $query->where('name', 'LIKE', '%' . $condition['keyword'] . '%')
                    ->orWhere('canonical', 'LIKE', '%' . $condition['keyword'] . '%');
            }
        });

        if (isset($condition['publish']) && $condition['publish'] != 0) {
            $query->where('publish', '=', $condition['publish']);
        }

        if (!empty($join)) {
            $query->join(...$join);
        }

        $query->orderBy($orderBy[0], $orderBy[1]);

        return $query->paginate($perPage)->withQueryString();
    }


}