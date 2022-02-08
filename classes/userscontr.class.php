<?php
// controller : recieves & gets input

class UsersContr extends Users {
    public function createUser($firstname, $lastname, $dob) {
        $this->setUser($firstname, $lastname, $dob);
    }
}