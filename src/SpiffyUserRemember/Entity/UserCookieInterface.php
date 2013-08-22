<?php

namespace SpiffyUserRemember\Entity;

use SpiffyUser\Entity\UserInterface;

interface UserCookieInterface
{
    /**
     * @param int $token
     * @return UserCookieInterface
     */
    public function setToken($token);

    /**
     * @return int
     */
    public function getToken();

    /**
     * @param UserInterface $user
     * @return UserCookieInterface
     */
    public function setUser(UserInterface $user);

    /**
     * @return UserInterface
     */
    public function getUser();
}