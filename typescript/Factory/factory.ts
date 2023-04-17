/**
 * How to implement Factory Method?
 *
 * 1. Declare base product class/interface, this will be returned by
 *  factory class and their sub classes.
 *
 * Base product:
 *  - BaseCar [Class]
 *
 * 2. Implement concrete products sub classes that inherits/implements
 *  the base product class/interface.
 *
 * Concrete products:
 *  - MastodonCar [Class]
 *  - RhinoCar [Class]
 *
 * 3. Declare base factory class/interface that returns objects that match
 *  the base product, not the concrete ones.
 *
 * Base factory:
 *  - CarFactory [Class]
 *
 * 4. Implement concrete factories sub classes that inherits/implements
 *  the base factory class/interface. These classes will return concrete
 *  products in their factory method.
 *
 * Concrete factories:
 *  - MastodonCarFactory [Class]
 *  - RhinoCarFactory [Class]
 *
 */
(()=> {
    
    // STEP 1
    interface BaseCar {
        showCost(): void; 
    }

    // STEP 2
    class MastodonCar implements BaseCar {
        /** @override showCost() method */
        showCost(): void {
            console.log('[MASTODON] Car Cost: 300,000 MXN');
        }
    }

    class RhinoCar implements BaseCar {
        /** @override showCost() method */
        showCost(): void {
            console.log('[RHINO] Car Cost: 100,000 MXN');
        }
    }

    // STEP 3
    interface CarFactory {
        makeCar(): BaseCar;
    }

    // STEP 4
    class MastodonCarFactory implements CarFactory {
        /**
         * @override makeCar() method
         * @returns MastodonCar
         */
        makeCar(): BaseCar {
            return new MastodonCar();
        }
    }

    class RhinoCarFactory implements CarFactory {
        /**
         * @override makeCar() method
         * @returns RhinoCar
         */
        makeCar(): BaseCar {
            return new RhinoCar();
        }
    }


    // FIRST USE CASE

    /**
     * Main function
     * @param {CarFactory} factory Car factory
     */
    function appFactory(factory: CarFactory): void {
        console.log('--- [TS] Calling appFactory ---\n');
        const car: BaseCar = factory.makeCar();
        car.showCost();
    }

    /**
     * You could change the Factory as you wish since
     * all of them implement the same behaviour.
     */
    appFactory(new MastodonCarFactory());
    appFactory(new RhinoCarFactory());

    // SECOND USE CASE

    /**
     *
     * @param {string} type type of factory to create
     * @returns {MastodonCarFactory | RhinoCarFactory} A car factory instance
     */
    type FactoryType = 'mastodon' | 'rhino';
    function createFactory(type: FactoryType): CarFactory { 
        const factories = {
            mastodon: MastodonCarFactory,
            rhino: RhinoCarFactory,
        };

        const FactoryClass = factories[type];
        return new FactoryClass();
    }

    /**
     * Instead of using new() operator, we abstract the
     * factories creation and we just indicate the type
     * as a parameter
     */
    appFactory(createFactory('mastodon'));
    appFactory(createFactory('rhino'));

})()