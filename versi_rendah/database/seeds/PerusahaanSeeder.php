<?php

use Illuminate\Database\Seeder;
use App\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listPerusahaan = [
            ['sektor_id' => '2', 'nama_perusahaan' => 'Bank Central Asia - Surabaya', 'pekerjaan' => 'Customer Service', 'lokasi' => 'Surabaya, Jawa Timur', 'gaji' => '7 Juta', 'deskripsi' => 'PT Bank Central Asia Tbk adalah bank swasta terbesar di Indonesia. Bank ini didirikan pada 21 Februari 1957 dengan nama Bank Central Asia NV dan pernah menjadi bagian penting dari Salim Group.', 'syarat' => '- Diperlukan karyawan yang memiliki pengalaman kerja selama 5 tahun', 'no_hp' => '082651789009', 'website' => 'bcasurabaya.co.id'],

            ['sektor_id' => '2', 'nama_perusahaan' => 'Bank BRI - Surakarta', 'pekerjaan' => 'Teller', 'lokasi' => 'Surakarta, Jawa Timur', 'gaji' => '9 Juta', 'deskripsi' => 'PT Bank Rakyat Indonesia, Tbk adalah salah satu bank milik pemerintah terbesar di Indonesia.', 'syarat' => '- Diperlukan karyawan yang memiliki pengalaman kerja selama 5 tahun', 'no_hp' => '081425678909', 'website' => 'brisurakarta.co.id'],

            ['sektor_id' => '2', 'nama_perusahaan' => 'BNI SKM Sidoarjo', 'pekerjaan' => 'Customer Service', 'lokasi' => 'Sidoarjo, Jawa Timur', 'gaji' => '6 Juta', 'deskripsi' => 'Bank Negara Indonesia atau BNI adalah sebuah institusi bank milik pemerintah, dalam hal ini adalah perusahaan BUMN, di Indonesia.', 'syarat' => '- Diperlukan karyawan yang memiliki pengalaman kerja selama 5 tahun', 'no_hp' => '081423333456', 'website' => 'bnisidoarjo.co.id'],


            ['sektor_id' => '3', 'nama_perusahaan' => 'Dinas Pendidikan - Bogor', 'pekerjaan' => 'Staf', 'lokasi' => 'Bogor, Jawa Barat', 'gaji' => '3 Juta', 'deskripsi' => 'Pendidikan yang bermutu merupakan tuntutan masyarakat Indonesia sebagai wahana untuk menghasilkan sumber daya manusia bermutu yang mampu bersaing secara global.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana', 'no_hp' => '082423333456', 'website' => 'dipendikbogor.co.id'],

            ['sektor_id' => '3', 'nama_perusahaan' => 'Dinas Pendidikan - Bandung', 'pekerjaan' => 'Manager', 'lokasi' => 'Bandung, Jawa Barat', 'gaji' => '8 Juta', 'deskripsi' => 'Pendidikan yang bermutu merupakan tuntutan masyarakat Indonesia sebagai wahana untuk menghasilkan sumber daya manusia bermutu yang mampu bersaing secara global.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana', 'no_hp' => '083523333456', 'website' => 'dipendikbandung.co.id'],

            ['sektor_id' => '3', 'nama_perusahaan' => 'Dinas Pendidikan - Yogyakarta', 'pekerjaan' => 'Ketua Bidang', 'lokasi' => 'Yogyakarta, Jawa Tengah', 'gaji' => '5 Juta', 'deskripsi' => 'Pendidikan yang bermutu merupakan tuntutan masyarakat Indonesia sebagai wahana untuk menghasilkan sumber daya manusia bermutu yang mampu bersaing secara global.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana', 'no_hp' => '081423333456', 'website' => 'dipendikjogja.co.id'],


            ['sektor_id' => '4', 'nama_perusahaan' => 'PT-KAI', 'pekerjaan' => 'Construction Engineering', 'lokasi' => 'DKI Jakarta', 'gaji' => '7 Juta', 'deskripsi' => 'PT-KAI sebuah BUMN yang bekerja pada sektor perkeretaapian', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana teknik', 'no_hp' => '081423333456', 'website' => 'kai.co.id'],

            ['sektor_id' => '4', 'nama_perusahaan' => 'PT.Pertamina (Persero)', 'pekerjaan' => 'Staff Administrasi', 'lokasi' => 'Surabaya, Jawa Timur', 'gaji' => '6 Juta', 'deskripsi' => 'Pertamina atau nama resminya PT Pertamina adalah sebuah BUMN yang bertugas mengelola penambangan minyak dan gas bumi di Indonesia. Pertamina masuk urutan ke 122 dalam Fortune Global 500 pada tahun 2013.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana teknik', 'no_hp' => '081425333490', 'website' => 'pertamina.com'],


            ['sektor_id' => '5', 'nama_perusahaan' => 'GOJEK - Jakarta', 'pekerjaan' => 'Product Engineer', 'lokasi' => 'DKI Jakarta', 'gaji' => '10 Juta', 'deskripsi' => 'Gojek (sebelumnya ditulis GO-JEK) merupakan sebuah perusahaan teknologi asal Indonesia yang melayani angkutan melalui jasa ojek.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana komputer', 'no_hp' => '081423333456', 'website' => 'gojek.co.id'],

            ['sektor_id' => '5', 'nama_perusahaan' => 'Tokopedia - Surabaya', 'pekerjaan' => 'Engineering', 'lokasi' => 'DKI Jakarta', 'gaji' => '12 Juta', 'deskripsi' => 'Tokopedia merupakan perusahaan perdagangan elektronik atau sering disebut toko daring. Sejak didirikan pada tahun 2009, Tokopedia telah bertransformasi menjadi sebuah unicorn yang berpengaruh tidak hanya di Indonesia tetapi juga di Asia Tenggara.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana komputer', 'no_hp' => '083723333451', 'website' => 'tokopedia.com'],

            ['sektor_id' => '5', 'nama_perusahaan' => 'Bukalapak - South Jakarta', 'pekerjaan' => 'Senior Data Scientist - Machine Learning', 'lokasi' => 'South Jakarta', 'gaji' => '17 Juta', 'deskripsi' => 'Bukalapak merupakan perusahaan e-commerce / online marketplace di Indonesia (biasa dikenal juga dengan jaringan toko daring) yang dioperasikan oleh PT. Bukalapak.com sejak tahun 2010.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana komputer', 'no_hp' => '082723333457', 'website' => 'bukalapak.com'],


            ['sektor_id' => '6', 'nama_perusahaan' => 'RSUD - Dr.Sutomo', 'pekerjaan' => 'Dokter', 'lokasi' => 'Surabaya, Jawa Timur', 'gaji' => '10 Juta', 'deskripsi' => 'RSUD sebuah rumah sakit yang melayani masyarakat yang sedang sakit', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana dokter', 'no_hp' => '081423333456', 'website' => 'RSUDsutomo.co.id'],

            ['sektor_id' => '6', 'nama_perusahaan' => 'RSU Bunda Jakarta', 'pekerjaan' => 'Perawat', 'lokasi' => 'DKI Jakarta', 'gaji' => '6 Juta', 'deskripsi' => 'RSUD sebuah rumah sakit yang melayani masyarakat yang sedang sakit', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana keperawatan', 'no_hp' => '082423333456', 'website' => 'RSUDbundajakarta.co.id'],


            ['sektor_id' => '7', 'nama_perusahaan' => 'Pengadilan Negeri Yogyakarta', 'pekerjaan' => 'Hakim', 'lokasi' => 'Yogyakarta, Jawa Tengah', 'gaji' => '12 Juta', 'deskripsi' => 'Pengadilan Negeri mengurus masyarakat yang terlibat oleh hukum pada suatu negara.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana hukum', 'no_hp' => '081423333456', 'website' => 'pnyogya.co.id'],

            ['sektor_id' => '7', 'nama_perusahaan' => 'Pengadilan Negeri Surabaya', 'pekerjaan' => 'Hakim', 'lokasi' => 'Surabaya, Jawa Timur', 'gaji' => '15 Juta', 'deskripsi' => 'Pengadilan Negeri mengurus masyarakat yang terlibat oleh hukum pada suatu negara.', 'syarat' => '- Diperlukan karyawan yang memiliki gelar sarjana hukum', 'no_hp' => '082423333451', 'website' => 'pnsby.co.id']
        ];

        foreach ($listPerusahaan as $perusahaan) {
        	Perusahaan::create($perusahaan);
        }
    }
}