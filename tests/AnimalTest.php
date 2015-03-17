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

        function testSave()
        {
            //Arrange
            $name = "Dog";
            $id = null;
            $test_type_name = new Type($name, $id);
            $test_type_name->save();

            $name = "Fido";
            $gender = "female";
            $admittance = "2013-05-03";
            $breed = "Boston Terrier";
            $type_id = $test_type_name->getId();
            $test_animal = new Animal($name, $gender, $admittance, $breed, $type)

            //Act
            $test_animal->save();

            //Assert
            $result = Animal::getAll();
            $this->assertEquals($test_animal, $result[0]);
        }

    }

?>
