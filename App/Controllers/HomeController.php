<?php

namespace App\Controllers;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\products;
use App\Models\role;
use App\Models\types;
use App\Models\users;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
       $tps = types::getAll();
        $tps = array_map(function (types $tp) {
            return $tp->jsonSerialize();
        }, $tps);
       return $this->html(["tps" => $tps]);
    }


    //kontrola na strane servera ze su naplnene
    private function checkIsset(){
        if (!empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['image']) && !empty($_POST['description']) && !empty($_POST['price'])){
            return true;
        }
        return false;
    }

    public function products(): Response{
        $id = $_GET['id'];
        $products = products::getAll(" druh_id = ?", [$id]);
        $products = array_map(function (products $product) {
            return $product->jsonSerialize();
        }, $products);
        return $this->html(["products" => $products]);
    }

    //create
    public function add(): Response{
        $tps = types::getAll();
        $tps = array_map(function (types $tp) {
            return $tp->jsonSerialize();
        }, $tps);

        if (isset($_POST['submit']) && $this->checkIsset()) {
            $newProduct = new products();
            $newProduct->setId(null) ;
            $newProduct->setNazov($_POST['name']);
            $newProduct->setDruhId($_POST['type']);
            $newProduct->setCesta($_POST['image']);
            $newProduct->setPopis($_POST['description']);
            $newProduct->setCena($_POST['price']);
            $newProduct->save();

            header('Location: index.php?c=home&a=products&id='.$newProduct->getDruh_id());
            exit;
        }
        return $this->html(["tps" => $tps]);
    }

    public function edit(): Response{
        $tps = types::getAll();
        $tps = array_map(function (types $tp) {
            return $tp->jsonSerialize();
        }, $tps);
        $id = $_GET['id'];
        $prod = products::getOne($id);

        // update
        if (isset($_POST['submit']) && $this->checkIsset()) {
            $prod->setNazov($_POST['name']);
            $prod->setDruhId($_POST['type']);
            $prod->setCesta($_POST['image']);
            $prod->setPopis($_POST['description']);
            $prod->setCena($_POST['price']);
            $prod->save();

            header('Location: index.php?c=home&a=products&id='.$prod->getDruh_id());
            exit;
        }
        return $this->html([
            'types' => $tps,
            'product' => $prod->jsonSerialize()
        ]);
    }

    public function editUser(): Response{

        $id = $_GET['id'];
        $user = users::getOne($id);
        $roles = role::getAll();
        $roles = array_map(function (role $role) {
            return $role->jsonSerialize();
        }, $roles);

        // update
        if (isset($_POST['submit']) && isset($_POST['login']) && isset($_POST['role']) ) {
            $user->setLogin($_POST['login']);
            $user->setRoleId($_POST['role']);
            $user->save();

            header('Location: index.php?c=home&a=user');
            exit;
        }
        return $this->html([
            'roles' => $roles,
            'user' => $user->jsonSerialize()
        ]);
    }


    public function detail(): Response{
        $tps = types::getAll();
        $tps = array_map(function (types $tp) {
            return $tp->jsonSerialize();
        }, $tps);
        $id = $_GET['id'];
        $prod = products::getOne($id);

        // update
      // return  header('Location: index.php?c=home&a=detail&id='.$prod->getDruh_id());
        return $this->html([
            'types' => $tps,
            'product' => $prod->jsonSerialize()
        ]);
    }

    public function ajaxDelete(): Response{
//kontrola na strane servera
        if(isset($_POST['productId'])){
            $prod = products::getOne($_POST['productId']);
            $druhId = $prod->getDruh_id();
            $prod->delete();
            $data = ["status" => 1, "druhId" => $druhId];
            return $this->json($data);
        } else {
            $data = ["status" => -1];
            return $this->json($data);
        }
    }
    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function contact(): Response
    {
        return $this->html();
    }

    public function user(): Response
    {
        $users = users::getAll();
        $users = array_map(function (users $user) {
            return $user->jsonSerialize();
        }, $users);
        return $this->html([
            "users" => $users
        ]);
    }

    public function aboutUs(): Response
    {
        return $this->html();
    }

    public function shops(): Response
    {
        return $this->html();
    }

    public function basket(): Response
    {
        if (isset($_SESSION["basket"])) {
            $products = array();
            foreach ($_SESSION["basket"] as $item ){
                $product = products::getOne($item);
                $products[]=$product;
            }
            $products = array_map(function (products $product) {
                return $product->jsonSerialize();
            }, $products);
            return $this->html(["products" => $products]);
        }
        return $this->html();
    }

    public function ajaxAddToCart(): Response
    {
        //kontrola na strane servera
        if(isset($_POST['productId'])){
            if (!isset($_SESSION["basket"])) {
                $_SESSION["basket"]=array();
            }
            array_push($_SESSION["basket"],$_POST['productId']);
            $data = ["status" => 200];
            return $this->json($data);
        } else {
            $data = ["status" => -1];
            return $this->json($data);
        }
    }

    public function ajaxDeleteFromCart(): Response
    {
        //kontrola na strane servera
        if(isset($_POST['productId'])){
            if (isset($_SESSION["basket"])) {
                if (($key = array_search($_POST['productId'], $_SESSION['basket'])) !== false) {
                    unset($_SESSION['basket'][$key]);
                }
            }
            $data = ["status" => 200];
            return $this->json($data);
        } else {
            $data = ["status" => -1];
            return $this->json($data);
        }
    }
}
