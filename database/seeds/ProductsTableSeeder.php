<?php
use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Products::create([
           'name' => 'Macbook Pro',
           'slug' => 'macbook-pro',
           'details' => '15 inch 1TB SSD, 32GB RAM',
           'price' => 249999,
            'description'  => 'Lorem ipsum'
      ]);
    }
}
