
<?php 
header('content-type: text/html; charset=UTF-8');



?>

<!DOCTYPE html>
<html>
    <head>
<title>Рейтинги</title>
<link rel="stylesheet" href="reiting.css">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/site.webmanifest">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#00aeff">
<meta charset="utf-8">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

<body class="header">
<nav>

    <ul>
        <li>
            <a href="index.html">&larr;Назад</a>
        </li>
        <li>
            <a href="regist.html">Пример подачи заявлений</a>
        </li>
        <li>
            <a href="nabor.html">Конкурсные списки</a>
        </li>
        <li>
            <a href="reiting.php">Списки поступающих</a>
        </li>
                <li>
            <a href="Autorization.html"></a>
        </li>
    </ul>
    <br>
    <br>

    <h4>Информация о приемной комиссии  <br>
        Рейтинг поданных заявлений 2023</h4>
        <h6 style="color: darkgray;">Подробная информация о плане приема находится <a href="document.html">тут</a></h6>
</nav>

<h1></h1>
<br>

<div class="box">

    <a href="perexod.html"style="text-decoration: none" style="color: aliceblue;"  ><img width="40" height="40" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png"></a>
    <br>
    <br>


<table class="table" id="myTable" class="tablesorter"  >

 

    <thead>
    <tr>
       <h6> 23.02.01 Организация перевозок и управление на транспорте (по видам) </h6>
<th>№</th>
<th>Имя</th>
<th>Фамилия</th>
<th>Отчество</th>
<th>Ср.балл</th>
<th>Опция</th>
</tr>
</thead>
<tbody>
<tr>


  <?php

$conn = mysqli_connect("localhost", "q92799t4_sql", "w4kdoWa*","q92799t4_sql")  or die("Невозможно подключиться к MySQL серверу!");

$sql="SET NAMES 'utf8'";
$conn->query($sql);


if ($conn->connect_error) {
die("Cевозможно подключиться : " . $conn->connect_error);
}

$sql = "SELECT id,Name,Familia,Otchestvo,Ball FROM `Anketa` ORDER BY Ball DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

$i = 1;    
while($row = $result->fetch_assoc()) {
echo 
"<tr>
<td>"  .$i++ . " - " . $row["id"] .  "</td>
<td>" .$row["Name"] . "</td>
<td>" .$row["Familia"] . "</td>
<td>" .$row["Otchestvo"]. "</td>
<td>" .$row["Ball"]. "</td> 

    <td><a href='delete-process.php?id=".$row['id']."' id='btn'>удалить</a></td>

</tr>";
}

echo "</table>";
}
else { echo "0 results"; }

?>
  <script src="tablesort.js"></script>
        </tbody>
    </table>

    <table class="table" >
        <thead>
        <tr>
           <h6>23.02.06 Техническая эксплуатация подвижного состава железных дорог(тепловозы) </h6>
    <th>№</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Отчество</th>
    <th>Ср.балл</th>
    <th>Опция</th>
    </tr>
    </thead>
<tbody>
<tr>
<?php


$sql = "SELECT id,Name,Familia,Otchestvo,Ball FROM `Anketa1` ORDER BY Ball DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $i = 1; 
while($row = $result->fetch_assoc()) {
echo 
"<tr>
<td>"  .$i++ . " - " . $row["id"] .  "</td>
<td>" .$row["Name"] . "</td>
<td>" .$row["Familia"] . "</td>
<td>" .$row["Otchestvo"]. "</td>
<td>" .$row["Ball"]. "</td>

   <td><a href='delete-process1.php?id=".$row['id']."' id='btn'>удалить</a></td>


</tr>";

}

echo "</table>";
}
else { echo "0 results"; }
?>

   
        </tbody>
    </table>

       
        <table class="table" >
            <thead>
            <tr>
               <h6>23.02.06 Техническая эксплуатация подвижного состава железных дорог(вагоны) </h6>
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Ср.балл</th>
        <th>Опция</th>
        </tr>
        </thead>
        <tbody>
     

<?php


$sql = "SELECT id,Name,Familia,Otchestvo,Ball FROM `Anketa2` ORDER BY Ball DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $i = 1; 
while($row = $result->fetch_assoc()) {
echo 
"<tr>
<td>"  .$i++ . " - " . $row["id"] .  "</td>
<td>" .$row["Name"] . "</td>
<td>" .$row["Familia"] . "</td>
<td>" .$row["Otchestvo"]. "</td>
<td>" .$row["Ball"]. "</td>

 <td><a href='delete-process2.php?id=".$row['id']."' id='btn'>удалить</a></td>

</tr>";
}

echo "</table>";
}
else { echo "0 results"; }
?>
          </tbody>
            </table>
           
            <table class="table" >
                <thead>
                <tr>
                   <h6> 08.02.10 Строительство железных дорог, путь и путевое хозяйство </h6>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Ср.балл</th>
            <th>Опция</th>
            </tr>
            </thead>
            <tbody>
            <tr>
  <?php


