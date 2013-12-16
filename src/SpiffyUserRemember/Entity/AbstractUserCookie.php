<?php

namespace SpiffyUserRemember\Entity;

use SpiffyUser\Entity\UserInterface;

abstract class AbstractUserCookie implements UserCookieInterface
{
    /**
     * @var UserInterface
     **/
    protected $user;

    /**
     * @var string
     */
    protected $token;

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {
        return $this->user;
    }
}
