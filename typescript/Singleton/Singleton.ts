(()=> {

    class DBConecctionSingleton {

        // Propiedad estática que almacena la instancia única de la clase
        static intance:DBConecctionSingleton;

        // Constructor privado, esto indica que la clase no puede ser instanciada desde fuera
        private constructor( public name: string ) {}

        // Método estático que devuelve la instancia única de la clase
        static callDBConecctionSingleton(): DBConecctionSingleton {
            // Si no existe la instancia, la creamos
            if ( !DBConecctionSingleton.intance ) {
                // Creamos la instancia
                DBConecctionSingleton.intance = new DBConecctionSingleton('This is the conection with DB');
            }

            // Devolvemos la instancia
            return DBConecctionSingleton.intance;
        }

    }

    const ConectionWithProdDB = DBConecctionSingleton.callDBConecctionSingleton()
    const ConectionWithStagDB = DBConecctionSingleton.callDBConecctionSingleton()
    const ConectionWithTestDB = DBConecctionSingleton.callDBConecctionSingleton()

})()