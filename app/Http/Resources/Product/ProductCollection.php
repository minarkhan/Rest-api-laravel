<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
             'name' => $this->name,
            'detail' => $this->detail,
            // 'stock' => $this->stock == 0 ? 'out of stock' : $this->stock,
            'price' => $this->price,
            // 'discount' => $this->discount,
            // 'totalPrice' => round((1 - $this->discount/100) * $this->price, 2),
            // 'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No review yet',
            'href' => [
                'reviews' => route('products.show', $this->id)
            ]
        ];
    }
}
