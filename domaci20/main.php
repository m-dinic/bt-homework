<?php
include "contact_list_class.php";

$contact1 = new CustomerContact("Peki","Pekic","121157233","6kgd");
$contact2 = new CustomerContact("Miki","Mikic","121231683","usdas21kj2dd");
$contact3 = new BusinessContact("Adresa","Ime","12134267233","usda125k,gsdd");
$contact4 = new BusinessContact("Adresa1","Ime1","121278885633","usd4dl;dasdd");

$kontaktLista = new ContactList();

echo $contact1->contains('4');

$kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);
$kontaktLista->addContact($contact3);
$kontaktLista->addContact($contact4);


$kontaktLista->listAllContacts();
/*
$kontaktLista->addContact(new Contact("dasdasgha","12345"));

$kontaktLista->listAllContacts();
*/

?>