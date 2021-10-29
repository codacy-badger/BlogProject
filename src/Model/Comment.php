<?php


namespace App\Model;


use phpDocumentor\Reflection\Types\Integer;

class Comment
{
    private ?int $id = null;
    private ?int $userId = null;
    private string $username;
    private int $postId;
    private string $content;
    private ?int $is_valid = null;
    private \DateTimeImmutable  $modifiedOn;

    public function __construct()
    {
        $this->modifiedOn = new \DateTimeImmutable();
    }
    /**
     * @return int
     */
    public function getId():? int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Comment
     */
    public function setId(int $id): Comment
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Comment
     */
    public function setUserId(int $userId): Comment
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Comment
     */
    public function setUsername(string $username): Comment
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return Comment
     */
    public function setPostId(int $postId): Comment
    {
        $this->postId = $postId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Comment
     */
    public function setContent(string $content): Comment
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIsValid(): ?int
    {
        return $this->is_valid;
    }

    /**
     * @param int|null $is_valid
     * @return Comment
     */
    public function setIsValid(?int $is_valid): Comment
    {
        $this->is_valid = $is_valid;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getModifiedOn(): \DateTimeImmutable
    {
        return $this->modifiedOn;
    }

    /**
     * @param \DateTimeImmutable $modifiedOn
     * @return Comment
     */
    public function setModifiedOn(\DateTimeImmutable $modifiedOn): Comment
    {
        $this->modifiedOn = $modifiedOn;
        return $this;
    }

}