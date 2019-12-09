<?php

use App\Models\Intervention;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class InterventionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // remove database content
        // DB::table('interventions')->truncate(); // uncomment only if you need to re-seed the entire database

        // get seeder file
        $json = File::get('database/data/data.json');

        // decode json data
        $data = json_decode($json);
        
        // determine last inserted id
        $lastId = Intervention::max('id');
        
        // loop through the data and insert if id is greater than last Id
        foreach ($data as $obj) {
            if ($obj->id > $lastId) {
                DB::table('interventions')->insert([
                    'id' => $obj->id,
                    'operatingUnit' => $obj->operatingUnit,
                    'spatialCoverage' => $obj->spatialCoverage,
                    'region' => $obj->region,
                    'province' => $obj->province,
                    'commodityGroup' => $obj->commodityGroup,
                    'commodity' => $obj->commodity,
                    'valueChainSegment' => $obj->valueChainSegment,
                    'function' => $obj->function,
                    'subprogram' => $obj->subprogram,
                    'intervention' => $obj->intervention,
                    'interventionOthers' => $obj->interventionOthers,
                    'unit' => $obj->unit,
                    'interventionDetails' => $obj->interventionDetails,
                    'multiYear' => $obj->multiYear,
                    'target_1' => $obj->target_1,
                    'target_2' => $obj->target_2,
                    'target_3' => $obj->target_3,
                    'target_4' => $obj->target_4,
                    'target_5' => $obj->target_5,
                    'target_6' => $obj->target_6,
                    'investment_1' => $obj->investment_1,
                    'investment_2' => $obj->investment_2,
                    'investment_3' => $obj->investment_3,
                    'investment_4' => $obj->investment_4,
                    'investment_5' => $obj->investment_5,
                    'investment_6' => $obj->investment_6,
                    'investmentTotal' => $obj->investmentTotal,
                    'municipalities_1' => $obj->municipalities_1,
                    'municipalities_2' => $obj->municipalities_2,
                    'municipalities_3' => $obj->municipalities_3,
                    'municipalities_4' => $obj->municipalities_4,
                    'municipalities_5' => $obj->municipalities_5,
                    'municipalities_6' => $obj->municipalities_6,
                    'fundSource' => $obj->fundSource,
                    'remarks' => $obj->remarks
                ]);
            }
        }
    }
}
