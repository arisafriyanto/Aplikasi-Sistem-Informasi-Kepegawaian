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
                <div style='padding-left: 200px; text-align: center; font-size:20px;'><br><br/>
                        Tandun, ". date("d F Y") ." <br><br>
                        Kepada Yth,<br>
                        CAMAT TANDUN
                    </div>
                    <br><br><br><br><br><br><br><br><br>
                    <br><br><br>

                    <div style='text-align: center; font-size:20px;'>
                    Saya yang bertanda tangan dibawah ini :<br/><br>
                    </div>

                ";


                $no = 1;
                $sql = mysqli_query($conn, "select * from keperluan where id_keperluan='$id_keperluan'");
                while ($data = mysqli_fetch_assoc($sql)) {


$content .= "

                <div style='padding-left: 180px; text-align: center; font-size:20px;'>

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
                        <td>Satuan Organisasi</td>
                        <td>:</td>
                        <td>KANTOR CAMAT TANDUN</td>
                    </tr>
                </table>
                </div><br><br><br><br><br><br>


                <div style=' padding-left: 20px; text-align: center; font-size:18px;'>
                    Dengan ini mengajukan permintaan cuti tahunan<br><br>
                    dari tanggal ".date('d F Y', strtotime($data['dari_tgl'] ))." s/d  ".date('d F Y', strtotime($data['sampai_tgl'] ))." , keperluan $data[kep].<br><br>
                    Demikian permohonan cuti ini kami ajukan untuk dapat dipertimbangkan,<br><br>
                    dan atas dikabulkannya permohonan ini saya ucapkan terima kasih.<br><br><br><br><br><br><br><br><br>
                </div>


                <div style=' padding-left: 300px; text-align: center; font-size:19px;'>
                    Hormat Saya,<br><br><br><br><br><br><br>
                    ". strtoupper($data['nama']) ."
                </div>

            </page>

            ";
        }




require __DIR__.'/../assets/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output('Laporan_barang.pdf');
