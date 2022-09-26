<?php

require "../functions.php";


$content = "

<style>
    .table {
        border-collapse::collapse;                    
    }
    .table th{
        padding: 8px 5px;
        background-color:white;
    }
    .table td{
        padding: 3px;
    }
    img {
        width: 50px;
    }
</style>

";

$content .= "

<page>
    <div style='padding: 20px 0 10px 0; text-align:center; font-size:20px; '>
        Update Data PNS Dilingkungan Pemerintahan Kabupaten Rokan Hulu<br>
        Keadaan Bulan April Tahun 2020
    </div><br><br>

    <table border='1px' cellpadding='0' cellspacing='0' class='table' >
        <tr style='text-align: center;'>
            <th style='font-size: 10px' rowspan='2'>No</th>
            <th style='font-size: 10px' rowspan='2'>Nama</th>
            <th style='font-size: 10px' rowspan='2'>Nip</th>
            <th style='font-size: 10px' rowspan='2'>Tempat/tgl lahir</th>
            <th style='font-size: 10px' rowspan='2'>Jenis kelamin</th>
            <th style='font-size: 10px' rowspan='2'>Pangkat</th>
            <th style='font-size: 10px' colspan='2'>Klasifikasi berdasarkan jabatan</th>
            <th style='font-size: 10px' rowspan='2'>Pendidikan</th>
            <th style='font-size: 10px' rowspan='2'>Jurusan</th>
            <th style='font-size: 10px' rowspan='2'>Agama</th>
        </tr>
        <tr>
            <td style='font-size: 10px'>Fungsional Umum</td>
            <td style='font-size: 10px'>Nama Jabatan</td>
        </tr>";

        $no = 1;
        $query = mysqli_query($conn, "select * from pegawai ");
        while ($data = mysqli_fetch_assoc($query)) {
            $content .= '
                            <tr style="text-align: center;">
                                <td style="font-size: 10px" align="center">'.$no++.'</td>
                                <td style="font-size: 10px" align="center">'.$data['nama'].'</td>
                                <td style="font-size: 10px" align="center">'.$data['nip'].'</td>
                                <td style="font-size: 10px" align="center">'.$data['tempat'] .' '. date("d-m-Y", strtotime($data['tgllhr'])).'</td>
                                <td style="font-size: 10px" align="center">'.$data['jk'].'</td>
                                <td style="font-size: 10px" align="center">'.$data['pangkat'].'</td>
                                <td style="font-size: 10px" align="center">'.$data['fu'].'</td>
                                <td style="font-size: 10px" align="center"> - </td>
                                <td style="font-size: 10px" align="center">'.$data['pendidikan'].'</td>
                                <td style="font-size: 10px" align="center">'.$data['jurusan'].'</td>
                                <td style="font-size: 10px" align="center">'.$data['agama'].'</td>
                            </tr>
                        ';
        }

$content .= "       
    </table>

</page>

";




require __DIR__.'/../assets/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output('Laporan_data_pegawai.pdf');
