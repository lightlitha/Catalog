<?php

namespace Faceless\Catalog\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttributeAttributeFamily extends Pivot
{
    use HasFactory;

    protected $table = 'attribute_attribute_family';

    public $timestamps = false;

}
