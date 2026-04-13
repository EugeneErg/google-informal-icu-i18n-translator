<?php

declare(strict_types=1);

namespace EugeneErg\GoogleInformalIcuI18nTranslator\Client\ValueObjects;

final readonly class GoogleTranslateResponse
{
    /**
     * @param Translate[] $translates
     */
    public function __construct(
        public array $additional,
        public ?array $translates = null,
        public ?array $dictionary = null,
        public ?string $detectedSourceLanguage = null,
        public ?array $alternativeTranslations = null,
        public ?float $confidenceValue = null,
        public ?QualityCheck $qualityCheck = null,
        public ?Confidence $confidence = null,
    ) {}
}
