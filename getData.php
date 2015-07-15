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

require_once 'entrant.php';

//var_dump($_POST);

function isOriginal($original) {
    if ($original) {
        return '<span class="glyphicon glyphicon-ok"><span style="display:none;">' . $original. '</span></span>';
    } else {
        return '<span class="glyphicon glyphicon-minus"><span style="display:none;">' . $original. '</span></span>';
    }
    
}

function isPozaKonkurs($konkurs) {
    if (trim($konkurs) != '') {
        return '<span class="glyphicon glyphicon-ok"><span >' . $konkurs . '</span></span>';
    } else {
        return '<span class="glyphicon glyphicon-minus"><span style="display:none;">' . $konkurs . '</span></span>';
    }    
}

function isStateForm($status, $derg, $plat) {
    
    if ($status == "До наказу") {
        $status = "Зараховано";
    }
    
    if ($derg == '1') {
        return '<span class="glyphicon glyphicon-ok-sign label label-success"> ' . $status . '</span> ' ;
    } elseif ($plat == '1') {
        return '<span class="glyphicon glyphicon-ok-sign label label-primary"> ' . $status . '</span>' ;
    } else {
        return '<span class="glyphicon glyphicon-plus-sign label label-default"> ' . $status . '</span>' ;
    }
}
    
function isStatus($status, $derg, $plat) {
    
    switch ($status) {
        case "Допущено":
            return isStateForm($status, $derg, $plat);
            break;
        case "Рекомендовано":
            return isStateForm($status, $derg, $plat);
            break;
        case "До наказу":
            return isStateForm($status, $derg, $plat);
            break;
        case "Нова заява":
            return isStateForm($status, $derg, $plat);
            break;
        default:
            break;
    };
}

function showEntrantRating($specialnist, $specialnist2, $specialnist3, $course, $formaNavch, $okr, $vstupNaOsnovi) {
    global $conn;
    if ($course != '') {
        $tableValue = '';
        if ($course != '5') {
            //echo "курс 1 \n";
            $naprFac = explode(' - ', $specialnist);
            $naprFac3 = explode(' - ', $specialnist3);
            //echo $naprFac[0] . '  ----  ' . $naprFac[1] . '  ----  ' . $naprFac3[1];
            $resultTable = $conn->prepare('SELECT `e6`, `e2`, `e4`, `e8`, `e29`, `e30`, replace(`e12`, ",", ".") as `ce12`, `e41`, `e14`, `e7`, `e43`, `e0`, `e11` 
                FROM `entrant`
                WHERE
                (`e14` = :specialnist) and 
                (`e18` = :faculty) and 
                (`e7` = :course) and 
                (`e4` IN ("Допущено", "Рекомендовано", "До наказу", "Нова заява") and
                (`e8` = :formaNavch) and
                (`e43` like :vstupNaOsnovi ))
                ORDER BY `ce12` DESC;');
            $resultTable->bindValue(':vstupNaOsnovi', '%'.$vstupNaOsnovi.'%', PDO::PARAM_INT);
            $resultTable->bindValue(':specialnist', $naprFac[0], PDO::PARAM_STR);
            if ($formaNavch == 'Денна') {
                $resultTable->bindValue(':faculty', $naprFac[1], PDO::PARAM_STR);
            } else {
                $resultTable->bindValue(':faculty', $naprFac3[1], PDO::PARAM_STR);
            }
//            $resultTable->bindValue(':faculty', $naprFac[1], PDO::PARAM_STR);
        } else {            
            //echo "курс 5 \n" . $specialnist . ' ' . $course . ' ' . $okr;
            
            $resultTable = $conn->prepare('SELECT `e6`, `e2`, `e4`, `e8`, `e29`, `e30`, replace(`e12`, ",", ".") as `ce12`, `e41`, `e14`, `e16`, `e7`, `e43`, `e9`, `e0`, `e11` 
                FROM `entrant`
                WHERE
                (`e16` = :specialnist2) and 
                (`e7` = :course) and 
                (`e9` like :okr ) and
                (`e4` IN ("Допущено", "Рекомендовано", "До наказу", "Нова заява") and
                (`e8` = :formaNavch))
                ORDER BY `ce12` DESC;');
            $resultTable->bindValue(':okr', '%'.$okr.'%', PDO::PARAM_STR);
            $resultTable->bindValue(':specialnist2', $specialnist2, PDO::PARAM_STR);

        }

            $resultTable->bindValue(':course', $course, PDO::PARAM_INT);
            $resultTable->bindValue(':formaNavch', $formaNavch, PDO::PARAM_STR);
            $resultTable->execute();
            
        $i = 1;
        while ($row = $resultTable->fetch()) {
            $original = isOriginal($row['e41']);
            //$pozaKonkurs = isOriginal($row['e30']);
            $status = isStatus($row['e4'], $row['e0'], $row['e11']);
            $pilga = isOriginal($row['e29']);
            $tableValue .= <<< TABLERESULT
            
                    <tr>
                        <td>$i</td>
                        <td>$row[e6]</td>
                        <td>$row[e2]</td>
                        <td>$pilga</td>
                        <td>$row[ce12]</td>
                        <td>$original</td>
                        <td>$status</td>
                   
                    </tr>
                    
TABLERESULT;
            $i++;
        }
    }
    
    drawTable($tableValue);
    
}

$specialnist = $_POST['specialnist'];
$specialnist2 = $_POST['specialnist2'];
$specialnist3 = $_POST['specialnist3'];
$course = $_POST['course'];
$formaNavch = $_POST['formaNavch'];
$okr = $_POST['okr'];
$vstupNaOsnovi = $_POST['vstupNaOsnovi'];

//echo $specialnist . '<br />' .
//        $specialnist2 . '<br />' .
//        $specialnist3 . '<br />' .
//        $course . '<br />' .
//        $formaNavch . '<br />' .
//        $okr . '<br />' .
//        $vstupNaOsnovi . '<br />';

showEntrantRating($specialnist, $specialnist2, $specialnist3, $course, $formaNavch, $okr, $vstupNaOsnovi);

//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";
