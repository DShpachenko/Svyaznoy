<?php

namespace Http\Resources;

class Failed extends JsonResource
{
    public function toArray($request)
    {
        return [
            'data' => [
                'status' => $this->resource
            ]
        ];
    }
}