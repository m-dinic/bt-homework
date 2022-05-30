<?php

//todo format
class Product {
    private $id; 
private $title; 
		private $description; 
		private $img; 
private $price; 
		private $category; 
		private $brand; 
		private $available; 

        public function __construct ($id, $title, $description, $img, $price, $category, $brand, $available) {
            $this->id=$id;
            $this->title=$title;
            $this->description=$description;
            $this->img=$img;
            $this->price=$price;
            $this->category=$category;
            $this->brand=$brand;
            $this->available=$available;
        }

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getTitle(){
            return $this->title;
        }
    
        public function setTitle($title){
            $this->title = $title;
        }
    
        public function getDescription(){
            return $this->description;
        }
    
        public function setDescription($description){
            $this->description = $description;
        }
    
        public function getImg(){
            return $this->img;
        }
    
        public function setImg($img){
            $this->img = $img;
        }
    
        public function getPrice(){
            return $this->price;
        }
    
        public function setPrice($price){
            $this->price = $price;
        }
    
        public function getCategory(){
            return $this->category;
        }
    
        public function setCategory($category){
            $this->category = $category;
        }
    
        public function getBrand(){
            return $this->brand;
        }
    
        public function setBrand($brand){
            $this->brand = $brand;
        }
    
        public function getAvailable(){
            return $this->available;
        }
    
        public function setAvailable($available){
            $this->available = $available;
        }

        public function __toString() {
          return $this->id;
        }
}