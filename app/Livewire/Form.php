<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Form extends Component
{
    public $page = 1;
    public $nama;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $kebangsaan;
    public $status_pernikahan;
    public $agama;
    public $jenis_kelamin;
    public $alamat;
    public $desa;
    public $kabupaten;
    public $kecamatan;
    public $no_telp;
    public $pendidikan_terakhir;
    public $institusi;
    public $tahun_kelulusan;
    public $jurusan;
    public $pelatihan_diikuti;
    public $jenis_pelatihan;
    public $nama_lembaga;
    public $lokasi_lembaga;
    public $sertifikasi_dimiliki;
    public $keterampilan_utama;
    public $pengalaman_bekerja;
    public $tahun_mulai_kerja;
    public $tahun_terakhir_kerja;
    public $nama_perusahaan;
    public $lokasi_pekerjaan_sebelumnya;
    public $gaji_terakhir;
    public $posisi_terakhir;
    public $minat_kerja_lng;
    public $bidang_pekerjaan_diminati;
    public $lingkungan_kerja;
    public $bisa_kerja_luar_daerah;
    public $minat_pelatihan;
    public $jenis_pelatihan_diminati;
    public $komentar_harapan;

    public function next()
    {
        // if ($this->page == 2) {
        //     $this->validate([
        //         'nama' => 'required',
        //         'tempat_lahir' => 'required',
        //         'tanggal_lahir' => 'required',
        //         'kebangsaan' => 'required',
        //         'status_pernikahan' => 'required',
        //         'agama' => 'required',
        //         'jenis_kelamin' => 'required',
        //         'alamat' => 'required',
        //         'kecamatan' => 'required',
        //         'kabupaten' => 'required',
        //         'no_telp' => 'required',
        //     ]);
        // } elseif ($this->page == 3) {
        //     $this->validate([
        //         'pendidikan_terakhir' => 'required',
        //         'institusi' => 'required',
        //         'tahun_kelulusan' => 'required'
        //     ]);
        // } elseif ($this->page == 4) {
        //     $this->validate([
        //         'pelatihan_diikuti' => 'required',
        //     ]);
        // } elseif ($this->page == 5) {
        //     $this->validate([
        //         'sertifikasi_dimiliki' => 'required',
        //     ]);
        // } elseif ($this->page == 6) {
        //     $this->validate([
        //         'pengalaman_bekerja' => 'required',
        //     ]);
        // } elseif ($this->page == 7) {
        //     $this->validate([
        //         'minat_kerja_lng' => 'required',
        //     ]);
        // } elseif ($this->page == 8) {
        //     $this->validate([
        //         'lingkungan_kerja' => 'required',
        //         'bisa_kerja_luar_daerah' => 'required',
        //         'minat_pelatihan' => 'required',
        //     ]);
        // }
        
        $this->page++;
    }
    
    public function previous()
    {
        $this->page--;
    }
    
    public function updatedPelatihanDiikuti($value)
    {
        $this->pelatihan_diikuti = (bool) $value;
    }
    
    public function updatedSertifikasiDimiliki($value)
    {
        $this->sertifikasi_dimiliki = (bool) $value;
    }
    
    public function updatedPengalamanBekerja($value)
    {
        $this->pengalaman_bekerja = (bool) $value;
    }
    
    public function updatedMinatKerjaLng($value)
    {
        $this->minat_kerja_lng = (bool) $value;
    }
    
    public function updatedMinatPelatihan($value)
    {
        $this->minat_pelatihan = (bool) $value;
    }

    public function submit()
    {
        $response = Http::post('https://script.google.com/macros/s/AKfycbxr0lbFXXpTtRfWpAsv5obTcbT9ezLqbMj6c2yQ3qjXm9hzmNMVMQzomQKvUgv4tu_d/exec', [
            'nama' => $this->nama,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'kebangsaan' => $this->kebangsaan,
            'status_pernikahan' => $this->status_pernikahan,
            'agama' => $this->agama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat' => $this->alamat,
            'desa' => $this->desa,
            'kecamatan' => $this->kecamatan,
            'kabupaten' => $this->kabupaten,
            'no_telp' => $this->no_telp,
            'pendidikan_terakhir' => $this->pendidikan_terakhir,
            'institusi' => $this->institusi,
            'tahun_kelulusan' => $this->tahun_kelulusan,
            'jurusan' => $this->jurusan,
            'pelatihan_diikuti' => $this->pelatihan_diikuti ? 'Ya' : 'Tidak',
            'jenis_pelatihan' => $this->jenis_pelatihan,
            'nama_lembaga' => $this->nama_lembaga,
            'lokasi_lembaga' => $this->lokasi_lembaga,
            'sertifikasi_dimiliki' => $this->sertifikasi_dimiliki ? 'Ya' : 'Tidak',
            'keterampilan_utama' => $this->keterampilan_utama,
            'pengalaman_bekerja' => $this->pengalaman_bekerja ? 'Ya' : 'Tidak',
            'tahun_mulai_kerja' => $this->tahun_mulai_kerja,
            'tahun_terakhir_kerja' => $this->tahun_terakhir_kerja,
            'nama_perusahaan' => $this->nama_perusahaan,
            'lokasi_pekerjaan_sebelumnya' => $this->lokasi_pekerjaan_sebelumnya,
            'gaji_terakhir' => $this->gaji_terakhir,
            'posisi_terakhir' => $this->posisi_terakhir,
            'minat_kerja_lng' => $this->minat_kerja_lng ? 'Ya' : 'Tidak',
            'bidang_pekerjaan_diminati' => $this->bidang_pekerjaan_diminati,
            'lingkungan_kerja' => $this->lingkungan_kerja,
            'bisa_kerja_luar_daerah' => $this->bisa_kerja_luar_daerah ? 'Ya' : 'Tidak',
            'minat_pelatihan' => $this->minat_pelatihan ? 'Ya' : 'Tidak',
            'jenis_pelatihan_diminati' => $this->jenis_pelatihan_diminati,
            'komentar_harapan' => $this->komentar_harapan,
        ]);

        $this->page++;
    }

    
    public function render()
    {
        return view('livewire.form');
    }
}
