<?php

namespace Http\Requests;

class Request
{
    /**
     * Ошибки типа "Разное".
     *
     * @var array
     */
    private $anyErrors = [];

    /**
     * Ошибки валидации форм.
     *
     * @var array
     */
    private $formErrors = [];

    /**
     * Правила валидации.
     *
     * @var array
     */
    private $rules = [];

    /**
     * Сообщения для правил валидации.
     *
     * @var array
     */
    private $ruleMessages = [];

    /**
     * Список правил валидации API ключа.
     *
     * @param $rules
     * @return void
     */
    protected function setRules($rules): void
    {
        $this->rules = $rules;
    }

    /**
     * Возвращает список сообщений валидации.
     *
     * @param $messages
     * @return void
     */
    protected function setMessages($messages): void
    {
        $this->ruleMessages = $messages;
    }
}

