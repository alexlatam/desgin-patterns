# Patron de Diseño Simple Factory usando autos

El objetivo es tener centralizada la FORMA que tendra cada vehiculo. En este caso los metodos!
Todos los vehiculos DEBERAN tener los metodos que la interfaz le diga.

## Explicacion del ejemplo

En la carpeta Contracts creamos la interfaz que deberan implementar todos los autos que seran creados.
VehicleInterface.php

En este caso los autos se dividen en tipo de vehiculo (carro, motocicleta, camion)

En la carpeta Vehicles se encuentran todos los autos que podran ser creados! NI MAS NI MENOS!
Car.php
Motorcycle.php
Truck.php

En la carpeta src se encuentra la clase Factory, esta clase es la encargada de crear cada vehiculo!
Y cuando se vayan a crear cada vehiculo, se llamara a esta clase, y se usara el metodo estatico correspondiente!
- Otra alternativa es usar un switch y construir la vehiculo solicitado.

SimpleFactory.php

En el archivo index.php estamos creando cada vehiculo, usando la Facbrica Simple!


### Ejecucion del codigo
En la carpeta del ejemplo ejecutar el siguiente comando
```php
php index.php
```
