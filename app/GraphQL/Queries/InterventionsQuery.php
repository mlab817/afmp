<?php

namespace App\GraphQL\Queries;

use App\Models\Intervention;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class InterventionsQuery extends Query
{
    protected $attributes = [
        'name' => 'interventions',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('intervention'));
    }

    public function args(): array
    {
        return [
            'id' => [
                'type' => Type::int()
            ],
            'operatingUnit' => [
                'type' => Type::string()
            ],
            'region' => [
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['region'])) {
            return Intervention::where('region', $args['region'])->get();
        }

        if (isset($args['operatingUnit'])) {
            return Intervention::where('operatingUnit', $args['operatingUnit'])->get();
        }

        return Intervention::all();
    }
}