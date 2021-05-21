<?php


class Comments
{
private $id;
private $commentar_body;
private $user_fk;
private $post_fk;

    /**
     * Comments constructor.
     */
    public function __construct()
    {
    }


    public static function withRow( array $row ) {
        $instance = new self();
        $instance->fill( $row );
        return $instance;
    }

    protected function fill( array $row ) {
        $this->id=$row[0];
        $this->commentar_body=$row[1];
        $this->user_fk=$row[2];
        $this->post_fk=$row[3];
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
    public function getCommentarBody()
    {
        return $this->commentar_body;
    }

    /**
     * @param mixed $commentar_body
     */
    public function setCommentarBody($commentar_body)
    {
        $this->commentar_body = $commentar_body;
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