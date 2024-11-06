<?php

namespace Jorro\Behavior;

interface Arrayable
{
    /**
     * 配列に変換
     *
     * @return void
     */
    public function toArray(): array;
}