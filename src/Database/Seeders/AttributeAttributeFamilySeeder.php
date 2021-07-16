<?php

namespace Faceless\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Catalog\Models\AttributeAttributeFamily;

class AttributeAttributeFamilySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $attributes = [
      [
        'attribute_family_id' => 1,
        'attribute_id' => 9
      ],
      [
        'attribute_family_id' => 1,
        'attribute_id' => 11
      ],
      [
        'attribute_family_id' => 1,
        'attribute_id' => 12
      ],
      [
        'attribute_family_id' => 1,
        'attribute_id' => 13
      ],
      [
        'attribute_family_id' => 1,
        'attribute_id' => 14
      ],
      [
        'attribute_family_id' => 1,
        'attribute_id' => 15
      ]
    ];

    foreach ($attributes as $key => $value) {
      $attribute = new AttributeAttributeFamily();
      $attribute->attribute_family_id = $value['attribute_family_id'];
      $attribute->attribute_id = $value['attribute_id'];
      $attribute->save();
    }
  }
}
