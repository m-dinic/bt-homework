<?php
require_once ("customer_contact_class.php");
require_once ("business_contact_class.php");

    class ContactList {
    protected $contacts=[];

    public function __construct($contacts=array()) {
        $this->contacts=$contacts;
    }

	public function getContacts(){
		return $this->contacts;
	}

	public function setContacts($contacts){
		$this->contacts = $contacts;
	}

    public function addContact(Contact $contact) {
        array_push($this->contacts, $contact);
    }

    private function show($niz) {
        foreach ($niz as $contact) {
            echo $contact->displayMe();
        }
    }

    public function listAllContacts() {
        $this->show($this->contacts);
    }
}
?>