<!DOCTYPE html>
<html>
<body>

  <head><script src="https://kit.fontawesome.com/0fe9543042.js" crossorigin="anonymous"></script></head>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<br>
<br>
<h1>WATERMARK</h1>

<form method="post" action="{{route('upload.uploadfile')}}" enctype="multipart/form-data"><br><br>
  @csrf
  <i class="fa-solid fa-camera"></i> Välj bild: 
  <br>
  <br>
  <input type="file" name="file">
  

<br>
<br>
<br>
  
<i class="fa-solid fa-stamp"></i> <label for="stamp">Välj färg på loggan: </label> <br><br>

         <select name="stamp" id="stamp">
         <option value="svart">Svart</option>
         <option value="vit">Vit</option>
         </select>
         <br>
         <br>
         <br>
         <br>

         <i class="fa-regular fa-crop-simple"> </i><label for="size"> Välj storlek: </label> <br><br>

         <select name="size" id="size">
         <option value="facebook">Facebook</option>
         <option value="instagram">Instagram</option>
         </select>
         
<br>
<br>     <i class="fa-solid fa-arrow-down"></i>
<br>
<br>
<input type="submit" value="Skapa!" name="submit"><br><br>


</form>
</body>
</html>

