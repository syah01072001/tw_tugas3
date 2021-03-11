<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buka-Buku</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Buka-Buku : Situs Jual Buku, Komik, dan Novel Terpercaya!!!</h1>
	</div> <!--/ .header -->
	
	<ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="kontak.html">Kontak</a></li>
			<li><a href="login.html">Login</a></li>
        </ul>
	
	<div class="main">
		<div class="left">
			<h3>Lihat Buku Lainnya</h3>
			<p>
				<ul>
					<li><a href="">Orang-orang Terbungkam karya Albert Camus</a></li>
					<li><a href="">Misteri Karibia karya Agatha Cristie</a></li>
					<li><a href="">Matinya Lord Edgware karya Agatha Cristie</a></li>
					<li><a href="">Love Life </a></li>
				</ul>
			</p>
		</div> <!--/ .left -->
		
		<div class="middle">
		 <h2>Deret Aritmatika</h2>
    <form action="deret-aritmatika.php" method="POST">

                <div class="box-login">
            
            <input type="number" placeholder="Masukkan Angka Pertama" name="bil1">
          </div>
		  
          <div class="box-login">
            <input type="number" placeholder="Masukkan Angka Kedua" name="bil2">
          </div>
		  
		  <div class="box-login">
            <input type="number" placeholder="Masukkan Jumlah Deret "name="jmlh">
          </div>
          <button type="submit" name="hitung" class="btn-login">Hitung</button>

<?php
		if(isset($_POST['hitung'])){
			$c = $_POST['bil1'];
			$d = $_POST['bil2'];
			$n = $_POST['jmlh'];

			$beda = $d - $c;
			$output = $c+ ($n - 1)* $beda;
			echo "suku ke- $n bilangan tersebut adalah $output" ;

			echo "<br>Barisan Angka : $c $d"; 
			
			for ($i=$c; $i<=$n-1; $i++)
			{

			$output = $c + $beda;
			echo " $output";
			
			$c = $d;  
			$d = $output; 
			}
		}
		?>
		  
	</form>
	</div> <!--/ .main -->
	  
	
	<div class="footer">
		<p>Copyright 1915101003 </a></p>
	</div> <!--/ .footer -->
</div>
</body>
</html>
