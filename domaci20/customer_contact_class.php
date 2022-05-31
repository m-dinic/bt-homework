<?php
    require_once ("contact_class.php");

    class CustomerContact extends Contact {
        protected $firstName;
        protected $lastName;

    public function __construct($firstName,$lastName, $phone, $email) {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->phone=$phone;
        $this->email=$email;
    }

    public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

    public function displayMe() {
        return "email: $this->email <br>
        phone: $this->phone <br>
        First Name: $this->firstName <br>
        Lasr Name: $this->lastName <br>";
    }
}
?>