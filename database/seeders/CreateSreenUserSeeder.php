<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateSreenUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->count(2)->create();
        dd($user);

        // $role = Role::create(['name' => 'screenuser']);
        // $permissions = Permission::pluck('id','id')->all();
        // $role->syncPermissions($permissions);
        // $user->assignRole([$role->id]);
    }
}
