<h1>Crie um banco de dados com o nome especificado no arquivo .env:</h1>h1
CREATE DATABASE pizzaria;


Inserir Dados no Banco de Dados com Tinker:

php artisan tinker

Em Tinker:
\App\Models\Pizza::create(['name' => 'Margherita', 'description' => 'Molho de tomate, mussarela e manjericão.', 'price' => 25.00]);
\App\Models\Pizza::create(['name' => 'Calabresa', 'description' => 'Molho de tomate, mussarela e calabresa.', 'price' => 27.00]);
