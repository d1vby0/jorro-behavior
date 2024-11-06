<?php

namespace Jorro\Behavior;

interface Clearable
{
    /**
     * クリア
     *
     * @return void
     */
    public function clear(): void;


    /**
     * 値が空かの判定
     *
     * @return bool
     */
    public function isEmpty(): bool;
}