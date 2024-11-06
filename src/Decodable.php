<?php

namespace Jorro\Behavior;

interface Decodable
{
    /**
     * 配列から設定
     *
     * @return void
     */
    public function fromArray(array $values);

    /**
     * Jsonから設定
     * @param string $json
     * @return mixed
     */
    public function fromJson(string $json);
}