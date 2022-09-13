<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Finishes the file generation.
 */
class FinishFileGeneration extends TdFunction
{
    public const TYPE_NAME = 'finishFileGeneration';

    /**
     * The identifier of the generation process.
     *
     * @var string
     */
    protected string $generationId;

    /**
     * If set, means that file generation has failed and should be terminated.
     *
     * @var Error|null
     */
    protected Error|null $error;

    public function __construct(string $generationId, Error|null $error)
    {
        $this->generationId = $generationId;
        $this->error        = $error;
    }

    public static function fromArray(array $array): FinishFileGeneration
    {
        return new static(
            $array['generation_id'],
            !empty(@$array['error']) ? TdSchemaRegistry::fromArray($array['error']) : null,
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'generation_id' => $this->generationId,
            'error'         => !empty($this->error) ? $this->error->typeSerialize() : null,
        ];
    }

    public function getGenerationId(): string
    {
        return $this->generationId;
    }

    public function getError(): Error
    {
        return $this->error;
    }
}
