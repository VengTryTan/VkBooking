<?php

$connect = new PDO('mysql:host=localhost;dbname=booking', 'root', '');
    if(isset($_POST["event_name"]))
    {
     $query = "INSERT INTO pricings (event_name, start_date, end_date, price) 
     VALUES (:event_name, :start_date, :end_date, :price)";
     $statement = $connect->prepare($query);
     $statement->execute(
      array(
       ':event_name'  => $_POST['event_name'],
       ':start_date' => $_POST['start'],
       ':end_date' => $_POST['end'],
       ':price' => $_POST['price']
      )
     );
    }
?>