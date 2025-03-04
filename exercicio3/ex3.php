<?php

// Carregar o autoload do Composer
require_once 'vendor/autoload.php';

// Criar o gerador de dados falsos
$faker = \Faker\Factory::create();

// Gerar dados falsos
$nome = $faker->name;
$email = $faker->email;
$cpf = $faker->numerify('###.###.###-##');
$endereco = $faker->address;
$telefone = $faker->phoneNumber;
$data_nascimento = $faker->date('d/m/Y');

// Exibir os dados gerados
echo "Nome: " . $nome . "\n";
echo "Email: " . $email . "\n";
echo "CPF: " . $cpf . "\n";
echo "Endereço: " . $endereco . "\n";
echo "Telefone: " . $telefone . "\n";
echo "Data de Nascimento: " . $data_nascimento . "\n";

?>
