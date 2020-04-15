    <?php 
        session_start();
        if (isset($_POST['Mulai'])) {
            $_SESSION['nama'] = $_POST['nama'];
             $_SESSION['umur'] = $_POST['umur'];
              $_SESSION['jk'] = $_POST['jk'];
               $_SESSION['almt'] = $_POST['almt'];
            echo "<script>alert('selamat Mengerjakan...');
        document.location.href = 'soal.php';</script>";
    }

    ?>
<!DOCTYPE html>
<html>
	<head>
        <form method="post">
		<title>pemeriksaan covid smk wikrama</title>
        <meta charset= "utf-9">
        <link rel="stylesheet" href="style.css">
	</head>
	<form method="post">
		<body>
            <link type="text/css" rel="stylesheet" href="asset/css/materialize.css">
    <style type="text/css">
        .eror{
            color: red;
        }

        body {
            background: #fff;
        }
        .bg::before {
            content: '';
            background-image: url('image/wall.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            position: absolute;
            z-index: -1;
            opacity: 1.5;  
            height:100%;
            width:100%;
        }
        @media only screen and (min-width: 993px) {
            .container {
                width: 60%!important;
            }
        }
        .container {
            max-width: 59%;
            margin-top: 2.5rem;
        }
        #logo {
            display: block;
            margin: -20px auto -5px;
        }
        img {
            border-radius: 50%;
            margin: 0 auto;
            width: 100px;
            height: 100px;
        }
        #login {
            margin-top: -2%;
        }
        #smk {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .batas {
            border-bottom: 1px dotted #999;
            margin: 0 auto;
            width: 100%;
        }
        #title {
            margin: 5px 0 35px;
        }
        .btn-large {
            font-size: 1.25rem;
            margin: 0;
        }
        #alert-message {
            border-radius: 3px;
            color: #f44336 ;
            font-size: 1.15rem;
            margin: 15px 15px -15px;
        }
        .error {
            padding: 10px;
        }
        .upss {
            font-size: 1.2rem;
            margin-left: 20px;
        }
        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            -webkit-transform: translate3d(0, -50px, 0);
            -ms-transform: translate3d(0, -50px, 0);
            transform: translate3d(0, -50px, 0);
            -webkit-transition: -webkit-transform .5s ease-out;
            -ms-transition: -webkit-transform .5s ease-out;
            transition: transform .5s ease-out;
        }
        .pace.pace-active {
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .pace .pace-progress {
            display: block;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 3px;
            background: #2196f3;
            pointer-events: none;
        }
        noscript {
            color: #42a5f5;
        }
       .input-field label {
            font-size: 1.2rem;
        }
        .input-field label.active {
            font-size: 1rem;
        }
    </style>
    <!-- Global style END -->

</head>
<!-- Head END -->

<!-- Body START -->
<body class="blue-grey lighten-3 bg">

    <!-- Container START -->
    <div class="container">

        <!-- Row START -->
        <div class="row">

            <!-- Col START -->
            <div class="col s12 m6 offset-m3 offset-m3">

                <!-- Box START -->
                <div class="card-panel z-depth-2" id="login">

                    <!-- Row Form START -->
                    <div class="row">
                         <!-- Logo and title START -->
                    <div class="col s12">
                
                    </div>
                    <!-- Logo and title END -->
   <div class="col s12">
                        <div class="card-content">
            <div class="login-box">

			    <h2 align="center">Ayo Cari tahu</h2>
                <h4 align="center">Kuat tubuh anda terhadap COVID-19</h4>
                            <div class="textbox">
                    <i class ="fas fa-user"></i>

                    <div class="input-field col s12">
                   <i class="material-icons prefix md-prefix">account_circle</i>
                    <input id="nama" placeholder="nama" type="text" class="nama" name="nama" >
                  <label for="nama" ></label>

                  <span class="eror">
                    <?php
                    if(isset($_GET["errnama"]))
                    {
                        $err = $_GET["errnama"];
                        echo $err;
                    }
                    ?>    
                   </span>
                   <br/>
                   </div>


                   <div class="input-field col s12">
                  <i class="material-icons prefix md-prefix"></i>
                  <input id="umur" placeholder="umur" type="text" class="umur" name="umur" ">
                  <label for="umur"></label>
                  <span class="eror">
                    <?php
                    if(isset($_GET["errumur"]))
                    {
                        $err = $_GET["errumur"];
                        echo $err;
                    }
                    ?>    
                   </span>
                   <br/>
                 </div>


                 <div class="input-field col s12">
                  <i class="material-icons prefix md-prefix"></i>
                  <input id="jk" placeholder="jenis kelamin" type="text" class="jk" name="jk" ">
                  <label for="jk"></label>
                   <?php
                    if(isset($_GET["errjk"]))
                    {
                        $err = $_GET["errjk"];
                        echo $err;
                    }
                    ?>    
                   </span>
                   <br/>
                 </div>


                 <div class="input-field col s12">
                  <i class="material-icons prefix md-prefix"></i>
                  <input id="almt" placeholder="alamat" type="text" class="almt" name="almt" ">
                  <label for="almt"></label>
                   <?php
                    if(isset($_GET["errualmt"]))
                    {
                        $err = $_GET["erralmt"];
                        echo $err;
                    }
                    ?>    
                   </span>
                   <br/>
                 </div>

                 
                  <div class="input-field col s12">
                <button type="submit" class="btn-large waves-effect waves-light blue-grey col s12" name="Mulai">Mulai
                        </div>
		</body>
	</form>
</html>


