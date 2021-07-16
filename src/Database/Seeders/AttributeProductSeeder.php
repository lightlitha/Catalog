<?php

namespace Faceless\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Catalog\Models\AttributeFamily;
use Faceless\Catalog\Models\AttributeProduct;
use Faceless\Catalog\Models\Product;

class AttributeProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = \Faker\Factory::create();
    $product = Product::all();
    $family = AttributeFamily::where('code', '=', 'default')->first();
    $attribute = $family->attributes;

    $values = [];

    foreach($product as $k => $prod) {
      foreach ($attribute as $key => $value) {
        $actual_value = null;
        switch($value->code) {
          case 'description':
            $actual_value = $faker->paragraph;
            break;
          case 'special_price_from':
            $actual_value = date("Y-m-d h:i:sa", strtotime('today'));
            break;
          case 'special_price_to':
            $actual_value = date("Y-m-d h:i:sa", strtotime('next saturday'));
            break;
          case 'special_price':
            $actual_value = $faker->randomFloat(NULL, 50, 90);
            break;
          case 'cost':
            $actual_value = $faker->randomFloat(null, 25, 35);
            break;
          case 'price':
            $actual_value = $faker->randomFloat(null, 95, 120);
            break;
        }
        $values[] = [
          'attribute_id' => $value->id,
          'product_id' => $prod->id,
          'actual_value' => $actual_value
        ];
      }
    }

    foreach ($values as $key => $value) {
      $av = new AttributeProduct();
      $av->attribute_id = $value['attribute_id'];
      $av->product_id = $value['product_id'];
      $av->actual_value = $value['actual_value'];
      $av->save();
    }

  }
}
