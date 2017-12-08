<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->command->info('Disabled Foreign Key');
	    Schema::disableForeignKeyConstraints();
	    $this->command->info('Truncated Users Table');
	    DB::table('users')->truncate();
	    $this->command->info('Enabled Foreign Key');
	    Schema::enableForeignKeyConstraints();

	    factory(App\User::class, 100)->create();
	    $this->command->info('Users seeding completed !');
    }
}
