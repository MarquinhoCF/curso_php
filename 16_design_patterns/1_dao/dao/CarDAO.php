<?php

    include_once("models/car.php");

    class CarDAO implements CarDAOInterface {

        private $conn;

        public function __construct(PDO $conn) {
            $this->conn = $conn;
        }

        public function findAll() {
            $cars = [];

            $stmt = $this->conn->query("SELECT * FROM cars");

            $data = $stmt->fetchAll();

            foreach($data as $car) {
                $newCar = new Car;

                $newCar->setId($car["id"]);
                $newCar->setBrand($car["brand"]);
                $newCar->setKm($car["km"]);
                $newCar->setColor($car["color"]);

                $cars[] = $newCar;
            }

            return $cars;
        }

        public function create(Car $car) {
            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }
    
    }