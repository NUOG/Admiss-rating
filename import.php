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

require_once 'config.php';

//print_r($_POST);

$importFromFile = __DIR__ . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR .  $_POST['importFrom'];
$current_dir = getcwd();
//echo $current_dir . DIRECTORY_SEPARATOR . $importFromFile;

global $conn;

$resultTable = $conn->prepare('TRUNCATE TABLE entrant');
            if ($resultTable->execute()) {
                echo "Дані видалено";
            } else {
                echo "Сталась помилка очищення даних";
            }

$sql = "LOAD DATA LOCAL INFILE :importFromFile INTO TABLE `entrant` FIELDS TERMINATED BY ';' ESCAPED BY '\\' LINES TERMINATED BY '\r\n'";

//$sql = "LOAD DATA LOCAL INFILE :importFromFile INTO TABLE `entrant`
//      FIELDS TERMINATED BY '\"'
//      LINES TERMINATED BY ';' ";

//$sql = <<<SQL1
//        
//        LOAD DATA LOCAL INFILE :importFromFile INTO TABLE `entrant` FIELDS TERMINATED BY ';' ENCLOSED BY '"' ESCAPED BY '\\' LINES TERMINATED BY '\r\n'
//
//SQL1;    
$fieldseparator = ","; 
$lineseparator = "\n";
$ter1 = ';';
$enc1 = '"';
$esc1 = '\\';
$ter2 = '\r\n';


//$sql = 'LOAD DATA LOCAL INFILE :importFromFile INTO TABLE `entrant`
//        FIELDS TERMINATED BY :ter1 
//        ENCLOSED BY :enc1 
//        ESCAPED BY :esc1 LINES TERMINATED BY :ter2';
            
//$resultTable = $conn->prepare($sql);
//            $resultTable->bindValue(':importFromFile', $importFromFile, PDO::PARAM_STR);
//            $resultTable->bindValue(':ter1', $ter1, PDO::PARAM_STR);
//            $resultTable->bindValue(':enc1', $enc1, PDO::PARAM_STR);
//            $resultTable->bindValue(':esc1', $esc1, PDO::PARAM_STR);
//            $resultTable->bindValue(':ter2', $ter2, PDO::PARAM_STR);
            //echo $resultTable->getSQL();
            echo $importFromFile;
            
            $resultTable->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $resultTable->prepare("
                LOAD DATA LOCAL INFILE :importFromFile
                INTO TABLE `entrant`
                FIELDS TERMINATED BY ','
                OPTIONALLY ENCLOSED BY '\"'
                LINES TERMINATED BY '\n'
                    ");
            $resultTable->bindValue(':importFromFile', $importFromFile, PDO::PARAM_STR);
            
            if ($resultTable->execute()) {
                echo "Дані імпортовано";
            } else {
                echo "Сталась помилка оновлення даних";
            }
            