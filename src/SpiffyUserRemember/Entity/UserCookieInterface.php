<?php

namespace SpiffyUserRemember\Entity;

use SpiffyUser\Entity\UserInterface;

interface UserCookieInterface
{
    /**
     * @param int $token
     * @return $this
     */
    public function setToken($token);

    /**
     * @return int
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