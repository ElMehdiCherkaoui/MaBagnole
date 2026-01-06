<?php
class Article
{
    private $article_id;
    private $articleThemeId;
    private $articleUserId;
    private $articleTitle;
    private $articleContent;
    private $media_url;
    private $articleStatus;
    private $created_at;
    private $updated_at;

    public function __construct($article_id, $articleThemeId, $articleUserId, $articleTitle, $articleContent, $media_url, $articleStatus, $created_at, $updated_at)
    {
        $this->article_id = $article_id;
        $this->articleThemeId = $articleThemeId;
        $this->articleUserId = $articleUserId;
        $this->articleTitle = $articleTitle;
        $this->articleContent = $articleContent;
        $this->media_url = $media_url;
        $this->articleStatus = $articleStatus;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
        return "Article (article_id: {$this->article_id}, articleThemeId: {$this->articleThemeId}, articleUserId: {$this->articleUserId}, articleTitle: {$this->articleTitle}, articleStatus: {$this->articleStatus}, created_at: {$this->created_at}, updated_at: {$this->updated_at})";
    }


    public function listArticles() {}
    public function getArticle($id) {}
    public function addArticle() {}
    public function editArticle() {}
    public function deleteArticle() {}
    public function searchArticles($query) {}
    public function filterArticlesByTags($tags) {}
    public function listArticlesByStatus($status) {}
    public function paginateArticles($page, $perPage) {}
}