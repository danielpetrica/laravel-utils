<?php

use DanielPetrica\LaravelUtils\Enums\TTLEnum;

test('it returns correct seconds for each case', function () {
    expect(TTLEnum::TenSeconds->value)->toBe(10);
    expect(TTLEnum::OneMinute->value)->toBe(60);
    expect(TTLEnum::OneHour->value)->toBe(3600);
    expect(TTLEnum::OneDay->value)->toBe(86400);
});

test('it has a getSeconds method that returns the value', function () {
    expect(TTLEnum::TenSeconds->getSeconds())->toBe(10);
    expect(TTLEnum::OneHour->getSeconds())->toBe(3600);
});
