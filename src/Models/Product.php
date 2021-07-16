<?php

namespace Faceless\Catalog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'type',
    'attribute_family_id',
    'barcode',
    'parent_id',
    'deleted_at',
    'name'
  ];

  /**
   * Get product associated with the values.
   */
  public function attributes()
  {
    return $this->belongsToMany(Attribute::class)->using(AttributeProduct::class)->withPivot('actual_value');
  }
}
