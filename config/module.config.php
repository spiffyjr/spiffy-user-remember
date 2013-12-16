<?php

return array(
    'doctrine' => array(
        'driver' => array(
            'spiffy_user_remember_orm' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => array(__DIR__ . '/orm')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'SpiffyUserRemember\Entity' => 'spiffy_user_remember_orm',
                )
            )
        ),
        'entity_resolver' => array(
            'orm_default' => array(
                'resolvers' => array(
                    'SpiffyUserRemember\Entity\UserCookieInterface' => 'SpiffyUserRemember\Entity\UserCookie'
                )
            )
        )
    ),

    'service_manager' => include 'service.config.php',

    'spiffy_user' => array(
        'extensions' => array(
            'remember'          => array(
                'type' => 'SpiffyUserRemember\Extension',
                'options' => array(
                    'duration'     => 1209600,
                    'entity_class' => 'SpiffyUserRemember\Entity\UserCookie',
                    'salt'         => 'change_the_default_salt!',
                )
            ),
        )
    ),
);