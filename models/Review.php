<?php
class Review
{
    private $Review_id;
    private $reviewRating;
    private $reviewComment;
    private $reviewDeletedDate;
    private $reviewIdUser;
    private $vehicleReview;

    public function __construct(
        $Review_id = null,
        $reviewRating = null,
        $reviewComment = null,
        $reviewDeletedDate = null,
        $reviewIdUser = null,
        $vehicleReview = null
    ) {
        $this->Review_id = $Review_id;
        $this->reviewRating = $reviewRating;
        $this->reviewComment = $reviewComment;
        $this->reviewDeletedDate = $reviewDeletedDate;
        $this->reviewIdUser = $reviewIdUser;
        $this->vehicleReview = $vehicleReview;
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
        return "Review (Review_id: {$this->Review_id}, reviewRating: {$this->reviewRating})";
    }
    public function listReviews()
    {
        $db = (new DataBase)->getConnection();
        $sql = "SELECT * FROM Review
        LEFT JOIN Users ON Review.reviewIdUser = Users.Users_id
        LEFT JOIN Vehicle ON Review.reviewIdVehicle = Vehicle.Vehicle_id";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function editReviews($id)
    {
        $db = (new DataBase)->getConnection();
        $sql = "INSERT INTO Review (reviewRate,reviewComment) VALUES (:Rate,:Comment) WHERE Review_id = :id";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':Rate', $this->reviewRating);
        $stmt->bindParam(':Comment', $this->reviewComment);
        $stmt->bindParam(':id', $id);
        $check = $stmt->execute();
        if ($check) {
            return 'success';
        }
        return 'Lost Connection';
    }
    public function softDelete($id)
    {
        $db = (new DataBase)->getConnection();
        $sql = "UPDATE Review SET reviewDeleteTime = NOW() WHERE Review_id = :id ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $check = $stmt->execute();
        if ($check) {
            return 'success';
        }
        return 'Lost Connection';
    }
}