<?php

namespace App\Enum;

enum TipoUsuario
{
    case NORMAL;
    case ADMIN;
    case ANUNCIOS;

    public static function stringToUserType(string $type): TipoUsuario{

        return match(strtolower($type)){
            "normal" => TipoUsuario::NORMAL,
            "anuncios" => TipoUsuario::ANUNCIOS,
            "admin" => TipoUsuario::ADMIN,
            default =>TipoUsuario::NORMAL
        };
    }
}
