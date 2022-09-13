<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An updated chat photo.
 */
class MessageChatChangePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageChatChangePhoto';

    /**
     * New chat photo.
     *
     * @var Photo|null
     */
    protected Photo|null $photo;

    public function __construct(Photo|null $photo)
    {
        parent::__construct();

        $this->photo = $photo;
    }

    public static function fromArray(array $array): MessageChatChangePhoto
    {
        if ($array['photo']['@type'] != 'photo')
            return new static(null);
        else
            return new static(
                TdSchemaRegistry::fromArray($array['photo']),
            );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => !empty($this->photo) ? $this->photo->typeSerialize() : $this->photo,
        ];
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }
}
