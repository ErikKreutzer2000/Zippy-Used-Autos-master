<?php
    class Vehicle {
        private $make, $type, $class;
        private $year, $model, $price;

        public function __construct($make, $type, $class, $year, $model, $price) {
            $this->make = $make;
            $this->type = $type;
            $this->class = $class;
            $this->year = $year;
            $this->model = $model;
            $this->price = $price;
        }

        public function getMake() {
            return $this->make;
        }

        public function setMake($make) {
            $this->make = $make;
        }

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
        }

        public function getClass() {
            return $this->class;
        }

        public function setClass($class) {
            $this->class = $class;
        }

        public function getYear() {
            return $this->year;
        }

        public function setYear($year) {
            $this->year = $year;
        }

        public function getModel() {
            return $this->model;
        }

        public function setModel($model) {
            $this->model = $model;
        }

        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price) {
            $this->price = $price;
        }

        public function getFormattedPrice() {
            return '$' . number_format($this->price, 2, '.', ',') . '';
        }
    }

?>