<?php

namespace App\Auth;

use App\Core\IAuthenticator;
use App\Models\users;

/**
 * Class DummyAuthenticator
 * Basic implementation of user authentication
 * @package App\Auth
 */
class DummyAuthenticator implements IAuthenticator
{
    public const LOGIN = "admin";
    public const PASSWORD_HASH = '$2y$10$GRA8D27bvZZw8b85CAwRee9NH5nj4CQA6PDFMc90pN9Wi4VAWq3yq'; // admin
    public const USERNAME = "Admin";

    /**
     * DummyAuthenticator constructor
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Verify, if the user is in DB and has his password is correct
     * @param $login
     * @param $password
     * @return bool
     * @throws \Exception
     */
    public function login($login, $password): bool
    {

        $user = users::getAll(" login = ?", [$login]);
        //echo $user[0]->getLogin();
        if($user == null){
            return false;
        }
        echo password_hash($login, PASSWORD_DEFAULT);
        echo $user[0]->getPassword();
        if ($login == $user[0]->getLogin() && password_verify($password, $user[0]->getPassword())) {
            $_SESSION['user'] = $user[0]->getId();
            $_SESSION['role'] = $user[0]->getRoleId();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Logout the user
     */
    public function logout(): void
    {
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
            unset($_SESSION["role"]);
            session_destroy();
        }
    }

    /**
     * Get the name of the logged-in user
     * @return string
     * @throws \Exception
     */
    public function getLoggedUserName(): string
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : throw new \Exception("User not logged in");
    }

    /**
     * Get the context of the logged-in user
     * @return string
     */
    public function getLoggedUserContext(): mixed
    {
        return null;
    }

    /**
     * Return if the user is authenticated or not
     * @return bool
     */
    public function isLogged(): bool
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }

    /**
     * Return the id of the logged-in user
     * @return mixed
     */
    public function getLoggedUserId(): mixed
    {
        return $_SESSION['user'];
    }


    /**
     * Return if the user is authenticated or not
     * @return bool
     */
    public function getUserRole(): int
    {
        return isset($_SESSION['role']) ? (int)$_SESSION['role'] : 0;
    }
}