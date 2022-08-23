## AVISO
Esta prueba no fue terminada al completo de los requisitos funcionales solo se cumple la eliminacion de registros
en caso esto no sea aceptable solo recomiento leer la guia de instalacion 
## Guia de instalacion 
una vez descargado tendras que configurar la coneccion a las bases de datos en el archivo .env echo esto es tan sencillo como correr el siguiente comando 

php artisan migrate:fresh --seed

correra las migraciones y los seeders para hcer las pruebas necesarias
## Consulta de informacion #1
Realizar una consulta que permita conocer cuál es el producto que más stock tiene.

SELECT * FROM prueba_tecnica_konecta_laravel.products  order by Stock desc limit 1;

## Consulta de informacion #2

Realizar una consulta que permita conocer cuál es el producto más vendido.

SELECT SUM(Sold) as ventas ,products.ProductName FROM prueba_tecnica_konecta_laravel.sales inner join products  on products.id=sales.products_id group by products_id order by ventas desc
