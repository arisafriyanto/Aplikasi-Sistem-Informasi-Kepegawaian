<?php

require "../functions.php";

$id_keperluan = $_GET['id_keperluan'];



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
            <img src='../assets/images/riauu.jpg' style='float: left; width: 80px;'>
                <div style='padding-right: 140px; text-align: center; font-size:20px;'>
                    Pemerintah Kabupaten Rokan Hulu<br>
                    KECAMATAN TANDUN<br>
                    alamat : jln.jend.sudirman no.1 Telp(0762).............. kode pos 28454<br><br>
                    </div>
                    <hr><br><br>

                    <div style='text-align: center; font-size:20px;'>
                    Surat Pensiun<br>
                    Nomor: ..../TDN-UM/....<br><br><br>
                    Yang bertanda tangan dibawah ini :
                    </div><br><br>
                    ";
                    


                $no = 1;
                $sql = mysqli_query($conn, "select * from keperluan where id_keperluan='$id_keperluan'");
                while ($data = mysqli_fetch_assoc($sql)) {


$content .= "

                <div style='padding-left: 265px; text-align: center; font-size:20px;'>

                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>$data[nama]</td>
                    </tr>
                    <tr>
                        <td>Nip</td>
                        <td>:</td>
                        <td>$data[nip]</td>
                    </tr>
                    <tr>
                        <td>Pangkat</td>
                        <td>:</td>
                        <td>$data[pangkat]</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>$data[tempat]</td>
                    </tr>
                </table>
                </div><br><br><br><br><br><br>

                <div style=' padding-left: 20px; text-align: center; font-size:18px;'>
                    Dengan ini saya mengajukan untuk pensiun dikarenakan saya memasuki<br><br>
                    masa pensiun sebagai pegawai genap berusia 60 (enam puluh tahun) tahun.<br><br><br><br/>
                    Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana,<br><br>
                    mestinya.<br><br><br><br><br><br><br><br><br>
                </div>


                <div style=' padding-left: 300px; text-align: center; font-size:19px;'>
                    Hormat Saya,<br><br><br><br><br><br><br>
                    ". strtoupper($data['nama']) ."<br>
                    Nip : $data[nip]
                </div>

            </page>

            ";
        }




require __DIR__.'/../assets/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output('Laporan_barang.pdf');
