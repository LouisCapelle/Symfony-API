<?php

namespace App\Controller\UserControllers;

use App\Entity\User;
use App\Manager\UserManager;
use Symfony\Component\Security\Core\Security;

class UserProfile
{
    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * CreateUser constructor.
     * @param UserManager $userManager
     */
    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function __invoke()
    {
        $this->userManager->getCurrentUser();
    }
}