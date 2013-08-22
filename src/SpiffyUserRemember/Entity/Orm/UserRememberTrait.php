<?php

namespace SpiffyUserRemember\Entity\Orm;

use Doctrine\ORM\Mapping as ORM;

trait UserRememberTrait
{
    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="SpiffyUserRemember\Entity\UserCookie", mappedBy="user")
     */
    protected $cookies = array();

    /**
     * @return array
     */
    public function getCookies()
    {
        return $this->cookies;
    }
}