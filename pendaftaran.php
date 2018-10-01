<!DOCTYPE html>
<html>
<head>
    <title>form pendaftaran</title>
</head>
<body>
    <form action="no.php" method="POST">
    <h1>Pendaftaran Mahasiswa</h1>
    <hr width="20%" align="left">
    <p>Isilah form pendaftaran berikut </p>
    <table>
    	<tr>
    	    <td valign="top">Nim</td>
    	    <td><input type="number" maxlength="10" name="nim"></td>
    	</tr>
    	
    	<tr>
               <td valign="top">Nama</td>
               <td><input type="text" maxlength="25" name="Nama"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Email</td>
    	    <td><input type="email" name="email" placeholder="@gmail.com"></td>
    	</tr>
        <tr>
            <td valign="top">Komentar</td>
            <td><input type="text" name="Komentar" ></td>
        </tr>
        <tr>
    	    <td colspan="2"><input type="submit" value="Kirim" name="submit"></td>
    	</tr>
    </table>
</body>
</html>