<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * @var mixed
     */
    public $attributes;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result =  [
            'quantity' => $this -> quantity,

        ];

        return $this->getAttribute($result);
    }

    /**
     * @param array $result
     * @return array
     */
    public function getAttribute(array $result)
    {
        $attributes = json_decode($this->attribute);


        foreach ($attributes as $stockAttribute) {
            $attribute = Attribute::find($stockAttribute->attribute_id);
            $value = Value::find($stockAttribute->value_id);

            $result [$attribute->name] = $value->name;
        }
        return $result;
    }
}
