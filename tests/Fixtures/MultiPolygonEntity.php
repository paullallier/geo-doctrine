<?php

declare(strict_types=1);

namespace Brick\Geo\Doctrine\Tests\Fixtures;

use Brick\Geo\MultiPolygon;

/**
 * @Entity
 * @Table(name="multipolygons")
 */
class MultiPolygonEntity
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private int $id;

    /**
     * @Column(type="MultiPolygon")
     */
    private MultiPolygon $multiPolygon;

    public function getMultiPolygon() : MultiPolygon
    {
        return $this->multiPolygon;
    }

    public function setMultiPolygon(MultiPolygon $multiPolygon) : void
    {
        $this->multiPolygon = $multiPolygon;
    }
}
