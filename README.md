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
<h2>Criando Aplicação em Laravel 9</h2>
<p>Para criar a nossa aplicação Meu-campeonato, com composer instalado em sua máquina, execute:</p>

```
composer create-project laravel/laravel Meu-campeonato
```

<h2>Iniciando a Aplicação</h2>
<p>Para iniciar a aplicação em localhost, execute:</p>

```
php artisan serve
```
  
<h2>Criando Controllers</h2>
<p>Para criar os controllers de classificação e ranking execute:</p>

```
php artisan make:controller ClassificationController
```

```
php artisan make:controller RankController
```
<h2>Criando Migrations</h2>
<p>Para criar a migration referente aos times execute:</p>

```
php artisan make:migration create_teams_table
```

<p>Após montar as migrations, para executar a criação no banco, execute:</p>

```
php artisan migrate
```
