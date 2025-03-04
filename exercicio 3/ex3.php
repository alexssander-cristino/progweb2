<?php

// Carregar o autoload do Composer
require_once 'vendor/autoload.php';

// Criar um gerador de dados falsos
$faker = \Faker\Factory::create();

// Gerar dados falsos
echo "CPF: " . $faker->cpf() . "\n";
echo "Data de Nascimento: " . $faker->date('d/m/Y') . "\n";
echo "Telefone: " . $faker->phoneNumber() . "\n";
echo "Produto: " . $faker->word() . "\n";
echo "Preço: R$ " . $faker->randomFloat(2, 1, 1000) . "\n";
