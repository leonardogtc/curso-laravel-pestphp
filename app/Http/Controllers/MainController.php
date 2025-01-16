<?php

namespace App\Http\Controllers;

use App\Services\MainOperations;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        return "Olá Mundo!";
    }

    public function showHash($numchars = 32): void
    {


        // Com parâmetro da rota:
        echo "<p>$numchars Caracteres: " . MainOperations::generateHash($numchars) . "</p>";
    }
}
