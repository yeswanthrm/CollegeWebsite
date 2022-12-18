<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=users.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['name', 'gender', 'email', 'mobile']);

$connection = new mysqli('localhost', 'root', '', 'test');
$rows = $connection->query(
  'SELECT name, gender, email, mobile FROM users',
  MYSQLI_USE_RESULT
);
while ($row = $rows->fetch_row()) {
  fputcsv($output, $row);
}
?>