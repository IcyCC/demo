<?php

use Illuminate\Database\Seeder;
use App\models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name' => 'SystemAdmin',
                'display_name' => 'Administrator of system',
                'description' => 'Administrator of system'
            ],
            [
                'name' => 'owner',
                'display_name' => 'owner',
                'description' => 'owner'
            ],
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
