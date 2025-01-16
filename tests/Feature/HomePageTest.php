<?php

test('Verificar se homepage welcome page estsá disponível', function () {

    $response = $this->get('/');
    $response->assertStatus(200);
});
