<?php include 'includes/header.php'; ?>

<!-- Container utama -->
<div class="container-fluid" style="padding-top: 100px;">
  <div class="row">

    <!-- SIDEMENU -->
    <div id="sidebar" class="col-lg-3">
      <div class="position-sticky" style="top: 100px;">
        <div class="card p-2">
          <?php include 'includes/side_menu.php'; ?>
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
          <!-- Ketentuan Umum -->
        <div class="tab-pane fade show active" id="pills-0" role="tabpanel">
        <h4>Ketentuan Umum</h4>
        <p>Dalam Peraturan Kepala Badan Pusat Statistik ini, yang dimaksud dengan:
          <ol>
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
        <div class="container my-4">
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body text-center">
                  <h5 class="card-title fw-bold">Pedoman Perjalanan Dinas</h5>
                    <p class="card-text">Klik tombol di bawah untuk membuka atau mengunduh file PDF Pedoman Perjalanan Dinas.</p>
          
                      <!-- Tombol Buka PDF -->
                      <a href="https://drive.google.com/file/d/1TQV-eo9kS8YOuNVgO5oy6EAo4RxISvTM/view?usp=sharing" target="_blank" class="btn btn-primary me-2">
                      📄 Buka PDF
                      </a>
          
                      <!-- Tombol Download PDF -->
                      <a href="https://drive.google.com/uc?export=download&id=1TQV-eo9kS8YOuNVgO5oy6EAo4RxISvTM" class="btn btn-success">
                      ⬇️ Download PDF
                      </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <!-- Ruang Lingkup Perjalanan Dinas Jabatan -->
          <div class="tab-pane fade" id="pills-1" role="tabpanel">
            <h4>Ruang Lingkup Perjalanan Dinas Jabatan</h4>
            <p> 
            <ol>
              <li>Peraturan Kepala Badan ini mengatur mengenai perencanaan, pelaksanaan dan pertanggungjawaban Perjalanan Dinas Jabatan bagi Pelaksana SPD yang meliputi Pejabat Negara, Pegawai Negeri dan Pegawai Tidak Tetap dan Pihak Lain yang dibebankan pada Anggaran Pendapatan dan Belanja Negara di lingkungan Badan Pusat Statistik.</li>
              <li>Pegawai Negeri sebagaimana dimaksud pada angka (1) termasuk: 
                <ol type="a">
              <li>Calon Pegawai Negeri;</li>
              <li>Prajurit Tentara Nasional Indonesia; dan</li>
              <li>Anggota Kepolisian Negara Republik Indonesia.</li>
                </ol>
            </ol>
            </p> 
          </div>

          <!-- Prinsip Perjalanan Dinas Jabatan -->
          <div class="tab-pane fade" id="pills-2" role="tabpanel">
            <h4>Prinsip Perjalanan Dinas Jabatan</h4>
            <p>
              <ol>
                <li>Perjalanan Dinas Jabatan dilaksanakan dengan memperhatikan prinsip.
                sebagai berikut:</li>
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
              <li>Biaya Perjalanan Dinas Jabatan tidak dapat dibebankan apabila terdapat:</li>
                 <ol type="a">
                  <li>Bukti-bukti pengeluaran/dokumen yang palsu;</li>
                  <li>Melebihi tarif tiket/biaya penginapan resmi <i>(mark up)</i>;</li>
                  <li>Pelaksanaan Perjalanan Dinas Jabatan rangkap pada waktu yang sama; dan/atau</il>
                  <li>Pelaksanaan dan pembayaran biaya perjalanan dinas jabatan yang tidak sesuai dengan ketentuan dalam peraturan perundang-undangan. mengenai perjalanan dinas.</li>
                 </ol>
          </p>
          </div>

          <!-- Perjalanan Dinas Jabatan -->
          <div class="tab-pane fade" id="pills-3" role="tabpanel">
            <h4>Perjalanan Dinas Jabatan</h4>
            <p>
              <ol>
            <li>Perjalanan Dinas Jabatan digolongkan menjadi:</li>
              <ol type="a">
                <li>Perjalanan Dinas Jabatan yang melewati batas kota (khusus untuk Provinsi DKI Jakarta meliputi kesatuan wilayah Jakarta Pusat, Jakarta Timur, Jakarta Utara, Jakarta Barat, dan Jakarta Selatan); dan</li>
                <li>Perjalanan Dinas Jabatan yang dilaksanakan di dalam Kota (lebih dari 8 jam dan sampai dengan 8 jam).</li>
                </ol>
                
            <li>Perjalanan Dinas Jabatan dilakukan dalam rangka:</li>
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

            <li>Perjalanan Dinas Jabatan harus dilengkapi Penerbitan Surat Tugas dengan ketentuan sebagai berikut:</li>
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
              </ol>

            <li>Perjalanan Dinas Jabatan harus dilengkapi dengan Penerbitan Surat Perjalanan Dinas (SPD) dengan ketentuan sebagai berikut:</li>
            <ol type="a">
              <li>Surat Tugas menjadi dasar penerbitan SPD oleh PPK.</li>
              <li>Dalam hal Perjalanan Dinas Jabatan di dalam kota yang dilaksanakan sampai dengan 8 jam dapat dilakukan tanpa penerbitan SPD.</li>
              <li>Dalam hal pelaksanaan Perjalanan Dinas Jabatan diselenggarakan dalam rangka rapat, konsinyering, dan sejenisnya dengan beban biaya oleh satuan kerja penyelenggara, penerbitan SPD dapat dibuat secara kolektif dengan melampirkan daftar peserta yang telah disahkan oleh PPK pada satuan kerja penyelenggara.</li>
              <li>SPD dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran III Peraturan Kepala Badan ini.</li>
              <li>Daftar peserta dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran IV Peraturan Kepala Badan ini.</li>
            </ol>
            </ol>
            </p>
          </div>

          <!-- Kegiatan Rapat, Konsinyering, dan Sejenisnya -->
          <div class="tab-pane fade" id="pills-4" role="tabpanel">
            <h4>Kegiatan Rapat, Konsinyering, dan Sejenisnya</h4>
            <p>
              <ol>
          <li>Kegiatan rapat, konsinyering dan sejenisnya yang dimaksud dalam Peraturan ini meliputi:</li>
          <ol type="a">
            <li>Konsinyering, dan</li>
            <li>Sosialisasi, bimbingan teknis, diseminasi, <i>workshop</i>, <i>Focus Group Discussion</i> (FGD), pertemuan, pelatihan, kursus, seminar, rapat koordinasi/rapat pimpinan, rapat kerja/rapat teknis, dan konsultasi nasional/regional/serentak.</li>
          </ol>

          <li>Rapat, konsinyering dan sejenisnya sebagaimana dimaksud pada angka (1) harus menghasilkan output berupa:</li>
          <ol type="a">
            <li>Notulensi dan dokumentasi rapat; dan/atau</li>
            <li>Laporan.</li>
          </ol>

          <li>Penyelenggaraan konsinyering dan kegiatan sosialisasi, bimbingan teknis, diseminasi, <i>workshop, Focus Group Discussion</i> (FGD), pertemuan, pelatihan, kursus, seminar, kegiatan rapat, dan konsultasi nasional/regional/serentak harus memenuhi syarat dan ketentuan umum sebagai berikut:</li>
          <ol type="a">
            <li>Berpedoman pada Peraturan Menteri Keuangan mengenai Standar Biaya Masukan;</li>
            <li>Diselenggarakan secara <i>fullboard, fullday, atau halfday</i>;</li>
            <li>Dapat dilakukan baik di dalam atau luar kota sekurang-kurangnya melibatkan peserta dari kementerian negara/lembaga lainnya yang terkait pelaksanaan tugas dan fungsi/masyarakat, serta penyelenggaraannya:</li>
          <ol class="angka">
            <li>Jika dilaksanakan oleh BPS Pusat dan BPS Provinsi dipimpin oleh sekurang-kurangnya pejabat Eselon II penyelenggara/pejabat setara yang ditunjuk;</li>
            <li>Jika dilaksanakan oleh BPS Kabupaten/Kota dipimpin oleh sekurang-kurangnya pejabat Eselon III/Kepala Satuan penyelenggara/pejabat setara yang ditunjuk.</li>
          </ol>
          <li>Apabila dilaksanakan di luar kota harus memenuhi ketentuan sebagai berikut:</li>
          <ol class="angka">
            <li>melibatkan kantor vertikal;</li>
            <li>berskala regional/nasional/internasional; dan/atau</li>
            <li>mendapat persetujuan dari PPK dengan pertimbangan:</li>
            <ol class="huruf">
            <li>dari sisi tektris harus dilaksanakan di luar Kota satuan kerja. penyelenggara, atau</li>
            <li>diselenggarakan pada lokasi yang terdekat dengan Kota satuan kerja penyelenggara.</li>
          </ol>
          </ol>
          <li>Ketentuan jam pelaksanaan konsinyering sebagai berikut:</li>
          <ol class="angka">
            <li>Paket <i>Fullboard</i></li>
            Diselenggarakan di luar kantor sehari penuh dan menginap.
            <li>Paket <i>Fullday</i></li>
            Diselenggarakan di luar kantor minimal 8 (delapan) jam tanpa menginap.
            <li>Paket <i>Halfday</i></li>
            Diselenggarakan di luar kantor minimal 5 (lima) jam tanpa menginap.
          </ol>
          <li>Pernyataan dari penanggung jawab kegiatan bahwa fasilitas di kantor tidak memadai. Surat pernyataan dibuat sesuai dengan format dan petunjuk pengisian sebagaimana tercantum dalam Lampiran V Peraturan Kepala Badan ini;</li>
          <li>Surat undangan ditandatangani serendah-rendahnya oleh pejabat setingkat eselon II/kepala satker penyelenggara, surat tugas bagi peserta dan daftar hadir rapat;</li>
          <li>Notulen hasil kegiatan diketahui dan disetujui serendah-rendahnya oleh pejabat setingkat eselon II/Kepala Satker terkait, disampaikan kepada. PPK, dan ditembuskan kepada Pejabat setingkat eselon I terkait serta KPA;</li>
          <li>Setiap peserta mendapatkan uang harian <i>fullboard/fuliday/halfday</i> sebanyak hari penyelenggaraan sesuai standar biaya dan transpor kegiatan. Untuk kegiatan di dalam kota, pengguna kendaraan dinas tidak diberikan transpor kegiatan. Untuk kegiatan luar kota pengguna kendaraan dinas/kendaraan lainnya dapat diberikan penggantian biaya tol dan bahan bakar;</li>
          <li>Dalam hal peserta merupakan narasumber yang berasal dari luar instansi penyelenggara, maka tidak dapat diberikan uang harian. <i>fullboard/fullday/halfday</i> pada saat yang bersangkutan menjadi narasumber dalam kegiatan tersebut;</li>
          <li>Pembayaran uang harian <i>fullboard/fullday/halfday</i> dan transpor kegiatan, dimasukkan dalam <i>fullboard/fullday/halfday</i>. rincian biaya perjalanan</li>
        </ol>
            </p>
          </div>

          <!-- Biaya Perjalanan Dinas Jabatan -->
          <div class="tab-pane fade" id="pills-5" role="tabpanel">
            <h4>Biaya Perjalanan Dinas Jabatan</h4>
            <p>
              <ol>
                <li>Biaya Perjalanan Dinas Jabatan terdiri atas komponen-komponen sebagai berikut:</li>
                <ol type="a">
                  <li>Uang harian;</li>
                  <li>Biaya transpor,</li>
                  <li>Biaya penginapan;</li>
                  <li>Uang representasi;</li>
                  <li>Sewa kendaraan dalam kota; dan/atau</li>
                  <li>Biaya menjemput/mengantar jenazah.</li>
                </ol>
                <li>Uang harian sebagaimana dimaksud pada angka (1) terdiri atas:</li>
                <ol type="a">
                  <li>uang makan;</li>
                  <li>uang transpor lokal; dan</li>
                  <li>uang saku.</li>
                </ol>
                <li>Uang harian dibayarkan secara lumpsum dan merupakan batas tertinggi sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan. Uang harian dibayarkan sesuai dengan jumlah hari riil pelaksanaan Perjalanan Dinas Jabatan.</li>
                <li>Besaran uang harian untuk Perjalanan Dinas Jabatan yang dilaksanakan dalam kota lebih dari 8 (delapan) jam dan melewati batas kota mengacu pada jumlah hari yang tercantum dalam Surat Tugas dan diberikan sesuai Peraturan Menteri Keuangan mengenai Standar Biaya Masukan.</li>
                <li>Bagi Pelaksana SPD yang melakukan Perjalanan Dinas Jabatan untuk menempuh ujian dinas/ujian jabatan dan mengikuti pendidikan setara Diploma/S1/S2/S3 dibayarkan uang harian 1 (satu) hari pada saat kedatangan dan/atau 1 (satu) hari pada saat kepulangan.</li>
                <li>Biaya transpor dalam rangka pelaksanaan Perjalanan Dinas Jabatan terdiri dari biaya transpor:</li>
                <ol type="a">
                  <li>dalam Kota sampai dengan 8 (delapan) jam;</li>
                  <li>dalam Kota lebih dari 8 (delapan) jam; atau</li>
                  <li>melewati batas Kota.</li>
                </ol>
                <li>Biaya transpor dalam Kota sampai dengan 8 (delapan) jam diberikan secara <i>lumpsum</i> dan merupakan batas tertinggi sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan;</li>
                <li>Biaya Transpor sebagaimana dimaksud pada Angka (1) huruf (b) terdiri atas:</li>
                <ol type="a">
                  <li>Perjalanan Dinas dari Tempat Kedudukan sampai dengan Tempat Tujuan ke berangkatan dan kepulangan termasuk biaya perjalanan ke terminal bus/stasiun/bandara/pelabuhan ke berangkatan</li>
                  <li>retribusi yang dipungut di terminal bus/ stasiun / bandara/ pelabuhan keberangkatan dan kepulangan; dan</li>
                  <li>biaya layanan dan sejenisnya yang tidak dapat dihindari pada per gadaan dan pembayaran tiket, moda transportasi, dan pengmapan, diantaranya biaya platform/biaya penyedia layanan, biaya bagasi, dan biaya lainnya dalam hal ini tidak termasuk dalam harga tiket.</li>
                </ol>
                <li>Dalam hal Perjalanan Dinas Jabatan merupakan perjalanan dinas dalam. kota lebih dari 8 (delapan) jam maka biaya transpor dapat diberikan secara <i>lumpsum</i>:</li>
                <ol type="a"> 
                  <li>Sesuai jumlah hari riil pelaksanaan perjalanan dinas; atau</li>
                  <li>Sesuai jumlah penugasan pelaksanaan perjalanan dinas dalam satu hari.</li>
                </ol>
                <li>Dalam hal penugasan dilaksanakan lebih dari 1 (satu) tujuan pelaksanaan perjalanan dinas dalam kota dan merupakan satu kesatuan penugasan hanya diberikan 1 (satu) kali biaya transpor dalam kota.</li>
                <li>Biaya transpor dalam Kota lebih dari 8 (delapan) jam diberikan secara lumpsum dan merupakan batas tertinggi sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan.</li>
                <li>Dalam hal biaya transpor dalam kota lebih dari 8 (delapan) jam melebihi biaya transpor dalam kota sebagaimana dimaksud dalam standar biaya, kepada Pelaksana SPD dapat diberikan biaya transpor sesuai dengan bukti riil yang dapat dipertanggung jawabkan.</li>
                <li>Perjalanan Dinas keberangkatan ke Tempat Tujuan dan kepulangan dapat dilakukan dari dan ke selain Tempat Kedudukan (tempat yang sah) dengan memperhatikan efisiensi dan efektivitas, serta dibayarkan sesuai dengan Biaya Riil, paling banyak sebesar estimasi biaya transportasi dari Tempat Kedudukan ke Tempat Tujuan sesuai dengan ketentuan peraturan perundang-undangan mengenai standar biaya.</li>
                <li>Biaya transpor melewati batas Kota diberikan sesuai biaya riil berdasarkan Fasilitas Transpor sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Perjalanan Dinas Dalam Negeri bagi Pejabat Negara, Pegawai Negeri, dan Pegawai Tidak Tetap. Biaya transpor dibayarkan secara at cost sesuai tanda bukti perjalanan (tiket, <i>boarding pass</i>, kuitansi, dan/atau tanda bukti perjalanan lainnya). Dalam hal tanda bukti tidak ada, biaya transpor dapat dibayarkan dengan menggunakan Daftar Pengeluaran Riil.</li>
                <li>Biaya Penginapan sebagaimana dimaksud pada angka (1) huruf (c) merupakan biaya yang diperlukan untuk menginap:</li>
                <ol type="a"> 
                  <li>di hotel:</li>
                  <li>di tempat menginap lainnya.</li>
                </ol>
                <li>Dalam hal pelaksana SPD tidak menggunakan biaya penginapan sebagaimana dimaksud pada angka (15), diberikan biaya penginapan sebesar 30% (tiga puluh persen) dari tarif hotel di Kota Tempat Tujuan sebagaimana diatur dalam Peraturan Menteri Keuangan mengenai Standar Biaya Masukan, dengan ketentuan:</li>
                <ol type="a">
                  <li> Tidak terdapat hotel atau tempat menginap lainnya, sehingga Pelaksana SPD menginap di tempat menginap yang tidak menyediakan kuitansi/bukti biaya penginapan; atau</li>
                  <li>Terdapat hotel atau tempat menginap lainnya, namun Pelaksana SPD tidak menginap di hotel atau tempat menginap lainnya tersebut.</li>
                </ol>
                <li>Biaya penginapan sebesar 30% (tiga puluh persen) sebagaimana dimaksud pada angka (16) tidak diberikan untuk:</li>
                <ol type="a">
                  <li>Perjalanan Dinas Jabatan dalam Kota lebih dari 8 (delapan) jam yang dilaksanakan pergi dan pulang dalam hari yang sama;</li>
                  <li>Perjalanan Dinas Jabatan untuk mengikuti rapat, konsinvering, dan sejenisnya yang dilaksanakan dengan paket <i>meeting fullboard;</i></li>
                  <li>Perjalanan Dinas Jabatan untuk mengikuti pendidikan dan pelatihan; dan</li>
                  <li>Perjalanan Dinas Jabatan yang dilaksanakan oleh 2 orang atau lebih dalam kamar yang sama pada suatu fasilitas penginapan, dan sudah diklaim oleh salah satu peserta Perjalanan Dinas Jabatan tersebut.</li>
                </ol>
                <li>Bagi Pelaksana SPD yang melakukan Perjalanan Dinas Jabatan untuk mengikuti pendidikan atau pelatihan diberikan biaya penginapan 1 (satu) hari pada saat kedatangan dan 1 (satu) hari pada saat kepulangan dan/atau sesuai surat undangan dari penyelenggara pendidikan atau pelatihan. Biaya penginapan selama mengikuti pendidikan dan pelatihan dapat diberikan kepada Pelaksana SPD yang melakukan Perjalanan Dinas Jabatan untuk mengikuti pendidikan dan pelatihan dalam hal tidak disediakan penginapan;</li>
                <li>Biaya penginapan sebagaimana dimaksud pada angka (18) diberikan sesuai bukti riil dengan batasan sesuai Standar Biaya Masukan;</li>
                <li>Uang representasi sebagaimana dimaksud pada angka (1) huruf (d) dapat diberikan kepada Pejabat Negara, Kepala/Pimpinan Lembaga, Pejabat Eselon 1, dan Pejabat Eselon II selama melakukan Perjalanan Dinas. Uang representasi melekat pada pembayaran uang harian. Uang representasi tidak dapat diberikan kepada Pelaksana Harian.</li>
                <li>Sewa kendaraan dalam kota sebagaimana dimaksud pada angka (1) huruf (e) dapat diberikan kepada:</li>
                <ol type="a">
                  <li>Pejabat Negara / Kepala BPS yang melakukan perjalanan dinas dalam negeri di tempat tujuan; atau</li>
                  <li>Pelaksanaan kegiatan yang membutuhkan mobilitas tinggi, berskala besar, dan tidak tersedia kendaraan dinas serta dilakukan secara selektif dan efisien.</li>
                </ol>
                <li>Sewa kendaraan sebagaimana dimaksud pada angka (21) sudah termasuk biaya untuk pengemudi, bahan bakar minyak, dan pajak.</li>
                <li>Biaya menjemput/mengantar jenazah sebagaimana dimaksud pada angka (1) huruf (f) meliputi biaya bagi penjemput/pengantar, biaya pemetian, dan biaya angkutan jenazah. Biaya menjemput/mengantar jenazah berupa uang harian, biaya transpor pegawai/keluarga, dan biaya penginapan diberikan maksimal 3 (tiga) hari paling banyak untuk 4 (empat) orang;</li>
                <li>Ketentuan mengenai pembayaran komponen biaya perjalanan dinas sebagaimana dimaksud pada angka (1) untuk setiap jenis perjalanan dinas sebagaimana dimaksud diatur dalam Lampiran VI Peraturan Kepala Badan ini.</li>
              </ol>
            </p>
          </div>

          <!-- Pembatalan Perjalanan Dinas -->
          <div class="tab-pane fade" id="pills-6" role="tabpanel">
            <h4>Pembatalan Perjalanan Dinas</h4>
            <p>
              <ol>
                <li>Dalam hal terjadi pembatalan pelaksanaan Perjalanan Dinas Jabatan, biaya pembatalan dapat dibebankan pada DIPA satuan kerja berkenaan.</li>
                <li>Dokumen yang harus dilampirkan dalam pembebanan biaya pembatalan sebagaimana dimaksud dalam angka (1) meliputi:</li>
                <ol type="a">
                  <li>Surat Pernyataan Pembatalan Tugas Perjalanan Dinas Jabatan dari atasan Pelaksana SPD, atau paling rendah Pejabat Eselon II bagi Pelaksana SPD di bawah Pejabat Eselon III ke bawah, yang dibuat sesuai format sebagaimana tercantum dalam Lampiran VII Peraturan Kepala Badan ini;</li>
                  <li> Surat Pernyataan Pembebanan Biaya Pembatalan Perjalanan Dinas Jabatan yang dibuat sesuai format sebagaimana tercantum dalam Lampiran VIII Peraturan Kepala Badan ini; dan</li>
                  <li>Pernyataan/Tanda Bukti Besaran Pengembalian Biaya Transpor dan/atau biaya penginapan dari perusahaan jasa transportasi dan/atau penginapan yang disahkan oleh PPK.</li>
                </ol>
                <li>Biaya pembatalan yang dapat dibebankan pada DIPA satuan kerja sebagaimana dimaksud pada angka (1) sebagai berikut:</li>
                <ol type="a">
                  <li>biaya pembatalan tiket transportasi atau biaya penginapan, atau</li>
                  <li> sebagian atau seluruh biaya tiket transportasi atau biaya penginapan yang tidak dapat dikembalikan/<i>refund</i>.</li>
                </ol>
              </ol>
            </p>
          </div>

          <!-- Standar Biaya Transportasi -->
          <div class="tab-pane fade" id="pills-7" role="tabpanel">
            <h4>Standar Biaya Transportasi</h4>
            <p>
              <ol>
                <li>Biaya taksi adalah satuan biaya yang digunakan untuk kebutuhan biaya satu kali perjalanan taksi dari tempat kedudukan menuju bandara/pelabuhan/terminal/stasiun keberangkatan atau dari bandara/pelabuhan/terminal/ stasiun kedatangan menuju tempat tujuan di kota bandara/ pelabuhan/terminal/stasiun kedatangan dan sebaliknya. Dalam pelaksanaan anggaran, satuan biaya taksi perjalanan dinas dalam negeri menggunakan metode biaya riil dan sesuai ketentuan Standar Biaya Masukan yang berlaku.</li>
                <li>Biaya transpor dari ibu kota provinsi ke ibu kota kabupaten dibayarkan sesuai tanda bukti perjalanan (tiket, <i>boarding pass</i>, kuitansi, dan tanda bukti perjalanan lainnya).</li>
                <li>Standar Biaya Transportasi yang tidak diatur dalam SBM dapat diatur tersendiri melalui SK Kuasa Pengguna Anggaran.</li>
              </ol>
            </p>
          </div>

          <!-- Pertanggungjawaban Biaya Perjalanan Dinas Jabatan -->
          <div class="tab-pane fade" id="pills-8" role="tabpanel">
            <h4>Pertanggungjawaban Biaya Perjalanan Dinas Jabatan</h4>
            <p>
              <ol>
                <li>Pelaksana SPD mempertanggungjawabkan:</li>
                <ol type="a">
                  <li>Pelaksanaan Perjalanan Dinas Jabatan kepada pemberi tugas; dan</li>
                  <li>Biaya Perjalanan Dinas Jabatan kepada PPK; Paling lambat 5 (lima) hari kerja setelah tanggal harus kembali yang tercantum dalam SPD.</li>
                </ol>
                <li>Pertanggungjawaban pelaksanaan perjalanan dinas Jabatan kepada pemberi tugas diwujudkan dalam bentuk laporan pelaksanaan.</li>
                <li>Pertanggungjawaban biaya perjalanan dinas biasa dengan melampirkan. dokumen sebagai berikut:</li>
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
                <li>Pertanggungjawaban kegiatan rapat, konsinyering, dan sejenisnya dengan melampirkan dokumen sebagai berikut:</li>
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
              </ol>
            </p>
           </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include 'includes/footer.php'; ?>

