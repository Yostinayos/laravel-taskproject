<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Member;
use App\Models\Project;
use App\Models\Role;
use App\Models\Task;
use App\Models\TaskMember;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(15)->create();
        Customer::factory(5)->create();
       
        Category::factory(3)->create();
        Project::factory(5)->create();
        Employee::factory(5)->create();
        Role::factory(5)->create();
        Task::factory(15)->create();
        Member::factory(5)->create();
        TaskMember::factory(5)->create();
        
      

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
