<form wire:submit="submit()">
    <div class="banner">
        <img src="{{ asset('img/unpatti-logo.png') }}" class="unpatti-logo" alt="">
        <div class="text">
            <h1>Local People Study</h1>
            <h2>Local Workforce Development</h2>
        </div>
        <img src="{{ asset('img/inpex-logo.png') }}" class="inpex-logo" alt="">
    </div>
    @switch($page)
        @case(1)
            <div class="description">
                <p>Salam kenal Bapak/Ibu Responden,</p>
                <p>
                    Kami dari <strong>Universitas Pattimura</strong> saat ini sedang melakukan survei untuk memotret profil serta potensi tenaga kerja lokal di wilayah <strong>KKT, MBD, Aru, Tual, Maluku Tenggara, Kota Ambon</strong>, dan <strong>Provinsi Maluku</strong> secara keseluruhan. 
                    Survei ini bertujuan untuk mengumpulkan informasi awal mengenai karakteristik, latar belakang pendidikan, pengalaman kerja, serta kompetensi yang dimiliki oleh Penduduk Usia Kerja di Provinsi Maluku.
                </p>
                <p>
                    Perlu ditegaskan bahwa survei ini <strong>bukan merupakan proses rekrutmen atau penerimaan tenaga kerja</strong>, 
                    melainkan semata-mata untuk keperluan pendataan dan pemetaan profil, serta analisis potensi, ketersediaan, dan kesiapan 
                    sumber daya manusia (SDM) di Provinsi Maluku dalam rangka mendukung kegiatan <strong>Investasi LNG di Blok Masela</strong>, 
                    yang direncanakan akan memulai tahap konstruksinya dalam waktu dekat ini.
                </p>
                <p>
                    Data yang Bapak/Ibu berikan akan dijaga kerahasiaannya dan hanya digunakan untuk keperluan <strong>analisis statistik</strong> 
                    serta <strong>perencanaan pengembangan SDM lokal</strong> di Maluku.
                </p>
                <p>
                    Kami sangat menghargai partisipasi dan kontribusi Bapak/Ibu dalam survei ini.
                </p>
                <p>Terima kasih atas waktu dan kesediaan Bapak/Ibu untuk mengisi kuesioner ini.</p>
            </div>
            @break
        @case(2)
            <header>Data Pribadi</header>
            <div class="container">
                <x-input label="Nama Lengkap" wire="nama" :required="true" />
                <x-input label="Tempat Lahir" wire="tempat_lahir" :required="true" />
                <x-input type="date" label="Tanggal Lahir" wire="tanggal_lahir" :required="true" />
                <x-input type="radio" label="Kebangsaan" wire="kebangsaan" :options="json_encode(['WNI' => 'WNI', 'WNA' => 'WNA'])" :required="true" />
                <x-input type="radio" label="Status Pernikahan" wire="status_pernikahan" :options="json_encode(['Sudah Menikah' => 'Sudah Menikah', 'Belum Menikah' => 'Belum Menikah'])" :required="true" />
                <x-input type="radio" label="Agama" wire="agama" :options="json_encode(['Islam' => 'Islam', 'Kristen Protestan' => 'Kristen Protestan', 'Kristen Katolik' => 'Kristen Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha', 'Konghucu' => 'Konghucu', 'Lainnya' => 'Lainnya'])" :list="true" :required="true" />
                <x-input type="radio" label="Jenis Kelamin" wire="jenis_kelamin" :options="json_encode(['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'])" :required="true" />
                <x-input label="Alamat" wire="alamat" :required="true" />
                <x-input label="Desa" wire="desa" :required="true" />
                <x-input label="Kecamatan" wire="kecamatan" :required="true" />
                <x-input label="Kabupaten/Kota" wire="kabupaten" :required="true" />
                <x-input label="No. HP" wire="no_telp" :required="true" />
            </div>
            @break
        @case(3)
            <header>Pendidikan</header>
            <div class="container">
                <x-input type="radio" label="Pendidikan Terakhir" wire="pendidikan_terakhir" :options="json_encode(['SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'Diploma' => 'Diploma', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', 'Lainnya' => 'Lainnya'])" :list="true" :required="true" />
                <x-input label="Sekolah/Lembaga/Intitusi" wire="institusi" :required="true" />
                <x-input label="Tahun Kelulusan" wire="tahun_kelulusan" :required="true" />
                <x-input label="Jurusan" wire="jurusan" />
            </div>
            @break
        @case(4)
            <header>Pengalaman Pelatihan</header>
            <div class="container">
                <x-input type="radio" label="Apakah pernah mengikuti Pelatihan Kerja?" wire="pelatihan_diikuti" :options="json_encode([1 => 'Ya', 0 => 'Tidak'])" :required="true" />
                @if ($pelatihan_diikuti)
                    <x-input label="Jenis Pelatihan apa saja yang pernah anda ikuti?" wire="jenis_pelatihan" />
                    <x-input label="Apa nama Lembaga Penyelenggara pelatihan tersebut?" wire="nama_lembaga" />
                    <x-input label="Dimana lokasi Penyelenggara pelatihan tersebut?" wire="lokasi_lembaga" />
                @endif
            </div>
            @break
        @case(5)
            <header>Sertifikasi</header>
            <div class="container">
                <x-input type="radio" label="Apakah anda memiliki Sertifikasi Kerja?" wire="sertifikasi_dimiliki" :options="json_encode([1 => 'Ya', 0 => 'Tidak'])" :required="true" />
                @if ($sertifikasi_dimiliki)
                    <x-input label="Keterampilan Utama apa yang anda miliki?" wire="keterampilan_utama" />
                @endif
            </div>
            @break
        @case(6)
            <header>Pengalaman Bekerja</header>
            <div class="container">
                <x-input type="radio" label="Apakah sebelumnya anda memiliki pengalaman bekerja?" wire="pengalaman_bekerja" :options="json_encode([1 => 'Ya', 0 => 'Tidak'])" :required="true" />
                @if ($pengalaman_bekerja)
                    <x-input label="Jika ya, tahun berapa anda mulai bekerja?" wire="tahun_mulai_kerja" />
                    <x-input label="Kapan tahun terakhir anda bekerja?" wire="tahun_terakhir_kerja" />
                    <x-input label="Apa nama Perusahaan terakhir anda bekerja?" wire="nama_perusahaan" />
                    <x-input label="Dimana Lokasi anda bekerja sebelumnya?" wire="lokasi_pekerjaan_sebelumnya" />
                    <x-input label="Berapa jumlah gaji terakhir anda?" wire="gaji_terakhir" />
                    <x-input label="Apa Posisi anda pada pekerjaan sebelumnya?" wire="posisi_terakhir" />
                @endif
            </div>
            @break
        @case(7)
            <header>Minat Bekerja di Blok Masela</header>
            <div class="container">
                <x-input type="radio" label="Apakah anda berkeinginan untuk terlibat/bekerja dalam rangka mendukung kegiatan investasi LNG di blok masela?" wire="minat_kerja_lng" :options="json_encode([1 => 'Ya', 0 => 'Tidak'])" :required="true" />
                @if ($minat_kerja_lng)
                    <x-input label="Jika berkeinginan terliba/bekerja, bidang pekerjaan apa yang diminati?" wire="bidang_pekerjaan_diminati" />
                @endif
                <x-input type="radio" label="Apakah bidang kerja yang anda minati tersebut adalah pekerjaan di darat (on shore) ataukah di laut (off shore)?" wire="lingkungan_kerja" :options="json_encode(['On shore' => 'On shore', 'Off shore' => 'Off shore'])" :required="true" />
                <x-input type="radio" label="Apakah anda bersedia kerja di luar daerah?" wire="bisa_kerja_luar_daerah" :options="json_encode([1 => 'Ya', 0 => 'Tidak'])" :required="true" />
            </div>
            @break
        @case(8)
            <header>Minat Mengikuti Pelatihan</header>
            <div class="container">
                <x-input type="radio" label="Jika ada pelatihan, apakah anda tertarik untuk mengikutinya?" wire="minat_pelatihan" :options="json_encode([1 => 'Ya', 0 => 'Tidak'])" :required="true" />
                @if ($minat_pelatihan)
                    <x-input label="Jika tertarik, pelatihan apa yang anda minati?" wire="jenis_pelatihan_diminati" />
                @endif
            </div>
            @break
        @case(9)
            <header>Komentar dan Harapan</header>
            <div class="container">
                <x-input label="Bagaimana komentar/harapan anda terhadap proyek LNG Blok Masela?" wire="komentar_harapan" />
            </div>
            @break
        @case(10)
            <header>Hasil Pengisian Kuesioner</header>
            <div class="container">
                <table>
                    <tr><td>Nama</td><td>:</td><td>{{ $nama }}</td></tr>
                    <tr><td>Tempat Lahir</td><td>:</td><td>{{ $tempat_lahir }}</td></tr>
                    <tr><td>Tanggal Lahir</td><td>:</td><td>{{ $tanggal_lahir }}</td></tr>
                    <tr><td>Kebangsaan</td><td>:</td><td>{{ $kebangsaan }}</td></tr>
                    <tr><td>Status Pernikahan</td><td>:</td><td>{{ $status_pernikahan }}</td></tr>
                    <tr><td>Agama</td><td>:</td><td>{{ $agama }}</td></tr>
                    <tr><td>Jenis Kelamin</td><td>:</td><td>{{ $jenis_kelamin }}</td></tr>
                    <tr><td>Alamat</td><td>:</td><td>{{ $alamat }}</td></tr>
                    <tr><td>Kecamatan</td><td>:</td><td>{{ $kecamatan }}</td></tr>
                    <tr><td>Kabupaten/Kota</td><td>:</td><td>{{ $kabupaten }}</td></tr>
                    <tr><td>No. HP</td><td>:</td><td>{{ $no_telp }}</td></tr>
            
                    <tr><td>Pendidikan Terakhir</td><td>:</td><td>{{ $pendidikan_terakhir }}</td></tr>
                    <tr><td>Institusi</td><td>:</td><td>{{ $institusi }}</td></tr>
                    <tr><td>Tahun Kelulusan</td><td>:</td><td>{{ $tahun_kelulusan }}</td></tr>
                    <tr><td>Jurusan</td><td>:</td><td>{{ $jurusan }}</td></tr>
            
                    <tr><td>Pernah Ikut Pelatihan?</td><td>:</td><td>{{ $pelatihan_diikuti ? 'Ya' : 'Tidak' }}</td></tr>
                    @if($pelatihan_diikuti)
                        <tr><td>Jenis Pelatihan</td><td>:</td><td>{{ $jenis_pelatihan }}</td></tr>
                        <tr><td>Nama Lembaga</td><td>:</td><td>{{ $nama_lembaga }}</td></tr>
                        <tr><td>Lokasi Lembaga</td><td>:</td><td>{{ $lokasi_lembaga }}</td></tr>
                    @endif
            
                    <tr><td>Memiliki Sertifikasi?</td><td>:</td><td>{{ $sertifikasi_dimiliki ? 'Ya' : 'Tidak' }}</td></tr>
                    @if($sertifikasi_dimiliki)
                        <tr><td>Keterampilan Utama</td><td>:</td><td>{{ $keterampilan_utama }}</td></tr>
                    @endif
            
                    <tr><td>Pernah Bekerja?</td><td>:</td><td>{{ $pengalaman_bekerja ? 'Ya' : 'Tidak' }}</td></tr>
                    @if($pengalaman_bekerja)
                        <tr><td>Tahun Mulai Kerja</td><td>:</td><td>{{ $tahun_mulai_kerja }}</td></tr>
                        <tr><td>Tahun Terakhir Kerja</td><td>:</td><td>{{ $tahun_terakhir_kerja }}</td></tr>
                        <tr><td>Nama Perusahaan</td><td>:</td><td>{{ $nama_perusahaan }}</td></tr>
                        <tr><td>Lokasi Pekerjaan</td><td>:</td><td>{{ $lokasi_pekerjaan_sebelumnya }}</td></tr>
                        <tr><td>Gaji Terakhir</td><td>:</td><td>{{ $gaji_terakhir }}</td></tr>
                        <tr><td>Posisi Terakhir</td><td>:</td><td>{{ $posisi_terakhir }}</td></tr>
                    @endif
            
                    <tr><td>Minat Bekerja di Proyek LNG?</td><td>:</td><td>{{ $minat_kerja_lng ? 'Ya' : 'Tidak' }}</td></tr>
                    @if($minat_kerja_lng)
                        <tr><td>Bidang yang Diminati</td><td>:</td><td>{{ $bidang_pekerjaan_diminati }}</td></tr>
                    @endif
            
                    <tr><td>Lingkungan Kerja Diminati</td><td>:</td><td>{{ $lingkungan_kerja }}</td></tr>
                    <tr><td>Bersedia Kerja Luar Daerah</td><td>:</td><td>{{ $bisa_kerja_luar_daerah ? 'Ya' : 'Tidak' }}</td></tr>
                    <tr><td>Minat Pelatihan</td><td>:</td><td>{{ $minat_pelatihan ? 'Ya' : 'Tidak' }}</td></tr>
                    @if($minat_pelatihan)
                        <tr><td>Jenis Pelatihan Diminati</td><td>:</td><td>{{ $jenis_pelatihan_diminati }}</td></tr>
                    @endif
            
                    <tr><td>Harapan terhadap Proyek Masela</td><td>:</td><td>{{ $komentar_harapan }}</td></tr>
                </table>
            </div>        
            @break
        @case(11)
            <div class="closing">
                <h2 class="title">Terima Kasih</h2>
                <p>Terima kasih atas kesediaan Bapak/Ibu meluangkan waktu untuk mengisi kuesioner ini. Partisipasi Anda sangat berarti dalam upaya kami memetakan potensi tenaga kerja Maluku</p>
                <button type="button" onclick="window.location.reload();" class="outline" style="align-self: end">Selesai</button>
            </div>
            @break
    @endswitch
    <div class="navigation">
        @if ($page == 1)
            <button type="button" wire:click="next" style="width: 100%; margin-top: -2em">Mulai</button>
        @endif
        @if ($page > 1 && $page < 11) 
            <button type="button" wire:click="previous" class="outline">Sebelumnya</button>
        @endif
        @if ($page > 1 && $page < 10)
            <button type="button" wire:click="next">Selanjutnya</button>
        @endif
        @if ($page == 10)
            <button type="submit">Submit</button>
        @endif
    </div>
</form>