<?php include 'header.php';?>
<?php include 'function.php';?>
    <script src="js/jquery.maskedinput.js"></script>
    <h1 class="page-header">Регистрация Серверов Moodle</h1>

    <form class="navbar-form" method = "post">
        <div class="form-group">
            <div class="form-left">
                <h3>Информация о сервере:</h3>
                <label>IP-адрес сервера в формате:xxx.xxx.xxx.xxx</label><br>
                    <input type="text" name="ip" id="ip" class="form-control" pattern="\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}" placeholder="IP-адрес"required><br><br>
                <label>Название сервера*</label><br>
                    <input type="text" name="serverName" id="serverName" class="form-control" placeholder="Название сервера" required><br><br>
                <label>Доменное имя*</label><br>
                    <input type="text" name="DNS" id="DNS" class="form-control" placeholder="доменное имя" required><br><br>
                <label>Структурное подразделение*</label><br>
                    <input type="text" name="structure" id="structure" class="form-control" placeholder="Структурное подразделение" required><br><br>
                <button type="submit" name="submit" id="submit" class="btn btn-default">Зарегистрировать</button>
            </div>
            <div class="form-right">
                <h3>Ответственное лицо:</h3>
                <label>Фамилия*</label><br>
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Фамилия" required><br><br>
                <label>Имя*</label><br>
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Имя" required><br><br>
                <label>Отчество*</label><br>
                    <input type="text" name="thirdName" id="thirdName" class="form-control" placeholder="Отчество" required><br><br>
                <label>Должность*</label><br>
                    <input type="text" name="class" id="class" class="form-control" placeholder="Должность" required><br><br>
                <label>Мобильный Телефон*</label><br>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Мобильный Телефон" required><br><br>
                <script>
                    //Код jQuery, установливающий маску для ввода телефона элементу input
                    //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
                    $(function(){
                        //2. Получить элемент, к которому необходимо добавить маску
                        $("#phone").mask("8(999) 999-9999");
                    });
                </script>
                <label>Электронная почка*</label><br>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Электронная почка" required><br><br>
                <label>ссылки на сайт/соц.сеть</label><br>
                    <input type="text" name="url" id="url" class="form-control" placeholder="ссылки на сайт/соц.сеть"><br><br>
            </div>
        </div>
    </form>
    <?php
if(isset($_POST["submit"])){

    $dbhost = 'localhost:3306';
    $dbuser = 'moodleuser';
    $dbpass = 'Xvf43T-1';
    $dbb = 'moodle_test';

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbb);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'INSERT INTO person_in_charge(`firstName`, `lastName`, `thirdName`, `class`, `phone`, `email`, `url`) VALUES("'.$_POST["firstName"].'","'.$_POST["lastName"].'","'.$_POST["thirdName"].'","'.$_POST["class"].'","'.$_POST["phone"].'","'.$_POST["email"].'","'.$_POST["url"].'"); ';

    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully    ";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    $sql1 = 'SELECT ID FROM person_in_charge WHERE lastName="'.$_POST["lastName"].'";';
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $personId = $row["ID"];
           // echo $personId;
        }
    } else {
        echo "0 results   ".$row["ID"]."        ". $sql."";
    }


    $sql2 = 'INSERT INTO server_information(`ip`, `dns`, `serverName`, `structure`,`person_in_charge_id`) VALUES("'.$_POST["ip"].'","'.$_POST["DNS"].'","'.$_POST["serverName"].'","'.$_POST["structure"].'","'.$personId.'");';

    if (mysqli_query($conn, $sql2)) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "" . mysqli_error($conn);
    }

    $conn->close();
    
    //mysql_add_server_information($_POST["ip"],$_POST["DNS"],$_POST["serverName"],$_POST["structure"],$_POST["firstName"],$_POST["lastName"],$_POST["thirdName"],$_POST["class"],$_POST["phone"],$_POST["email"],$_POST["url"]);
}
?>
<?php include 'footer.php' ?>