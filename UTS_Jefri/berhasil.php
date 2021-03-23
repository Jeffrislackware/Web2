<html>
<head>
    <title>Data Pasien Virus Covid-19</title>
</head>
<style>
    table td, table th {
        border: 1px solid black;
        padding: 8px;
    }
</style>
<body style="background-color: silver">
    <div style="width: 70%; background-color: white; margin: 10px auto; padding: 20px;"> 

        <?php
        $wilayah = $_POST['wilayah'];
        $nama = $_POST['namaoperator'];
        $nim= $_POST['nimmhs'];
        $positif = $_POST['jumlahpositif'];
        $dirawat = $_POST['jumlahdirawat'];
        $sembuh = $_POST['jumlahsembuh'];
        $meninggal = $_POST['jumlahmeninggal'];

        switch ($wilayah) {
            case "jakarta":
            $wilayah = "DKI Jakarta";
            break;

            case "jabar":
            $wilayah = "Jawa Barat";
            break;

            case "banten":
            $wilayah = "Banten";
            break;

            case "jateng":
            $wilayah = "Jawa Tengah";
            break;
        }

        function tgl ($tanggal) {
            $bulan = array (
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $tanda = explode('-', $tanggal);
            return $tanda[2] . ' ' . $bulan[(int)$tanda[1] ] . ' ' . $tanda[0];
        }

        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i:s");
        ?>
        
        <center>
            <td>
                <h1>
                    <?php
                    echo "Data Pemantauan Covid 19 wilayah $wilayah<br>";
                    echo "Per " . tgl(date('Y-m-d'));
                    echo " ".$jam."<br>";
                    echo "$nama / $nim";
                    ?>
                </h1>
                

            </td>
            <tr><br></tr>
            <tr><br></tr>
            <table style="width: 100%; border: 1px solid black;">
                <tr>
                    <td>Positif</td>
                    <td>Dirawat</td>
                    <td>Sembuh</td>
                    <td>Meninggal</td>
                </tr>

                <tr>
                    <td><?php echo $positif; ?></td>
                    <td><?php echo $dirawat; ?></td>
                    <td><?php echo $sembuh; ?></td>
                    <td><?php echo $meninggal; ?></td>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>