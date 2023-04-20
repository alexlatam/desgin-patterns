(()=> {

    // Implementacion
    class DBConecctionSingleton {

        // Propiedad estática que almacena la instancia única de la clase
        static intance;

        // Constructor
        constructor( name ) {}

        // Método estático que devuelve la instancia única de la clase
        static callDBConecctionSingleton() {
            // Si no existe la instancia, la creamos
            if ( !DBConecctionSingleton.intance ) {
                // Creamos la instancia
                DBConecctionSingleton.intance = new DBConecctionSingleton('This is the conection with DB');
            }

            // Devolvemos la instancia
            return DBConecctionSingleton.intance;
        }

    }

    // USO
    const ConectionWithProdDB = DBConecctionSingleton.callDBConecctionSingleton()
    const ConectionWithStagDB = DBConecctionSingleton.callDBConecctionSingleton()
    const ConectionWithTestDB = DBConecctionSingleton.callDBConecctionSingleton()

})()