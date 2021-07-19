<?php
class People
{
    private $name;
    private $age;
    private $sex;

    public function makeBirthday()
    {
        $this->idade++;
    }

    function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function getName(): self
    {
        return $this->name;
    }

    public function setName($name): ?string
    {
        return $this->name = $name;
    }

    public function getAgee(): self
    {
        return $this->age;
    }

    public function setAge($age): ?int
    {
        return $this->age = $age;
    }

    public function getSex(): self
    {
        return $this->sex;
    }

    public function setSex($sex): ?string
    {
        return $this->sex = $sex;
    }
}
