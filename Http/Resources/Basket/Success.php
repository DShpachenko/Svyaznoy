<?php

namespace Http\Resources;

class Success extends JsonResource
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