<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-align: center;
        }
        table{
            border-collapse: collapse;
        }
        table td{
            border:1px solid #ccc;
            padding:3px 9px;
        }
        

    </style>
</head>
<body>
<?php
$cal=[];

$month=(isset($_GET['m']))?$_GET['m']:date("n");
$year=(isset($_GET['y']))?$_GET['y']:date("Y");

$nextMonth=$month+1;
$prevMonth=$month-1;

$nextYear=$year;
$prevYear=$year;

if($nextMonth>12){
    $nextMonth=1;
    $nextYear++ ;  
}
if($prevMonth<1){
    $prevMonth=12;
    $prevYear--;
}


$firstDay=$year."-".$month."-1";
$firstDayWeek=date("N",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));
$lastDay=$year.'-'.$month.'-'.$monthDays;
$lastDayWeek=date('N',strtotime($lastDay));
$spaceDaysbefore=$firstDayWeek-1;
$spaceDaysbeforeafter=7-$lastDayWeek;
$weeks=ceil(($monthDays+$spaceDaysbefore)/7);

for($i=0;$i<$spaceDaysbefore;$i++){
    $cal[]='';
}
for($i=0;$i<$monthDays;$i++){
    $cal[]=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
}
for($i=0;$i<$spaceDaysbeforeafter;$i++){
    $cal[]='';
}

/* echo "<pre>";
print_r($cal);
echo "</pre>"; */

echo "第一天".$firstDay."星期".$firstDayWeek;
echo "<br>";
echo "該月共".$monthDays."天,最後一天是".$lastDay."星期".$lastDayWeek;
echo "<br>";
echo "月曆天數共".($monthDays+$spaceDaysbefore+$spaceDaysbeforeafter)."天，".$weeks."周";

?>

<div style="display:flex;width:80%;justify-content:center;margin:auto">
    <!-- <a href="?y=<?=$prevYear;?>&m=<?=$prevMonth;?>">上一個月</a> -->
    <h2><?=$year;?> 年 <?=$month;?> 月份</h2>
    <!-- <a href="?y=<?=$nextYear;?>&m=<?=$nextMonth;?>">下一個月</a> -->
</div>
<ul class="pagination d-flex " >
    <li class="page-item"><a class="page-link" href="?y=<?=$prevYear;?>&m=<?=$prevMonth;?>">Previous</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=1">1</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=2">2</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=3">3</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=4">4</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=5">5</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=6">6</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=7">7</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=8">8</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=9">9</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=10">10</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=11">11</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$year;?>&m=12">12</a></li>
    <li class="page-item"><a class="page-link" href="?y=<?=$nextYear;?>&m=<?=$nextMonth;?>">Next</a></li>
  </ul>

<table>
<?php
echo "<tr style='background:#0080FF;font-weight: bold;'>
    <td style='background:#FF0000'>日</td>
    <td >一</td>
    <td >二</td>
    <td >三</td>
    <td >四</td>
    <td >五</td>
    <td style='background:#FF0000'>六</td>
</tr>";
foreach($cal as $i => $day){
    if($i%7==0){
        echo "<tr>";
    }

    if($i%7==0 || $i%7==6){
        if($day==date("Y-m-d")){
            echo "<td style='color:blue;background:#FF9797'>$day</td>";
        }else{
            echo "<td style='background:#FF9797 '>$day</td>";

        }

    }
    else if($day==date("Y-m-d")){
        echo "<td style='color:blue;background:#84C1FF'>$day</td>";

    }else{
        echo "<td style='background:#84C1FF'>$day</td>";
        
    }

    if($i%7==6){
        echo "</tr>";
    }
}

?>

</table>
</body>
</html>