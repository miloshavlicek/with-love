<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Company extends \Kdyby\Doctrine\Entities\IdentifiedEntity {

    /**
     * @ORM\Column(type="text")
     */
    public $name;

    /**
     * @ORM\Column(type="text")
     */
    public $descriptionShortCz;

    /**
     * @ORM\Column(type="text")
     */
    public $descriptionShortEn;

}
