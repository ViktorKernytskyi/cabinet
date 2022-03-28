<?php

class Client extends User
{
    const HOME = 'client.php';

    public function present()
    {
        return $this->role . " &nbsp" . $this->name . " &nbsp" . $this->surname . ". &nbsp   ";
    }
}