<?php

    class Animal
    {
        private $name;
        private $gender;
        private $admittance;
        private $breed;
        private $type_id;

        function __construct($name, $gender, $admittance, $breed, $type_id)
        {
            $this->name = $name;
            $this->gender = $gender;
            $this->admittance = $admittance;
            $this->breed = $breed;
            $this->type_id = $type_id;
        }


        //Getters and setters

        function getName()
        {
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getGender()
        {
            return $this->gender;
        }

        function setGender($new_gender)
        {
            $this->gender = (string) $new_gender;
        }

        function getAdmittance()
        {
            return $this->admittance;
        }

        function setAdmittance($new_admittance)
        {
            $this->admittance = (string) $new_admittance
        }

        function getBreed()
        {
            return $this->breed;
        }

        function setBreed($new_breed)
        {
            $this->breed = (string) $new_breed;
        }

        function getTypeId()
        {
            return $this->type_id;
        }

        function setTypeId($new_type_id)
        {
            $this->type_id = (int) $new_type_id;
        }
        
    }


?>
