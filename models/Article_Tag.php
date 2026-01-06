<?php
class ArticleTag
{
    private $Article_Tag_Id;
    private $articleTagId;
    private $tagArticleId;

    public function __construct($articleTagId, $tagArticleId)
    {
        $this->articleTagId = $articleTagId;
        $this->tagArticleId = $tagArticleId;
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
        return "ArticleTag (articleTagId: {$this->articleTagId}, tagArticleId: {$this->tagArticleId})";
    }

    public function attachTags() {}
    public function detachTags() {}
    public function listArticlesByTag($tagId) {}
    public function listTagsByArticle($articleId) {}
}
