<?php
function mysql_add_server_information($ip, $dns, $name, $structure, $firstName, $lastName, $thirdName, $class, $phone, $email, $url){
    $dbhost = 'localhost:3306';
    $dbuser = 'moodleuser';
    $dbpass = 'Xvf43T-1';
    $dbb = 'moodle_test';

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbb);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'insert into server_information(ip, dns, serverName, structure) VALUES("'.$ip.','.$dns.','.$name.','.$structure.'") ';
    $sql2 = 'insert into person_in_charge(firstName, lastName, thirdName, class, phone, email, url) VALUES("'.$firstName.','.$lastName.','.$thirdName.','.$class.','.$phone.','.$email.','.$url.'") ';

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    if (mysqli_query($conn, $sql2)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "" . mysqli_error($conn);
    }
    $conn->close();


};