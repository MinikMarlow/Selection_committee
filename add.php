<?php 
header('content-type: text/html; charset=UTF-8');
?>
<html>
    <head>
<title>Добавление нового абитуриента</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="add.css">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/site.webmanifest">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#00aeff">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<meta charset="utf-8">
    </head>

    <body>
    <body class="header">
        <nav>
        
            <ul>
                <li>
                    <a href="reiting.php">&larr;Назад</a>
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
            </ul>
            <br>
            <br>
        </nav>
        

       <table>
<H2 style="text-align: center;"> Добавление данных</H2>
<br>

<FORM method="POST"  action="add.php">
<INPUT type="hidden" name="posted" value="true">
<TABLE> 

<TR></TR><TD>Имя:</TD>
<TD><INPUT name="Name" type="text"></TD>

</TR><TR><TD>Фамилия:</td>
<TD><br><INPUT name="Familia" type="text"></TD>

</TR><TR> <TD>Отчество: </td>
<TD><br><INPUT name="Otchestvo" type="text"></TD>

</TR><TR><TD>Дата рождения:</TD>
<TD><br><INPUT name="Data_Rozh" type="date"></TD>

</TR><TR><TD>Адрес:</TD>
<TD><br><INPUT name="Adres" type="text"></TD>

</TR><TR><TD>Телефон:</TD>
<TD><br><INPUT name="Telefon" type="text"></TD>


</TR><TR><TD>Серия паспорта:</TD>
<TD><br><INPUT name="SeriaPassport" type="text"></TD>

</TR><TR><TD>Номер паспорта:</TD>
<TD><br><INPUT name="NumberPassport" type="text"></TD>

</TR><TR><TD>Паспорт выдан:</TD>
<TD><br><INPUT name="PassportVidan" type="text"></TD>

</TR><TR><TD>Код подразделения: </TD>
<TD><br><INPUT name="Kod_Podrazdilenia" type="text"></TD>

</TR><TR><TD>Дата выдачи:</TD>
<TD><br><INPUT name="Data_Vidachi" type="date"></TD>

</TR><TR><TD>Место жительства:</TD>
<TD><br><INPUT name="Mecto_Zitelctva" type="text"></TD>

</TR><TR><TD>Факультет:
<td><br><select name="Facultet" class="">
            <option value="0"></option>
            <option name="1" value="3">Организация перевозок и управление на транспорте (по видам)</option>
            <option name="2" value="5">Техническая эксплуатация подвижного состава железных дорог(тепловозы)</option>
            <option name="3" value="4">Техническая эксплуатация подвижного состава железных дорог(вагоны)</option>
            <option name="4" value="2">Строительство железных дорог, путь и путевое хозяйство</option>
            <option name="5" value="1">Информационные системы и программирование</option>
        </select></td>

</TR><TR><TD>Дата окончания заведения:</td>
<TD><br><INPUT name="Data_Okonchania_Zavedenia" type="date"></TD>


</TR><TR><TD>Средний балл:</TD>
 <TD><br><INPUT name="Ball" type="text"></TD>



</TR><TR><TD>Окончание заведения:
<td><br><select name="Okonchanie_Zavedenia" class="">
            <option value="0"></option>
            <option name="1" value="1">СОШ № 11</option>
            <option name="2" value="2">Гимназия № 6</option>
            <option name="3" value="3">СОШ № 9</option>
            <option name="4" value="4">СОШ № 7</option>
            <option name="5" value="5">СОШ № 2</option>
            <option name="6" value="6">СОШ № 3</option>
            <option name="7" value="7">СОШ № 5</option>
            <option name="8" value="8">РГОУ «Алатырская специальная (коррекционная) школа</option>
        </select></td>

<TR><TD colspan=2><br><INPUT type="submit" value="Добавить"></TD></TR>


</div>
    </TABLE>
</table>

