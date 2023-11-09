<p align="center" style="padding:20px;"><img src="https://gobeeping.com/wp-content/uploads/2021/01/cropped-beeping-logotipo_4-1-115x37.png.webp" alt="Beeping" /></p>

## Instalación

<p>Ejecutar los siguientes comandos:</p>

<ol>
<li>git clone https://github.com/JavierVeron/beeping.git</li>
<li>cd beeping</li>
<li>composer install</li>
</ol>

<p>Crear el archivo .env y agregar los siguientes parámetros:</p>

<pre>
<p>APP_NAME=Beeping
APP_ENV=local
APP_KEY=base64:Xp+6JY372lePlT+JHZq9Dvm/7JUNAY10g0f610qBHdk=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=beeping
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=database</p>
</pre>

<p>Ejecutar los siguientes comandos:</p>

<ol>
<li>php artisan migrate</li>
<li>php artisan db:seed products</li>
<li>php artisan db:seed orders</li>
<li>php artisan db:seed orders_lines</li>
<li>php artisan serve</li>
</ol>

## Para ejecutar el Job

<p>Abrir dos nuevas terminales y ejecutar:</p>
<p>Primer terminal:</p>
<p><pre>php artisan queue:work</pre></p>
<p>Segundo terminal:</p>
<p><pre>php artisan app:calcularCosteTotal</pre></p>

## Para visualizar el Listado de Órdenes

<p>Abrir el navegador web e ingresar en:</p>
<p><pre><a href="http://localhost:8000/">http://localhost:8000/</a></pre></p>