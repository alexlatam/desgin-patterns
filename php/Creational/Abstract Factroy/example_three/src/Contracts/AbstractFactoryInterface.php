<?php 

// Definimos la interfaz de la fábrica abstracta
interface AbstractFactoryInterface {
    public function createChair();
    public function createCouch();
    public function createTable();
  }