<?php

namespace Jorro\Behavior;

interface Jsonable
{
    /**
     * Jsonに変換
     *
     * @return void
     */
    public function toJson(): string;
}