<?php

namespace App\Services;

use App\Interfaces\PizzaRepositoryInterface;

class PizzaService
{
    protected $pizzaRepository;

    public function __construct(PizzaRepositoryInterface $pizzaRepository)
    {
        $this->pizzaRepository = $pizzaRepository;
    }

    public function getAllPizzas()
    {
        return $this->pizzaRepository->getAllPizzas();
    }

    public function getPizzaById($id)
    {
        return $this->pizzaRepository->getPizzaById($id);
    }
}