<?php
if (isset($_POST['posted']))
{
$Name = $_POST['Name'];
$Familia = $_POST['Familia'];
$Otchestvo = $_POST['Otchestvo'];
$Data_Rozh = $_POST['Data_Rozh'];
$Adres = $_POST['Adres'];
$SeriaPassport = $_POST['SeriaPassport'];
$NumberPassport = $_POST['NumberPassport'];
$Kod_Podrazdilenia = $_POST['Kod_Podrazdilenia'];
$Data_Vidachi = $_POST['Data_Vidachi'];
$Mecto_Zitelctva = $_POST['Mecto_Zitelctva'];
$Facultet = $_POST['Facultet'];
$Data_Okonchania_Zavedenia = $_POST['Data_Okonchania_Zavedenia'];
$Ball = $_POST['Ball'];
$Okonchanie_Zavedenia = $_POST['Okonchanie_Zavedenia'];
$Telefon = $_POST['Telefon'];
$PassportVidan = $_POST['PassportVidan'];


//передача данных из формы на сервер
if ($Name == ""  or $Familia == "" or  $Otchestvo  == "" or $Data_Rozh == "" or $Adres == "" or $SeriaPassport == "" or $NumberPassport == "" or $Kod_Podrazdilenia == ""  or $Data_Vidachi == ""  or $Mecto_Zitelctva == ""  or $Facultet == "" or $Data_Okonchania_Zavedenia == "" or $Ball == "" or $Okonchanie_Zavedenia == "" or $Telefon == "" or $PassportVidan == "" )
{ echo "Необходимо ввести имя - нажмите кнопку Назад и заполните форму еще раз"; exit; }

$Name = addslashes($Name);
$Familia = addslashes($Familia);
$Otchestvo = addslashes($Otchestvo);
$Data_Rozh = addslashes($Data_Rozh);
$Adres = addslashes($Adres);
$SeriaPassport = addslashes($SeriaPassport);
$NumberPassport = addslashes($NumberPassport);
$Kod_Podrazdilenia = addslashes($Kod_Podrazdilenia);
$Data_Vidachi = addslashes($Data_Vidachi);
$Mecto_Zitelctva = addslashes($Mecto_Zitelctva);
$Facultet = addslashes($Facultet);
$Data_Okonchania_Zavedenia = addslashes($Data_Okonchania_Zavedenia);
$Ball = addslashes($Ball);
$Okonchanie_Zavedenia = addslashes($Okonchanie_Zavedenia);
$Telefon = addslashes($Telefon);
$PassportVidan = addslashes($PassportVidan);

$conn = mysqli_connect("localhost", "q92799t4_sql", "w4kdoWa*","q92799t4_sql")  or die("Невозможно подключиться к MySQL серверу!");

$sql="SET NAMES 'utf8'";
$conn->query($sql);

if ($conn->connect_error) {
die("Невозможно подключиться : " . $conn->connect_error);
exit;
}  
$query = "INSERT INTO Anketa 
(Familia,Otchestvo,Name,Data_Rozh,SeriaPassport,NumberPassport,Kod_Podrazdilenia, Data_Vidachi,Mecto_Zitelctva,Adres,Facultet,Data_Okonchania_Zavedenia, Ball,Okonchanie_Zavedenia,Telefon,PassportVidan) VALUES 
('".$Familia."','".$Otchestvo."','".$Name."','".$Data_Rozh."','".$SeriaPassport ."','".$NumberPassport ."','".$Kod_Podrazdilenia."',
'".$Data_Vidachi."','".$Mecto_Zitelctva."','".$Adres."','".$Facultet."','".$Data_Okonchania_Zavedenia."','".$Ball."','".$Okonchanie_Zavedenia."','".$Telefon."','".$PassportVidan."')";
if($conn->query($query)==true){echo "<H3>Информация успешно добавлена в базу данных.</H3>";}
}
?>
</TABLE>
</table>


<br>
<br>
<br>
<br>
<br>


<div id='lower'>
    <br>
<div  id='lower-wrapper'>
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