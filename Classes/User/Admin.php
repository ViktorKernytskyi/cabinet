<?php

class Admin extends User
{

    const HOME = 'admin.php';

    public function present()
    {
        return $this->role . " &nbsp" . $this->name . " &nbsp" . $this->surname . ". &nbsp  ";
    }


}