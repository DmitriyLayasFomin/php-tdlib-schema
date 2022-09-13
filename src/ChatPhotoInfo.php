<?php

namespace AurimasNiekis\TdLibSchema;

class ChatPhotoInfo extends TdObject
{
    public function __construct() {}

    public static function fromArray(array $array): ChatPhotoInfo
    {
        return new static();
    }
    public function typeSerialize(): array
    {
        return [null];
    }
}