$sql = "SELECT id,Name,Familia,Otchestvo,Ball FROM `Anketa3` ORDER BY Ball DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $i = 1; 
while($row = $result->fetch_assoc()) {
echo 
"<tr>
<td>"  .$i++ . " - " . $row["id"] .  "</td>
<td>" .$row["Name"] . "</td>
<td>" .$row["Familia"] . "</td>
<td>" .$row["Otchestvo"]. "</td>
<td>" .$row["Ball"]. "</td>


 <td><a href='delete-process3.php?id=".$row['id']."' id='btn'>удалить</a></td>

</tr>";
}

echo "</table>";
}
else { echo "0 results"; }
?>
                    </tbody>
                </table>

                <table class="table" >
                    <thead>
                    <tr>
                       <h6> 09.02.07 Информационные системы и программирование </h6>
                <th>№</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Ср.балл</th>
                <th>Опция</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                   <?php

$conn = mysqli_connect("localhost", "q92799t4_sql", "w4kdoWa*","q92799t4_sql")  or die("Невозможно подключиться к MySQL серверу!");

$sql="SET NAMES 'utf8'";
$conn->query($sql);

if ($conn->connect_error) {
die("Cевозможно подключиться : " . $conn->connect_error);
}
$sql = "SELECT id,Name,Familia,Otchestvo,Ball FROM `Anketa4` ORDER BY Ball DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

$i = 1; 
while($row = $result->fetch_assoc()) {
echo 
"<tr>
<td>"  .$i++ . " - " . $row["id"] .  "</td>
<td>" .$row["Name"] . "</td>
<td>" .$row["Familia"] . "</td>
<td>" .$row["Otchestvo"]. "</td>
<td>" .$row["Ball"]. "</td>

 <td><a href='delete-process4.php?id=".$row['id']."' id='btn'>удалить</a></td>


</tr>";
}

echo "</table>";
}
else { echo "0 results"; }

?>
                   
                        </tbody>
                    </table>
                    <br>
                    <br>

     
</div>

               
<div id='lower'>
    <br>
    
    <div id='lower-wrapper'>
        <br>
        <div id='lowerbar-wrapper'>
        <b:section class='lowerbar' id='lowerbar1' preferred='yes'>
           <p>
            
        <b><img src="images/free-icon-add-user.png"  width="20" height="20"> Контакты:</b>
            <br>
            <br>
        <b><img src="images/home-button.png"  width="20" height="20"> Адрес:</b> 429820, <br>Чувашская Республика <Br> г. Алатырь, ул. Первомайская 48 
            <br>
            <br>
            <img src="images/free-icon-clock.png"  width="20" height="20"><b>Режим/график работы:</b>
            <br>
            понедельник-пятница
            8.00-17.00
            <br>
            обед 12.00-13.00
            <br>
            выходной – суббота, воскресенье  
        </p>
        </b:section>
        </div>
        <div id='lowerbar-wrapper'>
        <b:section class='lowerbar' id='lowerbar2' preferred='yes'>
          <P>
            <b><img src="images/telephone-call.png"  width="20" height="20">Телефоны:</b> </strong>
            <a href="callto:88007752325" style="color: #fff;"> <br>8(800)775-23-25  <br> 2-65-13 <br> 2-59-51</a> <br></P>
        <p><strong><img src="images/apple.png"  width="20" height="20">E-mail: </strong> <a href="mailto:pk.alat@samgups.ru" style="color: #fff;">pk.alat@samgups.ru <br>
    <br>
                <a href="https://vk.com/alatgt"><img src="images/vk.png"  width="30" height="30"> </a>
                <a href="https://t.me/atgt_21"><img src="images/telegram.png"  width="30" height="30"> </a>
        </p>
        </b:section>
        </div>
        <div id='lowerbar-wrapper'>
        <b:section class='lowerbar' id='lowerbar3' preferred='yes'>
           <P>
            <b><img src="images/categories.png"  width="20" height="20">Категории</b>
            <br>
             <a href="regist.html" style="color: #fff;" ><img src="images/free-icon-full-stop.png"  width="20" height="20"> Пример подачи заявлений</a> 
            <br>
             <a href="nabor.html" style="color: #fff;"> <img src="images/free-icon-full-stop.png"  width="20" height="20"> Конкурсные списки </a> 
            <br>
            <a href="reiting.html" style="color: #fff;"><img src="images/free-icon-full-stop.png"  width="20" height="20"> Списки поступающих </a>
            <br>
            <a href="document.html" style="color: #fff;"><img src="images/free-icon-full-stop.png"  width="20" height="20"> Документация </a>
            <br>
            <a href="sostav.html" style="color: #fff;"><img src="images/free-icon-full-stop.png"  width="20" height="20"> Научно-педагогический состав </a>
            <br>
            <a href="documentazia.html" style="color: #fff;"><img src="images/free-icon-full-stop.png"  width="20" height="20">Документы </a>
            <br>
            <a href="info.html" style="color: #fff;"><img src="images/free-icon-full-stop.png"  width="20" height="20">Квалификация </a>
        </P>
        </div>
        <div style='clear: both;'>
        </div>
    </div>


</body>
</html>
