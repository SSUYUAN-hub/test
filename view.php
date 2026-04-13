<?php
   include("db_info.php");
   $sql="SELECT * FROM `peopleinfo`";
   $result=mysqli_query($link,$sql);
?>

<html>
  <head>
  <title></title>
  <style>
  html{
    background: url(images/moon-cat.png) no-repeat center fixed;
    background-size:cover;
    }
  table{
    border:3px ridge black;
    border-collapse: collapse;
    padding:30px;
    text-align:center;
    font-size:40px;
    width:100%;
    }
  th{
    background-color:#99FF66;
    }
  h1{
    font-size:60px;
    text-align:center;
    color:rgb(0,51,255);
    }
.back{
position: absolute;
right: 46%;
padding:20px;
font-size:40px;
}
     a:link {color:rgb(0,0,204);}
     a:visited {color:rgb(204,0,255);}
     a:hover {color:rgb(255,255,255);background:rgb(255,102,51);}
  tr:nth-child(odd){background-color:silver};
  
  </style>
  </head>
  <body>
  <h1>人員資料瀏覽</h1>
   <table>
        <tr>
            <th>姓名</th>
            <th>身分證</th>
            <th>班別</th>
            <th>出生日期</th>
            <th>性別</th>
            <th>聯絡地址</th>
        </tr>
   <?php
     while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
        {echo "<tr>
            <td>$row[name]</td>
            <td>$row[id]</td>
            <td>$row[inc]</td>
            <td>$row[birthday]</td>
            <td>$row[sex]</td>
            <td>$row[address]</td>
        </tr>";
    }     
    ?> 
    </table>
    <a class="back" href=index.html>回首頁</a><br>
  </body>
</html>
