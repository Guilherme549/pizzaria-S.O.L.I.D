<?php

namespace App\Interfaces;

interface PizzaRepositoryInterface
{
    public function getAllPizzas();
    public function getPizzaById($id);
}
