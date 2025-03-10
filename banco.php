<?php

$saldo = 1000;
$titularConta = 'Vinicius Dias';

do {
    echo "*************\n";
    echo "Titular: $titularConta\n";
    echo "Saldo Atual: R$ $saldo\n";
    echo "*************\n";

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "Escolha uma opção: ";

    // Captura da opção do usuário
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "*************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "*************\n";
            break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
                echo "Saque realizado com sucesso. Saldo atual: R$ $saldo\n";
            }
            break;

        case 3:
            echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            echo "Depósito realizado com sucesso. Saldo atual: R$ $saldo\n";
            break;

        case 4:
            echo "Tchau\n";
            break;

        default:
            echo "Opção inválida\n";
            break;
    }
} while ($opcao != 4);

