<?php

namespace App\GraphQL\Types;

use App\Models\Intervention;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class InterventionType extends GraphQLType
{    
    protected $attributes = [
        'name'          => 'Intervention',
        'description'   => 'An intervention',
        'model'         => Intervention::class,
    ];

    public function fields(): array
    {
        // Define the fields of the query
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the intervention'
            ],
            'operatingUnit' => [
                'type' => Type::string()
            ],
            'spatialCoverage' => [
                'type' => Type::string()
            ],
            'region' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The region of the intervention'
            ],
            'province' => [
                'type' => Type::string()
            ],
            'commodityGroup' => [
                'type' => Type::string()
            ],
            'commodity' => [
                'type' => Type::string()
            ],
            'valueChainSegment' => [
                'type' => Type::string()
            ],
            'function' => [
                'type' => Type::string()
            ],
            'subprogram' => [
                'type' => Type::string()
            ],
            'intervention' => [
                'type' => Type::string()
            ],
            'interventionOthers' => [
                'type' => Type::string()
            ],
            'unit' => [
                'type' => Type::string()
            ],
            'interventionDetails' => [
                'type' => Type::string()
            ],
            'multiYear' => [
                'type' => Type::string()
            ],
            'target_1' => [
                'type' => Type::float()
            ],
            'target_2' => [
                'type' => Type::float()
            ],
            'target_3' => [
                'type' => Type::float()
            ],
            'target_4' => [
                'type' => Type::float()
            ],
            'target_5' => [
                'type' => Type::float()
            ],
            'target_6' => [
                'type' => Type::float()
            ],
            'investment_1' => [
                'type' => Type::float()
            ],
            'investment_2' => [
                'type' => Type::float()
            ],
            'investment_3' => [
                'type' => Type::float()
            ],
            'investment_4' => [
                'type' => Type::float()
            ],
            'investment_5' => [
                'type' => Type::float()
            ],
            'investment_6' => [
                'type' => Type::float()
            ],
            'investmentTotal' => [
                'type' => Type::float()
            ],
            'municipalities_1' => [
                'type' => Type::int()
            ],
            'municipalities_2' => [
                'type' => Type::int()
            ],
            'municipalities_3' => [
                'type' => Type::int()
            ],
            'municipalities_4' => [
                'type' => Type::int()
            ],
            'municipalities_5' => [
                'type' => Type::int()
            ],
            'municipalities_6' => [
                'type' => Type::int()
            ],
            'fundSource' => [
                'type' => Type::string()
            ],
            'remarks' => [
                'type' => Type::string()
            ]
        ];
    }
}