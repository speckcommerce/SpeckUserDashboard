<?php
return array(
    'speckuseraddress' => array(
        'indexRoute' => 'zfcuser/addresses',
    ),
    'controllers' => array(
        'invokables' => array(
            'user-dashboard' => 'SpeckUserDashboard\Controller\DashboardController',
            'sud-zfcuser-overrides' => 'SpeckUserDashboard\Controller\ZfcUserOverridesController',
            'sud-address-overrides' => 'SpeckUserDashboard\Controller\AddressOverridesController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'zfcuser' => array(
                'priority' => 10000,
                'options' => array(
                    'route' => '/user',
                    'defaults' => array(
                        'controller' => 'user-dashboard',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'address' => array(
                        'child_routes' => array(
                            'add' => array(
                                'options' => array(
                                    'defaults' => array(
                                        'controller' => 'sud-address-overrides',
                                        'action' => 'add'
                                    ),
                                ),
                            ),
                            'edit' => array(
                                'options' => array(
                                    'defaults' => array(
                                        'controller' => 'sud-address-overrides',
                                        'action' => 'edit'
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'addresses' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/address-book',
                            'defaults' => array(
                                'controller' => 'sud-address-overrides',
                                'action'     => 'index'
                            ),
                        ),
                    ),
                    'changepassword' => array(
                        'options' => array(
                            'defaults' => array(
                                'controller' => 'sud-zfcuser-overrides',
                                'action' => 'changepassword',
                            ),
                        ),
                    ),
                    'changeemail' => array(
                        'options' => array(
                            'defaults' => array(
                                'controller' => 'sud-zfcuser-overrides',
                                'action' => 'changeemail',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'ZendSkeletonModule' => __DIR__ . '/../view',
        ),
    ),
);
