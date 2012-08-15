<?php

namespace SpeckUserDashboard\Controller;

use Zend\Stdlib\ResponseInterface as Response;
use Zend\View\Model\ViewModel;
use SpeckUserAddress\Controller\UserAddressController;

class AddressOverridesController extends UserAddressController
{
    public function indexAction()
    {
        $result = parent::indexAction();
        $result->setTemplate('speck-user-dashboard/address-overrides/index');
        return $result;
    }

    public function addAction()
    {
        $result = parent::addAction();

        if (!$result instanceof Response) {
            $result->setTemplate('speck-user-dashboard/address-overrides/add');
        }

        return $result;
    }

    public function editAction()
    {
        $result = parent::editAction();

        if (!$result instanceof Response) {
            $result->setTemplate('speck-user-dashboard/address-overrides/edit');
        }

        return $result;
    }
}
