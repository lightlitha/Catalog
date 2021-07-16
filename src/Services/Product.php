<?php

namespace Faceless\Catalog\Services;

use Illuminate\Http\Request;
use Faceless\Catalog\Models\Product as ProductModel;
use Illuminate\Support\Arr;

trait Product
{

  public function browse(Request $request, $limitter = 10)
  {
    $searchParams = $request->all();
    $limit = Arr::get($searchParams, 'limit', $limitter);
    $keyword = Arr::get($searchParams, 'keyword', '');

    $products = ProductModel::with('attributes')->get();

    // map Let's Map the results from [$query]
    $mapped = $products->map(function ($items) {
      $data['barcode'] = $items->barcode;
      $data['type'] = $items->type;
      foreach ($items->attributes as $key => $value) {
        $data[$value->code] = $value->pivot->actual_value;
      }
      return $data;
    });
    $map = (object)$mapped;

    return $map;
  }
}
