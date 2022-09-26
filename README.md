# Aplikasi Sistem Informasi Kepegawaian

Aplikasi Sistem Informasi Kepegawaian ini dibuat dengan PHP native dan template bootstrap, kebutuhan utama aplikasi ini adalah untuk 
management sistem informasi kepegawaian tingkat kecamatan, aplikasi ini mempunyai 3 hak akses yaitu admin, camat, pegawai.

Terdapat beberapa menu - menu utama dari aplikasi ini:

Admin
- Dashboard
- Absensi Pegawai
- Pegawai Honorer
- Pegawai Pns
- Surat Cuti
- Surat izin
- Surat Pensiun
- Laporan Absensi dan Data Pegawai
  disini saya menggunakan library html2pdf
- Hak Akses

Camat
- Dashboard
- Surat Cuti
- Surat Izin
- Surat Pensiun

Pegawai
- Dashboard
- Pegawai Honorer => jika pegawai honorer
- Pegawai PNS => jika pegawai pns
- Surat Cuti
- Surat Izin
- Surat Pensiun


Di hak akses admin dan camat surat adalah surat yang diajukan oleh pegawai yang berjenis surat cuti, surat izin, surat pensiun. 
Dan tugas admin dan camat menyetujui atau menolak surat yang diajukan oleh pegawai
