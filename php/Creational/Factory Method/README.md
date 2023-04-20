# Factory Method Design Pattern - PHP

## Descripcion


## Caracteristicas

- Por cada nuevo producto que se desea agregar, se tendra que crear una nueva clase controladora y una nueva clase de producto.

## Receta

- Paso 1
  Crear una interfaz o clase abstracta que definira los metodos que tendran todos los productos creados por la fabrica.
  La interfaze debe tener un método de fábrica que devuelva un objeto de tipo producto.
  El tipo de retorno del método debe coincidir con la interfaz común del producto.

- Paso 2  
  Crear una clase concreta que implemente la interfaz o clase abstracta creada en el paso 1.
  Esto por cada tipo de producto que se quiera crear.
  Cada producto tendra su propia fabrica.

- Paso 3
  Crear una interfaz o clase abstracta que definira los metodos que tendran todos los productos creados por la fabrica.

- Paso 4
  Crear una clase concreta que implemente la interfaz o clase abstracta creada en el paso 3.
  Basicamente crear una clase por cada producto que se quiera crear.

- Paso 5 - Opcional
  Crear una clase o funcion que implemente la interfaz o clase abstracta creada en el paso 1.
  Esta clase o funcion sera la encargada de crear los productos.
