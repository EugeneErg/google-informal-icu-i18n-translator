<?php

declare(strict_types=1);

namespace EugeneErg\GoogleInformalIcuI18nTranslator\Client\ValueObjects;

final readonly class Confidence
{
    /**
     * @param string[] $languages
     * @param float[]  $values
     * @param string[] $languages2
     */
    public function __construct(
        public array $languages,
        public array $values,
        public array $languages2,
        public array $additional,
    ) {}
}
