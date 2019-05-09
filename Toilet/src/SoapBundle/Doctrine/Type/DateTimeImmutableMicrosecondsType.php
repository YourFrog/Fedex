<?php

namespace SoapBundle\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Doctrine\DBAL\Types\Type;

/**
 *  Typ danych wspierający microsekundy
 *
 * @package SoapBundle\Doctrine\Type
 */
class DateTimeImmutableMicrosecondsType extends Type
{
    /**
     * @inheritDoc
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'datetime_immutable';
    }

    /**
     * @throws \Doctrine\DBAL\Types\ConversionException
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if( is_object($value) ) {
            $dateTimeFormat = $platform->getDateTimeFormatString();
            return $value->format("{$dateTimeFormat}.u");
        }

        return parent::convertToDatabaseValue($value, $platform);
    }
}