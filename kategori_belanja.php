<?php include 'includes/header.php'; ?>
<div style="background: linear-gradient(to bottom, #e3eaf2); min-height: 100vh;">

<div class="container-fluid" style="padding-top: 100px; min-height: 80vh;">
  <div class="row d-flex align-items-stretch" style="min-height: 80vh;">
  
    <div id="sidebar" class="col-lg-3">
      <div class="position-sticky" style="top: 100px;">
        <div class="card p-2" style="max-height: calc(100vh - 150px); overflow-y: auto;">
          <?php include 'includes/side_menu2.php'; ?>
        </div>
        <button id="sidebarToggle" class="btn btn-primary toggle-btn">
          <span id="arrow">⮜</span>
        </button>
      </div>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="col-lg-9">

      <!-- Card: gabungan judul + konten -->
      <div  id="mainContent" class="card shadow-sm" style="height: 80vh; overflow-y: auto; z-index: 3;">

        <!-- Judul sticky DI DALAM card -->
        <div class="card-header bg-light text-dark position-sticky z-3" style="top: 0;">
          <h4 class="fw-bold text-uppercase fs-3 mb-0" style="color: #113F67; text-align: center;">
            Pedoman Administrasi Keuangan Sensus dan Survei
          </h4>
        </div>

        <!-- Isi konten yang bisa discroll -->
        <div class="card-body">
          <div class="tab-content" id="v-pills-tabContent">
                <!-- Belanja Konsumsi Rapat -->
                <div class="tab-pane fade show active" id="pills-0" role="tabpanel">
                    <h4>Belanja Konsumsi Rapat</h4>
                        <p><b>Pengertian</b></p>
                        <p>Satuan Biaya Konsumsi Rapat merupakan satuan biaya yang digunakan untuk kebutuhan biaya pengadaan makan dan kudapan termasuk minuman untuk rapat/pertemuan baik untuk rapat koordinasi tingkat. menteri/eselon 1/setara maupun untuk rapat biasa dan dilaksanakan secara langsung <i>(offline)</i> paling singkat selama 2 (dua) jam.</p>
                        <p><b>Catatan Penting</b></p>
                        <ol type="1" class="justify-list">
                            <li>Rapat koordinasi tingkat menteri/eselon 1/setara adalah rapat koordinasi yang pesertanya menteri/eselon 1/pejabat yang setara.</li>
                            <li>Konsumsi Rapat berupa makan dan kudapan termasuk minuman dapat diberikan jika melibatkan unit eselon I lainnya/kementerian/lembaga lainnya/instansi pemerintah/pihak lain. Pihak lain tersebut antara lain mitra petugas sensus/survei, wartawan, dan lain sebagainya.</li>
                            <li>Konsumsi Rapat berupa kudapan termasuk minuman dapat diberikan jika melibatkan satker/eselon II lainnya/setara.</li>
                            <li>Yang dimaksud satker lainnya adalah kantor vertikal berdasarkan struktur organisasi.</li>
                        </ol>
                        <br>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 521211 - Belanja Bahan.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/11HhAuBopWYZlEc3dUtD0if0X3pBR636b?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/16aOcMMsDdy3SF63VdL2kameQB_6JRKaS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Undangan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1Ds58pai-mrIfprfDgiVB9FxMEpCvNHqA?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Daftar Hadir</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1vdUYIll0orgvn7k3fVxckkX_su4W2j3I?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Notulen</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/186C768AV_eMDPS7VKMDpGOHe0uTuCYl0?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;">6.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px; vertical-align: top;">
                                        <a href="https://drive.google.com/drive/folders/1pDX7OfB3Vu9ivWWMOKFWaRLDagIGtZIp?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;">7.</td>
                                    <td>
                                         Bukti Prestasi Pekerjaan, dapat berbentuk:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                            <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                            <li>Berita Acara Pembayaran;</li>
                                            <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                            <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                        </ol>
                                        <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1fY3CfFZwhZHQ17rHtJ48cU9OSLjmKWTY?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Surat Setoran Pajak (SSP) PPh 22 sebesar 1,5%
                                        <span class="teks-keterangan">jika membeli konsumsi di warung/toko;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1P1TGIVCbQVSReFE2R2Ffq8AHrlNkbY2Y?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>SSP PPh 23 sebesar 2%
                                        <span class="teks-keterangan">jika membeli konsumsi melalui jasa boga atau katering;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1wGipUi3gx6IboTRqpPwIi2dhna-RxMLb?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Konsumsi Rapat</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Konsumsi Rapat.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1HBYHNqqS9zYXD4QV07u_TWig1d24X63w/view?usp=sharing" target="_blank" class="btn btn-primary mb-2 w-75">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Perlengkapan Pakai Habis -->
                <div class="tab-pane fade" id="pills-1" role="tabpanel">
                    <h4>Belanja Perlengkapan Pakai Habis</h4>
                        <p><b>Pengertian</b></p>
                        <ol type="1" class="justify-list">
                            <li>Satuan biaya keperluan sehari-hari perkantoran di dalam negeri merupakan satuan biaya yang digunakan untuk kebutuhan biaya keperluan sehari-hari perkantoran berupa barang pakai habis yang secara langsung menunjang penyelenggaraan operasional dan untuk memenuhi kebutuhan minimal agar suatu kantor dapat memberikan pelayanan (melaksanakan kegiatan) secara optimal.</li>
                            <li>Barang pakai habis bersifat tidak berkelanjutan, hanya untuk satu kali kegiatan dalam jangka waktu pendek yang diperlukan dalam. pelaksanaan kegiatan non operasional seperti pameran, seminar, sosialisasi, rapat, diseminasi dan lain lain yang terkait langsung dengan <i>output</i> suatu kegiatan dan tidak menghasilkan barang persediaan.</li>
                            <li>Berdasarkan surat edaran Direktorat Akuntansi dan Pelaporan Keuangan, Direktorat Jenderal Perbendaharaan, Kementerian Keuangn Nomor: SE-6478/PB.06/2015, "untuk barang-barang yang direncanakan "habis pada satu kegiatan tidak dialokasikan dari belanja barang persediaan dan "tidak menjadi barang persediaan".</li>
                        </ol>
                        <p><b>Catatan Penting</b></p>
                        <ol type="1" class="justify-list">
                            <li>Pelaksanaan belanja perlengkapan habis pakai memperhatikan prinsip efisien, ekonomis, efektif, kewajaran dan kepatutan.</li>
                            <li>Batasan Belanja Barang Perlengkapan pakai habis yang dimaksud adalah:</li>
                            <ol type="a">
                                <li>tidak direncanakan sebagai barang persediaan;</li>
                                <li>perencanaan pengadaan hanya untuk dibagikan langsung habis. dalam sekali kegiatan saja;</li>
                                <li>tidak direncanakan akan digunakan dalam kurun waktu periode tertentu/rutin;</li>
                                <li>tidak merupakan barang yang bersifat membentuk modal/menambah asset;</li>
                                <li>tidak tersimpan/belum digunakan/tersisa saat periode Laporan Keuangan dibuat; dan</li>
                                <li>tidak memberi masa manfaat dalam periode pencatatan akuntansi dalam laporan keuangan.</li>
                            </ol>
                        </ol>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>Pada umumnya akun yang dapat digunakan dalam belanja barang perlengkapan pakai habis pada Program Penyediaan dan Pelayanan Informasi Statistik (PPIS) untuk kegiatan Sensus dan Survei adalah akun belanja barang khususnya pada akun belanja bahan (521211).</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1RTaAWfEDvVmK32YYc00Z6UoojH5rvzMZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1dcq7UEK4yOayHByphfFKaidrwwBxHykQ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;">3.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1llSlwk-d77SLop2jWkikPamACK9IxLqO?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Daftar Alokasi</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1p4DglYw-4NoUb4clEmiL8Pc0KiFPXOV4?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                        <td>
                                         Bukti Prestasi Pekerjaan, dapat berbentuk:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                            <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                            <li>Berita Acara Pembayaran;</li>
                                            <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                            <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                        </ol>
                                        <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1jXrVMNMx3e8VmYmnHi0AKEE-8AL1842t?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Faktur Pajak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1bkV56dMXqHV7UB8_fn2bkJ2gvQ-B4jbV?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>SSP PPN sebesar 11%
                                        <span class="teks-keterangan">dikenakan atas Pengusaha Kena Pajak (PKP), untuk transaksi diatas Rp2.000.000,00</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1uGeZ8VnQgj4WHwbZZ-9x2EPfItfZZG_m?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>SSP PPh 22 sebesar 1,5%
                                        <span class="teks-keterangan">dikenakan untuk transaksi di Rp2.000.000,00</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/17Ukj8rC9W2lSNPaOGcCZLf5LWt1ZyG9C?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Perlengkapan Pakai Habis</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Perlengkapan Pakai Habis.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1scZzWbHb2qnFPM1YWjiGq_slyfLUGH-P/view?usp=sharing" target="_blank" class="btn btn-primary mb-2 w-75">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Penggandaan / Pencentakan -->
                <div class="tab-pane fade" id="pills-2" role="tabpanel">
                    <h4>Belanja Penggandaan / Pencentakan</h4>
                        <p><b>Pengertian</b></p>
                        <p>Belanja penggandaan/pencetakan dilakukan untuk memenuhi kebutuhan. bahan cetakan dalam rangkaian kegiatan sensus/survei, meliputi pelatihan petugas, sosialisasi, rapat, atau diseminasi. Belanja penggandaan/pencetakan dapat berupa pencetakan kuesioner sensus/survei, <i>leaflet</i>, buku pedoman, buku publikasi, dan sebagainya.</p>
                        <p><b>Catatan Penting</b></p>
                        <ol type="1" class="justify-list">
                            <li>Proses cetak bisa dilakukan di dalam atau luar kantor dengan pertimbangan kemampuan, kerahasiaan, dan keamanan dokumen negara; dan</li>
                            <li>Jika terdapat barang sisa di akhir periode pelaporan, akan dicatat sebagai persediaan melalui:</li>
                            <ol type="a" class="justify-list">
                                <li>Ralat dokumen sumber belanja (jika waktu memungkinkan dan mempertimbangkan ketersediaan pagu anggaran); atau</li>
                                <li>Opname fisik barang.</li>
                            </ol>
                        </ol>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <ol type="1">
                            <li>521211 - Belanja Bahan</li>
                            <p>Menggunakan akun 521211 jika belanja menghasilkan barang yang pakai habis.</p>
                            <li>521811 - Belanja Barang Persediaan Barang Konsumsi</li>
                            <p>Menggunakan akun 521811 jika belanja ini menghasilkan persediaan berupa barang konsumsi.</p>
                        </ol>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1ClTsLSWgI_fw8M5_2h-7r9gs_54TApP6?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1nQbhuETqyDQCda24_ZIeoTUkkcDmwkfz?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1IFHltwPtZ0vbqJc8Sk60SJAp2jS73QHH?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                         Bukti Prestasi Pekerjaan, dapat berbentuk:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                            <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                            <li>Berita Acara Pembayaran;</li>
                                            <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                            <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                        </ol>
                                        <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1JooPLnZy-5W2db7EDektuvq19SeGlKEO?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Faktur Pajak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1HJMbTQGXnyVR6Z8RRT8ZkQ7-MRSEyPFg?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>SSP PPh sebesar 11%
                                        <span class="teks-keterangan">dikenakan atas Pengusaha Kena Pajak (PKP), untuk transaksi diatas Rp2.000.000,00</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1gIYWHQQL8WGA9mUrb_oZNg67GBJBgHM0?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>SSP PPh sebesar 1,5%
                                        <span class="teks-keterangan">dikenakan untuk transaksi di atas Rp2.000.000,00</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1k1BNpQv1_IMKtY555VSLB8rG65xdttsZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Penggandaan / Pencentakan</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Penggandaan / Pencentakan.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1hinlwZce0_NhICJwEJCOyviXhGq9SW-U/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Persediaan Barang Konsumsi -->
                <div class="tab-pane fade" id="pills-3" role="tabpanel">
                    <h4>Belanja Persediaan Barang Konsumsi</h4>
                        <p><b>Pengertian</b></p>
                        <ol type="1" class="justify-list">
                            <li>Persediaan adalah aset lancar dalam bentuk barang atau perlengkapan yang dimaksudkan untuk mendukung kegiatan operasional pemerintah, dan barang-barang yang dimaksudkan untuk dijual dan/atau diserahkan dalam rangka pelayanan kepada masyarakat. Persediaan mencakup barang atau perlengkapan yang dibeli dan simpan untuk digunakan, misalnya barang habis pakai seperti ATK, barang tak habis pakai seperti komponen peralatan dan pipa, dan barang bekas pakai.</li>
                            <li>Belanja adalah semua pengeluaran dari Rekening Kas Umum Negara yang mengurangi Saldo Anggaran Lebih dalam periode tahun anggaran bersangkutan dan tidak akan diperoleh pembayarannya kembali oleh pemerintah. Belanja Barang Persediaan Konsumsi adalah akun yang digunakan untuk mencatat belanja barang yang menghasilkan persediaan berupa barang konsumsi, seperti ATK, bahan cetakan, alat-alat rumah tangga, dan lain-lain.</li>
                            <li>Belanja Barang Persediaan Barang Konsumsi digunakan untuk mencatat belanja yang direncanakan kontinyu/berkelanjutan, tidak habis dalam sekali kegiatan, dan disimpan dalam gudang penyimpanan seperti ATK, bahan cetakan, buku-buku peraturan, dan alat-alat rumah tangga.</li>
                        </ol>
                        <p><b>Catatan Penting</b></p>
                        <ol type="1" class="justify-list">
                            <li>Barang yang dihasilkan dari realisasi belanja barang persediaan konsumsi diakui sebagai barang persediaan dan diinput dalam aplikasi Sistem Aplikasi Keuangan Tingkat Instansi (SAKTI) modul Persediaan;</li>
                            <li>Barang persediaan yang dihasilkan dari realisasi belanja barang persediaan dicatat pada laporan keuangan berdasarkan hasil opname fisik yang dituangkan dalam Berita Acara Opname Fisik;</li>
                            <li>Opname fisik dilaksanakan setiap periode pelaporan keuangan yaitu semesteran dan tahunan;</li>
                            <li>Transaksi transfer, reklasifikasi, dan koreksi nilai maupun jumlah dimungkinkan terjadi pada proses keluar masuk persediaan pada pengelolaan persediaan satker terkait. Pencatatan atas transaksi-transaksi tersebut dilakukan pada aplikasi SAKTI modul Persediaan;</li>
                            <li>Barang-barang persediaan yang diperoleh menggunakan belanja non persediaan (seperti belanja bahan) dicatat dan diakui sebagai persediaan pada aplikasi SAKTI modul Persediaan;</li>
                            <li>Barang-barang yang berupa perlengkapan kegiatan yang bersifat pakai habis, buku-buku hasil penggandaan/pencetakan yang perolehannya menggunakan belanja non persediaan (seperti belanja bahan) dan pada akhir periode pelaporan terdapat sisa dan disimpan digudang, maka dicatat dan diakui sebagai persediaan pada aplikasi SAKTI modul Persediaan;</li>
                            <li>Perlakuan ketika akun belanja non barang persediaan konsumsi menghasilkan barang persediaan adalah:</li>
                            <ol type="a">
                                <li>revisi DIPA/POK dan dokumen sumber belanja dengan pertimbangan</li>
                                <ol class="angka">
                                    <li>waktu untuk melakukan revisi masih memungkinkan;</li>
                                    <li>ketersediaan pagu/anggaran yang akan dilakukan revisi; atau</li>
                                </ol>
                                <li>melakukan penyesuaian sebagaimana diatur pada bab Perlakuan Akuntansi.</li>
                            </ol>
                        </ol>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 521811 - Belanja Persediaan Barang Konsumsi.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1BbDYNYuJ_uH9GCKd5kXmOdiOkeMJbrYa?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1y1GgAR_3-jtX9RKZmPnM-nCNaOzfq7vL?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/15Qx9BvcStSXlv1yXBsm9prro1Rl2epHS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                         Bukti Prestasi Pekerjaan, dapat berbentuk:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                            <li>Berita Acara Serah Terima Pekerjaan/Barang; dan</li>
                                            <li>Berita Acara Pembayaran;</li>
                                        </ol>
                                        <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1M4w6IrTm24K9SRYKk7Yc7AIHr5woDB07?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Faktur Pajak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1vNnH0PgsH4P_Uu5GA4lNfIqaBUoiUZ5U?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>SSP PPN sebesar 11%
                                        <span class="teks-keterangan">dikenakan atas Pengusaha Kena Pajak (PKP), untuk transaksi diatas Rp2.000.000,00</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/158LK9N4QAPYyuEwNkZx3dqNagt9DNX_H?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>SSP PPh 22 sebesar 1,5%
                                        <span class="teks-keterangan">dikenakan untuk transaksi di atas Rp2.000.000,00</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1M9a7BHRPzglaZzaJRidasbeB_O-KfXFV?usp=sharing" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Persediaan Barang Konsumsi</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Persediaan Barang Konsumsi.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1sxaBDJpzTV4t2AXhJ3CwjU-F46XB1YS_/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Honorarium -->
                <div class="tab-pane fade" id="pills-4" role="tabpanel">
                    <h4>Belanja Honorarium</h4>
                        <p class="highlight">Honor <i>Output</i> Kegiatan</p>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <ol type="a" class="justify-list">
                                <li>Honor <i>Output</i> Kegiatan merupakan honor yang dibayarkan atas pelaksanaan kegiatan yang insidentil dan dapat dibayarkan tidak terus menerus dalam satu tahun. Honor <i>output</i> kegiatan mencakup honor tim pelaksana kegiatan (pengarah, penanggung jawab, koordinator, ketua, sekretaris, anggota, dan staf sekretariat), honor petugas, honor penunjuk jalan, honor ketua SLS, kades/lurah, honor camat, honor pengajar (Innas atau Inda), dll.</li>
                                <li>Honor Tim Pelaksana Kegiatan adalah honor yang diberikan kepada seseorang yang berdasarkan Surat Keputusan Presiden/Menteri/Pejabat Setingkat Menteri/Pejabat Eselon 1/Kuasa Pengguna Anggaran (KPA) diangkat dalam suatu tim pelaksana kegiatan untuk melaksanakan suatu tugas tertentu.</li>
                            </ol>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a" class="justify-list">
                                <li>Honor tim pelaksana kegiatan dapat dibayarkan jika terdapat keterlibatan instansi atau kementerian/lembaga lain. Apabila pada bulan tertentu tidak terdapat keterlibatan atau koordinasi dengan instansi atau kementerian/lembaga lain, maka honor tim pelaksana kegiatan pada bulan tersebut tidak dapat dibayarkan.</li>
                                <li>Dalam satu tahun anggaran, honor tim pelaksana kegiatan hanya dapat dibayarkan untuk dua kegiatan saja. Jika salah satu atau kedua kegiatan telah selesai dilaksanakan sebelum berakhirnya tahun anggaran, maka honor tim pelaksana kegiatan tidak dapat diberikan lagi pada kegiatan yang lain.</li>
                                <li>Honor Innas/Inda dibayarkan sesuai dengan satuan yang tercantum pada Pedoman Harga Kegiatan Statistik yang berlaku.</li>
                                <li>Honor petugas mitra non PNS/PNS non BPS dibayarkan dengan satuan O-B (Orang-Bulan). Pembayaran honor petugas mitra non PNS yang menggunakan satuan O-B harus memperhatikan batas PTKP (Penghasilan Tidak Kena Pajak). Jika besaran honor dalam sebulan tidak melebihi PTKP, maka tidak dikenakan pajak.</li>
                                <li>Pembayaran dapat dilakukan setelah pekerjaan selesai dibuktikan dengan Berita Acara Serah Terima Pekerjaan (BAST) dengan memperhatikan klausul pada perjanjian kerja masing-masing kegiatan sensus/survei.</li>
                                <li>Jika kondisi urgent dan tidak memungkinkan dibayarkan secara transfer bank, Kuasa Pengguna Anggaran masing-masing daerah dapat menetapkan kebijakan pembayaran secara tunai dengan melengkapi surat pernyataan pembayaran tunai oleh KPA, surat pendelegasian Bendahara kepada yang diberi kuasa untuk membayarkan tunai dan foto saat penyerahan pembayaran.</li>
                                <li>Satuan Harga Kegiatan Umum BPS adalah satuan biaya berupa honorarium yang dapat digunakan untuk membayar kegiatan statistik yang bersifat umum di BPS. Satuan Harga Kegiatan Khusus BPS adalah satuan biaya berupa honorarium yang dapat digunakan untuk membayar petugas pendataan, petugas pemeriksaan dan petugas pengolahan kegiatan statistik yang bersifat spesifik kegiatan tertentu di BPS. Satuan harga sebagaimana dimaksud merupakan perkiraan yang dapat digunakan sebagai dasar penentuan beban kerja dan total honor dalam satu bulan. Total dalam satu bulan merujuk pada Standar Biaya Masukan Lainnya (SBML) yang disetujui oleh Menteri Keuangan.</li>
                            </ol>
                            <br>
                            <p><b>Akun yang Dapat Digunakan</b></p>
                            <p>->Akun 521213-Belanja Honor <i>Output</i> Kegiatan.</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <ol type="a">
                                <li>Kelengkapan pembayaran honor tim:</li>
                                <table cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1CEnq97f7MVwYsR0W6YLMl0QGgIxxZxLe?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1FvpGKDp5dGroi-An2JnQDRs1ituuCzkB?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA/SK KBPS yang mencakup tugas dan fungsi, besaran rate, dan kedudukan dalam Pokja</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1wEas_EYbCJFCUFgHakHlFL8vaQ5RFTRm?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Laporan tim/<i>output</i> pekerjaan</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1VmUl3eccQNtpCry7Fl6pKSva94MFAUww?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>Daftar rincian penerima honor <i>output</i> kegiatan/kuitansi perorang</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1z97YWywyY1C-I0chn7Cn9WOSyh17-0wN?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Rekapitulasi sesuai jabatan dalam keanggotaan Pokja</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1fF6JPB3ox2608BGu9rAUDUvJVu1oaKaZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
			                            <tr>
                                            <td>7)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 40px;">
                                                <a href="https://drive.google.com/drive/folders/1dY21UOeqoWYSVjxVo87ForesJbAlS1jV?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li>Kelengkapan pembayaran honor camat, kepala desa, dan penunjuk jalan:</li>
                                <table cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/168V2zIHN0jctedoKM67BKyD_sncUs7jS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1rKkz7VcPr2i_dzJxvBHLgBIt9Yn1E8KX?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1Xxg6XdSISGt53cdqdX2dIioQID3FTu_L?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Daftar rincian penerima honor atau kuitansi per orang</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1EkGeWlWywG5sJUlBNf1VoKz66DGCiYqT?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1rXK36NTdKCTIyMn7jcdhnPf8WtP4w1Ww?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li>Kelengkapan pembayaran honor pengajar (Innas atau Inda):</li>
                                <table cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1UPOUdOOJaXxmePDVpsimlLVsTfPDu_-e?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1UtHnOh5fJuC1shxoeMbR1PdY7pDY8r12?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1OpGOnE4GldMiiKVnvbb33Km9xVwbe1ba?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Jadwal kegiatan (mengikuti jadwal pada pedoman penyelenggaraan pelatihan)</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1oUM5p5ha7zdyhcsZXkSsn0s42fmXfvHn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>Daftar hadir</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1KKQzN--LIukVK9GDDT5ZyrVvC69PoVH4?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Rekapitulasi belanja honor</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1OJXMzJ7f0JSQhHyhJTzMPaY21JlWH7wn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>Laporan pengajar (Innas atau Inda)</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/16srwUcfcS1UaQL2fHYNew3jNO8sY33Iv?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 150px;">
                                                <a href="https://drive.google.com/drive/folders/1CDFtH-vQQ4F7l4kpsyi-Dg1ABUsjNSGB?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>    
                                <li>Kelengkapan pembayaran honor petugas mitra (non PNS atau PNS non BPS):</li>
                                <table cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1bLbZ0ta-blt8r4EQFackN3EnXoEeRB91?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1v2-J0awUtAFDFfVYdTBh_3wUKSWliPCk?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/17SaifIJ85hxYEOUNMeG2PsNGYc_rAyXn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Surat kontrak/surat perjanjian kerja</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1pOAGlsv2nowlFe7qYe5poGqfmekwu9uf?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>Rekapitulasi belanja honor</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/14k4ZCxmKUmliZoeq8mZK-Usjg9lkqtZ0?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Bukti Prestasi Pekerjaan</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1GicE5_s5Hl7V3umKZNu03SAwCDFXmQ_9?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1O8owyzB86fvF0A0cNDqhuri0LPvUY1a_?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li>Kelengkapan pembayaran honor petugas (PNS BPS):</li>
                                <table cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1xONkc98IgEWNvRhHoeIVXlKFqKHSpQXK?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1HmLKAuF9Jlsg1kr2Wv1nZWpRE6jEiASW?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA tentang Honor Petugas</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1alofNuS4JpFJcw225waWr7XEWHFuhBTq?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Rekapitulasi belanja honor</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1E3a0QuFRmc8IqRHFUvOt8hX1QWBJf_Z7?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 250px;">
                                                <a href="https://drive.google.com/drive/folders/1dZR9tji24BZQeBgCu0BXwTL-Z08RYAEG?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <br>
                        </ol>
                        </ol>
                        <p class="highlight">Honor Terkait Jasa Profesi</p>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <ol type="a" class="justify-list">
                                <li>Honor terkait jasa profesi diberikan kepada narasumber (pegawai negeri/non pegawai negeri) yang memberikan informasi atau pengetahuan kepada pegawai negeri lainnya/masyarakat. Honor terkait jasa profesi juga diberikan kepada moderator.</li>
                                <li>Honor narasumber adalah honor yang diberikan kepada Pejabat Negara/Pegawai Aparatur Sipil Negara/Anggota Polri/TNI yang memberikan kegiatan dalam informasi/pengetahuan/kemampuan Seminar/Rapat/Sosialisasi/Diseminasi/Bimbingan Teknis/<i>Workshop</i>/Sarasehan/Simposium/Lokakarya/<i>Focus Group Discussion</i>/Kegiatan Sejenis yang dilaksanakan secara langsung <i>(offline)</i> maupun daring <i>(online)</i> melalui aplikasi secara live bukan rekaman/hasil <i>tapping</i>, baik di dalam negeri maupun di luar negeri, tidak termasuk untuk kegiatan diklat/pelatihan.</li>
                                <li>Honor moderator adalah honor yang diberikan kepada Pegawai Aparatur Sipil Negara/Anggota Polri/TNI yang ditunjuk oleh pejabat yang berwenang untuk melaksanakan tugas sebagai kegiatan moderator pada Seminar/Rapat/Sosialisasi/Diseminasi/Bimbingan Teknis/<i>Workshop</i>/Sarasehan/Simposium/Lokakarya/<i>Focus Group Discussion</i>/Kegiatan Sejenis yang dilaksanakan secara langsung <i>(offline)</i> maupun daring <i>(online)</i> melalui aplikasi secara live bukan rekaman/hasil <i>tapping</i> baik di dalam negeri maupun di luar negeri, tidak termasuk untuk kegiatan diklat/pelatihan.</li>
                                <li>Honor narasumber pakar adalah satuan biaya honorarium narasumber pakar/praktisi/profesional merupakan satuan biaya yang digunakan untuk kebutuhan honorarium narasumber pakar/praktisi/profesional dari luar lingkup kementerian negara/lembaga penyelenggara yang mempunyai keahlian/profesionalisme dalam ilmu/bidang tertentu dalam kegiatan Seminar/Rapat/Sosialisasi/Diserninasi/<i>Workshop</i>/Sarasehan/Simposium/Diklat/Lokakarya/<i>Focus Group Discussion</i>/Kegiatan Sejenis yang diselenggarakan baik di dalam negeri maupun di luar negeri yang dilaksanakan secara langsung <i>(offline)</i> maupun daring <i>(online)</i> melalui aplikasi secara live dan bukan rekaman/hasil <i>tapping</i>.</li>
                            </ol>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a" class="justify-list">
                                <li>Satuan jam yang digunakan dalam pemberian honor narasumber adalah 60 (enam puluh) menit baik dilakukan secara panel maupun individual.</li>
                                <li>Narasumber dan moderator berasal dari luar kementerian negara/lembaga penyelenggara atau dari perguruan tinggi di luar satuan kerja penyelenggara.</li>
                                <li>Honor narasumber dan moderator hanya dapat diberikan oleh satuan kerja penyelenggara.</li>
                            </ol>
                            <p><b>Akun yang Dapat Digunakan</b></p>
                            <p>->Akun 522151 - Belanja Jasa Profesi.</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>a.</td>
                                        <td>Kerangka Acuan Kerja (KAK)</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1rly0LmWDO6XDdWuD1CfHTGCCc5u7sl_p?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>b.</td>
                                        <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1cUOOYAPYskOBqiYJPvAhXtR9Ey90GzPT?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>c.</td>
                                        <td>SK KPA</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1oIlOGH0ypwMTPqedxTu74I73EfbL2O8J?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>d.</td>
                                        <td>Undangan narasumber/moderator</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1rMJyBJ-wm3sZJXfgM-i0VhDe6aE7X3-D?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>e.</td>
                                        <td>Undangan peserta</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/11_9aHKEkc7KqmCmzR0saKXVHRVyZybNf?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>f.</td>
                                        <td>Jadwal kegiatan sesuai panduan penyelenggaraan</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1jDhUvSsQQ0jB7anf1peavR1rmaA5maqr?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>g.</td>
                                        <td>Daftar hadir narasumber/moderator</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1TjiNTLypI4LKy1hMlTsQSubvUBEbyYvY?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>h.</td>
                                        <td>Bahan paparan narasumber (moderator tidak perlu)</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1ZR0pFwoV-UwKk9PDv01cDQRRbN5s4tff?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>i.</td>
                                        <td>Kuitansi</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1cWEz52MT2UON55PGMfqd6OrL4ibwA-BC?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>j.</td>
                                        <td>Salinan/fotokopi NPWP dan buku rekening</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/10Ob-HGJlo00ZLbBjj32Gkyyi075SOlcW?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>k.</td>
                                        <td>SSP PPh Pasal 21</td>
                                        <td style="padding-left: 220px;">
                                            <a href="https://drive.google.com/drive/folders/1jIOMHRGTXdZDiellPbEI1NsHYBVYkcg-?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ol>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Honorarium</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Honorarium.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1C7PaqwmMgwBRp4BFVkm1ygDbKQM5X2R5/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Perjalanan Dinas -->
                <div class="tab-pane fade" id="pills-5" role="tabpanel">
                    <h4>Belanja Perjalanan Dinas</h4>
                        <p class="highlight">Belanja Perjalanan Dinas Biasa</>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <ol type="a" class="justify-list">
                                <li>Perjalanan Dinas Biasa adalah Perjalanan Dinas Jabatan yang dilakukan Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap, melewati batas Kota dari tempat kedudukan ke tempat yang dituju, dalam rangka melaksanakan tugas, dan kembali ke tempat kedudukan semula di dalam negeri, sesuai dengan perintah atasan Pelaksana perjalanan dinas yang tertuang dalam Surat Tugas.</li>
                                <li>Batas Kota sebagaimana dimaksud khusus untuk Provinsi DKI Jakarta meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan.</li>
                            </ol>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a">
                                <li>Surat Tugas diterbitkan oleh:</li>
                                <ol class="angka" class="justify-list">
                                    <li>Kepala BPS Kabupaten/Kota untuk Perjalanan Dinas Jabatan yang dilakukan oleh Pelaksana SPD pada satuan kerja berkenaan;</li>
                                    <li>Pejabat Tinggi Pratama untuk Perjalanan Dinas Jabatan yang dilakukan oleh Pelaksana SPD dalam lingkup unit eselon II/setingkat unit eselon II berkenaan;</li>
                                    <li>Pejabat Tinggi Madya untuk Perjalanan Dinas Jabatan yang dilakukan oleh Pejabat Tinggi Pratama/Pelaksana SPD dalam lingkup unit eselon I berkenaan; atau</li>
                                    <li>Sekretaris Utama untuk Perjalanan Dinas Jabatan yang dilakukan oleh Kepala Badan Pusat Statistik dan Pejabat Tinggi Madya.</li>
                                </ol>
                                <li>Surat Tugas yang diterbitkan paling sedikit mencantumkan hal-hal sebagai berikut:</li>
                                <ol class="angka">
                                    <li>Pemberi tugas;</li>
                                    <li>Pelaksana tugas;</li>
                                    <li>Waktu pelaksanaan tugas; dan</li>
                                    <li>Tempat pelaksanaan tugas.</li>
                                </ol>
                                <li>Perjalanan Dinas Jabatan terdiri atas komponen-komponen sebagai berikut:</li>
                                <ol class="angka">
                                    <li>Uang harian:</li>
                                    <p>Uang harian dibayarkan secara lumpsum sesuai jumlah hari riil pelaksanaan Perjalanan Dinas sebagaimana diatur dalam Standar Biaya Masukan (SBM). Komponen Uang harian yang diberikan terdiri dari:</p>
                                    <ol class="huruf">
                                        <li>Uang makan;</li>
                                        <li>Uang transpor lokal; dan</li>
                                        <li>Uang saku.</li>
                                    </ol>
                                    <li>Biaya transpor</li>
                                    <p>Dibayarkan sesuai bukti <i>riil (at cost)</i> yang terdiri dari:</p>
                                    <ol class="huruf" class="justify-list">
                                        <li>biaya perjalanan dinas dari Tempat Kedudukan sampai Tempat Tujuan keberangkatan dan kepulangan termasuk biaya ke terminal bus/stasiun/bandara/pelabuhan keberangkatan;</li>
                                        <li>Jika penugasan lebih dari satu satuan kerja, biaya transpor perpindahan satker dapat dibayarkan bila menggunakan moda transportasi umum; dan</li>
                                        <li>retribusi yang dipungut di terminal bus/stasiun/bandara/pelabuhan keberangkatan dan kepulangan.</li>
                                    </ol>
                                    <p>Transport hanya diberikan pada saat kedatangan (hari pertama) dan kepulangan (hari terakhir) kegiatan, transport yang dilakukan di antara hari kedatangan dan kepulangan tidak dapat diberikan/diklaim karena sudah masuk dalam komponen uang harian.</p>
                                    <li>Biaya penginapan</li>
                                    <p>Biaya penginapan dibayarkan sesuai bukti <i>riil (at cost)</i> sesuai batas maksimal SBM dan dipergunakan untuk menginap:</p>
                                    <ol class="huruf">
                                        <li>di hotel; atau</li>
                                        <li>di tempat menginap lainnya.</li>
                                    </ol>
                                    <p>Dalam hal tidak menggunakan biaya penginapan, dapat diberikan biaya penginapan sebesar 30% (tiga puluh persen) dari tarif hotel di Kota Tempat Tujuan dan dibayarakan secara <i>lumpsum</i> sesuai SBM dengan menyampaikan surat pernyataan tidak menggunakan fasilitas hotel atau tempat penginapan lainnya.</p>
                                    <p>Biaya menginap ini tidak dapat diberikan untuk perjalanan dinas yang dilaksanakan pergi dan pulang pada hari yang sama. Kecuali untuk kondisi tertentu yang <i>urgent</i> dan tidak dapat dihindari pelaksana SPD harus menginap dapat dibayarkan jika melampirkan tanda bukti <i>at cost</i>.</p>
                                    <li>Uang representasi</li>
                                    <p>Uang representasi diberikan kepada Pejabat Negara, Pejabat Eselon I, dan Pejabat Eselon II selama melakukan Perjalanan sesuai jumlah hari <i>riil</i> pelaksanaan Perjalanan Dinas.</p>
                                </ol>
                            </ol>
                            <p><b>Akun yang Dapat Digunakan</b></p>
                            <p>->Akun 524111- Belanja Perjalanan Dinas Biasa.</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>a.</td>
                                        <td>Kerangka Acuan Kerja (KAK)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1Kex07bbQtS75srSH7ZAqy2YXn64owvcm?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>b.</td>
                                        <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1uMinaEkW-JEPX7kG7aeXVHx0aophGXFq?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>c.</td>
                                        <td>Surat tugas</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/12XMvOhEl1qbev-vBU0QTiujR5X1_RpQU?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>d.</td>
                                        <td>Surat Perjalanan Dinas (SPD) dan Visum</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1hwuooLyArEL-R1_PqhltRwJNykTX25QS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>e.</td>
                                        <td>Daftar Ongkos Perjalanan (DOP)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/19D1DpDcIZAl0lLZ-pW4ZhXkhIX_Xt2Ld?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>f.</td>
                                        <td>Bukti transportasi (taxi bandara)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1LxVPHYEQxOCVMhO5_ikASDcYout5B17t?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>g.</td>
                                        <td>Daftar Pengeluaran <i>riil</i> untuk transport yang tidak ada tanda bukti</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1CLaK6lLHd0bMfKm-1QihIEuosNZN6YeZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>h.</td>
                                        <td>Tiket/<i>boarding pass</i></td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1R1LJNUAbf-5cA31ATIQDIS88KM4LoN0P?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>i.</td>
                                        <td>Bukti Penginapan atau Surat Pernyataan Tidak Menginap di Hotel (bila ada)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/17oifx1TYDVV0MnxFp-B_gjtvFzyO1ph4?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>j.</td>
                                        <td>Laporan Perjalanan Dinas dan Dokumentasi Kegiatan</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1dpwoyRS7qgGGfV_GiJNNXgI6Wf49HRz5?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>k.</td>
                                        <td>Rincian Biaya Perjalanan Dinas Biasa (DOP)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1zUC7O5lQjSFIKnv5p_2tMlPoFXNu8akB?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>l.</td>
                                        <td>Pengeluaran <i>Riil</i> (jika ada biaya yang tidak ada tanda bukti)</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/17RBMpqZOfF95OQylwuq8CV30OVdyD7f9?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>m.</td>
                                        <td>Kuitansi</td>
                                        <td style="padding-left: 70px;">
                                            <a href="https://drive.google.com/drive/folders/1q27hvPgmOy41irhdMfgrODhnU_29PnLL?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ol>
                        <p class="highlight">Belanja Perjalanan Dinas Dalam Kota Kurang Dari 8 (delapan) Jam</p>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <ol type="a" class="justify-list">
                                <li>Perjalanan Dinas Dalam Kota kurang dari 8 (delapan) Jam adalah Perjalanan Dinas Jabatan yang dilakukan Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap, dilaksanakan di dalam Kota yang dilaksanakan kurang dari 8 (delapan) jam sesuai dengan perintah atasan Pelaksana perjalanan dinas yang tertuang dalam Surat Tugas.</li>
                                <li>Khusus untuk Provinsi DKI Jakarta dalam kota dimaksud meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan.</li>
                            </ol>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a" class="justify-list">
                                <li>Dibayarkan secara <i>lumpsum</i> sesuai standar biaya yang berlaku atau berdasarkan SK KPA masing-masing daerah dan diberikan sesuai jumlah hari <i>riil</i> pelaksanaan Perjalanan Dinas;</li>
                                <li>Penugasan yang dilaksanakan lebih dari satu tujuan pelaksanaan perjalanan dinas dan merupakan satu kesatuan penugasan hanya diberikan sebesar 1 (satu) kali biaya transport dalam kota;</li>
                                <li>Surat Tugas diterbitkan oleh atasan langsung. Penerbit Surat Tugas membatasi pelaksanaan perjalanan dinas dalam kota hanya sampai 8 jam; dan</li>
                                <li>Pelaksana SPD perjalanan dinas dalam kota sampai dengan 8 jam tetap mendapatkan Uang Makan selama terdapat catatan kehadiran di kantor.</li>
                            </ol>
                            <p><b>Akun yang Dapat Digunakan</b></p>
                            <p>->Akun 524113 - Belanja Perjalanan Dinas Dalam Kota.</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>a.</td>
                                        <td>Kerangka Acuan Kerja (KAK)</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1zfCHRBRt08nZIFIQSgGRo8rRL0P2_6L_?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>b.</td>
                                        <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/18y__8Ghz8w_lpQMvPXed5BhPx4koJwut?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>c.</td>
                                        <td>Surat tugas</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1BJ3f-wXgZRRwgzE5Ew5ik0g0QgLIeOkR?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>d.</td>
                                        <td>Kwitansi Transport</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1tAnagOHnfPjcuITCVSqPMTQmPY05cBIF?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>e.</td>
                                        <td>Daftar Pengeluaran <i>riil</i> untuk transport yang tidak ada tanda bukti</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1l57c6iPkNjquTwjfAjBdy4mZB2eQEqOm?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>f.</td>
                                        <td>Bukti Visum</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1XHHrqhODo9CC2xrl4_c9TuvMJyrvDdV1?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>g.</td>
                                        <td>Surat pernyataan tidak menggunakan kendaraan dinas</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1WeieeXC0yoHhNHplvz1PBWU_PjWYQLCf?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>h.</td>
                                        <td>Laporan Perjalanan Dinas dan dokumentasi kegiatan</td>
                                        <td style="padding-left: 150px;">
                                            <a href="https://drive.google.com/drive/folders/1K1WcYv5l7FqNtri7uMb_X6HYdYz-aZFv?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ol>
                        <p class="highlight">Belanja Perjalanan Dinas Dalam Kota Lebih Dari 8 (delapan) Jam</p>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <ol type="a" class="justify-list">
                                <li>Perjalanan Dinas Dalam Kota lebih dari 8 (delapan) Jam adalah Perjalanan Dinas Jabatan yang dilakukan Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap, dilaksanakan di dalam Kota yang dilaksanakan lebih dari 8 (delapan) jam sesuai dengan perintah atasan Pelaksana perjalanan dinas yang tertuang dalam Surat Tugas.</li>
                                <li>Khusus untuk Provinsi DKI Jakarta dalam kota dimaksud meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan.</li>
                            </ol>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a" class="justify-list">
                                <li>Dibayarkan secara <i>lumpsum</i> sesuai standar biaya yang berlaku atau berdasarkan SK KPA masing-masing daerah dan diberikan sesuai jumlah hari <i>riil</i> pelaksanaan Perjalanan Dinas;</li>
                                <li>Dalam hal biaya transport melebihi biaya transport dalam kota. sebagaimana diatur dalam SBM, maka Pelaksana SPD dapat diberikan biaya transport sesuai bukti <i>riil</i> moda transportasi yang digunakan;</li>
                                <li>Apabila diperlukan dapat diberikan biaya menginap di hotel atau tempat menginap lainnya, sesuai bukti <i>riil</i> dengan batas tertinggi sebagaimana diatur dalam SBM;</li>
                                <li>Biaya menginap ini tidak dapat diberikan untuk perjalanan dinas yang dilaksanakan pergi dan pulang pada hari yang sama. Kecuali untuk perjalanan dinas lebih dari 8 jam pada kondisi tertentu yang <i>urgent</i> dan tidak dapat dihindari pelaksana SPD harus menginap dapat dibayarkan jika melampirkan tanda bukti <i>at cost</i>;</li>
                                <li>Penugasan yang dilaksanakan lebih dari satu tujuan pelaksanaan perjalanan dinas dan merupakan satu kesatuan penugasan hanya diberikan sebesar 1 (satu) kali biaya transport dalam kota;</li>
                                <li>Surat Tugas diterbitkan oleh atasan langsung dan harus menyebutkan bahwa pelaksanaan perjalanan dinas dalam kota dilaksanakan lebih dari 8 jam.</li>
                            </ol>
                            <p><b>Akun yang Dapat Digunakan</b></p>
                            <p>->Akun 524113- Belanja Perjalanan Dinas Dalam Kota.</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>a.</td>
                                        <td>Kerangka Acuan Kerja (KAK)</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1eKOh2qCNof5qJgy3dZVjJr3Ka_M7GJ9u?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>b.</td>
                                        <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/169aSecVeYTTWFE75kc7nTVcEsFaH1_kC?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>c.</td>
                                        <td>Surat Tugas</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1iFzDDRDK9maP5Q7j0Fl4dAPfT00OKQGS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>d.</td>
                                        <td>Surat Perjalanan Dinas (SPD) dan Visum</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1l-p0jJNOjL_2B40uuT6IHGV-WUWK9dE4?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>e.</td>
                                        <td>Kuitansi transport</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1H8xHZLo00oP7V8vHD9Cw2c7Ml-QbLayS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>f.</td>
                                        <td>Daftar Pengeluaran <i>riil</i> untuk transport yang tidak ada tanda bukti</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1D_f-oBqgi4nIz_pV8BYxPlgZiDBWVKEC?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>g.</td>
                                        <td>Daftar Ongkos Perjalanan (DOP)</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1ize3ALlxWUS8XntIMfKzkPZyMiA-qN8g?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>h.</td>
                                        <td>Jadwal Kegiatan</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1cgER45f8NAOr3CPzLD6nkkRsz7aUD9e2?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>i.</td>
                                        <td>Bukti Visum</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1YiucGGsuAjuI3xcwHP2TsAQMVw5P9OH6?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>j.</td>
                                        <td>Surat pernyataan tidak menggunakan kendaraan dinas</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1kLwRylP4h7aAtr8mg5RLL0B4PCqqh_wx?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>k.</td>
                                        <td>Laporan Perjalanan Dinas dan Dokumentasi Kegiatan</td>
                                        <td style="padding-left: 140px;">
                                            <a href="https://drive.google.com/drive/folders/1jHID8ATfeb25QZDEpd3Dfj-ZcuVRny7V?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ol>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Perjalanan Dinas</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Perjalanan Dinas.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1ERZfX85Tu0_JkBiZO5rKDh-ub6TVym7N/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pedoman Perjalanan Dinas -->
                 <div class="tab-pane fade" id="pills-5-1" role="tabpanel">
                    <h4>Ketentuan Umum</h4>
                    <p>Dalam Peraturan Kepala Badan Pusat Statistik ini, yang dimaksud dengan:
                        <ol class="timeline-list">
                            <li>Surat Perjalanan Dinas yang selanjutnya disebut SPD adalah dokumen yang diterbitkan Pejabat Pembuat Komitmen (PPK) dalam rangka pelaksanaan perjalanan dinas bagi Pejabat Negara, Pegawai Negeri Sipil, Pegawai tidak tetap dan pihak lain.</li>
                            <li>Pelaksana SPD adalah Pejabat Negara, Pegawai Negeri Sipil, Pegawai tidak tetap, dan pihak lain yang melaksanakan perjalanan dinas.</li>
                            <li>Perjalanan Dinas Dalam Negeri yang selanjutnya disebut Perjalanan Dinas adalah perjalanan ke luar Tempat kedudukan yang dilakukan dalam wilayah Republik Indonesia untuk kepentingan negara.</li>
                            <li>Perjalanan Dinas Jabatan adalah Perjalanan Dinas melewati batas Kota dan/atau dalam Kota dari tempat kedudukan ke tempat yang dituju, melaksanakan tugas, dan kembali ke tempat kedudukan semula di dalam negeri.</li>
                            <li>Pejabat Negara adalah pejabat negara sebagaimana dimaksud dalam peraturan perundang-undangan mengenai aparatur sipil negara dan pejabat negara lainnya yang ditentukan oleh Undang-Undang.</li>
                            <li>Pegawai Negeri adalah pegawai negeri sipil sebagaimana dimaksud dalam peraturan perundang-undangan mengenai aparatur sipil negara</li>
                            <li>Pegawai Tidak Tetap adalah pegawai pemerintah dengan perjanjian kerja sebagaimana dimaksud dalam peraturan perundang-undangan mengenai aparatur sipil negara</li>
                            <li>Kuasa Pengguna Anggaran yang selanjutnya disingkat KPA adalah pejabat yang memperoleh kuasa dari Pengguna Anggaran untuk melaksanakan sebagian kewenangan dan tanggung jawab penggunaan anggaran pada Kementerian Negara/Lembaga yang bersangkutan..</li>
                            <li>Pejabat Pembuat Komitmen yang selanjutnya disingkat PPK adalah pejabat yang diberi kewenangan oleh Pengguna Anggaran/Kuasa Pengguna Anggaran untuk mengambil keputusan dan/atau tindakan yang dapat mengakibatkan pengeluaran atas beban Anggaran Pendapatan dan Belanja Negara (APBN).</li>
                            <li>Penanggung jawab kegiatan adalah pejabat eselon II yang bertanggung jawab atas pelaksanaan kegiatan.</li>
                            <li>Ajudan adalah ASN yang diberi tugas tambahan mendampingi pimpinan dalam rangka penyelesaian tugas-tugas protokoler.</li>
                            <li>Lumpsum adalah suatu jumlah uang yang telah dihitung terlebih dahulu <i>(pre-calculated amount)</i>dan dibayarkan sekaligus.</li>
                            <li>Biaya Riil adalah biaya yang dikeluarkan sesuai dengan bukti pengeluaran yang sah.</li>
                            <li>Daftar Pengeluaran Riil adalah rincian biaya yang dikeluarkan yang tidak ada tanda bukti pengeluaran yang sah.</li>
                            <li>Perhitungan rampung adalah perhitungan biaya perjalanan dinas yang dihitung sesuai kebutuhan riil berdasarkan ketentuan yang berlaku.</li>
                            <li>Tempat kedudukan adalah lokasi kantor/satuan kerja.</li>
                            <li>Tempat tujuan adalah tempat/Kota yang menjadi tujuan Perjalanan Dinas.</li>
                            <li>Tempat Sah adalah lokasi Kota Pelaksana SPD berada secara sah, ciantaranya lokasi pelaksanaan fleksibilitas tempat bekerja <i>(flexible working space)</i>, lokasi cuti, lokasi ketika sedang menjalani libur resmi, dan Tempat Tujuan penugasan Perjalanan Dinas lainnya</li>
                            <li>Standar Biaya adalah satuan biaya yang ditetapkan sebagai acuan penghitungan kebutuhan anggaran dalam Rencana Kerja dan Anggaran Kementerian Negara/Lembaga, baik berupa Standar Biaya Masukan maupun Standar Biaya Keluaran.</li>
                            <li>APBN adalah Anggaran Pendapatan dan Belanja Negara adalah rencana keuangan tahunan Pemerintah negara Indonesia yang disetujui oleh Dewan Perwakilan Rakyat. APBN berisi daftar sistematis dan terperinci yang memuat rencana penerimaan dan pengeluaran negara selama satu tahun anggaran.</li>
                        </ol>
                    </p>
                </div>

                <div class="tab-pane fade" id="pills-5-2" role="tabpanel">
                    <h4>Ruang Lingkup Perjalanan Dinas Jabatan</h4> 
                    <ol class="timeline-list">
                        <li>Peraturan Kepala Badan ini mengatur mengenai perencanaan, pelaksanaan dan pertanggungjawaban Perjalanan Dinas Jabatan bagi Pelaksana SPD yang meliputi Pejabat Negara, Pegawai Negeri dan Pegawai Tidak Tetap dan Pihak Lain yang dibebankan pada Anggaran Pendapatan dan Belanja Negara di lingkungan Badan Pusat Statistik.</li>
                        <li>Pegawai Negeri sebagaimana dimaksud pada angka (1) termasuk: 
                            <ol type="a">
                                <li>Calon Pegawai Negeri;</li>
                                <li>Prajurit Tentara Nasional Indonesia; dan</li>
                                <li>Anggota Kepolisian Negara Republik Indonesia.</li>
                            </ol>
                        </li>
                    </ol> 
                </div>

                <div class="tab-pane fade" id="pills-5-3" role="tabpanel">
                    <h4>Prinsip Perjalanan Dinas Jabatan</h4>
                    <ol class="timeline-list">
                        <li>Perjalanan Dinas Jabatan dilaksanakan dengan memperhatikan prinsip sebagai berikut:
                            <ol type="a">
                                <li>Selektif, yaitu hanya untuk kepentingan yang sangat tinggi dan prioritas yang berkaitan dengan penyelenggaraan pemerintahan;</li>
                                <li>Ketersediaan anggaran dan kesesuaian dengan pencapaian kinerja Kementerian Negara/Lembaga;</li>
                                <li>Efisiensi dan efektivitas dalam penggunaan belanja negara; dan</li>
                                <li>Transparansi dan Akuntabilitas pemberian perintah pelaksanaan Perjalanan Dinas dan pembebanan biaya Perjalanan Dinas Jabatan.</li>
                            </ol>
                        </li>
                        <li>Dalam rangka menjaga terpenuhinya pelaksanaan prinsip-prinsip sebagaimana dimaksud pada angka:
                            <ol type="a">
                                <li>Penerbit Surat Tugas:
                                    <ol class="angka">
                                        <li>Melakukan monitoring penerbitan surat tugas di lingkup wilayah kerjanya;</li>
                                        <li>Membatasi pelaksanaan Perjalanan Dinas Jabatan dalam kota hanya sampai dengan 8 jam, kecuali pelaksanaan Perjalanan Dinas Jabatan dimaksud memang sangat diperlukan penyelesaiannya lebih dari 8 jam; dan</li>
                                        <li>Memastikan pelaksanaan Perjalanan Dinas Jabatan dalam kota sampai dengan 8 jam sesuai Surat Tugas yang dibuktikan dengan visum dan menjadi bagian atau lampiran pada Surat Tugas.</li>
                                    </ol>
                                </li>
                                <li>PPK melakukan:
                                    <ol class="angka">
                                        <li>Pengujian kesesuaian pelaksanaan Perjalanan Dinas Jabatan dengan pencapaian kinerja,</li>
                                        <li>Pembebanan biaya Perjalanan. Dinas Jabatan dengan memperhatikan ketersediaan anggaran dan tetap memprioritaskan. pencapaian kinerja; dan</li>
                                        <li>Pembebanan biaya Perjalanan Dinas Jabatan dengan berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya Masukan.</li>
                                    </ol>
                                </li>                                           
                                <li>Pelaksana SPD memperhatikan hal-hal sebagai berikut:
                                    <ol class="angka">
                                        <li>Melaksanakan Perjalanan Dinas Jabatan sesuai tugas yang diberikan;</li>
                                        <li>Segera kembali ke tempat kedudukan semula apabila kinerja telah tercapai; dan</li>
                                        <li>Segera mempertanggungjawabkan pelaksanaan Perjalanan Dinas Jabatan setelah Perjalanan Dinas Jabatan dilaksanakan.</li>
                                    </ol>
                                </li>
                                <li>PPK, PPSPM, dan Bendahara Pengeluaran melakukan pengujian sesuai tugas dan kewenangannya dengan berpedoman pada Peraturan Menteri Keuangan mengenai tata cara pembayaran atas beban Anggaran Pendapatan dan Belanja Negara.</li>
                            </ol>
                        <li>Biaya Perjalanan Dinas Jabatan tidak dapat dibebankan apabila terdapat:
                            <ol type="a">
                                <li>Bukti-bukti pengeluaran/dokumen yang palsu;</li>
                                <li>Melebihi tarif tiket/biaya penginapan resmi <i>(mark up)</i>;</li>
                                <li>Pelaksanaan Perjalanan Dinas Jabatan rangkap pada waktu yang sama; dan/atau</il>
                                <li>Pelaksanaan dan pembayaran biaya perjalanan dinas jabatan yang tidak sesuai dengan ketentuan dalam peraturan perundang-undangan. mengenai perjalanan dinas.</li>
                            </ol>
                        </li>
                    </ol>
                </div>
                
                <div class="tab-pane fade" id="pills-5-4" role="tabpanel">
                    <h4>Perjalanan Dinas Jabatan</h4>
                    <ol class="timeline-list">
                        <li>Perjalanan Dinas Jabatan digolongkan menjadi:
                            <ol type="a">
                                <li>Perjalanan Dinas Jabatan yang melewati batas kota (khusus untuk Provinsi DKI Jakarta meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan); dan</li>
                                <li>Perjalanan Dinas Jabatan yang dilaksanakan di dalam Kota (lebih dari 8 jam dan sampai dengan 8 jam).</li>
                            </ol>
                        </li>
                        <li>Perjalanan Dinas Jabatan dilakukan dalam rangka:
                            <ol type="a">
                                <li>Pelaksanaan tugas dan fungsi yang melekat pada jabatan;</li>
                                <li>Mengikuti rapat, konsinyering, dan sejenisnya;</li>
                                <li>Menempuh ujian dinas/ujian jabatan;</li>
                                <li>Menghadap Majelis Penguji Kesehatan Pegawai Negeri atau menghadap seorang dokter penguji kesehatan yang ditunjuk, untuk mendapatkan surat keterangan dokter tentang kesehatannya guna kepentingan jabatan;</li>
                                <li>Memperoleh pengobatan berdasarkan surat keterangan dokter karena mendapat cedera pada waktu/karena melakukan tugas;</li>
                                <li>Mendapatkan pengobatan berdasarkan keputusan Majelis Penguji Kesehatan Pegawai Negeri;</li>
                                <li>Mengikuti pendidikan setara Diploma/S1/S2/S3;</li>
                                <li>Mengikuti pendidikan dan pelatihan;</li>
                                <li>Menjemput/mengantarkan ke tempat pemakaman jenazah Pejabat Negara/Pegawai Negeri yang meninggal dunia dalam melakukan. Perjalanan Dinas; atau</li>
                                <li>Menjemput/mengantarkan ke tempat pemakaman jenazah Pejabat Negara/Pegawai Negeri yang meninggal dunia dari Tempat Kedudukan yang terakhir ke Kota tempat pemakaman.</li>
                            </ol>
                        </li>
                        <li>Perjalanan Dinas Jabatan harus dilengkapi Penerbitan Surat Tugas dengan ketentuan sebagai berikut:
                            <ol type="a">
                                <li>Perjalanan Dinas Jabatan oleh Pelaksana SPD dilakukan sesuai perintah atasan Pelaksana SPD yang tertuang dalam Surat Tugas.</li>
                                <li>Dalam hal Pelaksana SPD (peserta non BPS) tidak mempunyai atasan, Surat Tugas diterbitkan oleh penerbit Surat Tugas pada pihak penyelenggara kegiatan.</li>
                                <li>Surat Tugas diterbitkan oleh:
                                    <ol class="angka">
                                        <li>Kepala satuan kerja untuk Perjalanan Dinas Jabatan yang dilakukan oleh Pelaksana SPD pada satuan kerja berkenaan;</li>
                                        <li>Atasan langsung kepala satuan kerja untuk Perjalanan Dinas Jabatan yang dilakukan oleh kepala satuan kerja.</li>
                                        <li>Pejabat Eselon II untuk Perjalanan Dinas Jabatan yang dilakukan oleh Pelaksana SPD dalam lingkup unit eselon II/setingkat unit eselon II berkenaan;</li>
                                        <li>Kepala Badan/Pejabat Eselon I untuk Perjalanan Dinas Jabatan yang dilakukan oleh Kepala Badan/Pejabat Eselon I/Pejabat Eselon II.</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>Kewenangan penerbitan surat tugas sebagaimana dimaksud pada huruf <strong>c</strong> dapat didelegasikan kepada pejabat yang ditunjuk.</li>
                        <li>Surat Tugas sekurang-kurangnya memuat hal-hal sebagai berikut:
                            <ol class="angka">
                                <li>Pemberi tugas;</li>
                                <li>Pelaksana tugas;</li>
                                <li>Waktu pelaksanaan tugas;</li>
                                <li>Tempat pelaksanaan tugas;</li>
                            </ol>
                        </li>
                        <li>Dalam hal perjalanan dinas dilakukan dalam rangka kegiatan sosialisasi/bimbingan teknis/diseminasi/workshop/Focus Group Discussion (FGD)/pertemuan/rapat koordinasi/rapat pimpinan/konsinyering, surat tugas dapat diterbitkan oleh pihak penyelenggara kegiatan.</li>
                        <li>Surat tugas sebagaimana tersebut pada huruf a dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran II Peraturan Kepala Badan ini.</li>
                        <li>Perjalanan Dinas Jabatan harus dilengkapi dengan Penerbitan Surat Perjalanan Dinas (SPD) dengan ketentuan sebagai berikut:
                            <ol type="a">
                                <li>Surat Tugas menjadi dasar penerbitan SPD oleh PPK.</li>
                                <li>Dalam hal Perjalanan Dinas Jabatan di dalam kota yang dilaksanakan sampai dengan 8 jam dapat dilakukan tanpa penerbitan SPD.</li>
                                <li>Dalam hal pelaksanaan Perjalanan Dinas Jabatan diselenggarakan dalam rangka rapat, konsinyering, dan sejenisnya dengan beban biaya oleh satuan kerja penyelenggara, penerbitan SPD dapat dibuat secara kolektif dengan melampirkan daftar peserta yang telah disahkan oleh PPK pada satuan kerja penyelenggara.</li>
                                <li>SPD dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran III Peraturan Kepala Badan ini.</li>
                                <li>Daftar peserta dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran IV Peraturan Kepala Badan ini.</li>
                            </ol>
                        </li>
                    </ol>
                </div>

                <div class="tab-pane fade" id="pills-5-5" role="tabpanel">
                    <h4>Kegiatan Rapat, Konsinyering, dan Sejenisnya</h4>
                    <ol class="timeline-list">
                        <li>Kegiatan rapat, konsinyering dan sejenisnya yang dimaksud dalam Peraturan ini meliputi:
                            <ol type="a">
                                <li>Konsinyering, dan</li>
                                <li>Sosialisasi, bimbingan teknis, diseminasi, <i>workshop</i>, <i>Focus Group Discussion</i> (FGD), pertemuan, pelatihan, kursus, seminar, rapat koordinasi/rapat pimpinan, rapat kerja/rapat teknis, dan konsultasi nasional/regional/serentak.</li>
                            </ol>
                        </li>
                        <li>Rapat, konsinyering dan sejenisnya sebagaimana dimaksud pada angka (1) harus menghasilkan output berupa:
                            <ol type="a">
                                <li>Notulensi dan dokumentasi rapat; dan/atau</li>
                                <li>Laporan.</li>
                            </ol>
                        </li>
                        <li>Penyelenggaraan konsinyering dan kegiatan sosialisasi, bimbingan teknis, diseminasi, <i>workshop, Focus Group Discussion</i> (FGD), pertemuan, pelatihan, kursus, seminar, kegiatan rapat, dan konsultasi nasional/regional/serentak harus memenuhi syarat dan ketentuan umum sebagai berikut:
                            <ol type="a">
                                <li>Berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya Masukan;</li>
                                <li>Diselenggarakan secara <i>fullboard, fullday, atau halfday</i>;</li>
                                <li>Dapat dilakukan baik di dalam atau luar kota sekurang-kurangnya melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat, serta penyelenggaraannya:
                                    <ol class="angka">
                                        <li>Jika dilaksanakan oleh BPS Pusat dan BPS Provinsi dipimpin oleh sekurang-kurangnya pejabat Eselon II penyelenggara/pejabat setara yang ditunjuk;</li>
                                        <li>Jika dilaksanakan oleh BPS Kabupaten/Kota dipimpin oleh sekurang-kurangnya pejabat Eselon III/Kepala Satuan penyelenggara/pejabat setara yang ditunjuk.</li>
                                    </ol>
                                <li>Apabila dilaksanakan di luar kota harus memenuhi ketentuan sebagai berikut:
                                    <ol class="angka">
                                        <li>melibatkan kantor vertikal;</li>
                                        <li>berskala regional/nasional/internasional; dan/atau</li>
                                        <li>mendapat persetujuan dari PPK dengan pertimbangan:
                                            <ol class="huruf">
                                                <li>dari sisi tektris harus dilaksanakan di luar Kota satuan kerja. penyelenggara, atau</li>
                                                <li>diselenggarakan pada lokasi yang terdekat dengan Kota satuan kerja penyelenggara.</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li>Ketentuan jam pelaksanaan konsinyering sebagai berikut:
                                    <ol class="angka">
                                        <li>Paket <i>Fullboard</i></li>
                                        Diselenggarakan di luar kantor sehari penuh dan menginap.
                                        <li>Paket <i>Fullday</i></li>
                                        Diselenggarakan di luar kantor minimal 8 (delapan) jam tanpa menginap.
                                        <li>Paket <i>Halfday</i></li>
                                        Diselenggarakan di luar kantor minimal 5 (lima) jam tanpa menginap.
                                    </ol>
                                </li>
                                <li>Pernyataan dari penanggung jawab kegiatan bahwa fasilitas di kantor tidak memadai. Surat pernyataan dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran V Peraturan Kepala Badan ini;</li>
                                <li>Surat undangan ditandatangani serendah-rendahnya oleh pejabat setingkat eselon II/kepala satker penyelenggara, surat tugas bagi peserta dan daftar hadir rapat;</li>
                                <li>Notulen hasil kegiatan diketahui dan disetujui serendah-rendahnya oleh pejabat setingkat eselon II/Kepala Satker terkait, disampaikan kepada. PPK, dan ditembuskan kepada Pejabat setingkat eselon I terkait serta KPA;</li>
                                <li>Setiap peserta mendapatkan uang harian <i>fullboard/fuliday/halfday</i> sebanyak hari penyelenggaraan sesuai standar biaya dan transpor kegiatan. Untuk kegiatan di dalam kota, pengguna kendaraan dinas tidak diberikan transpor kegiatan. Untuk kegiatan luar kota pengguna kendaraan dinas/kendaraan lainnya dapat diberikan penggantian biaya tol dan bahan bakar;</li>
                                <li>Dalam hal peserta merupakan narasumber yang berasal dari luar instansi penyelenggara, maka tidak dapat diberikan uang harian. <i>fullboard/fullday/halfday</i> pada saat yang bersangkutan menjadi narasumber dalam kegiatan tersebut;</li>
                                <li>Pembayaran uang harian <i>fullboard/fullday/halfday</i> dan transpor kegiatan, dimasukkan dalam <i>fullboard/fullday/halfday</i>. rincian biaya perjalanan</li>
                            </ol>
                        </li>
                    </ol>
                </div>
                
                <div class="tab-pane fade" id="pills-5-6" role="tabpanel">
                    <h4>Biaya Perjalanan Dinas Jabatan</h4>
                    <ol class="timeline-list">
                        <li>Biaya Perjalanan Dinas Jabatan terdiri atas komponen-komponen sebagai berikut:
                            <ol type="a">
                                <li>Uang harian;</li>
                                <li>Biaya transpor,</li>
                                <li>Biaya penginapan;</li>
                                <li>Uang representasi;</li>
                                <li>Sewa kendaraan dalam kota; dan/atau</li>
                                <li>Biaya menjemput/mengantar jenazah.</li>
                            </ol>
                        </li>
                        <li>Uang harian sebagaimana dimaksud pada angka (1) terdiri atas:
                            <ol type="a">
                                <li>uang makan;</li>
                                <li>uang transpor lokal; dan</li>
                                <li>uang saku.</li>
                            </ol>
                        </li>
                        <li>Uang harian dibayarkan secara lumpsum dan merupakan batas tertinggi sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan. Uang harian dibayarkan sesuai dengan jumlah hari riil pelaksanaan Perjalanan Dinas Jabatan.</li>
                        <li>Besaran uang harian untuk Perjalanan Dinas Jabatan yang dilaksanakan dalam kota lebih dari 8 (delapan) jam dan melewati batas kota mengacu pada jumlah hari yang tercantum dalam Surat Tugas dan diberikan sesuai Peraturan Menteri Keuangan mengenai Standar Biaya Masukan.</li>
                        <li>Bagi Pelaksana SPD yang melakukan Perjalanan Dinas Jabatan untuk menempuh ujian dinas/ujian jabatan dan mengikuti pendidikan setara Diploma/S1/S2/S3 dibayarkan uang harian 1 (satu) hari pada saat kedatangan dan/atau 1 (satu) hari pada saat kepulangan.</li>
                        <li>Biaya transpor dalam rangka pelaksanaan Perjalanan Dinas Jabatan terdiri dari biaya transpor:</li>
                            <ol type="a">
                                <li>dalam Kota sampai dengan 8 (delapan) jam;</li>
                                <li>dalam Kota lebih dari 8 (delapan) jam; atau</li>
                                <li>melewati batas Kota.</li>
                            </ol>
                        </li>
                        <li>Biaya transpor dalam Kota sampai dengan 8 (delapan) jam diberikan secara <i>lumpsum</i> dan merupakan batas tertinggi sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan;</li>
                        <li>Biaya Transpor sebagaimana dimaksud pada Angka (1) huruf (b) terdiri atas:
                            <ol type="a">
                                <li>Perjalanan Dinas dari Tempat Kedudukan sampai dengan Tempat Tujuan ke berangkatan dan kepulangan termasuk biaya perjalanan ke terminal bus/stasiun/bandara/pelabuhan ke berangkatan</li>
                                <li>retribusi yang dipungut di terminal bus/ stasiun / bandara/ pelabuhan keberangkatan dan kepulangan; dan</li>
                                <li>biaya layanan dan sejenisnya yang tidak dapat dihindari pada per gadaan dan pembayaran tiket, moda transportasi, dan pengmapan, diantaranya biaya platform/biaya penyedia layanan, biaya bagasi, dan biaya lainnya dalam hal ini tidak termasuk dalam harga tiket.</li>
                            </ol>
                        </li>
                        <li>Dalam hal Perjalanan Dinas Jabatan merupakan perjalanan dinas dalam. kota lebih dari 8 (delapan) jam maka biaya transpor dapat diberikan secara <i>lumpsum</i>:
                            <ol type="a"> 
                                <li>Sesuai jumlah hari riil pelaksanaan perjalanan dinas; atau</li>
                                <li>Sesuai jumlah penugasan pelaksanaan perjalanan dinas dalam satu hari.</li>
                            </ol>
                        </li>
                        <li>Dalam hal penugasan dilaksanakan lebih dari 1 (satu) tujuan pelaksanaan perjalanan dinas dalam kota dan merupakan satu kesatuan penugasan hanya diberikan 1 (satu) kali biaya transpor dalam kota.</li>
                        <li>Biaya transpor dalam Kota lebih dari 8 (delapan) jam diberikan secara lumpsum dan merupakan batas tertinggi sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan.</li>
                        <li>Dalam hal biaya transpor dalam kota lebih dari 8 (delapan) jam melebihi biaya transpor dalam kota sebagaimana dimaksud dalam standar biaya, kepada Pelaksana SPD dapat diberikan biaya transpor sesuai dengan bukti riil yang dapat dipertanggung jawabkan.</li>
                        <li>Perjalanan Dinas keberangkatan ke Tempat Tujuan dan kepulangan dapat dilakukan dari dan ke selain Tempat Kedudukan (tempat yang sah) dengan memperhatikan efisiensi dan efektivitas, serta dibayarkan sesuai dengan Biaya Riil, paling banyak sebesar estimasi biaya transportasi dari Tempat Kedudukan ke Tempat Tujuan sesuai dengan ketentuan peraturan perundang-undangan mengenai standar biaya.</li>
                        <li>Biaya transpor melewati batas Kota diberikan sesuai biaya riil berdasarkan Fasilitas Transpor sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Perjalanan Dinas Dalam Negeri bagi Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap. Biaya transpor dibayarkan secara at cost sesuai tanda bukti perjalanan (tiket, <i>boarding pass</i>, kuitansi, dan/atau tanda bukti perjalanan lainnya). Dalam hal tanda bukti tidak ada, biaya transpor dapat dibayarkan dengan menggunakan Daftar Pengeluaran Riil.</li>
                        <li>Biaya Penginapan sebagaimana dimaksud pada angka (1) huruf (c) merupakan biaya yang diperlukan untuk menginap:
                            <ol type="a"> 
                                <li>di hotel:</li>
                                <li>di tempat menginap lainnya.</li>
                            </ol>
                        </li>
                        <li>Dalam hal pelaksana SPD tidak menggunakan biaya penginapan sebagaimana dimaksud pada angka (15), diberikan biaya penginapan sebesar 30% (tiga puluh persen) dari tarif hotel di Kota Tempat Tujuan sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan, dengan ketentuan:
                            <ol type="a">
                                <li>Tidak terdapat hotel atau tempat menginap lainnya, sehingga Pelaksana SPD menginap di tempat menginap yang tidak menyediakan kuitansi/bukti biaya penginapan; atau</li>
                                <li>Terdapat hotel atau tempat menginap lainnya, namun Pelaksana SPD tidak menginap di hotel atau tempat menginap lainnya tersebut.</li>
                            </ol>
                        </li>
                        <li>Biaya penginapan sebesar 30% (tiga puluh persen) sebagaimana dimaksud pada angka (16) tidak diberikan untuk:
                            <ol type="a">
                                <li>Perjalanan Dinas Jabatan dalam Kota lebih dari 8 (delapan) jam yang dilaksanakan pergi dan pulang dalam hari yang sama;</li>
                                <li>Perjalanan Dinas Jabatan untuk mengikuti rapat, konsinvering, dan sejenisnya yang dilaksanakan dengan paket <i>meeting fullboard;</i></li>
                                <li>Perjalanan Dinas Jabatan untuk mengikuti pendidikan dan pelatihan; dan</li>
                                <li>Perjalanan Dinas Jabatan yang dilaksanakan oleh 2 orang atau lebih dalam kamar yang sama pada suatu fasilitas penginapan, dan sudah diklaim oleh salah satu peserta Perjalanan Dinas Jabatan tersebut.</li>
                            </ol>
                        </li>
                        <li>Bagi Pelaksana SPD yang melakukan Perjalanan Dinas Jabatan untuk mengikuti pendidikan atau pelatihan diberikan biaya penginapan 1 (satu) hari pada saat kedatangan dan 1 (satu) hari pada saat kepulangan dan/atau sesuai surat undangan dari penyelenggara pendidikan atau pelatihan. Biaya penginapan selama mengikuti pendidikan dan pelatihan dapat diberikan kepada Pelaksana SPD yang melakukan Perjalanan Dinas Jabatan untuk mengikuti pendidikan dan pelatihan dalam hal tidak disediakan penginapan;</li>
                        <li>Biaya penginapan sebagaimana dimaksud pada angka (18) diberikan sesuai bukti riil dengan batasan sesuai Standar Biaya Masukan;</li>
                        <li>Uang representasi sebagaimana dimaksud pada angka (1) huruf (d) dapat diberikan kepada Pejabat Negara, Kepala/Pimpinan Lembaga, Pejabat Eselon 1, dan Pejabat Eselon II selama melakukan Perjalanan Dinas. Uang representasi melekat pada pembayaran uang harian. Uang representasi tidak dapat diberikan kepada Pelaksana Harian.</li>
                        <li>Sewa kendaraan dalam kota sebagaimana dimaksud pada angka (1) huruf (e) dapat diberikan kepada:
                            <ol type="a">
                                <li>Pejabat Negara / Kepala BPS yang melakukan perjalanan dinas dalam negeri di tempat tujuan; atau</li>
                                <li>Pelaksanaan kegiatan yang membutuhkan mobilitas tinggi, berskala besar, dan tidak tersedia kendaraan dinas serta dilakukan secara selektif dan efisien.</li>
                            </ol>
                        </li>
                        <li>Sewa kendaraan sebagaimana dimaksud pada angka (21) sudah termasuk biaya untuk pengemudi, bahan bakar minyak, dan pajak.</li>
                        <li>Biaya menjemput/mengantar jenazah sebagaimana dimaksud pada angka (1) huruf (f) meliputi biaya bagi penjemput/pengantar, biaya pemetian, dan biaya angkutan jenazah. Biaya menjemput/mengantar jenazah berupa uang harian, biaya transpor pegawai/keluarga, dan biaya penginapan diberikan maksimal 3 (tiga) hari paling banyak untuk 4 (empat) orang;</li>
                        <li>Ketentuan mengenai pembayaran komponen biaya perjalanan dinas sebagaimana dimaksud pada angka (1) untuk setiap jenis perjalanan dinas sebagaimana dimaksud diatur dalam Lampiran VI Peraturan Kepala Badan ini.</li>
                    </ol>
                </div>

                <div class="tab-pane fade" id="pills-5-7" role="tabpanel">
                    <h4>Pembatalan Perjalanan Dinas</h4>
                    <ol class="timeline-list">
                        <li>Dalam hal terjadi pembatalan pelaksanaan Perjalanan Dinas Jabatan, biaya pembatalan dapat dibebankan pada DIPA satuan kerja berkenaan.</li>
                        <li>Dokumen yang harus dilampirkan dalam pembebanan biaya pembatalan sebagaimana dimaksud dalam angka (1) meliputi:
                            <ol type="a">
                                <li>Surat Pernyataan Pembatalan Tugas Perjalanan Dinas Jabatan dari atasan Pelaksana SPD, atau paling rendah Pejabat Eselon II bagi Pelaksana SPD di bawah Pejabat Eselon III ke bawah, yang dibuat sesuai format sebagaimana tercantum dalam Lampiran VII Peraturan Kepala Badan ini;</li>
                                <li> Surat Pernyataan Pembebanan Biaya Pembatalan Perjalanan Dinas Jabatan yang dibuat sesuai format sebagaimana tercantum dalam Lampiran VIII Peraturan Kepala Badan ini; dan</li>
                                <li>Pernyataan/Tanda Bukti Besaran Pengembalian Biaya Transpor dan/atau biaya penginapan dari perusahaan jasa transportasi dan/atau penginapan yang disahkan oleh PPK.</li>
                            </ol>
                        </li>
                        <li>Biaya pembatalan yang dapat dibebankan pada DIPA satuan kerja sebagaimana dimaksud pada angka (1) sebagai berikut:
                            <ol type="a">
                                <li>biaya pembatalan tiket transportasi atau biaya penginapan, atau</li>
                                <li> sebagian atau seluruh biaya tiket transportasi atau biaya penginapan yang tidak dapat dikembalikan/<i>refund</i>.</li>
                            </ol>
                        </li>
                    </ol>
                </div>

                <div class="tab-pane fade" id="pills-5-8" role="tabpanel">
                    <h4>Standar Biaya Transportasi</h4>
                    <ol class="timeline-list">
                        <li>Biaya taksi adalah satuan biaya yang digunakan untuk kebutuhan biaya satu kali perjalanan taksi dari tempat kedudukan menuju bandara/pelabuhan/terminal/stasiun keberangkatan atau dari bandara/pelabuhan/terminal/ stasiun kedatangan menuju tempat tujuan di kota bandara/ pelabuhan/terminal/stasiun kedatangan dan sebaliknya. Dalam pelaksanaan anggaran, satuan biaya taksi perjalanan dinas dalam negeri menggunakan metode biaya riil dan sesuai ketentuan Standar Biaya Masukan yang berlaku.</li>
                        <li>Biaya transpor dari ibu kota provinsi ke ibu kota kabupaten dibayarkan sesuai tanda bukti perjalanan (tiket, <i>boarding pass</i>, kuitansi, dan tanda bukti perjalanan lainnya).</li>
                        <li>Standar Biaya Transportasi yang tidak diatur dalam SBM dapat diatur tersendiri melalui SK Kuasa Pengguna Anggaran.</li>
                    </ol>
                </div>

                <div class="tab-pane fade" id="pills-5-9" role="tabpanel">
                    <h4>Pertanggungjawaban Biaya Perjalanan Dinas Jabatan</h4>
                    <ol class="timeline-list">
                        <li>Pelaksana SPD mempertanggungjawabkan:
                            <ol type="a">
                                <li>Pelaksanaan Perjalanan Dinas Jabatan kepada pemberi tugas; dan</li>
                                <li>Biaya Perjalanan Dinas Jabatan kepada PPK; Paling lambat 5 (lima) hari kerja setelah tanggal harus kembali yang tercantum dalam SPD.</li>
                            </ol>
                        </li>
                        <li>Pertanggungjawaban pelaksanaan perjalanan dinas Jabatan kepada pemberi tugas diwujudkan dalam bentuk laporan pelaksanaan.</li>
                        <li>Pertanggungjawaban biaya perjalanan dinas biasa dengan melampirkan. dokumen sebagai berikut:
                            <ol type="a">
                                <li>Kerangka Acuan Kerja (KAK);</li>
                                <li>Form Permintaan;</li>
                                <li>Surat Tugas;</li>
                                <li>SPD dan visum yang telah ditandatangani oleh PPK dan pejabat di tempat pelaksanaan Perjalanan Dinas biasa atau pihak terkait yang menjadi Tempat Tujuan Perjalanan Dinas biasa</li>
                                <li>Rincian Biaya Perjalanan dinas biasa atau DOP;</li>
                                <li>Tiket & <i>boarding pass</i> untuk pesawat dan kereta api, tiket bus, atau tiket mode transportasi lainnya;</li>
                                <li>Bukti pembayaran hotel atau tempat menginap lainnya atau surat pernyataan jika tidak menginap;</li>
                                <li>Dalam hal bukti pengeluaran transportasi dan/atau bukti pembayaran hotel atau tempat menginap lainnya tidak ada, pertanggungjawaban biaya Perjalanan Dinas biasa dapat menggunakan Daftar Pengeluaran Riil yang telah ditandatangani oleh yang bersangkutan dan disetujui oleh PPK;</li>
                                <li>Laporan perjalanan dinas dan dokumentasi kegiatan;</li>
                                <li>Kuitansi perjalanan dinas.</li>
                            </ol>
                        </li>
                        <li>Pertanggungjawaban kegiatan rapat, konsinyering, dan sejenisnya dengan melampirkan dokumen sebagai berikut:
                            <ol type="a">
                                <li>KAK;</li>
                                <li>Form Permintaan;</li>
                                <li>Surat Undangan;</li>
                                <li>Surat Pernyataan Penanggung Jawab Kegiatan;</li>
                                <li>Surat Tugas;</li>
                                <li>Surat Perjalanan Dinas (SPD) dibuat secara kolektif yang ditandatangani dan distempel oleh hotel. Dalam hal penyelenggara hanya menyediakan. akomodasi dan/atau konsumsi maka SPD ditandatangani oleh panitia penyelenggara/penanggung jawab kegiatan;</li>
                                <li>Daftar Hadir;</li>
                                <li>Notulensi dan Dokumentasi;</li>
                                <li>Jadwal Kegiatan;</li>
                                <li>Daftar Rincian Perhitungan Pembayaran Perjalanan Dinas;</li>
                                <li>List Kamar Hotel yang dilegalisasi oleh Pihak Hotel;</li>
                                <li>Tagihan Hotel;</li>
                                <li> Kelengkapan berkas pengadaan dan tata cara pembayarannya mengacu pada Peraturan Presiden mengenai Pengadaan Barang/Jasa Pemerintah dan Peraturan Menteri Keuangan mengenai Tata Cara Pembayaran Dalam Rangka Pelaksanaan Anggaran Pendapatan dan Belanja Negara.</li>
                            </ol>
                        </li>
                    </ol>
                </div>


                <!-- Belanja Paket Meeting-->
                <div class="tab-pane fade" id="pills-6" role="tabpanel">
                    <h4>Belanja Paket Meeting</h4>
                    <p>Satuan biaya paket kegiatan rapat/pertemuan di luar kantor merupakan satuan biaya yang digunakan untuk kebutuhan biaya kegiatan rapat/pertemuan yang diselenggarakan di luar kantor dalam rangka penyelesaian pekerjaan yang perlu dilakukan secara intensif dan bersifat koordinatif yang paling kurang melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat.</p>
                    <p>Satuan biaya paket kegiatan rapat/pertemuan di luar kantor menurut pesertanya terbagi dalam 3 (tiga) jenis, yaitu:</p>
                    <ol type="1" class="justify-list">
                        <li>Kegiatan rapat/pertemuan di luar kantor pejabat Menteri/setingkat Menteri, adalah kegiatan rapat/pertemuan yang melibatkan pejabat Menteri/setingkat Menteri;</li>
                        <li>Kegiatan rapat/pertemuan di luar kantor pejabat eselon 1/eselon II, adalah kegiatan rapat/pertemuan yang melibatkan pejabat eselon 1/eselon II/yang disetarakan; dan</li>
                        <li>Kegiatan rapat rapat/pertemuan di luar kantor pejabat eselon III ke bawah, adalah kegiatan rapat/pertemuan yang melibatkan pejabat eselon III/yang disetarakan.</li>
                    </ol>
                    <p>Satuan biaya paket kegiatan rapat/pertemuan di luar kantor menurut lama penyelenggaraan, terbagi dalam 3 (tiga) jenis yaitu:</p>
                    <ol type="1">
                        <li>Paket <i>Fullboard</i></li>
                        <p>Satuan biaya paket <i>fullboard</i> disediakan untuk paket kegiatan rapat/pertemuan yang diselenggarakan di luar kantor sehari penuh dan menginap.</p>
                        <li>Paket <i>Fullday</i></li>
                        <p>Satuan biaya paket <i>fullday</i> disediakan untuk paket kegiatan rapat/pertemuan yang diselenggarakan di luar kantor paling singkat 8 (delapan) jam tanpa menginap.</p>
                        <li>Paket <i>Halfday</i></li>
                        <p>Satuan biaya paket <i>halfday</i> disediakan untuk paket kegiatan rapat/pertemuan yang diselenggarakan di luar kantor paling singkat 5 (lima) jam tanpa menginap.</p>
                    </ol>
                        <p class="highlight">Belanja Paket <i>Meeting</i> Dalam Kota</p>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <ol type="a" class="justify-list">
                                <li>Digunakan untuk mencatat perjalanan dinas dalam rangka kegiatan rapat, seminar, dan sejenisnya yang dilaksanakan di dalam kota satker penyelenggara dan dibiayai seluruhnya olch satker penyelenggara maupun yang dilaksanakan di dalam kota satker peserta dan biaya perjalanan dinasnya ditanggung oleh Satker peserta, yang meliputi:</li>
                                <ol class="angka" class="justify-list">
                                    <li>Biaya transportasi peserta, panitia/moderator, dan/atau narasumber baik yang berasal dari dalam kota maupun dari luar kota;</li>
                                    <li>Biaya paket <i>meeting (halfday/fullday/fullboard)</i>;</li>
                                    <li>Uang harian paket <i>meeting</i> peserta, panitia/moderator dan/atau narasumber baik yang berasal dari dalam kota maupun dari luar kota; dan</li>
                                    <li>Uang harian perjalanan dan/atau biaya penginapan peserta/narasumber/moderator dari luar kota dan mengalami kesulitan transportasi.</li>
                                    <p>Besaran nilai biaya paket <i>meeting</i>, uang transport, uang harian paket <i>meeting</i>, dan uang harian perjalanan mengikuti ketentuan yang mengatur mengenai standar biaya tahun berkenaan.</p>
                                </ol>
                            </ol>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a" class="justify-list">
                                <li>Untuk pejabat eselon II ke atas, akomodasi 1 (satu) kamar untuk 1 (satu) orang;</li>
                                <li>Untuk pejabat eselon III ke bawah, akomodasi 1 (satu) kamar untuk 2 (dua) orang;</li>
                                <li>Kepada panitia (karena faktor transportasi dan/atau guna dan mempersiapkan pelaksanaan kegiatan penyelesaian pertanggungjawaban) dan kepada peserta (karena faktor transportasi) yang memerlukan waktu tambahan untuk berangkat/pulang di luar waktu pelaksanaan kegiatan, dapat dialokasikan biaya penginapan dan uang harian perjalanan dinas sesuai dengan ketentuan peraturan perundang-undangan, untuk 1 (satu) hari sebelum dan/atau 1 (satu) hari sesudah pelaksanaan kegiatan;</li>
                                <li>Kegiatan paket <i>meeting</i> dapat dilaksanakan apabila melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat;</li>
                                <li>Kegiatan rapat, seminar, dan sejenisnya dapat diselenggarakan di luar kantor dengan berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya, dan fasilitas di kantor tidak mencukupi yang dibuktikan dengan surat pernyataan dari penanggung jawab kegiatan;</li>
                                <li>Dalam hal tidak terdapat fasilitas hotel atau penginapan yang memadai di dalam kota untuk paket <i>meeting</i> pelatihan petugas, maka Satker dapat mengadakan kegiatan paket meeting di luar kota, dengan terlebih dahulu melakukan revisi akun ke akun 524119; dan</li>
                                <li>Dalam hal peserta merupakan narasumber yang berasal dari luar instansi penyelenggara, maka tidak dapat diberikan uang harian <i>fullboard/fullday/halfday</i> pada saat yang bersangkutan menjadi narasumber dalam kegiatan tersebut.</li>
                            </ol>
                            <p><b>Akun yang Dapat Digunakan</b></p>
                            <p>->Akun 524114 - Belanja Perjalanan Dinas Paket <i>Meeting</i> Dalam Kota</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <ol type="a" class="justify-list">
                                <li>Kelengkapan tagihan pembayaran perjalanan dalam rangka paket <i>meeting</i>:</li>
                                <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1QcLvQWrfd9Jcrl_7uwDMRe_UmGtRzcbz?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1co8kC1xsDZkIzDJys2hPTSshWVD9viDR?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>Undangan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1P1GMF9tbhDsU3C0dlj3eTjN3XIxUuRB1?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Jadwal Kegiatan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1No74ZKstdQXqBoO6DSCTf9q17rIDuP0N?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>
                                                Surat Tugas, yang dikeluarkan oleh:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Penyelenggara Pusat (Sestama BPS);</li>
                                                        <li>Kepala Satker (BPS Provinsi/Kabupaten/Kota);</li>
                                                    </ol>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1wADzuIcEZcMYk4zTNQDGpU3RRwRfb4ZU?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Daftar Hadir</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1Fw3_pgMnpBkbdwZ6bHM81SekicBO5Qmr?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>
                                                Output Paket Meeting, berupa:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Transkip Hasil Rapat;</li>
                                                        <li>Notulensi rapat; dan/atau</li>
                                                        <li>Laporan hasil kegiatan.</li>
                                                    </ol>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1bM0qip9I6ayYq33Q9zsftCw4fvLesrmZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>Dokumentasi</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1lwtapCfKkqanfyYMJx9uarxNZIFMyt8n?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9)</td>
                                            <td>SPD Paket <i>Meeting</i> Dalam Kota</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1jF7O1wot44C16hlGlJLG8R6xVx3LB9p5?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10)</td>
                                            <td>Surat pernyataan tidak menggunakan kendaraan dinas</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1777FBRh5BAov1lN1rygqRtp73HX9QOz-?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11)</td>
                                            <td>Daftar Uang Harian Perjadin Paket <i>Meeting</i></td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1ja3mrLuOmgy0QLzDyb7GVB0plMpNVkDv?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li>Kelengkapan tagihan penyelenggaraan paket <i>meeting</i>:</li>
                                <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1UVGGUm0JIYeiLh6mlAAQjqT1cGWXmUOt?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1QrKoHzH0UY3W1uqvSXWdTE5X3UIdDDMh?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>Undangan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1LZxZ1mq3QlulLx73uZsGH_1xpfbPlw-J?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Jadwal Kegiatan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1KS4n3A--y5eaHFDs0YWWVCzuXFbS9mkw?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>
                                                Surat Tugas, yang dikeluarkan oleh:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Penyelenggara Pusat (Sestama BPS);</li>
                                                        <li>Kepala Satker (BPS Provinsi/Kabupaten/Kota);</li>
                                                    </ol>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1lhlZQQrZyTdqg9uS2SmUaJHX9oWELT5Y?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Daftar Hadir</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1t5J78aIQncel3ftBCn5YNfkoU7oXr0-f?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                             <td>
                                                Output Paket Meeting, berupa:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Transkip Hasil Rapat atau Notulensi rapat;</li>
                                                        <li>Laporan hasil kegiatan termasuk Dokumentasi.</li>
                                                    </ol>
                                                    <span class="teks-keterangan">yang harus diketahui dan ditandatangani oleh penanggung jawab kegiatan</span>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1OSPcNkGGybSdfBF3lWO4zisjxNwJieEI?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>Surat Pernyataan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1UHlJtNg9m2jsED_786uYWMs6dejDIKDq?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9)</td>
                                            <td>
                                                Komitmen dalam bentuk kontrak, dapat berupa:
                                                <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                    <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                                    <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                                    <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                                    <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                                    <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                                </ol>
                                                    <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/11lUBsEnY02tylthiCJfgDJLcUR2z_MdQ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10)</td>
                                            <td>
                                                Bukti Prestasi Pekerjaan, dapat berbentuk:
                                                <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                    <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                                    <li>Berita Acara Serah Terima Pekerjaan/Barang; dan/atau</li>
                                                    <li>Berita Acara Pembayaran;</li>
                                                </ol>
                                                    <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah.</span>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1JLUZUFBW4xXZuCZ56hhfgIsRmEuqwyjm?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11)</td>
                                            <td>Daftar penggunaan kamar <i>(roomlist)</i></td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1_liq8IvmpGihb4Kl32r5HSEz59iAWv4h?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
				                        <tr>
                                            <td>12)</td>
                                            <td>Invoice</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1dv8hkfCcoGH6Mhow1fa0WQmXH9y0hoU5?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
				                        <tr>
                                            <td>13)</td>
                                            <td>Fotokopi NPWP dan rekening koran</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/13l5Bnv5HwqBLS3eScWn25IUs3jaqXnZf?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
				                        <tr>
                                            <td>14)</td>
                                            <td>SSP PPh 23 sebesar 2%</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1dZYDW_qrR5ZjlzOkBuL8zvk9FJdYntPt?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </ol>
                        </ol>
                        <p class="highlight">Belanja Paket <i>Meeting</i> Luar Kota</p>
                        <ol type="1">
                            <p><b>Pengertian</b></p>
                            <p>Pengeluaran untuk perjalanan dinas dalam rangka kegiatan rapat, seminar, dan sejenisnya yang dilaksanakan di luar kota satker penyelenggara dan dibiayai seluruhnya oleh satker penyelenggara, serta yang dilaksanakan di luar kota satker peserta dengan biaya perjalanan dinas yang ditanggung oleh satker peserta, meliputi:</p>
                            <ol type="1" class="justify-list">
                                <li>Biaya transportasi peserta, panitia/moderator, dan/atau narasumber baik yang berasal dari dalam kota maupun dari luar kota;</li>
                                <li>Biaya paket <i>meeting (fullboard)</i>;</li>
                                <li>Uang harian paket <i>meeting</i> peserta, panitia/moderator baik yang berasal dari dalam kota maupun dari luar kota; dan</li>
                                <li>Uang harian perjalanan dan/atau biaya penginapan peserta, panitia/moderator, dan/atau narasumber yang mengalami kesulitan transportasi.</li>
                            </ol>
                            <p>Besaran nilai biaya paket <i>meeting</i>, uang transport, uang saku, dan uang harian mengikuti ketentuan yang mengatur mengenai standar biaya tahun berkenaan.</p>
                            <p><b>Catatan Penting</b></p>
                            <ol type="a" class="justify-list">
                                <li>Untuk pejabat eselon II ke atas, akomodasi 1 (satu) kamar untuk 1 (satu) orang;</li>
                                <li>Untuk pejabat eselon III ke bawah, akomodasi 1 (satu) kamar untuk 2 (dua) orang;</li>
                                <li>Kepada panitia (karena faktor transportasi dan/atau guna mempersiapkan pelaksanaan kegiatan dan penyelesaian pertanggungjawaban) dan kepada peserta (karena faktor transportasi) yang memerlukan waktu tambahan untuk berangkat/pulang di luar waktu pelaksanaan kegiatan, dapat dialokasikan biaya penginapan dan uang harian perjalanan dinas sesuai dengan ketentuan peraturan perundang-undangan, untuk 1 (satu) hari sebelum dan/atau 1 (satu) hari sesudah pelaksanaan kegiatan;</li>
                                <li>Kegiatan paket <i>meeting</i> dapat dilaksanakan apabila melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat;</li>
                                <li>Kegiatan rapat, seminar, dan sejenisnya dapat diselenggarakan di luar kantor dengan berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya, dan fasilitas di kantor tidak mencukupi;</li>
                                <li>Fasilitas di kantor tidak mencukupi sebagaimana dimaksud pada point (5) dibuktikan dengan surat pernyataan dari penanggung jawab kegiatan;</li>
                                <li>Kegiatan rapat, seminar, dan sejenisnya yang diselenggarakan di luar kota, selain mengikuti ketentuan sebagaimana dimaksud dalam point (5), dilaksanakan sepanjang memenuhi ketentuan sebagai berikut:</li>
                                <ol type="a" class="justify-list">
                                    <li>melibatkan kantor vertikal:</li>
                                    <li>berskala regional/nasional/internasional; dan/atau</li>
                                    <li>mendapat persetujuan dari PPK dengan pertimbangan:</li>
                                    <ol class="angka" class="justify-list">
                                        <li>dari sisi teknis harus dilaksanakan di luar kota satuan kerja penyelenggara, atau</li>
                                        <li>diselenggarakan pada lokasi yang terdekat dengan kota satuan kerja penyelenggara.</li>
                                    </ol>
                                </ol>
                                <li>Dalam hal peserta merupakan narasumber yang berasal dari luar instansi penyelenggara, maka tidak dapat diberikan uang harian <i>fullboard/fullday/halfday</i> pada saat yang bersangkutan menjadi narasumber dalam kegiatan tersebut.</li>
                            </ol>
                            <p><b>Akun Yang Dapat Digunakan</b></p>
                            <p>Akun 524119 - Belanja Perjalanan Dinas Paket <i>Meeting</i> Luar Kota.</p>
                            <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                            <ol type="a" class="justify-list">
                                <li>Kelengkapan tagihan pembayaran perjalanan dalam rangka paket <i>meeting</i>:</li>
                                <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/13uC38MlmPsi079F9BTyBPiFrEcrFsXA2?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1yUWt7cP3EAuLIUsVqCZ4hzjtJ8DJwPrV?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>Undangan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1lFjU3K59EgtyTtlgpmr9ek2_o6KeLqpH?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Jadwal Kegiatan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1NW46hHOkd2s8X9Vg0aph0LSBmGLmClQb?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>
                                                Surat Tugas, yang dikeluarkan oleh:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Penyelenggara Pusat (Sestama BPS);</li>
                                                        <li>Kepala Satker (BPS Provinsi/Kabupaten/Kota);</li>
                                                    </ol>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1O30y0hMXiy4hbubFgYvdd48mJd7kYO3_?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Daftar Hadir</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1PiSYf_hJxsTF198K-KOJRenliRPIt9pY?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>
                                                Output Paket Meeting, berupa:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Transkip Hasil Rapat atau Notulensi rapat;</li>
                                                        <li>Laporan hasil kegiatan termasuk Dokumentasi.</li>
                                                    </ol>
                                                    <span class="teks-keterangan">yang harus diketahui dan ditandatangani oleh penanggung jawab kegiatan</span>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1U2nvdhuq8zFrTWf3Gu3UntJERCR75CWH?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>Dokumentasi</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1mC9i6emJ3k3ZdNz9UkT7iMU4ssS2u9vK?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9)</td>
                                            <td>SPD Paket <i>Meeting</i> Luar Kota</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1vNw3rJlDh-ASmf1DoBoOuDSy_n5KauUS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10)</td>
                                            <td>Surat pernyataan tidak menggunakan kendaraan dinas</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1F_88NM2mq_kawaFZa_Fbmd4pmcE7dl_n?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11)</td>
                                            <td>Daftar Uang Harian / Saku Perjadin Paket <i>Meeting</i></td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1u0XFdmcZrNe8IMnSvmjloGDyjYFRPrt0?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li>Kelengkapan tagihan penyelenggaraan paket <i>meeting</i>:</li>
                                <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1SYtKFXmUwzuTekw9QLPurFsSgjPczmQr?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/10A5hTkWCmAE4WEr9_4iYBF66_TPNbGvv?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>Undangan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1RHrPZO1CB9dOndoallhDqIkL-DtFCA9Q?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Jadwal Kegiatan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1v9P1HKUwIZ7ksue8W4HMgD_hZNupmid9?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>
                                                Surat Tugas, yang dikeluarkan oleh:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Penyelenggara Pusat (Sestama BPS);</li>
                                                        <li>Kepala Satker (BPS Provinsi/Kabupaten/Kota);</li>
                                                    </ol>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1d1W-iY_hLqJPwzBtjtGX4VGdYf1_LUfZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Daftar Hadir</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1UJXaigYb8-raxGwWVtYGrEvEw8-e4Tze?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>
                                                Output Paket Meeting, berupa:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; font-size: 14px;">
                                                        <li>Transkip Hasil Rapat;</li>
                                                        <li>Notulensi rapat; dan/atau</li>
                                                        <li>Laporan hasil kegiatan.</li>
                                                    </ol>
                                                    <span class="teks-keterangan">yang harus diketahui dan ditandatangani oleh penanggung jawab kegiatan</span>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1rZ5imOFuH2MLLLWaFwpXfVo8D1lMCitu?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>Dokumentasi</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1iie8ZyPCRdD-xWFpPjVzmd1k_zQXjief?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9)</td>
                                            <td>Surat Pernyataan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1DfPOExZkICg9R8n_kCrOuvfQWKAo0Gsq?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10)</td>
                                            <td>
                                                Bukti Prestasi Pekerjaan, dapat berbentuk:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                        <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                                        <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                                        <li>Berita Acara Pembayaran;</li>
                                                        <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                                        <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                                    </ol>
                                                <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                            </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/158FrVL2LuZyv2Q1QTuv1qmoiX_c5rvGB?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11)</td>
                                            <td>
                                                Komitmen dalam bentuk kontrak, dapat berupa:
                                                <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                    <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                                    <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                                    <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                                    <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                                    <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                                </ol>
                                            <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                        </td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1FavZ3uRYzzeruGZTvOhRT4CJFYex5HZ2?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
				                        <tr>
                                            <td>12)</td>
                                            <td>Invoice</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/11jrDwgi3n83-35SW4_G0mwJWrHlonU2C?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
				                        <tr>
                                            <td>13)</td>
                                            <td>Fotokopi NPWP dan rekening koran</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1ocV577JKQ1OKZQqwaYIdFwF-RjwjaE0T?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
				                        <tr>
                                            <td>14)</td>
                                            <td>SSP PPh 23 sebesar 2%</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1XiJnGMTXnjDfX0celkYxYWDVjADZInWV?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </ol>
                        </ol>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Paket Meeting</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Paket Meeting.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1H4r-fz6tvqbV_qlJlP-uS9USQyhUb5d0/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Belanja Sewa -->
                <div class="tab-pane fade" id="pills-7" role="tabpanel">
                    <h4>Belanja Sewa</h4>
                        <p><b>Pengertian</b></p>
                        <ol type="1" class="justify-list">
                            <li>Sewa didefinisikan sebagai perjanjian di mana pihak yang menyewakan <i>(lessee)</i> menyewakan aset dari pihak yang menyewakan <i>(lessor)</i> untuk digunakan dalam jangka waktu tertentu dengan keseimbangan sewa yang telah ditentukan.</li>
                            <li>Belanja Sewa dapat berupa sewa gedung untuk pertemuan; sewa bangunan/ruangan untuk gudang, sewa tenda; sewa kursi/meja; sewa kendaraan untuk mengangkut logistik perlengkapan pelatihan; dan sejenisnya.</li>
                        </ol>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 522141 - Belanja Sewa.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1oVqb1CXsZMww7suuOBBjBcVh_-Pi3sLX?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1P5b85qA4A1_gZBHkDs1Qt6i0GFa14jHl?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1YMvmGtXZ3ZDbENKABXnIlK4601VO9oua?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        Bukti Prestasi Pekerjaan, dapat berbentuk:
                                            <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                                <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                                <li>Berita Acara Pembayaran;</li>
                                                <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                                <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                            </ol>
                                        <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/17o5-Ct9WX-e28RafmeaxeSPE9KO_keHg?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Fotokopi NPWP dan rekening koran</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1X1VOLoX3fAcPi8dMlG42qHE3i4hocw2W?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                    <tr>
                                    <td>6.</td>
                                    <td>Invoice</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1HljNeqAdNloeBiQ7OoxvK_aAuDDyqtT6?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Faktur Pajak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1BToTc1gNw_cUJahhJ8MD5mLSnzbzyC_N?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>SSP PPN
                                        <span class="teks-keterangan">dikenakan atas Pengusaha Kena Pajak (PKP), untuk transaksi diatas Rp2.000.000,00.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/13aknJqncgkDqDc6ZG94tJmnfn5i1PWbZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>SSP PPh Pasal 4 ayat 2
                                        <span class="teks-keterangan">Sebesar 10% untuk sewa bangunan/ruangan selain hotel atau penginapan.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1f0AaJ85NBlKFDTLfo8uZfNe07H8jl4_j?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>SSP PPh pasal 23
                                        <span class="teks-keterangan">Sebesar 2% jika memiliki NPWP atau 4% jika tidak memiliki NPWP untuk sewa selain alat/harta selain bangunan.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1XLb7wEng-g-Dz2fFf63i_2qdeceKL_hg?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Sewa</h5>
                                            <p class="card-text">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Sewa.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1aoFOLEL77LCbsvuQmgnCzLjmdeMfU4Ya/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- riists Was here!!! -->

                <!-- Belanja Jasa Pengiriman/Ekspedisi -->
                <div class="tab-pane fade" id="pills-8" role="tabpanel">
                    <h4>Belanja Jasa Pengiriman / Ekspedisi</h4>
                        <p><b>Pengertian</b></p>
                        <p>Jasa Pengiriman/Ekspedisi adalah Jasa yang bergerak di bidang pengiriman, mulai dari pengiriman surat, barang berukuran kecil hingga barang berukuran sedang.</p>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 521219 - Belanja Barang Non Operasional Lainnya.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1tlKTPuno_7ggsSYa3tEtJ0AEuGZbmA6F?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1pAlFnjgvWLzIespVu-w9R6gQQWeSDB56?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Invoice</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1gsEDI4DXSH0eEUA91RWSkoZQUiqhjrsg?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1-QD2me8Xbt8MvH1_HSkYTetvfsuu4NOG?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                                Bukti Prestasi Pekerjaan, dapat berbentuk:
                                                    <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                        <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                                        <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                                        <li>Berita Acara Pembayaran;</li>
                                                        <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                                        <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                                    </ol>
                                                <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                            </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1G2-Ok01hlG5wyE4fpvGA1JrQ2PpOrS4x?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                    <tr>
                                    <td>6.</td>
                                    <td>Resi pengiriman/Surat Tanda Terima Barang (STT)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1tL7mgjTgU4wBznSYo008_FXmvyPDlUPP?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Fotokopi NPWP dan rekening koran</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1wX9BdNSu9Axavp7xs8NmYf5Qp3bDqB_e?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Faktur Pajak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/10XZH6jzOjq0WNf4mHBdTFA7yb1W0FVFp?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>SSP PPN</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1BuegYaURcefCm-iUXLUeRNCkc5LDUwDn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>SSP PPh pasal 23
                                        <span class="teks-keterangan">Sebesar 2% jika memiliki NPWP atau 4% jika tidak memiliki NPWP untuk sewa selain alat/harta selain bangunan.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1GXdoXKILQtGG3veTrYqfZxf9uAyOilhI?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Jasa Pengiriman / Ekspedisi</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Jasa Pengiriman / Ekspedisi.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1OBnVzyh5gjK3lD3ThCDIJOd-i2iMgECl/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Jasa Asuransi -->
                <div class="tab-pane fade" id="pills-9" role="tabpanel">
                    <h4>Belanja Jasa Asuransi</h4>
                        <p><b>Pengertian</b></p>
                        <p>Asuransi adalah perjanjian antara penanggung dan tertanggung yang mewajibkan tertanggung membayar sejumlah premi untuk memberikan penggantian atas risiko kerugian, kerusakan, kematian, atau kehilangan keuntungan yang diharapkan, yang mungkin terjadi atas peristiwa yang tak terduga. Belanja jasa asuransi dan/atau pengambil alih risiko ialah Pembayaran atas beban APBN dapat dilakukan sebelum barang dan/atau jasa diterima dalam hal terdapat kegiatan yang karena sifatnya harus dilakukan pembayaran terlebih dahulu.</p>
                        <p><b>Catatan Penting</b></p>
                        <ol type="1" class="justify-list">
                            <li>Belanja Jasa Asuransi yang dimaksud dalam buku pedoman ini adalah belanja jasa asuransi untuk petugas mitra pada kegiatan sensus/survei yang dilakukan oleh BPS;</li>
                            <li>Pengadaan jasa asuransi dengan nilai sampai dengan Rp50.000.000,00 (lima puluh juta rupiah) menggunakan jaminan berupa komitmen penyedia barang/jasa;</li>
                            <li>Pengadaan jasa asuransi dengan nilai lebih dari Rp50.000.000,00 (lima puluh juta rupiah) menggunakan jaminan berupa Surat Pernyataan Kesanggupan Penyedia Barang/Jasa (SPKPBJ); dan</li>
                            <li>Berdasarkan Pasal 9 ayat (1) poin d Undang-undang Nomor 36 Tahun 2008 tentang Perubahan Keempat atas Undang-undang Nomor 7 Tahun 1983 tentang Pajak Penghasilan, untuk menentukan besarnya Penghasilan Kena Pajak bagi Wajib Pajak dalam negeri dan bentuk usaha tetap tidak boleh dikurangkan premi asuransi kesehatan, asuransi kecelakaan, asuransi jiwa, asuransi dwiguna, dan asuransi beasiswa, yang dibayar oleh Wajib Pajak orang pribadi, kecuali jika dibayar olch pemberi kerja dan premi tersebut dihitung sebagai penghasilan bagi Wajib Pajak yang bersangkutan. Jika total penghasilan petugas per bulan ditambahkan dengan nilai premi asuransi di bawah PTKP, tidak dikenakan pajak.</li>
                        </ol>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 521219 - Belanja Barang Non Operasinal Lainnya.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/12T3ZWogP0VW0c8lnMWJJrKc-KEFqpCw2?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1p2jffLh0M2dNtT3g3RH8v5Toef-KrCHk?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1HhDC5R6rjD66RVp5wGgDfAexMwYtuGW8?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Premi sesuai peserta</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1OTXW8oPF8kZzWrRT3_owKS5mWSFqaZhw?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Polis asuransi, kartu tanda kepersetaan, atau sertifikat ke persetaan asuransi</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1DIDZY7eaFAt_cywau6JZsqh-tJfj-Qhy?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Jasa Asuransi</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Jasa Asuransi.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1UWCIT9a_2OUgRHV-5KDWcH6QExPcT9yc/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Jasa Lainnya -->
                <div class="tab-pane fade" id="pills-10" role="tabpanel">
                    <h4>Belanja Jasa Lainnya</h4>
                        <p><b>Pengertian</b></p>
                        <p>Jasa lainnya adalah jasa non-konsultansi atau jasa yang membutuhkan peralatan, metodologi khusus, dan/atau keterampilan dalam suatu sistem tata kelola yang telah dikenal luas di dunia usaha untuk menyelesaikan suatu pekerjaan.</p>
                        <p><b>Catatan Penting</b></p>
                        <ol type="1" class="justify-list">
                            <li>Digunakan untuk pembayaran jasa yang tidak bisa ditampung pada kelompok akun 52211, 52212, 52213, 52214, dan 52215.</li>
                            <li>Contoh dari jasa lainnya adalah jasa <i>Event Organizer</i> (EO), sosialisasi melalui media, penayangan iklan, publisitas <i>off air</i>, pengadaan <i>call center</i>, dan jenis jasa lainnya.</li>
                        </ol>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 522191 - Belanja Jasa Lainnya.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/14WWpZOTdgHD32nXoyMn0FBQC3phuhNpM?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/12SGcy6rP3LZ2zH13re7GwfKQ8yCSIRIo?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Undangan dan Daftar Hadir</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1mpCjRbC-nRTFFTvyPyIWNZfxch4mE1Hi?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                            <li>Surat Perintah Kerja (nilai pengadaan bernilai di atas Rp50.000.000,00 s.d. Rp200.000.000,00);</li>
                                            <li>Surat Perjanjian (nilai pengadaan di atas Rp200.000.000,00); dan/atau</li>
                                            <li>Surat/Bukti Pesanan (jika menggunakan E-Purchasing);</li>
                                        </ol>
                                        <span class="teks-keterangan">sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang/jasa pemerintah.</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1WxI54IdQUGWcyMSNNfDhppXpPxYq24Q1?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        Bukti Prestasi Pekerjaan, dapat berbentuk:
                                            <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                                <li>Berita Acara Penyelesaian Pekerjaan;</li>
                                                <li>Berita Acara Serah Terima Pekerjaan/Barang;</li>
                                                <li>Berita Acara Pembayaran;</li>
                                                <li>Berita Acara Kemajuan Pekerjaan; dan/atau</li>
                                                <li>Bukti Penyelesaian Pekerjaan lainnya.</li>
                                             </ol>
                                        <span class="teks-keterangan">Bukti prestasi pekerjaan tersebut sesuai dengan ketentuan peraturan perundang-undangan mengenai pengadaan barang dan jasa pemerintah;</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1SI_At9OMyuGNf-A9kuj6hE1YKXxSr9ym?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                    <tr>
                                    <td>6.</td>
                                    <td>Laporan pelaksanaan kegiatan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1S6UegwlUSHy_k-hN8Os-08_GWzVwT_Rk?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Faktur Pajak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1M8wyOLvsbCo1NHpBr9pXwf2OliHTiCcg?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>SSP PPN
                                        <span class="teks-keterangan">dikenakan atas Pengusaha Kena Pajak (PKP), untuk transaksi diatas 2 juta rupiah</span>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1FG4muy4_23r_-87nXAY4ZCcFdkdzFvhM?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>SSP PPh 23 sebesar 2%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1svC6_h7SIuWp9F4pToQhGUd3WcrBgagW?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Jasa Lainnya</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Jasa Lainnya.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/1hpX3a4080nkWSVDpPYsrhvUcJtwqZ0fH/view?usp=sharing" target="_blank" class="btn btn-primary w-75 me-2 mb-2">
                                            📄 Buka PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Pulsa/Paket Data Internet -->
                <div class="tab-pane fade" id="pills-11" role="tabpanel">
                    <h4>Belanja Pulsa / Paket Data Internet</h4>
                        <p><b>Pengertian</b></p>
                        <ol type="1" class="justify-list">
                            <li>Biaya paket data dan komunikasi adalah bantuan biaya yang diberikan kepada pegawai yang dalam pelaksanaan tugasnya sebagian besar membutuhkan komunikasi secara daring <i>(online)</i>. Pemberian biaya paket data dan komunikasi dilakukan secara selektif dengan mempertimbangkan intensitas pelaksanaan tugas dan fungsi penggunakan media daring <i>(online)</i> dan ketersediaan anggaran, dan sesuai dengan prinsip tata kelola yang baik dan akuntabilitas.</li>
                            <li>Belanja pulsa/paket data pada kegiatan sensus/survei merupakan biaya yang diberikan kepada pegawai/petugas guna mendukung rangkaian kegiatan sensus/survei seperti pelatihan petugas secara daring <i>(online)</i>, paket data untuk kegiatan lapangan.</li>
                        </ol>
                        <p><b>Catatan Penting</b></p>
                        <p>Pengadaan paket data/pulsa mengikuti isi perjanjian/surat kontrak, pedoman teknis kegiatan sensus/survei, atau surat edaran dari pimpinan BPS.</p>
                        <p><b>Akun yang Dapat Digunakan</b></p>
                        <p>->Akun 521211 - Belanja Bahan.</p>
                        <p><b>Kelengkapan Tagihan Pembayaran</b></p>
                        <table class="tabel-administrasi" cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/file/d/1DsgihPXZMT5C1j5qyfruLFqrfpH429M2/view?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/file/d/1U4iV1vBrx5BIcU7LBMeYYMMuqGUHUQbB/view?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                         Komitmen dalam bentuk kontrak, dapat berupa:
                                        <ol type="a" style="margin-top: 5px; padding-left: 20px; margin-bottom: 5px; font-size: 14px;">
                                            <li>Bukti Pembelian/Pembayaran (nilai pengadaan paling banyak Rp10.000.000,00);</li>
                                            <li>Kuitansi (nilai pengadaan paling banyak Rp50.000.000,00);</li>
                                        </ol>
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/file/d/1ZcJQtY4zqMOm79JjEVtKLMNC1ECzEAhX/view?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Daftar nama dan nomor hp penerima paket data/pulsa</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/file/d/1sW2KN5dudt4oEPacC4-JBMnwfucJfQsv/view?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Bukti tanda terima paket data/pulsa</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/file/d/1kK5K1QGp7BloUq5GqCe7N5rwzGENIxAC/view?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                    <tr>
                                    <td>6.</td>
                                    <td>SSP PPh 22</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/file/d/10zUWdDtvfLMFCy-tFuF2lO-RI69Q-2-I/view?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title fw-semibold">Pedoman Belanja Pulsa / Paket Data Internet</h5>
                                            <p class="card-text small">Klik tombol di samping untuk membuka file PDF Pedoman Belanja Pulsa / Paket Data Internet.</p>
                                        </div>
                                        <div class="text-end">
                                            <!-- Tombol Buka PDF -->
                                            <a href="https://drive.google.com/file/d/11omyW91nSyueDAvlNeA2y3ZaoQ5M48xo/view?usp=sharing" target="_blank" class="btn btn-primary w-75 mb-2">
                                            📄 Buka PDF
                                            </a>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    </div>
</div>
</body>
</html>

<?php include 'includes/footer.php'; ?>
