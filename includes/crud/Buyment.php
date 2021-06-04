<?php


class Buyment
{
private $id;
private $date;
private $user_fk;
private $post_fk;

    /**
     * Buyment constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getUserFk()
    {
        return $this->user_fk;
    }

    /**
     * @param mixed $user_fk
     */
    public function setUserFk($user_fk)
    {
        $this->user_fk = $user_fk;
    }

    /**
     * @return mixed
     */
    public function getPostFk()
    {
        return $this->post_fk;
    }

    /**
     * @param mixed $post_fk
     */
    public function setPostFk($post_fk)
    {
        $this->post_fk = $post_fk;
    }



}