<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('foo', function () {
    $hey = '<svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
>
    <path d="M3.5 13h6" />
    <path d="m2 16 4.5-9 4.5 9" />
    <path d="M18 7v9" />
    <path d="m14 12 4 4 4-4" />
</svg>';

    $output = str($hey)
        ->replaceMatches('/<svg.*?>/s', '<svg >', limit: 1)
        ;

    dd((string) $output);
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
