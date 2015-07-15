<?php

/* 
 * Copyright (C) 2014 Brun
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


error_reporting(E_ALL);
ini_set('display_errors', 1);

//require_once 'config.php';

//print_r($_POST);

//global $conn;

//$resultTable = $conn->prepare('TRUNCATE TABLE entrant2');
//            if ($resultTable->execute()) {
//                echo "Delete data entrant2";
//            } else {
//                echo "Сталась помилка очищення даних";
//            }

//$sql = "
//LOAD DATA INFILE '/var/zpanel/hostdata/nung/public_html/nung_edu_ua/admiss-rating/upload/adminer.sql'
///INTO TABLE `entrant2`
//COLUMNS TERMINATED BY ';'
//OPTIONALLY ENCLOSED BY '\"'
//ESCAPED BY '\"'
//LINES TERMINATED BY '\n'
//";


    $username = 'entrant';
    $password = 'entrant2014';

    $conn = new PDO('mysql:host=localhost;dbname=nung_admiss-rating', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $resultTable = $conn->prepare('LOAD DATA 
INFILE "/tmp/enrt"
INTO TABLE `entrant2`
COLUMNS TERMINATED BY ";"
OPTIONALLY ENCLOSED BY "\""
ESCAPED BY "\""
LINES TERMINATED BY "\n"');
            
            if ($resultTable->execute()) {
                echo "Data was imported";
            } else {
                echo "Erro rdata import";
            }
            
