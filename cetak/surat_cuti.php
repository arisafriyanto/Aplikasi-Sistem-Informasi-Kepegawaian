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
                    Surat Cuti<br>
                    Nomor: ..../TDN-UM/....<br><br><br>
                    Kami Camat Tandun berdasarkan permohonan yang bersangkutan<br>
                    dengan ini memberikan izin Cuti Tahunan kepada :<br><br>
                    </div>
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
                        Dengan adanya surat cuti ini saya akan libur ". selisih_tanggal($data['dari_tgl'], $data['sampai_tgl']) ." hari di mulai dari tanggal ".date('d F Y', strtotime($data['dari_tgl'] ))." <br><br>
                        s/d  ".date('d F Y', strtotime($data['sampai_tgl'] ))." , keperluan $data[kep] dengan ketentuan semua tugas<br><br>
                        dan tanggung jawab di serahkan ke atasan.<br><br>
                    Demikian surat cuti ini kami ajukan untuk dapat dipertimbangkan,<br><br>
                    dan atas dikabulkannya permohonan ini saya ucapkan terima kasih.<br><br><br><br><br><br><br>
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
