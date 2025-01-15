<?php

// Indicar que será usada uma instância do MainController
use App\Http\Controllers\MainController;

// Indicar que será efetuado um teste ao método index
test("Testando o index do MainController", function () {
    // Criar uma instância do MainController
    $mainController = new MainController();

    // Chamar o método index
    $result = $mainController->index();

    // Verificar se o resultado é uma string
    expect($result)->toBeString();

    // Verificar se o resultado é igual a "Olá Mundo!"
    expect($result)->toEqual("Olá Mundo!");
});
