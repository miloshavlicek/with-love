<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Product extends \Kdyby\Doctrine\Entities\IdentifiedEntity {

    /**
     * @ORM\Column(type="text")
     */
    public $name;

    /**
     * @ORM\Column(type="text")
     */
    public $website;

    /**
     * @ORM\Column(type="text")
     */
    public $email;

    /**
     * @ORM\Column(type="text")
     */
    public $facebookPage;

    /**
     * @ORM\Column(type="integer")
     */
    public $bangeMadeLove;

    /**
     * @ORM\Column(type="integer")
     */
    public $bangeQuality;

}
