<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "zostels");
$columns = array('title', 'fname','lname','phone','email','add1','city','zip','country','date','dest','package','price');

$query = "SELECT * FROM booknow ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE title LIKE "%'.$_POST["search"]["value"].'%" 
 OR fname LIKE "%'.$_POST["search"]["value"].'%" 
 OR lname LIKE "%'.$_POST["search"]["value"].'%"
 OR phone LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 OR add1 LIKE "%'.$_POST["search"]["value"].'%"
 OR city LIKE "%'.$_POST["search"]["value"].'%" 
 OR zip LIKE "%'.$_POST["search"]["value"].'%" 
 OR country LIKE "%'.$_POST["search"]["value"].'%"
 OR date LIKE "%'.$_POST["search"]["value"].'%" 
 OR dest LIKE "%'.$_POST["search"]["value"].'%" 
 OR package LIKE "%'.$_POST["search"]["value"].'%"
 OR price LIKE "%'.$_POST["search"]["value"].'%" 
 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="title">' . $row["title"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="fname">' . $row["fname"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="lname">' . $row["lname"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="phone">' . $row["phone"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="add1">' . $row["add1"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="city">' . $row["city"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="zip">' . $row["zip"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="country">' . $row["country"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="dates">' . $row["date"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="dest">' . $row["dest"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="package">' . $row["package"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="price">' . $row["price"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM booknow";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>