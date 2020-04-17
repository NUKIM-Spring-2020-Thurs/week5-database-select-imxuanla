<?php

    $link=mysqli_connect('localhost','root','password','php2020');
    $SQL="SELECT *  
          FROM employee";

    if($result=mysqli_query($link, $SQL)){
        echo "<table border='1' cellpadding='10'>
              <th>No</th>
              <th>Fname</th>
              <th>Minit</th>
              <th>Lname</th>
              <th>Bdate</th>
              <th>Address</th>
              <th>Sex</th>
              <th>Salary</th>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>".
                 "<td>".$row['No']."</td>".
                 "<td>".$row['Fname']."</td>".
                 "<td>".$row['Minit']."</td>".
                 "<td>".$row['Lname']."</td>".
                 "<td>".$row['Bdate']."</td>".
                 "<td>".$row['Address']."</td>".
                 "<td>".$row['Sex']."</td>".
                 "<td>".$row['Salary']."</td>".
                 "</tr>";
        }
        echo "</table>";
    }else{
        echo "無資料";
    }
    
     
?>
