<?php include'header.php';?>
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
        section{
            width:40%;
            height: 890px;
            background-color: rgb(255, 251, 236);
            margin-left: 3%;
            float: left;
            border: 2px;
            border-style: solid;
            margin-top: 15px;
            border-color: rgb(196, 194, 194);
        }
        section h1{
            text-align: center;
            font-size: 40px;
        }
        section p{
            font-size: 25px;
            text-align: left;
            margin-left: 100px;
            font-style: italic;  
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
        .konu{
            width: 250px;
            height: 500px;
            background-color: rgb(217, 217, 202);
            margin-top: 15px;
            margin-left: 20px;
            border: 1px;
            border-style: solid;
            font-size: 25px;
        }
        .konu a:hover{
            color: gray;
        }
        .konu2{
            width: 250px;
            height: 680px;
            background-color: rgb(217, 217, 202);
            margin-top: 15px;
            margin-left: 20px;
            border: 1px;
            border-style: solid;
            font-size: 25px;
        }
        .konu2 a{
            text-decoration: none;
            color: black;
            font-weight: normal;
            margin-bottom: 0px;
        }
        .konu2 a:hover{
            color: rgb(70, 104, 104);
        }
        .konu2 p{
            margin-top: 10px;
            margin-left: 15px;
            color: rgb(68, 53, 115);
            font-weight: bold;
        }
        .konu a{
            text-decoration: none;
            color: black;
            font-weight: normal;
            margin-bottom: 0px;
        }
        .konu p{
            margin-top: 10px;
            margin-left: 25px;
            margin-right: 5px;
            color: rgb(68, 53, 115);
            font-weight: bold;
        }
        .konu2 span{
            margin-left: 20px;
            font-size: 15px;
            color: gray;
            margin-top: 0px;
            display: block;
        }
        .solTaraf{
            float: left;
        }
        .a{
            width:450px;
            height: 890px;
            background-color: rgb(255, 251, 236);
            margin-left: 3%;
            float: left;
            border: 2px;
            border-style: solid;
            margin-top: 15px;
            border-color: rgb(196, 194, 194);
            text-align: center;
        }
        .a img{
            width: 150px;
            height: 150px;
            border-radius: 100px;
        }
        .a p{
            font-weight: bold;
        }
        .Yorum{
            height: 200px;
            width: 500px;
            margin-left: 45px;
            margin-right: 40px;
        }
    </style>
</head>
<body>
   
        <nav>
            <a href="sayfa1.html">Anasayfa</a> | <a href="sair.html">Şairler</a> | <a href="#tür">Türler</a> | <a href="#">Üyeler</a> | <a href="https://sozluk.gov.tr/">Sözlük</a> | <a href="ekle.html">Şiir ekle</a>
        <a style="margin-left: 0px;" href="#"><img style="float: right; width: 30px; margin-right: 30px; margin-top: 2px;" src="Message.png" alt="Mesaj"></a>
        </nav>
        <div class="solTaraf">
            <div id="tür" class="konu">
                <p>Türler:</p>
            <p><a href="tür.html">Aşk Şiirleri</a></p>
            <p><a href="#">Atatürk Şiirleri</a></p>
            <p><a href="#">Ayrılık Şiirleri</a></p>
            <p><a href="#">Barış Şiirleri</a></p>
            <p><a href="#">Gece Şiirleri</a></p>
            <p><a href="#">Hüzün Şiirleri</a></p>
            <p><a href="#">İstanbul Şiirleri</a></p>
            <p><a href="#">Yağmur Şiirleri</a></p>
        </div>
        <div class="konu2">
            <p>Öne Çıkanlar:</p>
            <p><a href="siirsayfa.html">Anlatamıyorum</a><span>Orhan Veli Kanık</span></p>
            <p><a href="#">Eğer</a><span>Can Yücel  </span></p>
            <p><a href="#">Ben Sana Mecburum</a><span>Atilla İlhan</span></p>
            <p><a href="#">Otuz Beş Yaş</a><span>Cahit Sıtkı Tarancı</span></p>
            <p><a href="#">Çanakkale Şehitlerine</a><span>Mehmet Akif Ersoy</span></p>
            <p><a href="#">Biliyorum Sana Giden Yollar Kapalı</a><span>Cemal Süreya</span></p>
            <p><a href="#">Kaldırımlar</a><span>Necip Fazıl Kısakürek</span></p>
            <p><a href="#">Aşk</a><span>Özdemir Asaf</span></p>
        </div>
        </div>
        <div>
            <section>
            <h1 style="text-align: left; font-size: 25px; margin-left: 10px; color: rgb(68, 53, 115);;">Günün Şiiri</p>
                <h1 style="font-style: italic;">Beklenen</h1>
            <p>Sen, kaçan ürkek ceylânsın dağda,<br>
                Ben, peşine düşmüş bir canavarım! <br>
                İstersen dünyayı çağır imdada;<br>
                Sen varsın dünyada, bir de ben varım! <br><br>
                
                Seni korkutacak geçtiğin yollar,<br>
                Arkandan gelecek hep ayak sesim. <br>
                Sarıp vücudunu belirsiz kollar, <br>
                Enseni yakacak ateş nefesim. <br><br>
                
                Kimsesiz odanda kış geceleri, <br>
                İçin ürperdiği demler beni an! <br>
                De ki: Odur sarsan pencereleri, <br>
                De ki: Rüzgâr değil, odur haykıran! <br><br>
                
                Göğsümden havaya kattığım zehir, <br>
                Solduracak bir gül gibi ömrünü, <br>
                Kaçıp dolaşsan da sen, şehir şehir, <br>
                Bana kalacaksın yine son günü. <br><br>
                
                Ölürsün... Kapanır yollar geriye; <br>
                Ben mezarla sırdaş olur, beklerim. <br>
                Varılmaz hayale işaret diye, <br>
                Toprağında bir taş olur, beklerim..</p>

        </section>
        <section class="a">
            <h1>Günün Şairi</h1>
            <img src="Necip.jpg" alt="Necip">
            <br>
            <p>NECİP FAZIL KISAKÜREK</p>
            <table style="margin-left: 10px;">
                <tr>
                    <th>Doğum:</th>
                    <td>26 Mayıs 1904</td>
                </tr>
                <tr>
                    <th>Ölüm:</th>
                    <td>25 Mayıs 1983</td>
                </tr>
                <tr>
                    <th>Defin yeri</th>
                    <td>Eyüp Mezarlığı, İstanbul</td>
                </tr>
                <tr>
                    <th>Takma adlar</th>
                    <td>Üstat, Kaldırımlar Şairi</td>
                </tr>
                <tr>
                    <th>Meslek</th>
                    <td>Şair, yazar</td>
                </tr>
                <tr>
                    <th>Dil</th>
                    <td>Türkçe</td>
                </tr>
                <tr>
                    <th>Eğitim</th>
                    <td>İstanbul Üniversitesi Hukuk Fakültesi</td>
                </tr>
                <tr>
                    <th>Önemli eser</th>
                    <td>İdeolocya Örgüsü, Kaldırımlar - 1928</td>
                </tr>
                <tr>
                    <th>Etkin yılları</th>
                    <td>(1925-1983)</td>
                </tr>
                <tr>
                    <th>Önemli ödülleri</th>
                    <td>Türkiye Yazarlar Birliği Üstün Hizmet Ödülü <br>Kültür Bakanlığı Büyük Ödülü</td>
                </tr>
            </table>
        </section>
        
          <form><div style="float: left;">
            <h3 style="clear: both; margin-left: 45px;">Okuyucu Yorumları</h3>
            <textarea class="Yorum" placeholder="Yorum Ekle"></textarea>
            <br>
            <button style="width: 100px; height: 30px; margin-left: 45px;">Paylaş</button>    
         </div></form>  
       
        
        
          
            
          
         
        
       

        </div>
        
        <div style="clear: both;"></div>
        

        
        <br>
        
        
        <footer>
            &copy;POEMIX. Tüm hakları saklıdır. Bu WEB sitesi Sultan Tekercioğlu tarafından yapılmıştır.
        </footer>
</body>
</html>