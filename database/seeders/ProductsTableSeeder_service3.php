<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder_service3 extends Seeder
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
                ['name' => 'สินค้าไม่ระบุประเภท 1', 'price' => 100, 'cost' => 80, 'product_type_id' => 8],
                ['name' => 'สินค้าไม่ระบุประเภท 2', 'price' => 110, 'cost' => 85, 'product_type_id' => 8],
                ['name' => 'สินค้าไม่ระบุประเภท 3', 'price' => 120, 'cost' => 90, 'product_type_id' => 8],
                ['name' => 'เครื่องดื่มโซดารสมะนาว 350ml', 'price' => 35, 'cost' => 25, 'product_type_id' => 9],
                ['name' => 'เครื่องดื่มกาแฟดำกระป๋อง 250ml', 'price' => 45, 'cost' => 35, 'product_type_id' => 9],
                ['name' => 'เครื่องดื่มชูกำลัง 250ml', 'price' => 25, 'cost' => 15, 'product_type_id' => 9],
                ['name' => 'ขนมปังไส้กรอก 2 ชิ้น', 'price' => 60, 'cost' => 40, 'product_type_id' => 10],
                ['name' => 'เค้กกล้วยหอม 1 ชิ้น', 'price' => 50, 'cost' => 35, 'product_type_id' => 10],
                ['name' => 'ครัวซองต์รสเนย 1 ชิ้น', 'price' => 55, 'cost' => 40, 'product_type_id' => 10],
                ['name' => 'โยเกิร์ตรสธรรมชาติ 150g', 'price' => 35, 'cost' => 25, 'product_type_id' => 11],
                ['name' => 'นมเปรี้ยวรสส้ม 200ml', 'price' => 40, 'cost' => 30, 'product_type_id' => 11],
                ['name' => 'นมสดรสจืด 1L', 'price' => 50, 'cost' => 40, 'product_type_id' => 11],
                ['name' => 'ไอศกรีมรสวานิลลา 500ml', 'price' => 150, 'cost' => 120, 'product_type_id' => 12],
                ['name' => 'ไอศกรีมรสช็อกโกแลต 500ml', 'price' => 160, 'cost' => 130, 'product_type_id' => 12],
                ['name' => 'ไอศกรีมรสมะม่วง 500ml', 'price' => 140, 'cost' => 110, 'product_type_id' => 12],
                ['name' => 'ลูกอมรสมิ้นต์ 50g', 'price' => 30, 'cost' => 20, 'product_type_id' => 13],
                ['name' => 'ช็อกโกแลตรสสตรอเบอร์รี่ 200g', 'price' => 80, 'cost' => 60, 'product_type_id' => 13],
                ['name' => 'ขนมขบเคี้ยวรสเค็ม 100g', 'price' => 55, 'cost' => 40, 'product_type_id' => 13],
                ['name' => 'ข้าวสารหอมมะลิ 5kg', 'price' => 200, 'cost' => 150, 'product_type_id' => 14],
                ['name' => 'เส้นหมี่กึ่งสำเร็จรูป 10 ซอง', 'price' => 80, 'cost' => 60, 'product_type_id' => 14],
                ['name' => 'ปลาทูน่ากระป๋อง 150g', 'price' => 90, 'cost' => 70, 'product_type_id' => 14],
                ['name' => 'น้ำยาล้างจาน 500ml', 'price' => 55, 'cost' => 40, 'product_type_id' => 15],
                ['name' => 'กระดาษชำระ 12 ม้วน', 'price' => 70, 'cost' => 50, 'product_type_id' => 15],
                ['name' => 'น้ำยาซักผ้าขาว 1L', 'price' => 65, 'cost' => 45, 'product_type_id' => 15],
                ['name' => 'ผลิตภัณฑ์ดูแลผิวหน้า 100ml', 'price' => 300, 'cost' => 250, 'product_type_id' => 16],
                ['name' => 'ครีมบำรุงผิวกาย 200ml', 'price' => 150, 'cost' => 120, 'product_type_id' => 16],
                ['name' => 'สบู่เหลวล้างหน้า 100ml', 'price' => 120, 'cost' => 90, 'product_type_id' => 16],
                ['name' => 'เสื้อยืดคอกลม สีขาว', 'price' => 250, 'cost' => 180, 'product_type_id' => 17],
                ['name' => 'กางเกงยีนส์ขาสั้น', 'price' => 450, 'cost' => 320, 'product_type_id' => 17],
                ['name' => 'รองเท้าผ้าใบ สีดำ', 'price' => 800, 'cost' => 600, 'product_type_id' => 17],
              ];
              foreach( $data as $item){
                $item['qty'] = rand(1,100);
                DB::table('products')->insert($item);
              }
        }
    }
}
