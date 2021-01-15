<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2019/09/25/PGsxuI1y/20190925100210-32ee.jpg',
            'name' => 'CÔNG TY TNHH DỊCH VỤ BĐS LÊ DUY HIẾU',
            'type' => '1',
            'address' => 'Số 10, Ngõ 2, Hà Trì 5, Hà Cầu, Hà Đông, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0769969928',
            'mail' => 'cskh.gigareal@gmail.com',
            'website' => 'http://gigareal.vn',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2019/05/24/PGsxuI1y/20190524155113-8a9e.jpg',
            'name' => 'CÔNG TY CP - TM ĐẦU TƯ BĐS KHUẤT ĐẠI VIỆT',
            'type' => '1',
            'address' => '485 Lê Văn Quới, Bình Trị Đông A, Bình Tân, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0911916191',
            'mail' => 'vestalands@gmail.com',
            'website' => 'http://Vestaland.vn',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2017/12/28/JGcIp0rf/20171228134439-4160.jpg',
            'name' => 'CÔNG TY TNHH DỊCH VỤ BĐS NGUYỄN LƯƠNG TÀI ANH',
            'type' => '1',
            'address' => '237 Nguyễn Văn Linh, Vĩnh Trung, Thanh Khê, Đà Nẵng, Việt Nam',
            'provinces_code' => '48',
            'mobile' => '0769969928',
            'mail' => 'cskh.gigareal@gmail.com',
            'website' => 'http://gigareal.vn',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2017/10/04/eCGLjNi5/20171004152143-ca64.jpg',
            'name' => 'CÔNG TY TNHH ĐẦU TƯ BẤT ĐỘNG SẢN BÙI VĂN TRỌNG',
            'type' => '1',
            'address' => '125 Bà Triệu, Hà Cầu, Hà Đông, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0963343833',
            'mail' => 'namnt.nhl@gmail.com',
            'website' => ' Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2015/08/08/JGcIp0rf/20150808115756-936c.jpg',
            'name' => 'CÔNG TY TNHH BĐS NGUYỄN QUANG HUY',
            'type' => '1',
            'address' => '15 đường R Khu đô thị Lakeview city, 697 Đỗ Xuân Hợp, An Phú, Quận 2, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0906656667',
            'mail' => ' myk http://mykimland.vn/',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2020/06/23/n1AwoD7S/20200623140450-4db7.jpg"',
            'name' => 'CÔNG TY CỔ PHẦN NGUYỄN NGỌC SƠN',
            'type' => '1',
            'address' => '97 Đường D32, KDC Việt Sing, Kp4, An Phú, Thuận An, Bình Dương, Việt Nam',
            'provinces_code' => '74',
            'mobile' => '0905747886',
            'mail' => 'info@levin.vn',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2020/03/02/3ZsSL6gy/20200302101745-72d2.jpg',
            'name' => 'CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN PP2007F',
            'type' => '1',
            'address' => '15 đường R Khu đô thị Lakeview city, 697 Đỗ Xuân Hợp, An Phú, Quận 2, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0916592969',
            'mail' => 'phamlanhbds@gmail.com',
            'website' => ' http://pageland.vn/',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://awesome-academy.com/images/AWACA_Logo_sun-02.png',
            'name' => 'CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ PHÁT TRIỂN BẤT ĐỘNG SẢN AWESOME ACADEMY',
            'type' => '1',
            'address' => 'Tầng 11 Tòa nhà Handico Tower, đường Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội',
            'provinces_code' => '1',
            'mobile' => '0989199898',
            'mail' => 'victoryreal.vn@gmail.com',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2020/09/16/PGsxuI1y/20200916154908-fc05.jpg',
            'name' => 'CÔNG TY TNHH ĐẦU TƯ THƯƠNG MẠI VÀ QUẢN LÝ THIÊN PHÚC LAND',
            'type' => '1',
            'address' => '104B Võ Thị Sáu, Quyết Thắng, Biên Hòa, Đồng Nai, Việt Nam',
            'provinces_code' => '75',
            'mobile' => '00943075959',
            'mail' => 'hangngavpb243@gmail.com',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2020/09/14/PGsxuI1y/20200914174501-f1fc.jpg',
            'name' => 'DO VILLAS',
            'type' => '1',
            'address' => 'Vinhomes skylake, Mỹ Đình 1, Nam Từ Liêm, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0983786378',
            'mail' => 'bdsdothanh.info@gmail.com',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' => 'https://file4.batdongsan.com.vn/resize/200x200/2020/09/04/PGsxuI1y/20200904174346-3972.jpg',
            'name' => 'CÔNG TY CỔ PHẦN QUẢN LÝ VÀ KHAI THÁC TÀI SẢN BẾN THÀNH',
            'type' => '1',
            'address' => '51 Nguyễn Sơn Hà, 5, Quận 3, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0915202529',
            'mail' => 'benthanhrealty@gmail.com',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/09/03/PGsxuI1y/20200903170745-8a3e.jpg',
            'name' => 'CÔNG TY CỔ PHẦN TẬP ĐOÀN NAM MINH',
            'type' => '1',
            'address' => '128 Phố Cấm, Gia Viên, Ngô Quyền, Hải Phòng, Việt Nam',
            'provinces_code' => '31',
            'mobile' => '0941085085',
            'mail' => 'info@namminh.com.vn',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2019/11/12/3ZsSL6gy/20191112163139-2eb8.jpg',
            'name' => 'CÔNG TY CỔ PHẦN ĐẦU TƯ ĐỊA ỐC XUÂN LỘC HOLDINGS',
            'type' => '1',
            'address' => '397A Trần Phú, Quy Nhơn, Bình Định, Việt Nam',
            'provinces_code' => '52',
            'mobile' => '0905978389',
            'mail' => 'quipham86@gmail.com',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/09/01/PGsxuI1y/20200901091417-0978.jpg',
            'name' => 'CÔNG TY TNHH CĂN HỘ BIÊN HÒA',
            'type' => '1',
            'address' => '104B Võ Thị Sáu, Quyết Thắng, Biên Hòa, Đồng Nai, Việt Nam',
            'provinces_code' => '75',
            'mobile' => '0819644444',
            'mail' => 'info@welcomereal.com',
            'website' => 'https://canhobienhoa.com/',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/images/broker/man.png',
            'name' => 'Doanh nghiệp Thái Hà Hưng',
            'type' => '1',
            'address' => 'Xã Bạch Sam, Mỹ Hòa, Hưng Yên',
            'provinces_code' => '33',
            'mobile' => '0913320517',
            'mail' => 'xuankieu0913320517@gmail.com',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/16/PGsxuI1y/20201216161213-9a91.jpg',
            'name' => 'Nguyễn Văn Tuấn',
            'type' => '2',
            'address' => 'Bình Thạnh, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0775544222',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/15/RUFz0fap/20201215095905-9214.jpg',
            'name' => 'Bất động sản Lê An',
            'type' => '2',
            'address' => 'Thủ Dầu Một, Bình Dương, Việt Nam',
            'provinces_code' => '74',
            'mobile' => '0901264989',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/16/RUFz0fap/20201216141205-c31e.jpg',
            'name' => 'Ms Linh Đan',
            'type' => '2',
            'address' => 'Hoàng Văn Thụ, 8, Phú Nhuận, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0966643879',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/11/PGsxuI1y/20201211165806-598d.jpg',
            'name' => 'Đỗ Thành Vương',
            'type' => '2',
            'address' => 'Cầu Giấy, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0966643879',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/11/PGsxuI1y/20201211112637-fee5.jpg',
            'name' => 'Nguyễn Thu Thủy',
            'type' => '2',
            'address' => 'Gia Lâm, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0914712366',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 
        
        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/18/RUFz0fap/20201218104432-d98c.jpg',
            'name' => 'Đỗ Mạnh Cường',
            'type' => '2',
            'address' => 'Gia Lâm, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0986958000',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/09/PGsxuI1y/20201209151331-e0dc.jpg',
            'name' => 'Nguyễn Lê Năng',
            'type' => '2',
            'address' => 'Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0869009368',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/04/RUFz0fap/20201204101321-ec82.jpg',
            'name' => 'Hoàng Xuân Hải',
            'type' => '2',
            'address' => 'Ngọc Thụy, Long Biên, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0968022524',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/03/PGsxuI1y/20201203135203-6b1f.jpg',
            'name' => 'Lê Xuân Hiệp',
            'type' => '2',
            'address' => 'Hoàng Mai, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0934228823',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/12/01/PGsxuI1y/20201201134813-7e48.jpg',
            'name' => 'Lê Hữu Đang',
            'type' => '2',
            'address' => 'Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0399490175',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/11/25/RUFz0fap/20201125085112-f4e4.jpg',
            'name' => 'Hoàng Thị Thúy Vân',
            'type' => '2',
            'address' => 'Dương Đông, Phú Quốc, Kiên Giang, Việt Nam',
            'provinces_code' => '91',
            'mobile' => '0982837473',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/11/24/PGsxuI1y/20201124090509-f9a6.jpg',
            'name' => 'Ngô Thị Hoa',
            'type' => '2',
            'address' => 'Quận 2, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0982837473',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/11/23/PGsxuI1y/20201123142309-84a6.jpg',
            'name' => 'Vũ Thị Hường',
            'type' => '2',
            'address' => 'Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0968388219',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/11/18/20201118122156-8b4d.jpg',
            'name' => 'Triệu Bửu Phước',
            'type' => '2',
            'address' => 'Lạc Long Quân, 10, Quận 11, Hồ Chí Minh, Việt Nam',
            'provinces_code' => '79',
            'mobile' => '0968686833',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/11/17/PGsxuI1y/20201117170639-f820.jpg',
            'name' => 'Nguyễn Văn Thụy',
            'type' => '2',
            'address' => 'Thanh Xuân, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0964357103',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/10/30/PGsxuI1y/20201030151439-e1ce.jpg',
            'name' => 'Trần Thị Hằng',
            'type' => '2',
            'address' => 'FLC 36 Phạm Hùng, Mỹ Đình 2, Nam Từ Liêm, Hà Nội, Việt Nam',
            'provinces_code' => '1',
            'mobile' => '0976004313',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/10/29/PGsxuI1y/20201029142519-b365.jpg',
            'name' => 'Nguyễn Đỗ Vân Trình',
            'type' => '2',
            'address' => 'Thanh Khê - Đà Nẵng',
            'provinces_code' => '48',
            'mobile' => '0976004313',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $faker = Faker\Factory::create();
        DB::table('brokers')->insert([
            'broker_images' =>'https://file4.batdongsan.com.vn/resize/200x200/2020/09/29/PGsxuI1y/20200929154358-1f2c.jpg',
            'name' => 'Nguyễn Văn Ngọc',
            'type' => '2',
            'address' => 'Bắc Giang, Bắc Giang, Việt Nam',
            'provinces_code' => '24',
            'mobile' => '0969582818',
            'mail' => 'Đang cập nhật',
            'website' => 'Đang cập nhật',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $timestamps = true;
    }
}
