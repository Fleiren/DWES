<?php

    use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
    function generatePassword():string
    {


        $generator = new \Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator();

        $generator
            ->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, true)
            ->setOptionValue(ComputerPasswordGenerator::OPTION_LOWER_CASE, true)
            ->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, true)
            ->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, false)
        ;

        return $generator->generatePassword(10);

    };