<?php

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('enums')
    ->expect('DanielPetrica\LaravelUtils\Enums')
    ->toBeEnums();
