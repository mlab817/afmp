<?php

namespace App\GraphQL\Queries;

use App\Models\Intervention;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class InterventionQuery extends Query
{
    protected $attributes = [
        'name' => 'intervention',
    ];

    public function type(): Type
    {
        return GraphQL::type('intervention');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Intervention::findOrFail($args['id']);
    }
}