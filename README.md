# Laravel 9 Web App
<h2>Proposta da Aplicação</h2>
<p>Nosso cliente José Gustavo, apaixonado por futebol e tecnologia, deseja ter uma
aplicação que simule os campeonatos de futebol do seu bairro, chamada Meu
Campeonato.</p>
<p>Para isso, considere um sistema eliminatório que inicia-se nas quartas de final:</p>
<ul>
<li>oito times participam do campeonato;</li>
<li>o perdedor de cada jogo é eliminado do campeonato;</li>
<li>na primeira fase (quartas de final) quatro jogos são sorteados, sendo que cada
time joga apenas uma vez;</li>
<li>na segunda fase (semifinais) dois jogos são sorteados, sendo que cada time
joga apenas uma vez;</li>
<li>os perdedores das semifinais disputam o 3º lugar;</li>
<li>a final é disputada pelos vencedores das semifinais, definindo o 1º e 2º lugar do
campeonato;</li>
<li>em caso de empate, considere como vencedor o time com a maior pontuação
(acumulada desde o início do campeonato):</li>
<ul>
<li>para cada gol marcado, o time recebe 1 ponto;</li>
<li>para cada gol sofrido, o time perde 1 ponto;</li>
</ul>
<li>em caso de novo empate, considere como vencedor o time que foi inscrito
primeiro no campeonato;</li>
<li>o placar de cada jogo pode ser gerado randomicamente pelo back-end ou por
uma rotina em Python, como detalhado no tópico a seguir.</li>
</ul>
<h2>Placar do jogo</h2>
<p>O placar de cada jogo pode ser gerado por uma rotina em Python, com o código
apresentado abaixo.<p>

``` python
import random
print(random.randrange(0, 8, 1))
print(random.randrange(0, 8, 1))
# Exemplo de output:
# 0
# 2
```
<p>O back-end deve executar o script acima, capturar seu output e utilizá-lo como
resultado de cada uma das partidas.<p>

<h1>Setup Inicial</h1>

- Criar banco MysQl: db_meucampeonato

- Criando Aplicação em Laravel 9

```bash
# Para criar a nossa aplicação, com composer instalado em sua máquina, execute:
$ composer create-project laravel/laravel Nome-Aplicação
```

<h2>Iniciando a Aplicação</h2>

```bash
# Para iniciar a aplicação em localhost, execute:
php artisan serve
```
  
<h2>Criando Controllers</h2>

```bash
# Para criar os controllers execute, alterando campo "Nome" para o desejado:
$ php artisan make:controller NomeController
```

```bash
# Controller já com pré-definições de 'CRUD' do laravel
$ php artisan make:controller NomeController --resource
```

<h2>Criando Migrations</h2>

```bash
# Para criar as migrations execute, alterando campo "Nome" para o desejado:
$ php artisan make:migration create_nome_table
```

```bash
# Após montar as migrations, para executar a criação no banco, execute:
$ php artisan migrate
```

<h2>Criando Models</h2>
Para criar os models de partida e partida, execute:

```
$ php artisan make:model Nome
```

<h2>Criando Table Seeder</h2>

```bash
# Para criar o table seeder, execute:
$ php artisan make:seeder TeamsTableSeeder
```

<h1>Como Rodar o Projeto</h1>

```bash
# Criando as tabelas no banco MySql:
$ php artisan migrate
```


``` bash
# Caso queira criar times na tabela do banco MySql, sem precisar inserir manualmente no formulário, execute:
$ php artisan db:seed
```

```bash
# Iniciando o Projeto
$ php artisan serve
```


