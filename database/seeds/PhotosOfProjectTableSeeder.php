<?php

use Illuminate\Database\Seeder;

class PhotosOfProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 1,
                    'img_url'       => 'images/portfolio/cvet.jpeg',
                    'project_id'    => 1,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 2,
                    'img_url'       => 'images/portfolio/grad.jpeg',
                    'project_id'    => 1,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 3,
                    'img_url'       => 'images/portfolio/kolibri.jpeg',
                    'project_id'    => 2,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 4,
                    'img_url'       => 'images/portfolio/kuce.jpeg',
                    'project_id'    => 2,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 5,
                    'img_url'       => 'images/portfolio/kugla.jpeg',
                    'project_id'    => 3,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 6,
                    'img_url'       => 'images/portfolio/plaza.jpeg',
                    'project_id'    => 3,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 7,
                    'img_url'       => 'images/portfolio/flamingo.jpeg',
                    'project_id'    => 1,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }

        try{
            DB::table('photos_of_project')
            ->insert(
                [
                    'id'            => 8,
                    'img_url'       => 'images/portfolio/priroda.jpeg',
                    'project_id'    => 2,
                ]
            );
        } catch(\Exception $e) {
            echo "Photo  already exist!";
        }



   
    }
}
