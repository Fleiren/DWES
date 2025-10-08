<?php
use Hackzilla\PasswordGenerator\Generator\HumanPasswordGenerator;
    function generatePassword():string{


        $generator = new HumanPasswordGenerator();

        try {
            $generator
                ->setWordList('/usr/share/dict/words')
                ->setWordCount(3)
                ->setWordSeparator('-');
        } catch (\Hackzilla\PasswordGenerator\Exception\FileNotFoundException $e) {
            return "Error al generar la contraseña.";
        }
        return $generator->generatePassword();
    }
