<?php

namespace Service;

use DTO\User;
use Repository\UserRep;

class UserService
{
    private $user_repository;

    public function __construct(UserRep $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    public function register(User $user, $cpassword)
    {
        if ($user->getPassword() !== $cpassword) {
            throw new \Exception('Passwords did not match');
        }
        /** @var User $user */
        $user->setPasswordHash();
        return $this->user_repository->insert($user);
    }

    public function login($email, $password)
    {
        $user = $this->user_repository->checkUser($email);
        $active = $this->user_repository->checkActive($email);

        if($active === 0){
            throw new \Exception('Your registration is not approved from administrator!');
        }
        if(!$user){
            throw new \Exception('wrong username or pass1');
        }
        if(!password_verify($password,  $user->getPassword())){
            throw new \Exception('wrong username or pass2');
        }
        return $user->getId();
    }

    public function get_current()
    {
        if(!$_SESSION['id']){
            return null;
        }
        return $this->user_repository->getUserId($_SESSION('id'));
    }
}