<!DOCTYPE HMTL>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <title>Jualan kebutuhan</title>
   <style>

    body.html{
        margin:0px;
        padding:0px;
    }

    .utama{
        width:100%;
        height:800px;
        background-color:lightgray;
    }

    .satu h1{
        text-align:center;
        justify-content:center;
        padding: 12px;
        font-family:serif;
    }

    .satu img{
        width:130px;
        margin:0px 20px;
    }
    
    .satu button{
        margin:20px 30px 0px;
    }

    .dua{
        width:400px;
        height:400px;
        background-color:lightblue;
        position:absolute;
        text-align:center;
        align-items:center;
        left:50%;
        top:70%;
        transform:translate(-50%,-50%);
    }
    
    .kendali input{
        width:70%;
        height:50px;
        margin:20px;
        border-radius:10px;
        text-align:center;
    }

    .surat button{
        width:50%;
        height:40px;
        margin:30px;
        background-color:lightgreen;
        cursor:pointer;
    }

    .link a{
        Font-family:"times new romans";
        font-size:20px;
        text-decoration:none;
    }

    .link:hover{
        text-decoration:underline;
    }

    </style>
    </head>
    <body>
<div class="utama">
<div class="satu">
    <h1>Daftar Penjualan Kebutuhan<h1>
        <img src="Aqua-Mineral-water-1.5Ltr.jpg">
        <img src="bango-kecap-manis-275ml.webp">
        <img src="Tropical-Minyak-Goreng-2Lt.jpg">
        <img src="OIP (7).jpeg">
</div>

<div class="dua">
    <form action="#">
        <div class="kendali">
            <input name="Nomor telepon" type="text" placeholder="nomor telepon">
        </div>
        <div class="kendali">
            <input name="Email" type="password" placeholder="Email">
        </div>
        <div class="surat">
        <button>Kirim</button>
        </div>
        <div class="link">
        <a href="#">Google</a>
        </div>
    </form>
</div>
</div>
</html>
</body>