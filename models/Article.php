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

    public function __construct($article_id = null, $articleThemeId = null, $articleUserId = null, $articleTitle = null, $articleContent = null, $media_url = null, $articleStatus = null, $created_at = null, $updated_at = null)
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


    public function listArticles()
    {
        $db = (new DataBase)->getConnection();
        $sql = "SELECT * FROM Articles a LEFT JOIN Themes t on a.articleThemeId = t.Theme_id LEFT JOIN Users u on u.Users_id = a.articleUserId ";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getArticle($id)
    {
        $db = (new DataBase)->getConnection();
        $sql = "SELECT * FROM Articles WHERE Article_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function addArticle()
    {
        $db = (new DataBase)->getConnection();
        $sql = "INSERT INTO Articles (articleThemeId, articleUserId, articleTitle, articleContent, media_url, articleStatus)
            VALUES (:articleThemeId, :articleUserId, :articleTitle, :articleContent, :media_url, :articleStatus)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':articleThemeId', $this->articleThemeId);
        $stmt->bindParam(':articleUserId', $this->articleUserId);
        $stmt->bindParam(':articleTitle', $this->articleTitle);
        $stmt->bindParam(':articleContent', $this->articleContent);
        $stmt->bindParam(':media_url', $this->media_url);
        $stmt->bindParam(':articleStatus', $this->articleStatus);
        $stmt->execute();
        if ($stmt) {
            return 'success';
        } else {
            return "Problem Coneection";
        }
    }

    public function editArticle($id)
    {
        $db = (new DataBase)->getConnection();
        $sql = "UPDATE Articles SET articleThemeId = :articleThemeId, articleUserId = :articleUserId, articleTitle = :articleTitle,
            articleContent = :articleContent, media_url = :media_url, articleStatus = :articleStatus WHERE Article_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':articleThemeId', $this->articleThemeId);
        $stmt->bindParam(':articleUserId', $this->articleUserId);
        $stmt->bindParam(':articleTitle', $this->articleTitle);
        $stmt->bindParam(':articleContent', $this->articleContent);
        $stmt->bindParam(':media_url', $this->media_url);
        $stmt->bindParam(':articleStatus', $this->articleStatus);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt) {
            return 'success';
        } else {
            return "Problem Coneection";
        }
    }

    public function deleteArticle($id)
    {
        $db = (new DataBase)->getConnection();
        $sql = "DELETE FROM Articles WHERE Article_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if ($stmt) {
            return 'success';
        } else {
            return "Problem Coneection";
        }
    }
    public function updateStatusArticle($id)
    {
        $db = (new DataBase)->getConnection();
        $sql = "UPDATE Articles SET articleStatus = :articleStatus WHERE Article_id = :id";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':articleStatus', $this->articleStatus);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if ($stmt) {
            return 'success';
        } else {
            return "Problem Coneection";
        }
    }
    public function countArticles()
    {
        $db = (new DataBase)->getConnection();
        $sql = "SELECT COUNT(*) AS totalCount FROM Articles  ;";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(pdo::FETCH_OBJ);
    }
    public function listByTheme($themeId)
    {
        $db = (new DataBase())->getConnection();

        $sql = "
SELECT * FROM Articles a
        LEFT JOIN Themes t ON a.articleThemeId = t.Theme_id
        LEFT JOIN Users u ON a.articleUserId = u.Users_id
        LEFT JOIN Article_Tags au on au.articleTagId = a.Article_id
        LEFT JOIN Tags tg on tg.Tag_id = au.tagArticleId
        WHERE a.articleThemeId = :themeid
    ";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(":themeid", $themeId);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function searchArticles($query) {}
    public function filterArticlesByTags($tags) {}
    public function listArticlesByStatus($status) {}
    public function paginateArticles($page, $perPage) {}
}