<?php

namespace SpeckUserDashboard\Controller;

use Zend\Http\PhpEnvironment\Response;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends AbstractActionController
{
    public function indexAction()
    {
        $sl = $this->getServiceLocator();

        $userService = $sl->get('zfcuser_user_service');
        $authService = $userService->getAuthService();

        return array(
            'user'      => $authService->getIdentity(),
        );
    }
}
