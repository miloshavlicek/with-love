<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Recommended extends \Kdyby\Doctrine\Entities\IdentifiedEntity {

    /**
     * @ORM\Column(type="text")
     */
    public $title;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="text")
     */
    public $website;

}
