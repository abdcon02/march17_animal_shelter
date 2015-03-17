<?php

    class Type
    {
        private $type_name;
        private $id;

        function __construct($type_name, $id = null)
        {
            $this->name = $name;
            $this->id = $id;
        }

        function getTypeName()
        {
            return $this->name;
        }

        function setTypeName($new_type_name)
        {
            $this->type_name = (string) $new_type_name;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($new_id)
        {
            $this->id = (int) $new_id;
        }
        

    }


?>
