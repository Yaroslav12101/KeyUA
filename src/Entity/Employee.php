<?php
namespace App\Entity;

Class Employee
{
    public $skills;

    public function searchSkills($b, $skills) {
        if (in_array($b, $skills)) {
            echo "true";
        } else {
            echo "false";
        }

    }
}