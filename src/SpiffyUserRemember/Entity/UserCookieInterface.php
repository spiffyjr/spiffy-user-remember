<?php

namespace SpiffyUserRemember\Entity;

use SpiffyUser\Entity\UserInterface;

interface UserCookieInterface
{
    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token);

    /**
     * @return string
     */
    public function getToken();

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function setUser(UserInterface $user);

    /**
     * @return $this
     */
    public function getUser();
}