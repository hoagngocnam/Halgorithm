<?php

namespace Modules\Admin\Repositories;

use App\Models\Account;
use Modules\Admin\Repositories\Interfaces\AccountRepositoryInterface;

class AccountRepository extends BaseRepository implements AccountRepositoryInterface
{
    protected $model;

    public function __construct(Account $model)
    {
        $this->model = $model;
    }

    public function paginate(array $params = []): object
    {
        $result = $this->model::query();
        if (!empty($params['mail_adr'])) {
            $result->where('mail_adr', 'like', $params['mail_adr'].'%');
        }
        if (!empty($params['full_name'])) {
            $result->whereRaw('CONCAT(first_name, last_name) like ?', [$params['full_name'].'%']);
        }

        return $result->orderBy('updated_at', 'desc')
            ->paginate(10);
    }

    public function searchElasticsearch($params)
    {
        $query = $this->buildQuery($params);
        $sort = $this->buildSort($params);

        $searchParams = [
            'body' => [
                'query' => $query,
                "sort" => $sort,
            ]
        ];

        return Account::complexSearch($searchParams);
    }

    private function buildQuery($params)
    {
        $params = [
            'must' => [
                'match' => [
                    'id' => "15",
                    'mail_adr' => "qschroeder@example.org"
                ],
                'term' => [

                ]
            ],
            'filter' => [
                'match' => [],
                'term' => []
            ],
            'must_not' => [
                'match' => [],
                'term' => []
            ],
            'should' => [
                'match' => [],
                'term' => []
            ]
        ];

        $paramsMust = $params['must'];
        $filter = $params['filter'];
        $mustNot = $params['must_not'];
        $should = $params['should'];

        $must = [];
        foreach ($paramsMust['match'] as $fields => $value) {
            $must[] = [
                "match" => [
                    $fields => $value
                ]
            ];
        }

        $filter = [];
        $mustNot = [];
        $should = [];

        return [
            'bool' => [
                'must' => $must,
                'filter' => $filter,
                'must_not' => $mustNot,
                'should' => $should
            ]
        ];
    }

    private function buildSort()
    {
        return [
            [
                "id" => "desc"
            ],
            "_score"
        ];
    }

    const MUST = 'must';
    const MUST_NOT = 'must_not';
    const FILTER = 'filter';
    const SHOULD = 'should';

    private function buildTypeBoolQuery($type)
    {
        $must = [
            'match' => [
                'id' => "15",
                'mail_adr' => "qschroeder@example.org"
            ],
            'term' => [

            ]
        ];
    }

    private function buildTermQuery($params)
    {
        return [
            "term" => [
                'id' => "15",
                'mail_adr' => "qschroeder@example.org"
            ]
        ];
    }

    private function buildMatchQuery($params)
    {
        return [
            "match" => [
                'id' => "15",
                'mail_adr' => "qschroeder@example.org"
            ]
        ];
    }
}
