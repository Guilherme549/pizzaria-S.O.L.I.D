<h1>Crie um banco de dados com o nome especificado no arquivo .env:</h1>h1
CREATE DATABASE pizzaria;


<p>Inserir Dados no Banco de Dados com Tinker:</p>

```php artisan tinker```

Em Tinker:
```\App\Models\Pizza::create(['name' => 'Margherita', 'description' => 'Molho de tomate, mussarela e manjericão.', 'price' => 25.00]);```
<br>
```\App\Models\Pizza::create(['name' => 'Calabresa', 'description' => 'Molho de tomate, mussarela e calabresa.', 'price' => 27.00]);```
