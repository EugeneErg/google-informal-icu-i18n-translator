<?php

declare(strict_types=1);

namespace EugeneErg\GoogleInformalIcuI18nTranslator\Client\ValueObjects;

final readonly class Translate
{
    /**
     * @param Model[] $models
     */
    public function __construct(
        public ?string $translatedText,
        public ?string $originalText,
        public ?string $transliteration,
        public ?array $models,
        public array $additional,
    ) {}
}
