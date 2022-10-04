<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {

            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX 2080TI',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX 570',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen 2200g',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GTX 1080',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '25-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 7200Q',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX 3080TI',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX 580',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen 5400X',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GTX 1070',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '25-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 10100HQ',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2019',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX 1050TI',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX 470',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen 3200g',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GT 1030',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '23-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 TES',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX TES',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX TES',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen GAMING',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GTX SLEBEW',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '25-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 MUSIK',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX INDIHOME',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX JAWA BARAT',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen 2200g',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GTX 1080',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '25-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 7200Q',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX 2080TI',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX 570',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen 2200g',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GTX 1080',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '25-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 7200Q',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia RTX 2080TI',
                'jumlah_barang' => '10',
                'tanggal_transaksi' => '20-12-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Radeon RX 570',
                'jumlah_barang' => '5',
                'tanggal_transaksi' => '20-12-2021',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'AMD Ryzen 2200g',
                'jumlah_barang' => '2',
                'tanggal_transaksi' => '20-12-2022',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Nvidia GTX 1080',
                'jumlah_barang' => '4',
                'tanggal_transaksi' => '25-11-2020',
            ]));
            Transaksi::create(array_merge([
                'nama_barang' => 'Intel i7 7200Q',
                'jumlah_barang' => '15',
                'tanggal_transaksi' => '10-12-2020',
            ]));

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }
}
