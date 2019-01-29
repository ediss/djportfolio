<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 1,
                    'img_url'      => 'images/portfolio/1.jpg',
                    'category_id'  => 1,
                    'position'     => 1,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 2,
                    'img_url'      => 'images/portfolio/2.jpg',
                    'category_id'  => 3,
                    'position'     => 2,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }


        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 3,
                    'img_url'      => 'images/portfolio/3.jpg',
                    'category_id'  => 1,
                    'position'     => 3,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 4,
                    'img_url'      => 'images/portfolio/4.jpg',
                    'category_id'  => 3,
                    'position'     => 4,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 5,
                    'img_url'      => 'images/portfolio/5.jpg',
                    'category_id'  => 2,
                    'position'     => 5,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 6,
                    'img_url'      => 'images/portfolio/6.jpg',
                    'category_id'  => 1,
                    'position'     => 6,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 7,
                    'img_url'      => 'images/portfolio/7.jpg',
                    'category_id'  => 3,
                    'position'     => 7,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 8,
                    'img_url'      => 'images/portfolio/8.jpg',
                    'category_id'  => 2,
                    'position'     => 8,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }

        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 9,
                    'img_url'      => 'images/portfolio/9.jpg',
                    'category_id'  => 1,
                    'position'     => 9,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }


        try{
            DB::table('projects')
            ->insert(
                [
                    'id_project'   => 10,
                    'img_url'      => 'images/portfolio/10.jpg',
                    'category_id'  => 1,
                    'position'     => 10,
                ]
            );
        } catch(\Exception $e) {
            echo "Project  already exist!";
        }
    }

}
