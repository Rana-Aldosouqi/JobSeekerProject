<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ImagesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(PostAppliedsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);

        $this->call(SkillsTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
<<<<<<< HEAD
      // $this->call(TestTableSeeder::class);
=======

>>>>>>> 85f4d7408bb7916cd6d11a593d69f409c41ca936

    }
}
