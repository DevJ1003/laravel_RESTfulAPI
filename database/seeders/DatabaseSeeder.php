<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();

        $usersQuantity = 1000;
        $categoriesQuantity = 30;
        $productsQuantity = 1000;
        $transactionsQuantity = 1000;

        // User::factory(User::class, $usersQuantity)->create();    // old method
        User::factory()->count($usersQuantity)->create();                     // new method
        // Category::factory(Category::class, $categoriesQuantity)->create();   // old method
        Category::factory()->count($categoriesQuantity)->create();              // new method

        Product::factory()->count($productsQuantity)->create()->each(
            function ($product) {
                $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');
                $product->categories()->attach($categories);
            }
        );

        Transaction::factory()->count($transactionsQuantity)->create();
    }
}
