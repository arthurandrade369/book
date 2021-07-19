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

    private function getName(): self
    {
        return $this->name;
    }

    private function setName($name): ?string
    {
        return $this->name = $name;
    }

    private function getAgee(): self
    {
        return $this->age;
    }

    private function setAge($age): ?int
    {
        return $this->age = $age;
    }

    private function getSex(): self
    {
        return $this->sex;
    }

    private function setSex($sex): ?string
    {
        return $this->sex = $sex;
    }
}
