<?php
    // set the timezone to Los Angeles
    date_default_timezone_set("America/Los_Angeles");
    // create class "Person"
    class Person {
        // private attributes
        private $name, $email, $password, $gen;

        // Construct method
        public function __construct($name, $email, $password, $gen) {
            $this->name = $name;
            $this->email = $email;
            $this->gen = $gen;
            $this->password = $password;
        }

        // Getters and Setters methods
        public function getName() {return $this->name;}
        public function setName($name) {$this->name = $name;}

        public function getEmail() {return $this->email;}
        public function setEmail($email) {$this->email = $email;}

        public function getGen() {return $this->gen;}
        public function setGen($gen) {$this->gen = $gen;}

        public function getPassword() {return $this->password;}
        public function setPassword($password) {$this->password = $password;}
    }
?>