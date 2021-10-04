<?php

namespace Casper\Serializer;

use Casper\Entity\EraInfo;

class EraInfoSerializer extends Serializer
{
    /**
     * @param EraInfo $eraInfo
     * @return array
     */
    public static function toJson($eraInfo): array
    {
        // TODO: Implement toJson() method.
        return [];
    }

    public static function fromJson(array $json): EraInfo
    {
        return new EraInfo(SeigniorageAllocationSerializer::fromJsonArray($json['seigniorage_allocations']));
    }
}
