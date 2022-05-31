<?php

class Contact {
    protected $phone;
    protected $email;

    protected function __construct($phone, $email) {
        $this->phone=$phone;
        $this->email=$email;
    }
    
    public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

    public function contains($text="") {
        if (str_contains($this->phone,$text)) {
            return true;
        }
        if (str_contains($this->email,$text)) {
            return true;
        }
        return false;
    }

    public function displayMe() {
        return "email: $this->email <br>
        phone: $this->phone <br>";
    }
}


?>