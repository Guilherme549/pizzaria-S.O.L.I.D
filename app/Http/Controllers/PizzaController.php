<?php

namespace App\Http\Controllers;
use App\Services\PizzaService;


class PizzaController extends Controller
{
    protected $pizzaService;

    public function __construct(PizzaService $pizzaService)
    {
        $this->pizzaService = $pizzaService;
    }

    public function index()
    {
        $pizzas = $this->pizzaService->getAllPizzas();
        return view('pizzas.index', compact('pizzas'));
    }

    public function show($id)
    {
        $pizza = $this->pizzaService->getPizzaById($id);
        return view('pizzas.show', compact('pizza'));
    }
}
