<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add student</title>
</head>
<body>
    <form action="{{ url('/students/store')  }}" method="post">
    @csrf 
    <label for="nis">NIS</label>
    <br>
    <input type="text" name="nis" id="nis">
    <br><br>
    <label for="name">Nama</label>
    <br>
    <input type="text" name="name" id="name">
    <br><br>
    <label for="nis">Jenis Kelamin</label>
    <br>
    <input type="radio" name="gender" id="Laki-laki" value="Laki-laki">
    <label for="Laki-laki">Laki-Laki</label>
    <br>
    <input type="radio" name="gender" id="perempuan" value="perempuan">
    <label for="perempuan">Perempuan</label>
    <br><br>

    <label for="religion">Agama</label>
    <br>
    <input type="text" name="religion" id="religion">
    <br><br>
    <label for="birth_day">Tanggal lahir</label>
    <br>
    <input type="date" name="birth_day" id="birth_day">
    <br><br>
    <label for="nis">Nama kelas</label>
    <br>
    <input type="text" name="class" id="class">
    <br><br>
    <label for="address">Alamat</label>
    <br>
    <textarea name="address" id="address" cols="30" rows="6"></textarea>
    <button type="submit">Simpan</button>
    <br><br>
    


    </form>
</body>
</html>