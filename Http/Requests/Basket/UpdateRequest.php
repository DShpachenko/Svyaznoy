<?php

namespace Http\Requests\Basket;

use Http\Requests\Request;

class UpdateRequest extends Request
{
    public function make()
    {
        $this->setRules([
            'test-row' => 'required',
        ]);

        $this->setMessages([
            'test-row.required' => 'Test message',
        ]);
    }
}