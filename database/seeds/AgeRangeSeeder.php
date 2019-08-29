<?php

use Illuminate\Database\Seeder;

class AgeRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        vengine\Models\AgeRange::create([
            'name' => 'Default Infant',
            'type' => 'infant',
            'start' => 0,
            'end' => 2,
            'company_id' => 1,
            'created_by' =>  1
        ]);
        
        vengine\Models\AgeRange::create([
            'name' => 'Default Child',
            'type' => 'child',
            'start' => 2,
            'end' => 10,
            'company_id' => 1,
            'created_by' =>  1
        ]);
        
        vengine\Models\AgeRange::create([
            'name' => 'Default Teen',
            'type' => 'teen',
            'start' => 10,
            'end' => 18,
            'company_id' => 1,
            'created_by' =>  1
        ]);
        
        vengine\Models\AgeRange::create([
            'name' => 'Default Adult',
            'type' => 'adult',
            'start' => 18,
            'end' => 200,
            'company_id' => 1,
            'created_by' =>  1
        ]);
        
    }
}
