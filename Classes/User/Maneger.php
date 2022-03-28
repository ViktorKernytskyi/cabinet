<?php

class Maneger  extends User
{
    const HOME = 'maneger.php';

    public function present()
    {
        return $this->role . "&nbsp &nbsp" . $this->name . " &nbsp" . $this->surname ."  ";
    }
}
