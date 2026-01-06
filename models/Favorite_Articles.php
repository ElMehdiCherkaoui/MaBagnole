<?php
class FavoriteArticle
{
    private $favorite_id;
    private $favoriteArticleUserId;
    private $favoriteArticleId;
    private $favoriteArticleCreatedAt;

    public function __construct($favorite_id, $favoriteArticleUserId, $favoriteArticleId, $favoriteArticleCreatedAt)
    {
        $this->favorite_id = $favorite_id;
        $this->favoriteArticleUserId = $favoriteArticleUserId;
        $this->favoriteArticleId = $favoriteArticleId;
        $this->favoriteArticleCreatedAt = $favoriteArticleCreatedAt;
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
        return "FavoriteArticle (favorite_id: {$this->favorite_id}, favoriteArticleUserId: {$this->favoriteArticleUserId}, favoriteArticleId: {$this->favoriteArticleId}, favoriteArticleCreatedAt: {$this->favoriteArticleCreatedAt})";
    }

    public function addFavorite() {}
    public function removeFavorite($articleId) {}
    public function listFavoritesByUser($userId) {}
}
