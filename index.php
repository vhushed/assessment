<!DOCTYPE html>
<head>
    <title>Data Processing</title>
    <style>
         table{
            width: 30%;
            border-collapse: collapse;
        }

        th {
            background-color: #CDCDCD;
        }

        th,td{
            margin:20px 0;
            padding:2px;
           border: 1px solid black;
        } 


        
    </style>
</head>
<?php
$table1 = [
    'A1' => 41,
    'A2' => 18,
    'A3' => 21,
    'A4' => 63,
    'A5' => 2,
    'A6' => 53,
    'A7' => 5,
    'A8' => 57,
    'A9' => 60,
    'A10' => 93,
    'A11' => 28,
    'A12' => 3,
    'A13' => 90,
    'A14' => 39,
    'A15' => 80,
    'A16' => 88,
    'A17' => 49,
    'A18' => 60,
    'A19' => 26,
    'A20' => 28,
];

$indexedArray = array_values($table1);
?>

<body>
    <table>
        <tr>
            <th>
                Index #
            </th>
            <th>
                Value
            </th>
        </tr>
        <?php
        $i=0;
        while ($i<20){
            echo "<tr>
                    <td> A" . ($i) . "</td>
                    <td>" . ($indexedArray[$i]) . "</td>
                <tr>";
            $i++;
        }
        
        ?>
    </table>



    <table style="margin-top: 20px;">
        <tr>
            <th>Category</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>Alpha</th>
            <th><?php $Alpha = $table1["A5"] + $table1["A20"]; 
            echo $Alpha?>
            </th>
        </tr>
        <tr>
            <th>Beta</th>
            <th><?php $Beta = $table1["A15"] / $table1["A7"]; 
            echo $Beta?></th>
        </tr>
        <tr>
            <th>Charlie</th>
            <th><?php $Charlie = $table1["A13"] * $table1["A12"]; 
            echo $Charlie?></th>
        </tr>
    </table>
</body>