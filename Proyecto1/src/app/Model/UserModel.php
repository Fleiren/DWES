<?php

namespace App\Model;

use App\Class\User;
use App\Enum\TipoUsuario;
use PDO;
use PDOException;
use Ramsey\Uuid\Uuid;

class UserModel
{
    public static function getAllUsers(): ?array
    {

        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1", "irene", "toor");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            echo $error;
            return null;
        }
        $sql = "SELECT * FROM `user`";
        $sentenciaPreparada = $conexion->prepare($sql);

        $sentenciaPreparada->execute();
        $resultado = $sentenciaPreparada->fetchAll(PDO::FETCH_ASSOC);

        if($resultado){
            $usuarios = [];
            foreach ($resultado as $user){
                $usuarios[] = User::createFromArray($user);
            }
            return $usuarios;
        }else{
            return null;
        }

    }

    public static function getUserByUsername(string $username):?User{
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1", "irene", "toor");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $error){
            echo $error;
            return null;
        }
        $sql = "SELECT * FROM user WHERE username = :username";
        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindParam(':username', $username);
        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount() === 1){
            return User::createFromArray($sentenciaPreparada->fetch(PDO::FETCH_ASSOC));
        }else{
            return null;
        }
    }

    public static function getUserByEmail(string $email):?User{
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1", "irene", "toor");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error){
            echo $error;
            return null;
        }

        $sql = "SELECT * FROM user WHERE email = :email";
        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindParam(':email', $email);
        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount() === 1){
            return User::createFromArray($sentenciaPreparada->fetch(PDO::FETCH_ASSOC));
        }else{
            return null;
        }
    }

    public static function getUserById(string $id): ?User{
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1", "irene", "toor");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $error){
            echo $error;
            return null;
        }

        $sql = "SELECT * FROM user WHERE uuid = :uuid";
        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindParam(':uuid', $id);
        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount() === 1){
            return User::createFromArray($sentenciaPreparada->fetch(PDO::FETCH_ASSOC));
        }else{
            return null;
        }
    }

    public static function saveUser(User $user):bool{

        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1", "irene", "toor");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error){
            echo $error;
            return false;
        }
        $sql = "INSERT INTO user VALUES(:uuid, :username,:password, :email, :edad, :type)";
        $sentenciaPreparada = $conexion->prepare($sql);

        $sentenciaPreparada->bindValue('uuid', $user->getUuid());
        $sentenciaPreparada->bindValue('username', $user->getUsername());
        $sentenciaPreparada->bindValue('password', $user->getPassword());
        $sentenciaPreparada->bindValue('email', $user->getEmail());
        $sentenciaPreparada->bindValue('edad', $user->getEdad());
        $sentenciaPreparada->bindValue('type', $user->getTipo()->name);

        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount() > 0){
            return true;
        } else {
            return false;
        }


    }
}