<?php
   $KONEKSI = mysqli_connect("localhost","root","","db_blog");
   if (isset($_GET['id'])) {
   	$id= abs($_GET['id']);
   }else{
   	$id = 1;
   }
   $data_array = mysqli_fetch_array(mysqli_query($KONEKSI,"SELECT * FROM tb_artikel WHERE id='$id'"));
   $query_all = mysqli_query($KONEKSI,"SELECT * FROM tb_artikel");
   while ($array_all = mysqli_fetch_array($query_all)) {
 ?>
 <!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<head>
	<title>ARKVAIN</title>
</head>

<style type="text/css">
   .p-4 p-md-3 mb-4 {


}
</style>
<body>
	  <div class="p-4 p-md-3 mb-4" style="
height: 383px;
background-image: linear-gradient(90.03deg, rgba(66, 118, 195, 0.17) 0.03%, rgba(255, 255, 255, 0) 88.54%), url('Resource/Rectangle2.png') ;">
	<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-weight: bold; color: #1252B8;">
    	 <img src="Resource/Logo.png" alt="" width="54" height="54">
    ARKVAIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="font-weight: bold; color: #1252B8;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-5" href="#" style="font-weight: bold; color: #1252B8;">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-weight: bold; color: #1252B8;">Works</a>
        </li>
      </ul>
  </div>
</nav>


    <div class="col px-3 my-3">
      <h2 class=" md-7" style="color: #1252B8;">Designer in Imager <br> Make Things Better</h2>
      <p  class=" my-4" >i am a designer who want to make your things <br> better whitch mean you can behappy</p>
      <button type="button" class="btn" style="background: linear-gradient(90deg, #3570EF 0%, #1554AF 104.79%);"> <a style="color: #FFFFFF;">Click Here</a>
      </button>
    </div>
  </div>
  <h3 class="px-5" style="
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            color: #7390CD;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
    </svg>  MY PROJECT</h3> <h3 style="position: absolute;
                                      left: 755px;
                                      top: 406px;
                                      font-style: normal;
                                      font-weight: bold;
                                      font-size: 18px;
                                      text-align: center;
                                      color: #6795F6;">LOAD MORE</h3>
    <h3 style="position: absolute;
width: 1000px;
left: 1048px;
top: 410px;
font-style: normal;
font-weight: bold;
font-size: 18px;
color: #7390CD;">
TOP ARTHICLES</h3>
<div class="row my-4 px-5">
  <div class="col-sm-3 px-auto ">
    <div class="card border-0">
    	  <img src="Resource/Rectangle 19.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">logo Maker</h5>
        <p class="card-text">Making Logo Instanly just 2-3 Days</p>
      </div>
    </div>

    <div class="card py-3 border-0">
    	  <img src="Resource/Rectangle 15.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Website Design</h5>
        <p class="card-text">Making Logo Instanly just 2-3 Days</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 px-4">
    <div class="card border-0">
    	<img src="<?=$array_all['gambar']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Design Illustrator</h5>
        <p class="card-text"> Information technology, or in English known as Information technology is a general term for any technology that 
                              helps humans create, change, store, communicate and / or disseminate information.</p>
      </div>
    </div>
  </div>
    <div class="card bg-light border-0" style="max-width: 35rem; margin-left: 2px;">
  <div class="card-body">
  	<img src="Resource/Rectangle 4.png" class="card-img py-3" alt="...">

  	<img src="Resource/Rectangle 5.png" class="card-img py-3" alt="...">

  	<img src="Resource/Rectangle 14.png" class="card-img py-3" alt="...">
    
  </div>
</div>
</div>
<div class="" style=" width: all;
                      height: 459px;
                      left: -6px;
                      top: 1257px;
                      background: linear-gradient(90deg, #E0EDFF 0%, #C8DFFF 100%);">
                      <h3 style="position: absolute;
width: 270px;
height: 42px;
left: 520px;
top: 1475px;
font-style: normal;
font-weight: bold;
font-size: 36px;
line-height: 42px;
text-align: right;

color: #1651B2;">WHAT IT IS ?</h3>
         <p class = "" style="position: absolute;
                   width: 773px;
                   height: 84px;
                   left: 575px;
                   top: 1575px;
                   font-style: normal;
                   font-weight: normal;
                   font-size: 24px;
                   line-height: 28px;color: #1651B2;"> 
                   Information technology, or in English known as Information technology is a general term for any technology that helps humans create, change, store, communicate and / or disseminate information.</p>
                   <h3 style="position: absolute;
width: 200px;
height: 28px;
left: 564px;
top: 1790px;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 28px;

color: #1651B2;">LEARN MORE</h3>

        <img src="Resource/874ec0acd78a4011dbdbd95df50a348b 1.png" style="
                      width: 498px;
                      height: 459px;
                      left: 59px;
                      top: 1257px;">	

</div>
</body>
<footer style="background: linear-gradient(90deg, #E0EDFF 0%, #ECF2FE 100%);">
<?php } ?>
</html>