<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder_service2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data = [
                ['name' => 'สินค้าไม่ระบุประเภท 4', 'price' => 130, 'cost' => 100, 'product_type_id' => 8],
                ['name' => 'สินค้าไม่ระบุประเภท 5', 'price' => 140, 'cost' => 110, 'product_type_id' => 8],
                ['name' => 'น้ำอัดลมรสโคล่า 500ml', 'price' => 25, 'cost' => 18, 'product_type_id' => 9],
                ['name' => 'เครื่องดื่มรสผลไม้รวม 300ml', 'price' => 35, 'cost' => 28, 'product_type_id' => 9],
                ['name' => 'ขนมปังเนยสด 3 ชิ้น', 'price' => 45, 'cost' => 35, 'product_type_id' => 10],
                ['name' => 'ครัวซองต์ช็อกโกแลต 1 ชิ้น', 'price' => 65, 'cost' => 50, 'product_type_id' => 10],
                ['name' => 'นมรสกล้วย 1L', 'price' => 70, 'cost' => 55, 'product_type_id' => 11],
                ['name' => 'ไอศกรีมรสสตรอเบอร์รี่ 500ml', 'price' => 150, 'cost' => 115, 'product_type_id' => 12],
                ['name' => 'ช็อกโกแลตรสนม 100g', 'price' => 50, 'cost' => 35, 'product_type_id' => 13],
                ['name' => 'ข้าวโอ๊ตอบกรอบ 500g', 'price' => 90, 'cost' => 70, 'product_type_id' => 14],
              ];
              foreach( $data as $item){
                $item['qty'] = rand(1,100);
                DB::table('products')->insert($item);
              }
        }
    }
}
