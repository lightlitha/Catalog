<?php

namespace Faceless\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Catalog\Models\AttributeFamily;

class AttributeFamilySeeder extends Seeder
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
        'code' => 'default',
        'name' => 'Default',
        'is_user_defined' => false
      ],
    ];

    foreach ($attributes as $key => $value) {
      $attribute = new AttributeFamily();
      $attribute->code = $value['code'];
      $attribute->name = $value['name'];
      $attribute->is_user_defined = $value['is_user_defined'];
      $attribute->save();
    }
  }
}
