<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah </h1>
        <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" />
                </p>
                <p>
                    <label for="nama_jurusan">Nama Jurusan :</label>
                    <select name="jurusan">
                        <option value="RPL">RPL</option>
                        <option value="busana">busan</option> 
                        <option value="boga">boga</option>
                        <option value="TSM">TSM</option>
                        <option value="TL">TL</option>
</select>
                <p>
                    <label for="tahun">Tahun :</label>
                    <input type="text" name="tahun" />
                </p>
                <p>
                    <label for="nominal">Nominal :</label>
                    <input type="number" name="nominal" />
                </p>
                <p>
                    <input type="submit" value="Tambah siswa" name="tambah_siswa" />
                </P>
</fieldset>
</form>
</body>
</html>