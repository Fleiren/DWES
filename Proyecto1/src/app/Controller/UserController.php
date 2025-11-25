<?php

namespace App\Controller;


use App\Enum\TipoUsuario;
use App\Interface\ControllerInterface;
use App\Class\User;
use App\Model\UserModel;
use Cassandra\Type\UserType;
use Ramsey\Uuid\Uuid;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class UserController implements ControllerInterface
{

    function index()
    {
        $usuarios = UserModel::getAllUsers();
        var_dump($usuarios);
    }

    function show($id)
    {
        if(isset($_SESSION['username'])){
            //Muestro la vista con los datos de usuario
        }else{
            //Muestro una vista de error.
        }

    }

    function show_find(){
        include_once DIRECTORIO_VISTAS_BACKEND."User/findUser.php";
    }

    function find_user(){
        var_dump($_POST);
        if($_POST['tipoBusqueda'] === "email"){
           $user =  UserModel::getUserByEmail($_POST['text']);
            header("location: /user/{$user->getUuid()}");
            exit;
        }
        if($_POST['tipoBusqueda'] === "uuid"){
            $user =  UserModel::getUserById($_POST['text']);
            header("location: /user/{$user->getUuid()}");
            exit;
        }
        if($_POST['tipoBusqueda'] === "username"){
            $user =  UserModel::getUserByUsername($_POST['text']);
            header("location: /user/{$user->getUuid()}");
            exit;
        }
    }
    function store()
    {
        var_dump(User::validateUserCreation($_POST));
        $user = User::validateUserCreation($_POST);
        if($user){

            var_dump( $_SESSION['uuid']=$user->getUuid());
            $_SESSION['uuid']=$user->getUuid();
            $_SESSION['username']=$user->getUsername();
            $_SESSION['type']=$user->getTipo()->name;
            //$_SESSION['password']= password_hash($user['password'], PASSWORD_DEFAULT);
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_DEFAULT));
            UserModel::saveUser($user);
        }else{
            //Mostrar página de error

        }

        if($_SESSION['type'] == 'NORMAL'){
           include_once DIRECTORIO_VISTAS_FRONTEND."home.php";
        }elseif ($_SESSION['type'] == 'ADMIN'){
            echo "eres ADMIN";
        }else{
            echo "ANUNCIO";
        }


    }




    function update($id)
    {

        parse_str(file_get_contents('php://input'), $editData);
        $editData['uuid']=$id;
        $usuario = User::validateUserEdit($editData);
        var_dump($usuario);
    }

    function destroy($id)
    {

    }

    function create()
    {
       include_once DIRECTORIO_VISTAS_FRONTEND."register.php";

    }

    function edit($id)
    {
       $usuario = UserModel::getUserById($id);
       include_once DIRECTORIO_VISTAS_BACKEND."User/editUser.php";
    }

    function show_login(){
        include_once "app/Views/frontend/login.php";
    }

    function verify(){
        $usuarios = UserModel::getAllUsers();
        //var_dump(password_hash($_POST["password"], PASSWORD_DEFAULT));
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        var_dump(password_verify($_POST["password"], PASSWORD_DEFAULT));

        foreach($usuarios as $usuario){

            if($usuario->getUsername() === $_POST["username"] && password_verify($usuario->getPassword(), $hash)){
                $_SESSION['username']=$_POST['username'];
                $_SESSION['uuid']=$usuario->getUuid();
                if($usuario->getTipo() === TipoUsuario::ADMIN){
                    return include_once "admin/welcome.php";
                }
                if ($usuario->getTipo() === TipoUsuario::NORMAL){
                    return include_once DIRECTORIO_VISTAS_FRONTEND."home.php";
                }
                if ($usuario->getTipo() === TipoUsuario::ANUNCIOS){
                    return include_once DIRECTORIO_VISTAS_FRONTEND."homeAnuncios.php";
                }else{
                    return include_once DIRECTORIO_VISTAS_FRONTEND."error.php";
                }
            }

        }

        echo "USUARIO NO ENCONTRADO";



        //$idUsuario= ...

        // $_SESSION['uuid']= $idUsuario
    }

    function register(){
        var_dump($_POST);
    }

    function logout(){
        session_destroy();
    }


}