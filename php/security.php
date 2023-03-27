<?php
include "php/audit.php";

    //функция для фильтрации вводимых данных
    function verification($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
        return $data;
    }

	$cookie_name = "user";
	$cookie_value = "NP";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	
	$cargo = $material = $e_mail = $name = $mobil = $date = "";
    $cargoErr_C = $materialstype = $e_mailErr_C = $nameErr_C = $mobilErr_C  = 0;
    $cargoErr_M = $e_mailErr_M = $nameErr_M = $mobilErr_M = "";

	if(isset($_POST["req_submit"])){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //проверяем, если поля не пустые, затем фильтруем через verification()
            //после проверяем данные полей с помощью регулярных выражений и функции filter_var()
            
            //проверяем поле cargo
            if (empty($_POST["truck_select"])){
                $cargoErr_C++;
                $cargoErr_M = "Заполните все поля";
            }
            else {
                $cargoErr_C = 0;
                $cargo = verification($_POST["truck_select"]);
                // if(!preg_match("/^[A-z0-9]{3,40}$/",$cargo)){
                //     $cargoErr_C++;
                //     $cargoErr_M = "capm este incorect!";
                // }
            }
    
            //проверяем поле material
            for($i = 1; $i <= 5; $i++){
                if($_POST["materials_cb$i"] == "on")
                    $material = $material."1";
                else $material = $material."0";
            }
    
            // Проверяем ФИО
            if (empty($_POST["req_name"])){
                $nametype++;
                $nameErr_M = "Completeaza acest camp!";
            }
            else {
                $nameErr_C = 0;
                $name = verification($_POST["req_name"]);
                if(!preg_match("/^[A-z0-9]{3,40}$/",$material)){
                    $nameErr_C++;
                    $nameErr_M = "capm este incorect!";
                }
            }	
    
            // Проверяем телефон
            if (empty($_POST["req_tel"])){
                $mobilErr_C++;
                $mobilErr_M = "Completeaza acest camp!";
            }
            else {
                $mobilErr_C = 0;
                $mobil = verification($_POST["req_tel"]);
                if(!preg_match("/^[A-z0-9]{3,40}$/",$material)){
                    $materialstype++;
                    $materialErr_M = "capm este incorect!";
                 }
            }	
    
            //проверяем поле req_email
            if (empty($_POST["req_email"])){
                $e_mailErr_C++;
                $e_mailErr_M = "Completeaza acest camp!";
            }
            else {
                $e_mailErr_C = 0;
                $e_mail = verification($_POST["req_email"]);
                if(!filter_var($e_mail, FILTER_VALIDATE_EMAIL)){
                    $e_mailErr_C++;
                    $e_mailErr_M = "capm este incorect!";
                }
            }

            if (empty($_POST["req_date"])){
                $dateErr_C++;
                $dateErr_M = "Completeaza acest camp!";
            }
            else {
                $dateErr_C = 0;
                $date = verification($_POST["req_date"]);
                if(!filter_var($e_mail, FILTER_VALIDATE_EMAIL)){
                    $e_mailErr_C++;
                    $e_mailErr_M = "capm este incorect!";
                }
            }
            

            // echo $cargo."<br/>".$material."<br/>".$e_mail."<br/>".$name."<br/>".$mobil;
        }
    
        //adaugare mesaj 
        //если счетчики ошибок равны нулю, то создаем в таблице новую запись
         if(!$cargoErr_C && !$materialstype && !$e_mailErr_C && !$nameErr_C){
            require('connection.php');

            $mysql->query("INSERT INTO `cargo_require` (`cargo_type`, `materials_type`, `name`, `mobil`, `email`, `order_date`) 
                           VALUES('$cargo', '$material', '$name', '$mobil', '$e_mail', '$date')");
            $mysql->close();

            $cargo = $material = $e_mail = $name = $mobil = $data = "";
            logs_record("Заказ оформлен");
         }
    }

?>