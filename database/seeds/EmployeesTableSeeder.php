<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'employee_id' => '000010',
            'employee_name' => '一号　太郎',
            'office' => '新潟営業所', 
        ]);
        DB::table('employees->goods()')->insert([
            'uniform' => 'S',
            'winter_clothes' => 'S',
            'shoes' => '23㎝',
            'other' => 'ヘルメット', 
        ]);

        DB::table('employees')->insert([
            'employee_id' => '000020',
            'employee_name' => '２号　太郎',
            'office' => '長岡営業所', 
            // 'uniform' => 'M',
            // 'winter_clothes' => 'M',
            // 'shoes' => '23.5㎝',
            // 'other' => 'ザバス', 
        ]);
    }
}