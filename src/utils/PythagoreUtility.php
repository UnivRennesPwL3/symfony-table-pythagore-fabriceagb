<?php
namespace App\utils;
class PythagoreUtility
{
    public function display(){
        $html = "<table>";
        
        for ($i = 0; $i <= 10; $i++) {
            $html .= "<tr>";
            $html .=  "<td>" . $i . '</td>';

            for ($j = 1; $j <= 10; $j++) {
                if ($i === 0) {
                    $html .=  "<td> " . $j . "</td>";
                } else if ($i === $j) {
                    $html .=  "<td> X </td>";
                } else {
                    $html .=  "<td>" .  $i * $j . "</td>";
                }
            }
            $html .= "</tr>";
        }
     $html .= "</table>";
     return $html;
    }
}