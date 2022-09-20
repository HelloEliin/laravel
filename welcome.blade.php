<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">
<br>
<br>
<h1>WATERMARK</h1>
<form method="post" action="{{route('upload.uploadfile')}}" enctype="multipart/form-data"><br><br>
  @csrf
  Välj fil att ladda upp:
  <br>
  <br>
  <input type="file" name="file">

<br>
<br>
  
        <label for="stamp">Välj färg på loggan: </label> <br><br>

         <select name="stamp" id="stamp">
         <option value="svart">Svart</option>
         <option value="vit">Vit</option>
         </select>
         <br>
         <br>
         <br>

         <label for="size">Välj storlek: </label> <br><br>

         <select name="size" id="size">
         <option value="facebook">Facebook</option>
         <option value="instagram">Instagram</option>
</select>
<br>
<br>     <input type="submit" value="Skapa!" name="submit"><br><br>


</form>
</body>
</html>
