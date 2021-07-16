<?php

namespace Faceless\Catalog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeProduct extends Pivot
{
    use HasFactory;

    protected $table = 'attribute_product';

    public $timestamps = false;

    protected $fillable = [
        'actual_value'
    ];
}
