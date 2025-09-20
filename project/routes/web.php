<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/configuracoes', function () {
    return view('configuracoes');
});

Route::get('/host', function () {
    $dadosSala = [
        'nome' => 'A Caverna do Dragão',
        'dado' => 'D20',
        'jogadores' => '1/8',
        'codigo' => 'A4B8C2'
    ];
    
    return view('telaHost', ['sala' => $dadosSala]);
});

Route::get('/jogador', function () {
    $dadosSala = [
        'nome' => 'A Caverna do Dragão',
        'dado' => 'D20',
        'jogadores' => '2/8',
    ];
    return view('telaJogador', ['sala' => $dadosSala]);
});

Route::get('/espectador', function () {
    $dadosSala = [
        'nome' => 'A Caverna do Dragão',
        'dado' => 'D20',
        'jogadores' => '2/8',
    ];
    return view('telaEspectador', ['sala' => $dadosSala]);
});
