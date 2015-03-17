<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Animal.php";
    require_once "src/Type.php";

    $DB = new PDO('pgsql:host=localhost;dbname=shelter_test');

    class AnimalTest extends PHPUnit_Framework_TestCase
    {

    }

?>
