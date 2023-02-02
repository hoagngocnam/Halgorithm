<?php

namespace Modules\Admin\Http\Repositories;

use App\Models\Account;

class EsSearchRepository
{
    const MUST = 'must';
    const MUST_NOT = 'must_not';
    const FILTER = 'filter';
    const SHOULD = 'should';

    protected $model;
    private $query;
    private $sort;
    private $must;
    private $mustNot;
    private $filter;
    private $should;

    public function __construct(Account $model)
    {
        $this->model = $model;
    }

    public function searchElasticsearch($params)
    {
        $this->setQuery($params);
        $this->setSort($params);

        $searchParams = [
            'body' => [
                'query' => $this->getQuery(),
                "sort" => $this->getSort()
            ]
        ];

        return $this->model::complexSearch($searchParams);
    }

    public function getQuery(): array
    {
        return $this->query;
    }

    public function setQuery(): void
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

        $this->query = [
            'bool' => [
                'must' => $must,
                'filter' => $filter,
                'must_not' => $mustNot,
                'should' => $should
            ]
        ];
    }

    public function getSort(): array
    {
        return $this->sort;
    }

    public function setSort(): void
    {
        $this->sort = [
            [
                "id" => "desc"
            ],
            "_score"
        ];
    }

    public function getMust(): array
    {
        return $this->must;
    }

    public function setMust(): void
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
        $bool = [];
        $must = [];
        foreach ($params as $typeBool => $elements) {
            foreach ($elements as $type => $elementQuery) {
                foreach ($elementQuery as $field => $value) {
                    $must[] = [
                        $type => [
                            $field => $value
                        ]
                    ];
                }
            }
            $bool[] = $must;
        }

        $this->bool = $bool;
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
