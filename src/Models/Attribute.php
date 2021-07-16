<?php

namespace Faceless\Catalog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'type',
        'validation', // Number or Decimal, or Email, or URL
        'is_required',
        'is_unique',
        'is_filterable',
        'is_user_defined',
        'is_visible_on_front'
    ];

    /**
     * Get the attribute family.
     */
    public function attributes()
    {
        return $this->belongsToMany(AttributeFamily::class)->using(AttributeAttributeFamily::class);
    }
}
