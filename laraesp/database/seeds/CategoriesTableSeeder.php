<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cat = new Category;
    	$cat->name = "Económica";
    	$cat->description = "Esta categoría muestra artículos económicos.";
        $cat->save();
        
 		Category::create(array(
 			'name'         => 'Social',
 			'description'  => 'Esta categoría muestra artículos sociales.'
 		));
 		Category::create(array(
 			'name'         => 'Deporte',
 			'description'  => 'Esta categoría muestra artículos deportivos.'
 		));
    }
}
