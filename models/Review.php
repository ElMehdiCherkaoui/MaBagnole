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
    public function listReviews() {
        
    }
    public function editReviews() {}
    public function softDelete() {}
}