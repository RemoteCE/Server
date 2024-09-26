<?php
declare(strict_types=1);

namespace App\Stats\Core\Domain\Entity;

interface EntityContract
{
    /**
     * @return array
     */
    public function toArray() : array;

    /**
     * @return string
     */
    public function toJson() : string;

    /**
     * @param array $data
     * @return EntityContract
     */
    public static function fromArray(array $data) : EntityContract;

}
