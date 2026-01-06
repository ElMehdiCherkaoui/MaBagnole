<?php
class Comment
{
    private $comment_id;
    private $commentArticleId;
    private $commentUserId;
    private $commentContent;
    private $commentCreatedAt;
    private $commentDeletedAt;

    public function __construct($comment_id, $commentArticleId, $commentUserId, $commentContent, $commentCreatedAt, $commentDeletedAt = null)
    {
        $this->comment_id = $comment_id;
        $this->commentArticleId = $commentArticleId;
        $this->commentUserId = $commentUserId;
        $this->commentContent = $commentContent;
        $this->commentCreatedAt = $commentCreatedAt;
        $this->commentDeletedAt = $commentDeletedAt;
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
        return "Comment (comment_id: {$this->comment_id}, commentArticleId: {$this->commentArticleId}, commentUserId: {$this->commentUserId}, commentCreatedAt: {$this->commentCreatedAt}, commentDeletedAt: {$this->commentDeletedAt})";
    }


    public function listByArticle($articleId) {}
    public function addComment() {}
    public function editComment($commentId) {}
    public function softDeleteComment($commentId) {}
}
