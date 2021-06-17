<?php 

    function importReviews(){
        $query = "SELECT * FROM reviews";
        $res = $GLOBALS["db"]->query($query);
        $emoji = ["😠", "😦", "😑", "😀", "😍"];

        $reviews = '';

        while($row = $res->fetch_array()){
            $reviews.="<div class='carousel-item'>
            <div class='comment'>
                <p class='fs-5 fw-bold'>".$row["sentBy"]."</p>
                <p class='fw-lighter fs-6'>".$row["date"]."</p>
                <div class='commentText'>
                    <p class='fs-6'>".$row["message"]."</p>
                </div>
                <p class='fs-5'>".$emoji[$row["emojiValue"]]." (Rating ".($row["emojiValue"]+1)." of 5)</p>
                <div class='d-flex justify-content-center'>
                <button class='btn btn-black fs-6' data-mdb-toggle='modal' data-mdb-target='#commentsModal'>Write a review</button>
                </div>
            </div>
        </div>";
        }

        return $reviews;
    }

?>