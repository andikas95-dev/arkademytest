<?php
function dataDiri() {
    $data = [ 
       "name" => "andika",
       "age" => 23,
       "address" => "Jalan Medayu Utara X/4",
       "is_married" => FALSE,
       "list_school" => array (
            "name" => "SMK Negeri 10 Surabaya",
            "year_in" => 2010,
            "year_out" => 2013,
            "major" => null,
        ),
        "skill" => array (
            "native php" => "beginner",
            "Desain Corel & Photoshop" => "advanced",
        ),
        "interest_in_coding" => TRUE,
    ];
    return json_encode($data);
  }
  
  echo dataDiri();
?>