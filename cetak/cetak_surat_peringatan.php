<?php

require "../functions.php";

$id_absen = $_GET['id_absen'];



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
                    Surat Peringatan<br>
                    Nomor: ..../TDN-UM/....<br><br><br>
                    </div>
                    ";
                    


                    $no = 1;
                    $sql = mysqli_query($conn, "select * from absen where id_absen='$id_absen'");
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
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>$data[jk]</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>$data[agama]</td>
                        </tr>
                    </table>
                    </div><br><br><br><br><br><br>
    
                    <div style=' padding-left: 20px; text-align: center; font-size:18px;'>
                        Dengan adanya surat ini Kami Camat Tandun Berdasarkan Absensi<br><br>
                        anda sudah tidak masuk tanpa keterangan 5 kali dalam satu bulan.<br><br>
                    Demikian surat peringatan ini kami memperingatkan tidak terjadi lagi,<br><br>
                    dan atas kerja samanya kami ucapkan terima kasih.<br><br><br><br><br><br><br><br><br>
                    </div>
    
    
    
                    <div style=' padding-left: 300px; text-align: center; font-size:19px;'>
                    DiKeluarkan di : Tandun<br><br>
                    Pada Tanggal : ". date("d M Y") ."<br><br>
                        CAMAT TANDUN,<br><br><br><br><br><br><br>
                        MUHAMMMAD RODI,S.Sos<br>
                        Penata TK.I<br>
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
