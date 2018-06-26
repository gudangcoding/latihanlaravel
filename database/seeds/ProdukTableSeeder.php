<?php

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produk')->insert(array(
        	['nama_produk' => 'Sabun Lifeboy','harga_jual'=>'2000','diskon'=>'10' ],
        	['nama_produk' => 'Sampho Sunsilk','harga_jual'=>'6000','diskon'=>'10' ]
        ));
    }
}
