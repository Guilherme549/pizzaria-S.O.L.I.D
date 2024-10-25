<?php

namespace App\Repositories;

use App\Interfaces\PizzaRepositoryInterface;
use App\Models\Pizza;

class PizzaRepository implements PizzaRepositoryInterface
{
    public function getAllPizzas()
    {
        return Pizza::all();
    }

    public function getPizzaById($id)
    {
        return Pizza::findOrFail($id);
    }
}
