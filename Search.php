<?php
?>
<html>
<style>
    .text {
        font-size: 40px;
        padding: 10px;
        text-align: center;
        color: rgb(255, 0, 0);
    }

    select,
    input {
        font-size: 30px;
        border-radius: 20px;
        border: 2px solid rgb(255, 51, 204);
        padding: 10px;
        cursor: pointer;
    }

    .back {
        padding: 20px;
        font-size: 40px;
    }

    h1 {
        font-size: 60px;
        text-align: center;
        color: rgb(0, 51, 255);
    }

    body {
        background: url(images/cat-see-sea.jpg) no-repeat center fixed;
        background-size: cover;
    }
    a:link {
        color: rgb(0, 0, 204);
    }

    a:visited {
        color: rgb(204, 0, 255);
    }

    a:hover {
        color: rgb(255, 255, 255);
        background: rgb(255, 102, 51);
    }
</style>

<body>
    <h1>人事資料查詢</h1>
    <div class=text>
        <form method="post" action="SView.php">
            <select name="t1">
                <option value="name">姓名</option>
                <option value="id">身分證</option>
                <option value="inc">班別</option>
                <option value="birthday">出生日期</option>
            </select>
            輸入查詢資料：<input type="text" name="t2">
            <input type="submit" name="login" value="查詢">
            <p>
                <a class="back" href=index.html>回首頁</a><br>
        </form>
    </div>
</body>

</html>