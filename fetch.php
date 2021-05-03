<?php

//fetch.php

include('database_connection.php');

$column = array('id', 'name', 'email', 'phone', 'amount_paid', 'pmode','products','address');

$query = "SELECT * FROM orders ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE id LIKE "%'.$_POST['search']['value'].'%" 
 OR name LIKE "%'.$_POST['search']['value'].'%" 
 OR email LIKE "%'.$_POST['search']['value'].'%" 
 OR phone LIKE "%'.$_POST['search']['value'].'%" 
 OR amount_paid LIKE "%'.$_POST['search']['value'].'%" 
 OR pmode LIKE "%'.$_POST['search']['value'].'%" 
 OR address LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id'];
 $sub_array[] = $row['name'];
 $sub_array[] = $row['email'];
 $sub_array[] = $row['phone'];
 $sub_array[] = $row['amount_paid'];
 $sub_array[] = $row['pmode'];
 $sub_array[] = $row['products'];
 $sub_array[] = $row['address'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM orders";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>
