<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $mobil = $_POST['mobil'];
        $jenis = $_POST['jenis'];
        $pinjam = $_POST['pinjam'];
        $plat = $_POST['plat'];
        $kembali = $_POST['kembali'];
        $supir = $_POST['supir'];
        $jamin = $_POST['jamin'];
   
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
} 
 
?>
<html>
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NIk</th>
            <th>Agama</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$jk"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td><?php echo "$pinjam"; ?> </td>
                <td><?php echo "$kembali"; ?> </td>
            </tr>
        </tr>
        
        <tr>
            <th colspan="7">Rincian Biaya</th>
        </tr>

        <tr>
            <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Agama</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>  
        </tr> 
    </table>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    
    <button  onclick="window.print()" >Print</button>

</div>
</fieldset>
</html>