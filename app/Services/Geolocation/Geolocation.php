<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{

    /**
     * @var Map
     */
    private Map $map;
    /**
     * @var Satellite
     */
    private Satellite $satellite;

    public function __construct(Map $map, Satellite $satellite)
    {
        $this->map = $map;
        $this->satellite = $satellite;
    }


    public function search(string $name): array
    {

        // ...
        $locationInfo = $this->map->findAddress($name);
        return $this->satellite->pinpoint($locationInfo);

    }

}
