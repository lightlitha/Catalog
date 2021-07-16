<?php

namespace Faceless\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Catalog\Models\Product;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = \Faker\Factory::create();
    $attributes = [
      [
        'name' => $faker->word,
        'barcode' => $faker->ean13,
        'type' => 'simple',
        'attribute_family_id' => 1
      ],
      [
        'name' => $faker->word,
        'barcode' => $faker->ean13,
        'type' => 'simple',
        'attribute_family_id' => 1
      ],
      [
        'name' => $faker->word,
        'barcode' => $faker->ean13,
        'type' => 'simple',
        'attribute_family_id' => 1
      ],
      [
        'name' => $faker->word,
        'barcode' => $faker->ean13,
        'type' => 'simple',
        'attribute_family_id' => 1
      ],
      [
        'name' => $faker->word,
        'barcode' => $faker->ean13,
        'type' => 'simple',
        'attribute_family_id' => 1
      ],
    ];

    foreach ($attributes as $key => $value) {
      $attribute = new Product();
      $attribute->name = $value['name'];
      $attribute->barcode = $value['barcode'];
      $attribute->type = $value['type'];
      $attribute->attribute_family_id = $value['attribute_family_id'];
      $attribute->save();
    }
  }
}
