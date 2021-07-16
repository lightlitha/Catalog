<?php

namespace Faceless\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Catalog\Models\Attribute;

class AttributeSeeder extends Seeder
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
        'code' => 'product_number',
        'type' => 'text',
        'name' => 'Product Number',
        'is_required' => false,
        'validation' => null,
        'is_unique' => true,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'brand',
        'type' => 'select',
        'name' => 'Brand',
        'is_required' => false,
        'validation' => null,
        'is_unique' => true,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'size',
        'type' => 'select',
        'name' => 'Size',
        'is_required' => false,
        'validation' => null,
        'is_unique' => true,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'color',
        'type' => 'select',
        'name' => 'Color',
        'is_required' => false,
        'validation' => null,
        'is_unique' => true,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'weight',
        'type' => 'select',
        'name' => 'Weight',
        'is_required' => false,
        'validation' => null,
        'is_unique' => true,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'depth',
        'type' => 'select',
        'name' => 'Depth',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'height',
        'type' => 'select',
        'name' => 'Height',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
      [
        'code' => 'width',
        'type' => 'select',
        'name' => 'Width',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
      [
        'code' => 'description',
        'type' => 'textarea',
        'name' => 'Description',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => false,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
      [
        'code' => 'short_description',
        'type' => 'textarea',
        'name' => 'Short Description',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => false,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
      [
        'code' => 'special_price_from',
        'type' => 'date',
        'name' => 'Special Price From',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'special_price_to',
        'type' => 'date',
        'name' => 'Special Price To',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'special_price',
        'type' => 'price',
        'name' => 'Special Price',
        'is_required' => false,
        'validation' => 'decimal',
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'cost',
        'type' => 'price',
        'name' => 'cost',
        'is_required' => false,
        'validation' => 'decimal',
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'price',
        'type' => 'price',
        'name' => 'Price',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => true,
        'is_user_defined' => false,
        'is_visible_on_front' => false
      ],
      [
        'code' => 'status',
        'type' => 'boolean',
        'name' => 'Status',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => false,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
      [
        'code' => 'new',
        'type' => 'boolean',
        'name' => 'New',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => false,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
      [
        'code' => 'tax_category',
        'type' => 'select',
        'name' => 'Tax Category',
        'is_required' => false,
        'validation' => null,
        'is_unique' => false,
        'is_filterable' => false,
        'is_user_defined' => false,
        'is_visible_on_front' => true
      ],
    ];

    foreach ($attributes as $key => $value) {
      $attribute = new Attribute();
      $attribute->code = $value['code'];
      $attribute->type = $value['type'];
      $attribute->name = $value['name'];
      $attribute->is_required = $value['is_required'];
      $attribute->validation = $value['validation'];
      $attribute->is_unique = $value['is_unique'];
      $attribute->is_filterable = $value['is_filterable'];
      $attribute->is_user_defined = $value['is_user_defined'];
      $attribute->is_visible_on_front = $value['is_visible_on_front'];
      $attribute->save();
    }
  }
}
