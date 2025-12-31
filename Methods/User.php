<?php
class Users
{
    private $user_id;
    private $userName;
    private $userEmail;
    private $userRole;
    private $userStatus;
    private $passwordHash;
    private $userCreateDate;

    public function __construct(
        $user_id = null,
        $userName = null,
        $userEmail = null,
        $userRole = null,
        $userStatus = null,
        $passwordHash = null,
        $userCreateDate = null
    ) {
        $this->user_id = $user_id;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userRole = $userRole;
        $this->userStatus = $userStatus;
        $this->passwordHash = $passwordHash;
        $this->userCreateDate = $userCreateDate;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __toString()
    {
        return "User (ID: {$this->user_id}, Name: {$this->userName}, Email: {$this->userEmail}, Role: {$this->userRole}, status: {$this->userStatus}, createDate: {$this->userCreateDate})";
    }
}