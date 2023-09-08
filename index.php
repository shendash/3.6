<?php
 class User
{
    private $name;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
}

$user = new User();
$user->setName("John Doe");
echo $user->getName(); // выводит "John Doe"
?>