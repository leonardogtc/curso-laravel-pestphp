<?php

describe('Test Expectation modifiers and chaning function (API)', function () {
    it('tests the and() modifier', function () {
        $name = 'Leonardo';
        $sobrenome = 'Conceição';

        expect($name)->toBe('Leonardo')->and($sobrenome)->toBe('Conceição');
    });

    it('tests the one or another modifier', function () {
        $value = 10;

        expect($value)->toBeIn([10,20]);
    });

    it('tests the not() modifier', function () {
        $value = 20;

        expect($value)->not()->toBe(10);
    });

    it('tests sequences() modifier', function () {
        $values = [1,3,5];
        expect($values)->sequence(
            fn($value) => $value->toBeInt()->toBe(1),
            fn($value) => $value->toBeInt()->toBe(3),
            fn($value) => $value->toBeInt()->toBe(5),
        );
    });
});
