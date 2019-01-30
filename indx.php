<!DOCTYPE HTML>


<html>
<head>
    <title>Amr</title>
</head>
<link rel="stylesheet" href="css.css">
<body>
<h4 style="text-align: left;color: red; position:relative; ;top:630px;text: fixed;">BY: Amr Jamal </h4> <!--My signature-->
<center>
<br/><br/><br/>
<form action=""  method="post">
    Enter The number of days in the month:<input type="number" name="A" />
    <input type="submit" value="submit"   />

</form>
<br/><br/>
<table border="1">
    <caption>Days in a Month</caption>
    <?php



    $Months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
    $Days = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

    #brint tabel
    echo "<tr><th width='100'> Month :";
    for($a=0;$a<count($Months);$a++) {
        echo   '<th>'. $Months [$a] ;
    }
    echo "<tr><th width='60'>Days :";
    for($b=0;$b<count($Days);$b++) {
        echo   '<th width="60" >'. $Days [$b] ;

    }
    echo"  </table> <br>";

    #
    if(isset($_POST['A']))
    { $number= $_POST['A']; define("Amr",$number)  ;echo "<h3> The Follwing Month Have<h3 style='color: red'> $number Dayes :</h3>  </h3>" ;  }
    #function show days
    function  AMR($no){
        global $Days; global $Months;
        for($d=0;$d<count($Days);$d++){
            if($no<28 || $no>31||$no==29){echo "<h3 style='color: blue'>No way</h3>";break;}
            if($Days[$d]==Amr){echo "<h3 style='color: #1a01ff'>$Months[$d]</h3>"; continue; }}

    }
    if(isset($number))
        AMR($number);



    ?>

</center>

</body>
</html>

