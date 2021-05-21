<?php


class CommentUserDTO
{
private $username;
private $comment_body;

    /**
     * CommentUserDTO constructor.
     * @param $username
     * @param $comment_body
     */
    public function __construct($username, $comment_body)
    {
        $this->username = $username;
        $this->comment_body = $comment_body;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getCommentBody()
    {
        return $this->comment_body;
    }

    /**
     * @param mixed $comment_body
     */
    public function setCommentBody($comment_body)
    {
        $this->comment_body = $comment_body;
    }


}