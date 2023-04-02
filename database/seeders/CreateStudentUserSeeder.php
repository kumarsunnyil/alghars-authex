<?php

namespace Database\Seeders;

use App\Models\StudentUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateStudentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 0;
        $students = StudentUser::factory()->count(20)->create();
        foreach($students as $student) {

            $user = User::create(
                [
                    'name' => $student->name,
                    'email' => $student->email,
                    'username' => $student->username,
                    'password' => "test123password",
                    ]
                );
                if($count == 0)
                    $this->createStudentRole($user);
                $user->assignRole('student');
                $count ++;
            }
            echo "Seeded $count Students";
    }
    /** Synchronize this student with the student role */
    public function createStudentRole(User $user)
    {
        $role = Role::create(['name' => 'student']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
