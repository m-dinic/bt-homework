<?php
require_once ("contact_class.php");

class BusinessContact extends Contact {
    protected $address;
    protected $companyName;

    public function __construct($address, $companyName, $phone, $email) {
        $this->address=$address;
        $this->companyName=$companyName;
        $this->phone=$phone;
        $this->email=$email;
    }

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getCompanyName(){
		return $this->companyName;
	}

	public function setCompanyName($companyName){
		$this->companyName = $companyName;
	}

    public function displayMe() {
        return "email: $this->email <br>
        phone: $this->phone <br>
        Address: $this->address <br>
        Company Name: $this->companyName <br>";
    }
}





?>