<?php
session_start();

// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_soal";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}

       if(isset($_POST['submit'])){
            $pilihan=$_POST["pilihan"];
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;
            $alami=0;
            
            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    $query=mysqli_query($koneksi, "select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                    
                    $cek=mysqli_num_rows($query);
                ?>   
                                   <?php
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                
                $result=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y'");
                $jumlah_soal=mysqli_num_rows($result);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);
                 ?>
                 

                <?php
            }
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <form method="post">
        <title>pemeriksaan covid smk wikrama</title>
        <meta charset= "utf-9">
        <link rel="stylesheet" href="style.css">
    <form method="post">
    <style type="text/css">
        
        body{
            font-family:all;
            width: 100%;
            background: linear-gradient(to left, #8b00b8, #8A2BE2 ,#BA55e3 );
            width: 100%;
            height: 100%;
            background-color: purple;
        }      
         .t{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 40px;
            text-decoration: underline; 
            }
        .ti{
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            text-decoration: none; 
            text-align: center;
            font-size:50px;
            margin-top: 20%;
            }
            .tii{
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 40px;
            text-decoration: underline; 
            font-family: monospace;
            
            }
             .mo{
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 30px;
            text-decoration: underline; 
            }

             .moo{
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 20px;
            text-decoration: underline; 
            }


            .i{
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 30px;
            text-decoration: underline; 
            }
             .ii{
            position: absolute;
            top: 85%;
            left: 45%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 30px;
            text-decoration: underline; 
            }
             .iii{
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 30px;
            text-decoration: underline; 
            }
             .iiii{
            position: absolute;
            top: 85%;
            left: 54%;
            transform: translate(-50%,-50%);
            color: white;
            font-size: 30px;
            text-decoration: underline; 
            }
            .banner-text{
    width: 100%;
    position: absolute;
}
 .q{
    position: absolute;
    width: 250px;
    height: 50px;
    border-style: solid;
    border-width: 2px;  
    border-color: white;
    border-radius: 10px;
    top: 81%;
    left: 40%;
}

banner-text {
    height: 50px;
    float: right;
     display: inline-block;
    padding: 40px 15px;
    text-transform: uppercase;
    color: #fff;
    font-size: 20px;
    }

    }
    </style>
    <!-- Global style END -->

</head>
<body >
    <header class="header">
    <div class="banner-text">
        <table border="0">
           <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td>
        </table>
         <table border="0">
           <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        </table>

       <table class="moo"  align="center"  border="0"  width="100%">
           <tr>
               <td align="center" ><h1>BIODATA</h1></td>
               
           </tr>
           <tr>
               <td  align="center" ><?php echo "Nama  :  ".$_SESSION['nama']; ?></td>  
           </tr>
           <tr>
               <td  align="center" ><?php echo "Umur    :         ".$_SESSION['umur']; ?></td> 
           </tr>
           <tr>
               <td  align="center"><?php echo "Jenis kelamin        : ".$_SESSION['jk']; ?></td>  
           </tr>
           <tr>
               <td   align="center" ><?php echo "Alamat         :       ".$_SESSION['almt']; ?></td>
           </tr>

       </table>
       <table border="0">
           <tr>
               <td></td>
               
           </tr>
           <tr>
               <td></td>  
           </tr>
           <tr>
               <td></td> 
           </tr>
           <tr>
               <td></td>  
           </tr>
           <tr>
               <td></td>
           </tr>

       </table>
        <div class="ti" align="center">
               <?php
            echo "
                <tr>
                <td>Resiko anda untuk tertular penyakit wabah COVID 19</td>
                </tr>
                </table>
                </div>";
        ?>

    </div>
    <div class="tii" align="center">
    <?php 
    
                    $salah ;
                    if($salah < 8){
                    echo "<h3>RENDAH</h3>";
                    }elseif($salah < 15){
                    echo "<h3>SEDANG</h3>";
                    }else{
                    echo "<h3>TINGGI</h3>";
                        }
                    
            ?>
            </div>
    
          
        
        <div class="q"></div>
            <div class="" align="center">
            <a class="ii" href="logout.php">Mulai</a>
             <a class="iii" href="logout.php">Lagi</a>
              <a class="iiii" href="logout.php">Yuk </a>
        </div>
        </header>
</body>
</html>