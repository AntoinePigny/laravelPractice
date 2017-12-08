<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
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
	    $this->command->info('Truncated Articles Table');
	    DB::table('articles')->truncate();
	    $this->command->info('Enabled Foreign Key');
	    Schema::enableForeignKeyConstraints();

	    factory(App\Article::class, 200)->create();
	    $this->command->info('Articles seeding completed !');
    }
}
