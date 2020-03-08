<?php
$username="root";
$password="delia";
$database="atestat";

$email=$_POST['mail'];
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("unable to select database");

if($_POST['insertrecord']=="insert"){
        $query="insert into person values(\'$email\')";
        echo "inside";
        mysql_query($query);
        $query1="select * from person";
        $result=mysql_query($query1);
        $num= mysql_numrows($result);

        #echo"<b>output</b>";
        print"<table border size=1 > 
        <tr>
        <th>email</th>
        </tr>";
        $i=0;
        while($i<$num)
        {
        $email=mysql_result($result,$i,"email");
            echo"<tr>
            <td>$email</td>
            </tr>";
            $i++;
        }
        print"</table>";
    }
?>