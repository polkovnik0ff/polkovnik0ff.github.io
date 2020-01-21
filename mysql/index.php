<!doctype html>
<html>
<head>
<!--    https://www.tutorialspoint.com/mysqli/mysqli_insert_query.htm-->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Mysql</title>
</head>
<body>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'moodleuser';
$dbpass = 'Xvf43T-1';
$dbb = 'moodle';

    echo 'Point 1!<br>';
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbb);
    echo 'Point 2!<br>';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo 'Point 3!<br>';
echo "We connect!<br>";
$sql = 'insert into test_table(name) VALUES("testsw") ';
//$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
echo 'Point 4!<br>';
$conn->close();
    echo 'Point 5!<br>';

?>
</body>
</html>