<?php

namespace Faceless\Catalog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeFamily extends Model
{
  use HasFactory;

  protected $table = 'attribute_families';

  public $timestamps = false;

  protected $fillable = [
    'code',
    'name',
    'is_user_defined'
  ];

  /**
   * Get product associated with the values.
   */
  public function attributes()
  {
    return $this->belongsToMany(Attribute::class)->using(AttributeAttributeFamily::class);
  }
}
