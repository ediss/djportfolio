<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::table('categories')
            ->insert(
                [
                    'id_category'   =>  1,
                    'category'      => 'Logos',
                ]
            );
        } catch(\Exception $e) {
            echo "Category 'Logos' already exist!";
        }

        try{
            DB::table('categories')
            ->insert(
                [
                    'id_category'   =>  2,
                    'category'      => 'Banners',
                ]
            );
        } catch(\Exception $e) {
            echo "Category 'Banners' already exist!";
        }

        try{
            DB::table('categories')
            ->insert(
                [
                    'id_category'   =>  3,
                    'category'      => 'Design',
                ]
            );
        } catch(\Exception $e) {
            echo "Category 'Design' already exist!";
        }
    }
}
