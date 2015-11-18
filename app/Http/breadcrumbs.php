<?php

app('breadcrumbs')->register('home', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->push('Home', route('home'));
});

app('breadcrumbs')->register('config', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('home');
    $br->push('Configuration', route('config'));
});

app('breadcrumbs')->register('sidebar', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('home');
    $br->push('Sidebar Menu', route('sidebar'));
});

app('breadcrumbs')->register('alert', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('home');
    $br->push('Alert Messages', route('alert'));
});

app('breadcrumbs')->register('breadcrumbs', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('home');
    $br->push('Breadcrumbs', route('breadcrumbs'));
});

app('breadcrumbs')->register('customise.index', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('home');
    $br->push('View Customization', route('customise.index'));
});

app('breadcrumbs')->register('customise.logo', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.index');
    $br->push('Logo', route('customise.logo'));
});

app('breadcrumbs')->register('customise.topbar', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.index');
    $br->push('Top bar', route('customise.topbar'));
});

app('breadcrumbs')->register('customise.sidebar', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.index');
    $br->push('Sidebar', route('customise.sidebar'));
});

app('breadcrumbs')->register('customise.control-sidebar', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.index');
    $br->push('Control Sidebar', route('customise.control-sidebar'));
});

app('breadcrumbs')->register('customise.footer', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.index');
    $br->push('Footer', route('customise.footer'));
});

app('breadcrumbs')->register('customise.assets', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.index');
    $br->push('Assets');
});

app('breadcrumbs')->register('customise.assets.head', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.assets');
    $br->push('Header', route('customise.assets.head'));
});

app('breadcrumbs')->register('customise.assets.foot', function (\DaveJamesMiller\Breadcrumbs\Generator $br) {
    $br->parent('customise.assets');
    $br->push('Footer', route('customise.assets.foot'));
});
