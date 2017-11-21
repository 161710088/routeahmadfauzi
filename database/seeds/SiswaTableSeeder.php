<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        	['nama'=>'Ahmad Fauzi','kelas'=>'XI rpl 1','tanggal_lahir'=>'2001-03-12','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'16','alamat'=>'Sompok'],
        	['nama'=>'a','kelas'=>'XI rpl 1','tanggal_lahir'=>'2001-09-09','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'16','alamat'=>'Tarate'],
        	['nama'=>'Riris','kelas'=>'XI rpl 1','tanggal_lahir'=>'2000-08-08','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'17','alamat'=>'Ranca manyar'],
        	['nama'=>'Gema','kelas'=>'XI rpl 1','tanggal_lahir'=>'2000-07-07','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'17','alamat'=>'Ujung Berung'],
        	['nama'=>'Haikal','kelas'=>'XI rpl 1','tanggal_lahir'=>'2000-05-05','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'17','alamat'=>'Papua'],
        	['nama'=>'Ali','kelas'=>'XI rpl 1','tanggal_lahir'=>'2000-04-04','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'17','alamat'=>'Diditu'],
        	['nama'=>'Fikri','kelas'=>'XI rpl 1','tanggal_lahir'=>'1999-09-04','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'18','alamat'=>'Duka'],
        	['nama'=>'Gilang','kelas'=>'XI rpl 1','tanggal_lahir'=>'2000-08-01','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'17','alamat'=>'Paledang'],
        	['nama'=>'Aldhit','kelas'=>'XI rpl 1','tanggal_lahir'=>'2001-04-23','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'16','alamat'=>'BMI'],
        	['nama'=>'Rafy','kelas'=>'XI rpl 1','tanggal_lahir'=>'1900-02-13','jenis_kelamin'=>'Laki-Laki','agama'=>'Islam','umur'=>'117','alamat'=>'disana'],
        ];
        DB::table('siswa')->insert($a);
    }
}
