<?php

    class Customer  
    {
        public $id;
        public $name;
        public $email;
        public $create_date;
        public $updated_date;

        public function __construct($_id, $_name, $_email, $_create_date, $_updated_date)
        {
            $this->id = $_id;
            $this->name = $_name;
            $this->email = $_email;
            $this->create_date = $_create_date;
            $this->updated_date = $_updated_date;
        }
    }
    
    

?>