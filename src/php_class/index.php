<?php

class Users
{
    public $name;

    public function displayName(?string $name = null)
    {
        return 'Sveiki, mano vardas yra ' . $this->name = $name;
    }
}


$user = new Users();
var_dump($user->displayName('tadas'));

