<?php

interface Character
{
    public function attack();
}

class Adventurer implements Character
{
    public function attack() {
        echo "Adventure Attack!!";
    }
}

class Warrior implements Character
{
    public function attack() {
        echo "Warrior Attack!!";
    }
}

class Mage implements Character
{
    public function attack() {
        echo "Mage Attack!!";
    }
}

class Archer implements Character
{
    public function attack() {
        echo "Archer Attack!!";
    }
}

class getRole
{
    private $role;

    public function __construct(string $role)
    {
        $this->role = $role;
    }

    public function gettingRole()
    {
        if ($this->role == 'warrior') {
            return new Warrior();
        } elseif ($this->role == 'mage') {
            return new Mage();
        } elseif ($this->role == 'archer') {
            return new Archer();
        } elseif ($this->role == 'adventurer') {
            return new Adventurer();
        }
    }
}

function action(Character $character)
{
    $character->attack();
}

$gettingRole = new getRole('mage');
action($gettingRole->gettingRole());