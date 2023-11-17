<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create(['attribute_id' => 1, 'name' => 'white' ]);
        Value::create(['attribute_id' => 1, 'name' => 'red' ]);
        Value::create(['attribute_id' => 1, 'name' => 'green' ]);
        Value::create(['attribute_id' => 2, 'name' => 'wood' ]);
        Value::create(['attribute_id' => 2, 'name' => 'iron' ]);
        Value::create(['attribute_id' => 2, 'name' => 'plastic' ]);
        Value::create(['attribute_id' => 3, 'name' => 'M' ]);
    }
}
