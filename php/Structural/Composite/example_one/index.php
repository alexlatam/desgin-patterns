<?php

require_once __DIR__ . '/vendor/autoload.php';

use Composite\Orders\Order;
use Composite\Product\CompositeProduct;
use Composite\Product\SimpleProduct;

class Client{
    public static function make(): void{
        $ram4gb = new SimpleProduct('RAM 4GB', 100, 'Kingston');
        $ram8gb = new SimpleProduct('RAM 8GB', 200, 'Kingston');
        $ssd256gb = new SimpleProduct('SSD 256GB', 200, 'Samsung');
        $ssd512gb = new SimpleProduct('SSD 512GB', 400, 'Samsung');
        $ssd1tb = new SimpleProduct('SSD 1TB', 800, 'Samsung');
        $cpuIntelI5 = new SimpleProduct('CPU Intel Core I5', 1000, 'Intel');
        $cpuIntelI7 = new SimpleProduct('CPU Intel Core I7', 1500, 'Intel');
        $cpuIntelI9 = new SimpleProduct('CPU Intel Core I9', 2000, 'Intel');
        $motherboard = new SimpleProduct('Motherboard', 500, 'Asus');
        $gpu = new SimpleProduct('GPU', 1500, 'Nvidia');
        $case = new SimpleProduct('Case', 200, 'Corsair');
        $monitor = new SimpleProduct('Monitor', 1000, 'Samsung');
        $keyboard = new SimpleProduct('Keyboard', 200, 'Logitech');
        $mouse = new SimpleProduct('Mouse', 100, 'Logitech');
        $headset = new SimpleProduct('Headset', 300, 'Logitech');
        $speakers = new SimpleProduct('Speakers', 200, 'Logitech');
        $microphone = new SimpleProduct('Microphone', 100, 'Logitech');
        $webcam = new SimpleProduct('Webcam', 200, 'Logitech');
        $ups = new SimpleProduct('UPS', 500, 'APC');
        $printer = new SimpleProduct('Printer', 500, 'HP');
        $scanner = new SimpleProduct('Scanner', 500, 'HP');
        $router = new SimpleProduct('Router', 500, 'TP-Link');
        $switch = new SimpleProduct('Switch', 500, 'TP-Link');

        // Paquete predefinido de promocion de teclado y mouse.
        $keyboardAndMouse = new CompositeProduct('Keyboard and Mouse', 0);
        $keyboardAndMouse->addProduct($keyboard);
        $keyboardAndMouse->addProduct($mouse);

        $package1 = new CompositeProduct('Desktop PC', 0);
        $package1->addProduct($ram8gb);
        $package1->addProduct($ssd512gb);
        $package1->addProduct($cpuIntelI7);
        $package1->addProduct($motherboard);
        $package1->addProduct($gpu);
        $package1->addProduct($case);
        $package1->addProduct($mouse);
        $package1->addProduct($printer);
        // Agregamos el paquete de teclado y mouse.
        $package1->addProduct($keyboardAndMouse); 

        // Creamos la orden a partir de los paquetes creados.
        $order = new Order(1, 'John Doe');
        $order->addProduct($package1);
        $order->addProduct($monitor);
        $order->addProduct($headset);

        $order->printOrder();
    }
}

Client::make();