<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="SpremiAdresu2.php">
    <input type="text" name="ime" class="watermark" value="Unesite ime:"><br>
    <input type="text" name="prezime" class="watermark" value="Unesite prezime:"><br>
    <input type="text" name="ulica" class="watermark" value="Unesite ulicu:"> Broj: <input type="number" name="broj" value=""><br>
    <p><textarea name="primjedba" rows="4" cols="30"></textarea> Primjedba <br></p>
    <p>Grad:<br>
        <select name="grad">
            <option value="Zagreb" selected>Zagreb</option>
            <option value="Split">Split</option>
            <option value="Dubrovnik">Dubrovnik</option>
            <option value="Karlovac">Karlovac</option>
        </select><br><br></p>
    <p>Spol:<br>
        <input type="radio" name="spol" value="x">Muško<br>
        <input type="radio" name="spol" value="y">Žensko<br><br></p>
    <p>Prijatelj:<br>
        <input type="checkbox" name="prijatelj" value="e"><br><br></p>
    <input type="submit" value="Spremi">
    <input type="reset" value="Odustani">
</form>
</body>
</html>