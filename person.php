

<?php

class person
{
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}
$person = new Person();
$person->setName("miraz");
$person->setEmail("miraz@gmail.com");

echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail();
