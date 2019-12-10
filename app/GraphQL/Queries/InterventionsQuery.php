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

    

    public function resolve($root, $args)
    {
        return Intervention::all();
    }
}