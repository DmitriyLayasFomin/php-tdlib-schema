<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the photo of a chat.
 */
class ChatPhoto extends TdObject
{
    public const TYPE_NAME = 'chatPhoto';

    /**
     * A small (160x160) chat photo. The file can be downloaded only before the photo is changed.
     *
     * @var File|null
     */
    protected File|null $small;

    /**
     * A big (640x640) chat photo. The file can be downloaded only before the photo is changed.
     *
     * @var File
     */
    protected File|null $big;

    public function __construct(File|null $small, File|null $big)
    {
        $this->small = $small;
        $this->big = $big;
    }

    public static function fromArray(array|null $array): ChatPhoto|null
    {
        if (!empty(@$array['small']) || !empty(@$array['big']))
            return new static(
                TdSchemaRegistry::fromArray($array['small']),
                TdSchemaRegistry::fromArray($array['big']),
            );
        else return new static(null, null);
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'small' => !empty($this->small) ? $this->small->typeSerialize() : $this->small,
            'big' => !empty($this->big) ? $this->big->typeSerialize() : $this->big,
        ];
    }

    public function getSmall(): File
    {
        return $this->small;
    }

    public function getBig(): File
    {
        return $this->big;
    }
}
