<?php

namespace SpiffyUserRemember\Entity;

use SpiffyUser\Entity\UserInterface;

class UserCookie implements UserCookieInterface
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
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }
}
