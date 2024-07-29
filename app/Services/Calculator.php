<?php

namespace App\Services;

use App\Models\User;

class Calculator
{
    public function __construct(User $user)
    {
    }

    public function add($a, $b)
    {
        return $a + $b;
    }
}
