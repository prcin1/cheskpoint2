<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;
use App\Models\users;

/**
 * Class AuthController
 * Controller for authentication actions
 * @package App\Controllers
 */
class AuthController extends AControllerBase
{
    /**
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->redirect(Configuration::LOGIN_URL);
    }

    /**
     * Login a user
     * @return Response
     */
    public function login(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;
        if (isset($formData['login'])) {
            $logged = $this->app->getAuth()->login($formData['login'], $formData['password']);
            if ($logged) {
                return $this->redirect($this->url("Home.index"));
            }
        }

        $data = ($logged === false ? ['message' => 'Zlý login alebo heslo!'] : []);
        return $this->html($data);
    }

    public function register(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;

        if (isset($formData['register'])) {
            //todo: premennna login vloziť $formData login
            $login = $formData["login"];
            if($formData["psw"]!=$formData["psw_repeat"]){
                $data = ['message' => 'heslá sa nezhodujú'];
                return $this->html($data);
            }
            $check = users::getAll(" login = ?", [$login]);
            if($check!=null){
                $data = ['message' => 'login už existuje'];
                return $this->html($data);
            }
            $psw = password_hash($formData["psw"], PASSWORD_DEFAULT);


                $newUser = new users();
                $newUser->setId(null) ;
                $newUser->setLogin($login);
                $newUser->setPassword($psw);
                $newUser->setRoleId(2);
                $newUser->save();

                $data = ['message' => 'Registrácia úspešná'];
                return $this->html($data, "login");

        }

        $data = ($logged === false ? ['message' => 'chyba'] : []);
        return $this->html($data);

    }

    /**
     * Logout a user
     * @return ViewResponse
     */
    public function logout(): Response
    {
        $this->app->getAuth()->logout();
        return $this->html();
    }
}
