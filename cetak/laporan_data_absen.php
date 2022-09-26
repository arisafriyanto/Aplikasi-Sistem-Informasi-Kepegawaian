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
                <div style='padding: 20px 0 10px 0; text-align: center; font-size:20px; '>
                    Laporan Kehadiran Pegawai Kantor Kecamatan<br>
                    Tandun Bulan April Tahun 2020
                </div><br><br>

                <table border='1px' cellpadding='0' cellspacing='0' class='table' >
                <tr style='text-align: center;'>
                    <th style='font-size: 12px'>No</th>
                    <th style='font-size: 12px'>Nama</th>
                    <th style='font-size: 12px'>Nip/Pangkat</th>
                    <th style='font-size: 12px'>Jenis kelamin</th>
                    <th style='font-size: 12px'>Agama</th>
                    <th style='font-size: 12px'>Izin</th>
                    <th style='font-size: 12px'>Sakit</th>
                    <th style='font-size: 12px'>Dinas Daerah</th>
                    <th style='font-size: 12px'>Dinas Luar</th>
                    <th style='font-size: 12px'>Cuti</th>
                    <th style='font-size: 12px'>Tanpa Keterangan</th>
                </tr>";

                    $no = 1;
                        $sql = mysqli_query($conn, "select * from absen INNER JOIN pegawai ON absen.id_pegawai = pegawai.id_pegawai");
                    while ($data = mysqli_fetch_assoc($sql)) {
                        $content .= '
                            <tr style="text-align: center;">
                            <td style="font-size: 12px" align="center">'.$no++.'</td>
                            <td style="font-size: 12px" align="center">'.$data['nama'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['nip'].' '.$data['pangkat'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['jk'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['agama'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['izin'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['sakit'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['dd'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['dl'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['cuti'].'</td>
                            <td style="font-size: 12px" align="center">'.$data['tk'].'</td>
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
$html2pdf->output('Laporan_data_absensi.pdf');
