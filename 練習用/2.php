<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
  <form action="" method="GET">
  請選擇您的生日：
    <select name="year">
        <?php
            for($y=2000;$y<=2022;$y++){
                echo "<option value=$y>$y</option>";
            }
        ?>
    </select>年 
    <select name="mon">
        <?php
            for($y=1;$y<=12;$y++){
                echo "<option value=$y>$y</option>";
            }
        ?>
    </select>月
    <select name="day">
        <?php
            for($y=1;$y<=31;$y++){
                echo "<option value=$y>$y</option>";
            }
        ?>
    </select>日   
    <input type="submit" name="enter" value="提交">  
  </form>

  </body>
</html>
