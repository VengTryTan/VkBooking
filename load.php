<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=booking', 'root', '');

$data = array();

$query = "SELECT * FROM pricings ORDER BY id";

// $query = "SELECT pricings.event_name, pricings.start_date, pricings.end_date, hotels.name 
// FROM pricings 
// INNER JOIN hotels ON pricings.hotels_id = hotels.id ORDER BY hotels.name";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title' => $row["event_name"],
  'start' => $row["start_date"],
  'end'   => $row["end_date"],
 );
}

return json_encode($data);
?>