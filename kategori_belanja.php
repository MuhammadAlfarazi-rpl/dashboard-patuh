<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .angka {
            list-style-type: decimal; 
        }
        .angka li::marker {
            content: counter(list-item) ") "; 
        }
        .huruf {
            list-style-type: lower-alpha; 
        }
        .huruf li::marker {
            content: counter(list-item, lower-alpha) ") "; 
        }
        .justify-list li {
            text-align: justify;
        }
        .nav-link:hover {
            background-color: #e0e0e0;
        }
        .nav-link {
            transition: background-color 0.8s ease;
        }
    </style>
</head>
<body>

<!-- JUDUL BESAR -->
<div class="container-fluid mt-5 pt-5">
    <div class="card shadow-sm">
        <div class="card-body text-center pb-2 border-bottom">
            <h3 class="fw-bold text-uppercase display-6">
                Pedoman Administrasi Keuangan Sensus dan Survei
            </h3>
            <h6 class="text-muted">
                di Lingkungan Badan Pusat Statistik
            </h6>
        </div>
    </div>
</div>

<!-- MAIN CONTENT: SIDEMENU + KONTEN -->
<div class="container-fluid mb-5">
    <div class="card">
        <div class="row g-0 d-flex align-items-stretch">

        <!-- SIDEMENU -->
        <div class="col-lg-3 sidebar-border-end">
            <div class="p-3">
                <?php include 'includes/side_menu2.php'; ?>
            </div>
        </div>

        <!-- KONTEN UTAMA -->
        <div class="col-lg-9">
            <div class="justify-list">
            <div class="p-4 tab-content h-100" id="v-pills-tabContent">
                <!-- Belanja Konsumsi Rapat -->
                <div class="tab-pane fade show active" id="pills-0" role="tabpanel">
                    <h4>Belanja Konsumsi Rapat</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <p>Satuan Biaya Konsumsi Rapat merupakan satuan biaya yang digunakan untuk kebutuhan biaya pengadaan makan dan kudapan termasuk minuman untuk rapat/pertemuan baik untuk rapat koordinasi tingkat. menteri/eselon 1/setara maupun untuk rapat biasa dan dilaksanakan secara langsung <i>(offline)</i> paling singkat selama 2 (dua) jam.</p>
                        <li>Catatan Penting</li>
                        <ol type="1">
                            <li>Rapat koordinasi tingkat menteri/eselon 1/setara adalah rapat koordinasi yang pesertanya menteri/eselon 1/pejabat yang setara.</li>
                            <li>Konsumsi Rapat berupa makan dan kudapan termasuk minuman dapat diberikan jika melibatkan unit eselon I lainnya/kementerian/lembaga lainnya/instansi pemerintah/pihak lain. Pihak lain tersebut antara lain mitra petugas sensus/survei, wartawan, dan lain sebagainya.</li>
                            <li>Konsumsi Rapat berupa kudapan termasuk minuman dapat diberikan jika melibatkan satker/eselon II lainnya/setara.</li>
                            <li>Yang dimaksud satker lainnya adalah kantor vertikal berdasarkan struktur organisasi.</li>
                        </ol>
                        <br>
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 521211 - Belanja Bahan.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>6.</td>
                                    <td>Komitmen dalam bentuk kontrak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1pDX7OfB3Vu9ivWWMOKFWaRLDagIGtZIp?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Bukti Prestasi Pekerjaan</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1fY3CfFZwhZHQ17rHtJ48cU9OSLjmKWTY?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Surat Setoran Pajak (SSP) PPh 22 sebesar 1,5%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1P1TGIVCbQVSReFE2R2Ffq8AHrlNkbY2Y?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>SSP PPh 23 sebesar 2%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1wGipUi3gx6IboTRqpPwIi2dhna-RxMLb?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Konsumsi Rapat</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Konsumsi Rapat.</p>
          
                                        <!-- Tombol Buka PDF -->
                                         <a href="https://drive.google.com/file/d/1HBYHNqqS9zYXD4QV07u_TWig1d24X63w/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1HBYHNqqS9zYXD4QV07u_TWig1d24X63w" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Perlengkapan Pakai Habis -->
                <div class="tab-pane fade" id="pills-1" role="tabpanel">
                    <h4>Belanja Perlengkapan Pakai Habis</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <ol type="1">
                            <li>Satuan biaya keperluan sehari-hari perkantoran di dalam negeri merupakan satuan biaya yang digunakan untuk kebutuhan biaya keperluan sehari-hari perkantoran berupa barang pakai habis yang secara langsung menunjang penyelenggaraan operasional dan untuk memenuhi kebutuhan minimal agar suatu kantor dapat memberikan pelayanan (melaksanakan kegiatan) secara optimal.</li>
                            <li>Barang pakai habis bersifat tidak berkelanjutan, hanya untuk satu kali kegiatan dalam jangka waktu pendek yang diperlukan dalam. pelaksanaan kegiatan non operasional seperti pameran, seminar, sosialisasi, rapat, diseminasi dan lain lain yang terkait langsung dengan <i>output</i> suatu kegiatan dan tidak menghasilkan barang persediaan.</li>
                            <li>Berdasarkan surat edaran Direktorat Akuntansi dan Pelaporan Keuangan, Direktorat Jenderal Perbendaharaan, Kementerian Keuangn Nomor: SE-6478/PB.06/2015, "untuk barang-barang yang direncanakan "habis pada satu kegiatan tidak dialokasikan dari belanja barang persediaan dan "tidak menjadi barang persediaan".</li>
                        </ol>
                        <li>Catatan Penting</li>
                        <ol type="1">
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
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Pada umumnya akun yang dapat digunakan dalam belanja barang perlengkapan pakai habis pada Program Penyediaan dan Pelayanan Informasi Statistik (PPIS) untuk kegiatan Sensus dan Survei adalah akun belanja barang khususnya pada akun belanja bahan (521211).</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>3.</td>
                                    <td>Komitmen dalam bentuk kontrak</td>
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
                                    <td>Bukti Prestasi Pekerjaan</td>
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
                                    <td>SSP PPN sebesar 11%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1uGeZ8VnQgj4WHwbZZ-9x2EPfItfZZG_m?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>SSP PPh 22 sebesar 2%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/17Ukj8rC9W2lSNPaOGcCZLf5LWt1ZyG9C?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Perlengkapan Pakai Habis</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Perlengkapan Pakai Habis.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1scZzWbHb2qnFPM1YWjiGq_slyfLUGH-P/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1scZzWbHb2qnFPM1YWjiGq_slyfLUGH-P" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Penggandaan / Pencentakan -->
                <div class="tab-pane fade" id="pills-2" role="tabpanel">
                    <h4>Belanja Penggandaan / Pencentakan</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <p>Belanja penggandaan/pencetakan dilakukan untuk memenuhi kebutuhan. bahan cetakan dalam rangkaian kegiatan sensus/survei, meliputi pelatihan petugas, sosialisasi, rapat, atau diseminasi. Belanja penggandaan/pencetakan dapat berupa pencetakan kuesioner sensus/survei, <i>leaflet</i>, buku pedoman, buku publikasi, dan sebagainya.</p>
                        <li>Catatan Penting</li>
                        <ol type="1">
                            <li>Proses cetak bisa dilakukan di dalam atau luar kantor dengan pertimbangan kemampuan, kerahasiaan, dan keamanan dokumen negara; dan</li>
                            <li>Jika terdapat barang sisa di akhir periode pelaporan, akan dicatat sebagai persediaan melalui:</li>
                            <ol type="a">
                                <li>Ralat dokumen sumber belanja (jika waktu memungkinkan dan mempertimbangkan ketersediaan pagu anggaran); atau</li>
                                <li>Opname fisik barang.</li>
                            </ol>
                        </ol>
                        <li>Akun yang Dapat Digunakan</li>
                        <ol type="1">
                            <li>521211 - Belanja Bahan</li>
                            <p>Menggunakan akun 521211 jika belanja menghasilkan barang yang pakai habis.</p>
                            <li>521811 - Belanja Barang Persediaan Barang Konsumsi</li>
                            <p>Menggunakan akun 521811 jika belanja ini menghasilkan persediaan berupa barang konsumsi.</p>
                        </ol>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>Komitmen dalam bentuk kontrak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1IFHltwPtZ0vbqJc8Sk60SJAp2jS73QHH?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Bukti Prestasi Pekerjaan</td>
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
                                    <td>SSP PPh sebesar 11%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1gIYWHQQL8WGA9mUrb_oZNg67GBJBgHM0?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>SSP PPh sebesar 1,5%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1k1BNpQv1_IMKtY555VSLB8rG65xdttsZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Penggandaan / Pencentakan</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Penggandaan / Pencentakan.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1hinlwZce0_NhICJwEJCOyviXhGq9SW-U/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1hinlwZce0_NhICJwEJCOyviXhGq9SW-U" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Persediaan Barang Konsumsi -->
                <div class="tab-pane fade" id="pills-3" role="tabpanel">
                    <h4>Belanja Persediaan Barang Konsumsi</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <ol type="1">
                            <li>Persediaan adalah aset lancar dalam bentuk barang atau perlengkapan yang dimaksudkan untuk mendukung kegiatan operasional pemerintah, dan barang-barang yang dimaksudkan untuk dijual dan/atau diserahkan dalam rangka pelayanan kepada masyarakat. Persediaan mencakup barang atau perlengkapan yang dibeli dan simpan untuk digunakan, misalnya barang habis pakai seperti ATK, barang tak habis pakai seperti komponen peralatan dan pipa, dan barang bekas pakai.</li>
                            <li>Belanja adalah semua pengeluaran dari Rekening Kas Umum Negara yang mengurangi Saldo Anggaran Lebih dalam periode tahun anggaran bersangkutan dan tidak akan diperoleh pembayarannya kembali oleh pemerintah. Belanja Barang Persediaan Konsumsi adalah akun yang digunakan untuk mencatat belanja barang yang menghasilkan persediaan berupa barang konsumsi, seperti ATK, bahan cetakan, alat-alat rumah tangga, dan lain-lain.</li>
                            <li>Belanja Barang Persediaan Barang Konsumsi digunakan untuk mencatat belanja yang direncanakan kontinyu/berkelanjutan, tidak habis dalam sekali kegiatan, dan disimpan dalam gudang penyimpanan seperti ATK, bahan cetakan, buku-buku peraturan, dan alat-alat rumah tangga.</li>
                        </ol>
                        <li>Catatan Penting</li>
                        <ol type="1">
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
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 521811 - Belanja Persediaan Barang Konsumsi.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>Komitmen dalam bentuk kontrak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/15Qx9BvcStSXlv1yXBsm9prro1Rl2epHS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Bukti Prestasi Pekerjaan</td>
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
                                    <td>SSP PPN sebesar 11%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/158LK9N4QAPYyuEwNkZx3dqNagt9DNX_H?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>SSP PPh 22 sebesar 1,5%</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1M9a7BHRPzglaZzaJRidasbeB_O-KfXFV?usp=sharing" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Persediaan Barang Konsumsi</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Persediaan Barang Konsumsi.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1sxaBDJpzTV4t2AXhJ3CwjU-F46XB1YS_/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1sxaBDJpzTV4t2AXhJ3CwjU-F46XB1YS" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Honorarium -->
                <div class="tab-pane fade" id="pills-4" role="tabpanel">
                    <h4>Belanja Honorarium</h4>
                    <ol type="A">
                        <li>Honor <i>Output</i> Kegiatan</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <ol type="a">
                                <li>Honor <i>Output</i> Kegiatan merupakan honor yang dibayarkan atas pelaksanaan kegiatan yang insidentil dan dapat dibayarkan tidak terus menerus dalam satu tahun. Honor <i>output</i> kegiatan mencakup honor tim pelaksana kegiatan (pengarah, penanggung jawab, koordinator, ketua, sekretaris, anggota, dan staf sekretariat), honor petugas, honor penunjuk jalan, honor ketua SLS, kades/lurah, honor camat, honor pengajar (Innas atau Inda), dll.</li>
                                <li>Honor Tim Pelaksana Kegiatan adalah honor yang diberikan kepada seseorang yang berdasarkan Surat Keputusan Presiden/Menteri/Pejabat Setingkat Menteri/Pejabat Eselon 1/Kuasa Pengguna Anggaran (KPA) diangkat dalam suatu tim pelaksana kegiatan untuk melaksanakan suatu tugas tertentu.</li>
                            </ol>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Honor tim pelaksana kegiatan dapat dibayarkan jika terdapat keterlibatan instansi atau kementerian/lembaga lain. Apabila pada bulan tertentu tidak terdapat keterlibatan atau koordinasi dengan instansi atau kementerian/lembaga lain, maka honor tim pelaksana kegiatan pada bulan tersebut tidak dapat dibayarkan.</li>
                                <li>Dalam satu tahun anggaran, honor tim pelaksana kegiatan hanya dapat dibayarkan untuk dua kegiatan saja. Jika salah satu atau kedua kegiatan telah selesai dilaksanakan sebelum berakhirnya tahun anggaran, maka honor tim pelaksana kegiatan tidak dapat diberikan lagi pada kegiatan yang lain.</li>
                                <li>Honor Innas/Inda dibayarkan sesuai dengan satuan yang tercantum pada Pedoman Harga Kegiatan Statistik yang berlaku.</li>
                                <li>Honor petugas mitra non PNS/PNS non BPS dibayarkan dengan satuan O-B (Orang-Bulan). Pembayaran honor petugas mitra non PNS yang menggunakan satuan O-B harus memperhatikan batas PTKP (Penghasilan Tidak Kena Pajak). Jika besaran honor dalam sebulan tidak melebihi PTKP, maka tidak dikenakan pajak.</li>
                                <li>Pembayaran dapat dilakukan setelah pekerjaan selesai dibuktikan dengan Berita Acara Serah Terima Pekerjaan (BAST) dengan memperhatikan klausul pada perjanjian kerja masing-masing kegiatan sensus/survei.</li>
                                <li>Jika kondisi urgent dan tidak memungkinkan dibayarkan secara transfer bank, Kuasa Pengguna Anggaran masing-masing daerah. dapat menetapkan kebijakan pembayaran secara tunai dengan melengkapi surat pernyataan pembayaran tunai oleh KPA, surat pendelegasian Bendahara kepada yang diberi kuasa untuk membayarkan tunai dan foto saat penyerahan pembayaran.</li>
                                <li>Satuan Harga Kegiatan Umum BPS adalah satuan biaya berupa honorarium yang dapat digunakan untuk membayar kegiatan statistik yang bersifat umum di BPS. Satuan Harga Kegiatan Khusus BPS adalah satuan biaya berupa honorarium yang dapat digunakan untuk membayar petugas pendataan, petugas pemeriksaan dan petugas pengolahan kegiatan statistik yang bersifat spesifik kegiatan tertentu di BPS. Satuan harga sebagaimana dimaksud merupakan perkiraan yang dapat digunakan sebagai dasar penentuan beban kerja dan total honor dalam satu bulan. Total dalam satu bulan merujuk pada Standar Biaya Masukan Lainnya (SBML) yang disetujui oleh Menteri Keuangan.</li>
                            </ol>
                            <li>Akun yang Dapat Digunakan</li>
                            <p>Akun 521213-Belanja Honor <i>Output</i> Kegiatan.</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <ol type="a">
                                <li>Kelengkapan pembayaran honor tim:</li>
                                <table cellpadding="6" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>1)</td>
                                            <td>Kerangka Acuan Kerja (KAK)</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1CEnq97f7MVwYsR0W6YLMl0QGgIxxZxLe?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1FvpGKDp5dGroi-An2JnQDRs1ituuCzkB?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA/SK KBPS yang mencakup tugas dan fungsi, besaran rate, dan kedudukan dalam Pokja</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1wEas_EYbCJFCUFgHakHlFL8vaQ5RFTRm?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Laporan tim/<i>output</i> pekerjaan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1VmUl3eccQNtpCry7Fl6pKSva94MFAUww?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>Daftar rincian penerima honor <i>output</i> kegiatan/kuitansi perorang</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1z97YWywyY1C-I0chn7Cn9WOSyh17-0wN?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Rekapitulasi sesuai jabatan dalam keanggotaan Pokja</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/1fF6JPB3ox2608BGu9rAUDUvJVu1oaKaZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
			                            <tr>
                                            <td>7)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 70px;">
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
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/168V2zIHN0jctedoKM67BKyD_sncUs7jS?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1rKkz7VcPr2i_dzJxvBHLgBIt9Yn1E8KX?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1Xxg6XdSISGt53cdqdX2dIioQID3FTu_L?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Daftar rincian penerima honor atau kuitansi per orang</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1EkGeWlWywG5sJUlBNf1VoKz66DGCiYqT?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 270px;">
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
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/1UPOUdOOJaXxmePDVpsimlLVsTfPDu_-e?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/1UtHnOh5fJuC1shxoeMbR1PdY7pDY8r12?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA</td>
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/1OpGOnE4GldMiiKVnvbb33Km9xVwbe1ba?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Jadwal kegiatan (mengikuti jadwal pada pedoman penyelenggaraan pelatihan)</td>
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/1oUM5p5ha7zdyhcsZXkSsn0s42fmXfvHn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>Daftar hadir</td>
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/1KKQzN--LIukVK9GDDT5ZyrVvC69PoVH4?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Rekapitulasi belanja honor</td>
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/1OJXMzJ7f0JSQhHyhJTzMPaY21JlWH7wn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>Laporan pengajar (Innas atau Inda)</td>
                                            <td style="padding-left: 170px;">
                                                <a href="https://drive.google.com/drive/folders/16srwUcfcS1UaQL2fHYNew3jNO8sY33Iv?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 170px;">
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
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1bLbZ0ta-blt8r4EQFackN3EnXoEeRB91?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1v2-J0awUtAFDFfVYdTBh_3wUKSWliPCk?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/17SaifIJ85hxYEOUNMeG2PsNGYc_rAyXn?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Surat kontrak/surat perjanjian kerja</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1pOAGlsv2nowlFe7qYe5poGqfmekwu9uf?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>Rekapitulasi belanja honor</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/14k4ZCxmKUmliZoeq8mZK-Usjg9lkqtZ0?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>Bukti Prestasi Pekerjaan</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1GicE5_s5Hl7V3umKZNu03SAwCDFXmQ_9?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 270px;">
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
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1xONkc98IgEWNvRhHoeIVXlKFqKHSpQXK?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1HmLKAuF9Jlsg1kr2Wv1nZWpRE6jEiASW?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>SK KPA tentang Honor Petugas</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1alofNuS4JpFJcw225waWr7XEWHFuhBTq?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>Rekapitulasi belanja honor</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1E3a0QuFRmc8IqRHFUvOt8hX1QWBJf_Z7?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>SSP PPh Pasal 21</td>
                                            <td style="padding-left: 270px;">
                                                <a href="https://drive.google.com/drive/folders/1dZR9tji24BZQeBgCu0BXwTL-Z08RYAEG?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <br>
                        <li>Honor Terkait Jasa Profesi</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <ol type="a">
                                <li>Honor terkait jasa profesi diberikan kepada narasumber (pegawai negeri/non pegawai negeri) yang memberikan informasi atau pengetahuan kepada pegawai negeri lainnya/masyarakat. Honor terkait jasa profesi juga diberikan kepada moderator.</li>
                                <li>Honor narasumber adalah honor yang diberikan kepada Pejabat Negara/Pegawai Aparatur Sipil Negara/Anggota Polri/TNI yang memberikan kegiatan dalam informasi/pengetahuan/kemampuan Seminar/Rapat/Sosialisasi/Diseminasi/Bimbingan Teknis/<i>Workshop</i>/Sarasehan/Simposium/Lokakarya/<i>Focus Group Discussion</i>/Kegiatan Sejenis yang dilaksanakan secara langsung <i>(offline)</i> maupun daring <i>(online)</i> melalui aplikas: secara live bukan rekaman/hasil <i>tapping</i>, baik di dalam negeri maupun di luar negeri, tidak termasuk untuk kegiatan diklat/pelatihan.</li>
                                <li>Honor moderator adalah honor yang diberikan kepada Pegawai Aparatur Sipil Negara/Anggota Polri/TNI yang ditunjuk oleh pejabat yang berwenang untuk melaksanakan tugas sebagai kegiatan moderator pada Seminar/Rapat/Sosialisasi/Diseminasi/Bimbingan Teknis/<i>Workshop</i>/Sarasehan/Simposium/Lokakarya/<i>Focus Group Discussion</i>/Kegiatan Sejenis yang dilaksanakan secara langsung <i>(offline)</i> maupun daring <i>(online)</i> melalui aplikasi secara live bukan rekaman/hasil <i>tapping</i> baik di dalam negeri maupun di luar negeri, tidak termasuk untuk kegiatan diklat/pelatihan.</li>
                                <li>Honor narasumber pakar adalah satuan biaya honorarium narasumber pakar/praktisi/profesional merupakan satuan biaya yang digunakan untuk kebutuhan honorarium narasumber pakar/praktisi/profesional dari luar lingkup kementerian negara/lembaga penyelenggara yang mempunyai keahlian/profesionalisme dalam ilmu/bidang tertentu dalam kegiatan Seminar/Rapat/Sosialisasi/Diserninasi/<i>Workshop</i>/Sarasehan/Simposium/Diklat/Lokakarya/<i>Focus Group Discussion</i>/Kegiatan Sejenis yang diselenggarakan baik di dalam negeri maupun di luar negeri yang dilaksanakan secara langsung <i>(offline)</i> maupun daring <i>(online)</i> melalui aplikasi secara live dan bukan rekaman/hasil <i>tapping</i>.</li>
                            </ol>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Satuan jam yang digunakan dalam pemberian honor narasumber adalah 60 (enam puluh) menit baik dilakukan secara panel maupun individual.</li>
                                <li>Narasumber dan moderator berasal dari luar kementerian negara/lembaga penyelenggara atau dari perguruan tinggi di luar satuan kerja penyelenggara.</li>
                                <li>Honor narasumber dan moderator hanya dapat diberikan oleh satuan kerja penyelenggara.</li>
                            </ol>
                            <li>Akun yang Dapat Digunakan</li>
                            <p>Akun 522151 - Belanja Jasa Profesi.</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <table cellpadding="6" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>a.</td>
                                        <td>Kerangka Acuan Kerja (KAK)</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1rly0LmWDO6XDdWuD1CfHTGCCc5u7sl_p?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>b.</td>
                                        <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1cUOOYAPYskOBqiYJPvAhXtR9Ey90GzPT?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>c.</td>
                                        <td>SK KPA</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1oIlOGH0ypwMTPqedxTu74I73EfbL2O8J?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>d.</td>
                                        <td>Undangan narasumber/moderator</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1rMJyBJ-wm3sZJXfgM-i0VhDe6aE7X3-D?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>e.</td>
                                        <td>Undangan peserta</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/11_9aHKEkc7KqmCmzR0saKXVHRVyZybNf?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>f.</td>
                                        <td>Jadwal kegiatan sesuai panduan penyelenggaraan</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1jDhUvSsQQ0jB7anf1peavR1rmaA5maqr?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>g.</td>
                                        <td>Daftar hadir narasumber/moderator</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1TjiNTLypI4LKy1hMlTsQSubvUBEbyYvY?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>h.</td>
                                        <td>Bahan paparan narasumber (moderator tidak perlu)</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1ZR0pFwoV-UwKk9PDv01cDQRRbN5s4tff?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>i.</td>
                                        <td>Kuitansi</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/1cWEz52MT2UON55PGMfqd6OrL4ibwA-BC?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>j.</td>
                                        <td>Salinan/fotokopi NPWP dan buku rekening</td>
                                        <td style="padding-left: 240px;">
                                            <a href="https://drive.google.com/drive/folders/10Ob-HGJlo00ZLbBjj32Gkyyi075SOlcW?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                            <i class="bx bx-folder-open"></i> Lihat </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>k.</td>
                                        <td>SSP PPh Pasal 21</td>
                                        <td style="padding-left: 240px;">
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Honorarium</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Honorarium.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1C7PaqwmMgwBRp4BFVkm1ygDbKQM5X2R5/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1C7PaqwmMgwBRp4BFVkm1ygDbKQM5X2R5" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Perjalanan Dinas -->
                <div class="tab-pane fade" id="pills-5" role="tabpanel">
                    <h4>Belanja Perjalanan Dinas</h4>
                    <ol type="A">
                        <li>Belanja Perjalanan Dinas Biasa</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <ol type="a">
                                <li>Perjalanan Dinas Biasa adalah Perjalanan Dinas Jabatan yang dilakukan Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap, melewati batas Kota dari tempat kedudukan ke tempat yang dituju, dalam rangka melaksanakan tugas, dan kembali ke tempat kedudukan semula di dalam negeri, sesuai dengan perintah atasan Pelaksana perjalanan dinas yang tertuang dalam Surat Tugas.</li>
                                <li>Batas Kota sebagaimana dimaksud khusus untuk Provinsi DKI Jakarta meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan.</li>
                            </ol>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Surat Tugas diterbitkan oleh:</li>
                                <ol class="angka">
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
                                    <ol class="huruf">
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
                            <li>Akun yang Dapat Digunakan</li>
                            <p>Akun 524111- Belanja Perjalanan Dinas Biasa.</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <table cellpadding="6" cellspacing="0">
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
                        <li>Belanja Perjalanan Dinas Dalam Kota Kurang Dari 8 (delapan) Jam</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <ol type="a">
                                <li>Perjalanan Dinas Dalam Kota kurang dari 8 (delapan) Jam adalah Perjalanan Dinas Jabatan yang dilakukan Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap, dilaksanakan di dalam Kota yang dilaksanakan kurang dari 8 (delapan) jam sesuai dengan perintah atasan Pelaksana perjalanan dinas yang tertuang dalam Surat Tugas.</li>
                                <li>Khusus untuk Provinsi DKI Jakarta dalam kota dimaksud meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan.</li>
                            </ol>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Dibayarkan secara <i>lumpsum</i> sesuai standar biaya yang berlaku atau berdasarkan SK KPA masing-masing daerah dan diberikan sesuai jumlah hari <i>riil</i> pelaksanaan Perjalanan Dinas;</li>
                                <li>Penugasan yang dilaksanakan lebih dari satu tujuan pelaksanaan perjalanan dinas dan merupakan satu kesatuan penugasan hanya diberikan sebesar 1 (satu) kali biaya transport dalam kota;</li>
                                <li>Surat Tugas diterbitkan oleh atasan langsung. Penerbit Surat Tugas membatasi pelaksanaan perjalanan dinas dalam kota hanya sampai 8 jam; dan</li>
                                <li>Pelaksana SPD perjalanan dinas dalam kota sampai dengan 8 jam tetap mendapatkan Uang Makan selama terdapat catatan kehadiran di kantor.</li>
                            </ol>
                            <li>Akun yang Dapat Digunakan</li>
                            <p>Akun 524113 - Belanja Perjalanan Dinas Dalam Kota.</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <table cellpadding="6" cellspacing="0">
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
                        <li>Belanja Perjalanan Dinas Dalam Kota Lebih Dari 8 (delapan) Jam</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <ol type="a">
                                <li>Perjalanan Dinas Dalam Kota lebih dari 8 (delapan) Jam adalah Perjalanan Dinas Jabatan yang dilakukan Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap, dilaksanakan di dalam Kota yang dilaksanakan lebih dari 8 (delapan) jam sesuai dengan perintah atasan Pelaksana perjalanan dinas yang tertuang dalam Surat Tugas.</li>
                                <li>Khusus untuk Provinsi DKI Jakarta dalam kota dimaksud meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan.</li>
                            </ol>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Dibayarkan secara <i>lumpsum</i> sesuai standar biaya yang berlaku atau berdasarkan SK KPA masing-masing daerah dan diberikan sesuai jumlah hari <i>riil</i> pelaksanaan Perjalanan Dinas;</li>
                                <li>Dalam hal biaya transport melebihi biaya transport dalam kota. sebagaimana diatur dalam SBM, maka Pelaksana SPD dapat diberikan biaya transport sesuai bukti <i>riil</i> moda transportasi yang digunakan;</li>
                                <li>Apabila diperlukan dapat diberikan biaya menginap di hotel atau tempat menginap lainnya, sesuai bukti <i>riil</i> dengan batas tertinggi sebagaimana diatur dalam SBM;</li>
                                <li>Biaya menginap ini tidak dapat diberikan untuk perjalanan dinas yang dilaksanakan pergi dan pulang pada hari yang sama. Kecuali untuk perjalanan dinas lebih dari 8 jam pada kondisi tertentu yang <i>urgent</i> dan tidak dapat dihindari pelaksana SPD harus menginap dapat dibayarkan jika melampirkan tanda bukti <i>at cost</i>;</li>
                                <li>Penugasan yang dilaksanakan lebih dari satu tujuan pelaksanaan perjalanan dinas dan merupakan satu kesatuan penugasan hanya diberikan sebesar 1 (satu) kali biaya transport dalam kota;</li>
                                <li>Surat Tugas diterbitkan oleh atasan langsung dan harus menyebutkan bahwa pelaksanaan perjalanan dinas dalam kota dilaksanakan lebih dari 8 jam.</li>
                            </ol>
                            <li>Akun yang Dapat Digunakan</li>
                            <p>Akun 524113- Belanja Perjalanan Dinas Dalam Kota.</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <table cellpadding="6" cellspacing="0">
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Perjalanan Dinas</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Perjalanan Dinas.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1ERZfX85Tu0_JkBiZO5rKDh-ub6TVym7N/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1ERZfX85Tu0_JkBiZO5rKDh-ub6TVym7N" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Paket Meeting-->
                <div class="tab-pane fade" id="pills-6" role="tabpanel">
                    <h4>Belanja Paket Meeting</h4>
                    <p>Satuan biaya paket kegiatan rapat/pertemuan di luar kantor merupakan satuan biaya yang digunakan untuk kebutuhan biaya kegiatan rapat/pertemuan yang diselenggarakan di luar kantor dalam rangka penyelesaian pekerjaan yang perlu dilakukan secara intensif dan bersifat koordinatif yang paling kurang melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat.</p>
                    <p>Satuan biaya paket kegiatan rapat/pertemuan di luar kantor menurut pesertanya terbagi dalam 3 (tiga) jenis, yaitu:</p>
                    <ol type="1">
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
                    <ol type="A">
                        <li>Belanja Paket <i>Meeting</i> Dalam Kota</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <ol type="a">
                                <li>Digunakan untuk mencatat perjalanan dinas dalam rangka kegiatan rapat, seminar, dan sejenisnya yang dilaksanakan di dalam kota satker penyelenggara dan dibiayai seluruhnya olch satker penyelenggara maupun yang dilaksanakan di dalam kota satker peserta dan biaya perjalanan dinasnya ditanggung oleh Satker peserta, yang meliputi:</li>
                                <ol class="angka">
                                    <li>Biaya transportasi peserta, panitia/moderator, dan/atau narasumber baik yang berasal dari dalam kota maupun dari luar kota;</li>
                                    <li>Biaya paket <i>meeting (halfday/fullday/fullboard)</i>;</li>
                                    <li>Uang harian paket <i>meeting</i> peserta, panitia/moderator dan/atau narasumber baik yang berasal dari dalam kota maupun dari luar kota; dan</li>
                                    <li>Uang harian perjalanan dan/atau biaya penginapan peserta/narasumber/moderator dari luar kota dan mengalami kesulitan transportasi.</li>
                                    <p>Besaran nilai biaya paket <i>meeting</i>, uang transport, uang harian paket <i>meeting</i>, dan uang harian perjalanan mengikuti ketentuan yang mengatur mengenai standar biaya tahun berkenaan.</p>
                                </ol>
                            </ol>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Untuk pejabat eselon II ke atas, akomodasi 1 (satu) kamar untuk 1 (satu) orang;</li>
                                <li>Untuk pejabat eselon III ke bawah, akomodasi 1 (satu) kamar untuk 2 (dua) orang;</li>
                                <li>Kepada panitia (karena faktor transportasi dan/atau guna dan mempersiapkan pelaksanaan kegiatan penyelesaian pertanggungjawaban) dan kepada peserta (karena faktor transportasi) yang memerlukan waktu tambahan untuk berangkat/pulang di luar waktu pelaksanaan kegiatan, dapat dialokasikan biaya penginapan dan uang harian perjalanan dinas sesuai dengan ketentuan peraturan perundang-undangan, untuk 1 (satu) hari sebelum dan/atau 1 (satu) hari sesudah pelaksanaan kegiatan;</li>
                                <li>Kegiatan paket <i>meeting</i> dapat dilaksanakan apabila melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat;</li>
                                <li>Kegiatan rapat, seminar, dan sejenisnya dapat diselenggarakan di luar kantor dengan berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya, dan fasilitas di kantor tidak mencukupi yang dibuktikan dengan surat pernyataan dari penanggung jawab kegiatan;</li>
                                <li>Dalam hal tidak terdapat fasilitas hotel atau penginapan yang memadai di dalam kota untuk paket <i>meeting</i> pelatihan petugas, maka Satker dapat mengadakan kegiatan paket meeting di luar kota, dengan terlebih dahulu melakukan revisi akun ke akun 524119; dan</li>
                                <li>Dalam hal peserta merupakan narasumber yang berasal dari luar instansi penyelenggara, maka tidak dapat diberikan uang harian <i>fullboard/fullday/halfday</i> pada saat yang bersangkutan menjadi narasumber dalam kegiatan tersebut.</li>
                            </ol>
                            <li>Akun yang Dapat Digunakan</li>
                            <p>Akun 524114 - Belanja Perjalanan Dinas Paket <i>Meeting</i> Dalam Kota</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <ol type="a">
                                <li>Kelengkapan tagihan pembayaran perjalanan dalam rangka paket <i>meeting</i>:</li>
                                <table cellpadding="6" cellspacing="0">
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
                                            <td>Surat Tugas</td>
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
                                            <td>Output Paket Meeting</td>
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
                                <table cellpadding="6" cellspacing="0">
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
                                            <td>Surat Tugas</td>
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
                                            <td>Output Paket Meeting</td>
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
                                            <td>Komitmen / Kontrak</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/11lUBsEnY02tylthiCJfgDJLcUR2z_MdQ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10)</td>
                                            <td>Bukti Prestasi Pekerjaan</td>
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
                        <li>Belanja Paket <i>Meeting</i> Luar Kota</li>
                        <ol type="1">
                            <li>Pengertian</li>
                            <p>Pengeluaran untuk perjalanan dinas dalam rangka kegiatan rapat, seminar, dan sejenisnya yang dilaksanakan di luar kota satker penyelenggara dan dibiayai seluruhnya oleh satker penyelenggara, serta yang dilaksanakan di luar kota satker peserta dengan biaya perjalanan dinas yang ditanggung oleh satker peserta, meliputi:</p>
                            <ol type="1">
                                <li>Biaya transportasi peserta, panitia/moderator, dan/atau narasumber baik yang berasal dari dalam kota maupun dari luar kota;</li>
                                <li>Biaya paket <i>meeting (fullboard)</i>;</li>
                                <li>Uang harian paket <i>meeting</i> peserta, panitia/moderator baik yang berasal dari dalam kota maupun dari luar kota; dan</li>
                                <li>Uang harian perjalanan dan/atau biaya penginapan peserta, panitia/moderator, dan/atau narasumber yang mengalami kesulitan transportasi.</li>
                            </ol>
                            <p>Besaran nilai biaya paket <i>meeting</i>, uang transport, uang saku, dan uang harian mengikuti ketentuan yang mengatur mengenai standar biaya tahun berkenaan.</p>
                            <li>Catatan Penting</li>
                            <ol type="a">
                                <li>Untuk pejabat eselon II ke atas, akomodasi 1 (satu) kamar untuk 1 (satu) orang;</li>
                                <li>Untuk pejabat eselon III ke bawah, akomodasi 1 (satu) kamar untuk 2 (dua) orang;</li>
                                <li>Kepada panitia (karena faktor transportasi dan/atau guna mempersiapkan pelaksanaan kegiatan dan penyelesaian pertanggungjawaban) dan kepada peserta (karena faktor transportasi) yang memerlukan waktu tambahan untuk berangkat/pulang di luar waktu pelaksanaan kegiatan, dapat dialokasikan biaya penginapan dan uang harian perjalanan dinas sesuai dengan ketentuan peraturan perundang-undangan, untuk 1 (satu) hari sebelum dan/atau 1 (satu) hari sesudah pelaksanaan kegiatan;</li>
                                <li>Kegiatan paket <i>meeting</i> dapat dilaksanakan apabila melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat;</li>
                                <li>Kegiatan rapat, seminar, dan sejenisnya dapat diselenggarakan di luar kantor dengan berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya, dan fasilitas di kantor tidak mencukupi;</li>
                                <li>Fasilitas di kantor tidak mencukupi sebagaimana dimaksud pada point (5) dibuktikan dengan surat pernyataan dari penanggung jawab kegiatan;</li>
                                <li>Kegiatan rapat, seminar, dan sejenisnya yang diselenggarakan di luar kota, selain mengikuti ketentuan sebagaimana dimaksud dalam point (5), dilaksanakan sepanjang memenuhi ketentuan sebagai berikut:</li>
                                <ol type="a">
                                    <li>melibatkan kantor vertikal:</li>
                                    <li>berskala regional/nasional/internasional; dan/atau</li>
                                    <li>mendapat persetujuan dari PPK dengan pertimbangan:</li>
                                    <ol class="angka">
                                        <li>dari sisi teknis harus dilaksanakan di luar kota satuan kerja penyelenggara, atau</li>
                                        <li>diselenggarakan pada lokasi yang terdekat dengan kota satuan kerja penyelenggara.</li>
                                    </ol>
                                </ol>
                                <li>Dalam hal peserta merupakan narasumber yang berasal dari luar instansi penyelenggara, maka tidak dapat diberikan uang harian <i>fullboard/fullday/halfday</i> pada saat yang bersangkutan menjadi narasumber dalam kegiatan tersebut.</li>
                            </ol>
                            <li>Akun Yang Dapat Digunakan</li>
                            <p>Akun 524119 - Belanja Perjalanan Dinas Paket <i>Meeting</i> Luar Kota.</p>
                            <li>Kelengkapan Tagihan Pembayaran</li>
                            <ol type="a">
                                <li>Kelengkapan tagihan pembayaran perjalanan dalam rangka paket <i>meeting</i>:</li>
                                <table cellpadding="6" cellspacing="0">
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
                                            <td>Surat Tugas</td>
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
                                            <td>Output Paket Meeting</td>
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
                                <table cellpadding="6" cellspacing="0">
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
                                            <td>Surat Tugas</td>
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
                                            <td>Output Paket Meeting</td>
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
                                            <td>Bukti Prestasi Pekerjaan</td>
                                            <td style="padding-left: 70px;">
                                                <a href="https://drive.google.com/drive/folders/158FrVL2LuZyv2Q1QTuv1qmoiX_c5rvGB?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                                <i class="bx bx-folder-open"></i> Lihat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11)</td>
                                            <td>Komitmen / Kontrak</td>
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Paket Meeting</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Paket Meeting.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1H4r-fz6tvqbV_qlJlP-uS9USQyhUb5d0/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1H4r-fz6tvqbV_qlJlP-uS9USQyhUb5d0" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Sewa -->
                <div class="tab-pane fade" id="pills-7" role="tabpanel">
                    <h4>Belanja Sewa</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <ol type="1">
                            <li>Sewa didefinisikan sebagai perjanjian di mana pihak yang menyewakan <i>(lessee)</i> menyewakan aset dari pihak yang menyewakan <i>(lessor)</i> untuk digunakan dalam jangka waktu tertentu dengan keseimbangan sewa yang telah ditentukan.</li>
                            <li>Belanja Sewa dapat berupa sewa gedung untuk pertemuan; sewa bangunan/ruangan untuk gudang, sewa tenda; sewa kursi/meja; sewa kendaraan untuk mengangkut logistik perlengkapan pelatihan; dan sejenisnya.</li>
                        </ol>
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 522141 - Belanja Sewa.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>Komitmen / Kontrak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1YMvmGtXZ3ZDbENKABXnIlK4601VO9oua?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Bukti Prestasi Pekerjaan</td>
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
                                    <td>SSP PPN</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/13aknJqncgkDqDc6ZG94tJmnfn5i1PWbZ?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>SSP PPh Pasal 4 ayat 2</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1f0AaJ85NBlKFDTLfo8uZfNe07H8jl4_j?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>SSP PPh pasal 23</td>
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Sewa</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Sewa.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1aoFOLEL77LCbsvuQmgnCzLjmdeMfU4Ya/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1aoFOLEL77LCbsvuQmgnCzLjmdeMfU4Ya" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Jasa Pengiriman/Ekspedisi -->
                <div class="tab-pane fade" id="pills-8" role="tabpanel">
                    <h4>Belanja Jasa Pengiriman / Ekspedisi</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <p>Jasa Pengiriman/Ekspedisi adalah Jasa yang bergerak di bidang pengiriman, mulai dari pengiriman surat, barang berukuran kecil hingga barang berukuran sedang.</p>
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 521219 - Belanja Barang Non Operasional Lainnya.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>Komitmen / Kontrak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1-QD2me8Xbt8MvH1_HSkYTetvfsuu4NOG?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Bukti Prestasi Pekerjaan</td>
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
                                    <td>SSP PPh 23</td>
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Jasa Pengiriman / Ekspedisi</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Jasa Pengiriman / Ekspedisi.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1OBnVzyh5gjK3lD3ThCDIJOd-i2iMgECl/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1OBnVzyh5gjK3lD3ThCDIJOd-i2iMgECl" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Jasa Asuransi -->
                <div class="tab-pane fade" id="pills-9" role="tabpanel">
                    <h4>Belanja Jasa Asuransi</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <p>Asuransi adalah perjanjian antara penanggung dan tertanggung yang mewajibkan tertanggung membayar sejumlah premi untuk memberikan penggantian atas risiko kerugian, kerusakan, kematian, atau kehilangan keuntungan yang diharapkan, yang mungkin terjadi atas peristiwa yang tak terduga. Belanja jasa asuransi dan/atau pengambil alih risiko ialah Pembayaran atas beban APBN dapat dilakukan sebelum barang dan/atau jasa diterima dalam hal terdapat kegiatan yang karena sifatnya harus dilakukan pembayaran terlebih dahulu.</p>
                        <li>Catatan Penting</li>
                        <ol type="1">
                            <li>Belanja Jasa Asuransi yang dimaksud dalam buku pedoman ini adalah belanja jasa asuransi untuk petugas mitra pada kegiatan sensus/survei yang dilakukan oleh BPS;</li>
                            <li>Pengadaan jasa asuransi dengan nilai sampai dengan Rp50.000.000,00 (lima puluh juta rupiah) menggunakan jaminan berupa komitmen penyedia barang/jasa;</li>
                            <li>Pengadaan jasa asuransi dengan nilai lebih dari Rp50.000.000,00 (lima puluh juta rupiah) menggunakan jaminan berupa Surat Pernyataan Kesanggupan Penyedia Barang/Jasa (SPKPBJ); dan</li>
                            <li>Berdasarkan Pasal 9 ayat (1) poin d Undang-undang Nomor 36 Tahun 2008 tentang Perubahan Keempat atas Undang-undang Nomor 7 Tahun 1983 tentang Pajak Penghasilan, untuk menentukan besarnya Penghasilan Kena Pajak bagi Wajib Pajak dalam negeri dan bentuk usaha tetap tidak boleh dikurangkan premi asuransi kesehatan, asuransi kecelakaan, asuransi jiwa, asuransi dwiguna, dan asuransi beasiswa, yang dibayar oleh Wajib Pajak orang pribadi, kecuali jika dibayar olch pemberi kerja dan premi tersebut dihitung sebagai penghasilan bagi Wajib Pajak yang bersangkutan. Jika total penghasilan petugas per bulan ditambahkan dengan nilai premi asuransi di bawah PTKP, tidak dikenakan pajak.</li>
                        </ol>
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 521219 - Belanja Barang Non Operasinal Lainnya.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>Komitmen / Kontrak</td>
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Jasa Asuransi</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Jasa Asuransi.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1UWCIT9a_2OUgRHV-5KDWcH6QExPcT9yc/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1UWCIT9a_2OUgRHV-5KDWcH6QExPcT9yc" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Jasa Lainnya -->
                <div class="tab-pane fade" id="pills-10" role="tabpanel">
                    <h4>Belanja Jasa Lainnya</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <p>Jasa lainnya adalah jasa non-konsultansi atau jasa yang membutuhkan peralatan, metodologi khusus, dan/atau keterampilan dalam suatu sistem tata kelola yang telah dikenal luas di dunia usaha untuk menyelesaikan suatu pekerjaan.</p>
                        <li>Catatan Penting</li>
                        <ol type="1">
                            <li>Digunakan untuk pembayaran jasa yang tidak bisa ditampung pada kelompok akun 52211, 52212, 52213, 52214, dan 52215.</li>
                            <li>Contoh dari jasa lainnya adalah jasa <i>Event Organizer</i> (EO), sosialisasi melalui media, penayangan iklan, publisitas <i>off air</i>, pengadaan <i>call center</i>, dan jenis jasa lainnya.</li>
                        </ol>
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 522191 - Belanja Jasa Lainnya.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
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
                                    <td>Komitmen / Kontrak</td>
                                    <td style="padding-left: 70px;">
                                        <a href="https://drive.google.com/drive/folders/1WxI54IdQUGWcyMSNNfDhppXpPxYq24Q1?usp=drive_link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Bukti Prestasi Pekerjaan</td>
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
                                    <td>SSP PPN</td>
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
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Jasa Lainnya</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Jasa Lainnya.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/1hpX3a4080nkWSVDpPYsrhvUcJtwqZ0fH/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=1hpX3a4080nkWSVDpPYsrhvUcJtwqZ0fH" class="btn btn-success">
                                        ⬇️ Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belanja Pulsa/Paket Data Internet -->
                <div class="tab-pane fade" id="pills-11" role="tabpanel">
                    <h4>Belanja Pulsa / Paket Data Internet</h4>
                    <ol type="A">
                        <li>Pengertian</li>
                        <ol type="1">
                            <li>Biaya paket data dan komunikasi adalah bantuan biaya yang diberikan kepada pegawai yang dalam pelaksanaan tugasnya sebagian besar membutuhkan komunikasi secara daring <i>(online)</i>. Pemberian biaya paket data dan komunikasi dilakukan secara selektif dengan mempertimbangkan intensitas pelaksanaan tugas dan fungsi penggunakan media daring <i>(online)</i> dan ketersediaan anggaran, dan sesuai dengan prinsip tata kelola yang baik dan akuntabilitas.</li>
                            <li>Belanja pulsa/paket data pada kegiatan sensus/survei merupakan biaya yang diberikan kepada pegawai/petugas guna mendukung rangkaian kegiatan sensus/survei seperti pelatihan petugas secara daring <i>(online)</i>, paket data untuk kegiatan lapangan.</li>
                        </ol>
                        <li>Catatan Penting</li>
                        <p>Pengadaan paket data/pulsa mengikuti isi perjanjian/surat kontrak, pedoman teknis kegiatan sensus/survei, atau surat edaran dari pimpinan BPS.</p>
                        <li>Akun yang Dapat Digunakan</li>
                        <p>Akun 521211 - Belanja Bahan.</p>
                        <li>Kelengkapan Tagihan Pembayaran</li>
                        <table cellpadding="6" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kerangka Acuan Kerja (KAK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="#link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Form Permintaan (dari Penanggung Jawab Kegiatan kepada PPK)</td>
                                    <td style="padding-left: 70px;">
                                        <a href="#link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Dokumen Komitmen Pengadaan Barang/Jasa</td>
                                    <td style="padding-left: 70px;">
                                        <a href="#link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Daftar nama dan nomor hp penerima paket data/pulsa</td>
                                    <td style="padding-left: 70px;">
                                        <a href="#link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Bukti tanda terima paket data/pulsa</td>
                                    <td style="padding-left: 70px;">
                                        <a href="#link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                                    <tr>
                                    <td>6.</td>
                                    <td>SSP PPh 22</td>
                                    <td style="padding-left: 70px;">
                                        <a href="#link" target="_blank" style="font-family: DM Sans, sans-serif; font-size: 15px; color: #113F67">
                                        <i class="bx bx-folder-open"></i> Lihat </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ol>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Pedoman Belanja Pulsa / Paket Data Internet</h5>
                                        <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Belanja Pulsa / Paket Data Internet.</p>
          
                                        <!-- Tombol Buka PDF -->
                                        <a href="https://drive.google.com/file/d/11omyW91nSyueDAvlNeA2y3ZaoQ5M48xo/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                                        📄 Buka PDF
                                        </a>
          
                                         <!-- Tombol Download PDF -->
                                        <a href="https://drive.google.com/uc?export=download&id=11omyW91nSyueDAvlNeA2y3ZaoQ5M48xo" class="btn btn-success">
                                        ⬇️ Download PDF
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
</body>
</html>

<?php include 'includes/footer.php'; ?>
