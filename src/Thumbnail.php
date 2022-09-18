<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a part of the text that needs to be formatted in some unusual way.
 */
class Thumbnail extends PhotoSize
{
    public const TYPE_NAME = 'thumbnail';



    /**
     * Thumbnail type (see https://core.telegram.org/constructor/photoSize).
     *
     * @var string|null
     */
    protected string|null $type;

    /**
     * Information about the photo file.
     *
     * @var File|null
     */
    protected File|null $photo;

    /**
     * Photo width.
     *
     * @var int
     */
    protected int|null $width;

    /**
     * Photo height.
     *
     * @var int|null
     */
    protected int|null $height;

    public function __construct(string|null $type, File|null $photo, int|null $width, int|null $height)
    {
        $this->type   = $type;
        $this->photo  = $photo;
        $this->width  = $width;
        $this->height = $height;
    }

    public static function fromArray(array $array): PhotoSize
    {
        return new static(
            $array['type'],
            null,
            $array['width'],
            $array['height'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'type'   => $this->type,
            'photo'  => !empty($this->photo) ? $this->photo->typeSerialize() : null,
            'width'  => $this->width,
            'height' => $this->height,
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPhoto(): File
    {
        return $this->photo;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

}
