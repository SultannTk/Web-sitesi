<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POEMIX.COM</title>
    <link rel="shortcut icon" href="logo.webp" type="image/x-icon">
    <style>
        body{
            margin: 0px;
            background-color: rgb(237, 229, 205);
        }
        header img{
            width: 120px;
            border-radius: 60px;
            float: left;
        }
        header{
            width: 100%;
            background-color: rgb(70, 104, 104);
            font-size: 50px;
            padding: 15px 0 0 15px;
        }
        header a{
            text-decoration: none;
            color: aliceblue;
        }
        header p{
            margin-top: 40px;
            margin-left: 10px;
            display: inline-block;
            clear: both;
        }
        nav{
            background-color: aliceblue;
            text-align: center;
            font-size: 30px;
            border:1px;
            border-style: solid;
        }
        nav a{
            text-decoration: none;
            color: black;
            font-size: 30px;
            margin: 25px;
        }
        nav a:hover{
            text-decoration: underline;
            color: rgb(132, 125, 125);
        }
        footer{
            background-color:rgb(70, 104, 104);
            text-align: center;
            font-size: 25px;
            padding: 15px;
            border: 1px;
            border-style: solid;
            margin-top: 20px;
        }
        section{
            width: 200px;
            height: 200px;
            float: left;
            text-align: center;
        }
        section img{
            width: 120px;
            height: 120px;
            background-size: cover;
            border-radius: 60px;
        }
        .kutum{
            margin-top: 60px;
            margin-bottom: 60px;
            margin-left: 340px;
        }
        section img:hover{
            width: 140px;
            height: 140px;
            border-radius: 70px;
        }
        section a{
            text-decoration: none;
            color: black;
        }
        input[type="submit"]{
            cursor: pointer;
            background-color:rgb(70, 104, 104) ;
            color: aliceblue;
            font-size: 19px;
            border-radius: 5px;
        }
        .td{
            font-size: 16px;
            font-weight: bold;
            color: blueviolet;
        }
    </style>
</head>
<body>
    <header>
        <a href="sayfa1.html">
        <img src="logo.webp" alt="logo">
        <p>
            POEMIX
        </p></a>
             <input style="border-radius: 14px; margin-left: 230px; width: 400px; height: 30px; margin-top: 0px; display: inline-block;" placeholder="Şiir ara..." type="text">   
        </div>
            
        <div style="float: right; margin-right: 40px;">
            <button style="width: 100px; height: 30px; border-radius: 10px;">GİRİŞ YAP</button>
            <button style="width: 100px; height: 30px; border-radius: 10px;">KAYIT OL</button>
        </div>
        <div style="clear: both;"></div>
       
    </header> 
        <nav>
            <a href="sayfa1.html">Anasayfa</a> | <a href="sair.html">Şairler</a> | <a href="sayfa1.html">Türler</a> | <a href="#">Üyeler</a> | <a href="https://sozluk.gov.tr/">Sözlük</a> | <a href="ekle.html">Şiir ekle</a>
        <a style="margin-left: 0px;" href="#"><img style="float: right; width: 30px; margin-right: 30px; margin-top: 2px;" src="Message.png" alt="Mesaj"></a>
        </nav>
       <div class="kutum">
        <form action="">
            <table>
                <tr>
                    <td style="font-size: 19px; font-weight: bold;">Kullanıcı Adı:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td style="font-size: 19px; font-weight: bold;" >Şiir Türü:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td style="font-size: 19px; font-weight: bold;">Şiiriniz:</td>
                    <td><textarea name="şiir" id="" cols="50" rows="30"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Gönder"></td>
                </tr>
            </table>
        </form>
       </div>
       <div style="clear: both;"></div>


        <footer>
            &copy;POEMIX. Tüm hakları saklıdır. Bu WEB sitesi Sultan Tekercioğlu tarafından yapılmıştır.
        </footer>
</body>
</html>