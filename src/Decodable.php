<?php

namespace Jorro\Behavior;

interface Decodable
{
    /**
     * 配列から設定
     *
     * @return void
     */
    public function fromArray(array $values): void;

    /**
     * Jsonから設定
     * @param string $json
     * @return void
     */
    public function fromJson(string $json): void;
}