<?php

use App\City;
use App\Province;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class ProvinceCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Mendapatkan semua provinsi di Raja Ongkir
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        foreach ($daftarProvinsi as $provinsi) {
            Province::create([
                'prov_name' => $provinsi['province']
            ]);

            #Mendapatkan kota berdasarkan ID provinsi
            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinsi['province_id'])->get();
            foreach ($daftarKota as $kota) {
                City::create([
                    'city_name' => $kota['city_name'],
                    'kabupaten/kota' => $kota['type'],
                    'province_id' => $provinsi['province_id']
                ]);
            }
        }
    }
}
