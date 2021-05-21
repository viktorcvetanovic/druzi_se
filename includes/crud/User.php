<?php


class User
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $arrayOfPosts;

    /**
     * @return mixed
     */
    public function getArrayOfPosts()
    {
        return $this->arrayOfPosts;
    }

    /**
     * @param mixed $arrayOfPosts
     */
    public function setArrayOfPosts($arrayOfPosts)
    {
        $this->arrayOfPosts = $arrayOfPosts;
    }


    public function __construct()
    {
    }
//
//    public static function withID( $id ) {
//        $instance = new self();
//        $instance->loadByID( $id );
//        return $instance;
//    }

    public static function withRow( array $row ) {
        $instance = new self();
        $instance->fill( $row );
        return $instance;
    }

//    protected function loadByID( $id ) {
//        // do query
//        $row = my_awesome_db_access_stuff( $id );
//        $this->fill( $row );
//    }

    protected function fill( array $row ) {
        $this->id=$row[0];
        $this->username=$row[1];
        $this->password=$row[2];
        $this->email=$row[3];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    function __toString(){
        return "$this->id $this->username $this->email";
    }
}

