<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
 			'name'         => 'Sigue Subiendo el dolar',
 			'content'      => 'El dolar alcanza los 3600 pesos algo histórico.',
 			'user_id'      => 2,
 			'category_id'  => 1
 		));
 		Article::create(array(
 			'name'         => 'El matrimonio del año',
 			'content'      => 'Higuita se vuelve a casar en cartagena con esperanza.',
 			'user_id'      => 2,
 			'category_id'  => 2
 		));
    }
}
