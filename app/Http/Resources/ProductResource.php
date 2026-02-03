<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    => $this->id,
            'image'  => $this->image ? asset(FacadesStorage::url($this->image)) : null,
            'name'  => $this->name,
            'price' => (float)(string)$this->price,
            'stock' => $this->stock,
            'product_category' => new ProductCategoryResource($this->whenLoaded('productCategory')),
        ];
    }
}
