<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // trong
        $this->call(DistrictSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(WardSeeder::class);
        // tai anh
        $this->call(ProductSeeder::class);
        //viet
        $this->call(PostTypeSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(BuyerSellerAreaSeeder::class);
        $this->call(BuyerSellerCatergorySeeder::class);
        $this->call(BuyerSellerContactSeeder::class);
        $this->call(ImageDemoSeeder::class);
        $this->call(BuyerSellerSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        
        
        
        // hieu
        $this->call(ImageSeeder::class);
        $this->call(BrokerSeeder::class);
        $this->call(BusinessSeeder::class);
        $this->call(SlideSeeder::class);

        //Huy
        $this->call(MenuCategorySeeder::class);
        $this->call(ArticleSeeder::class);


    }
}
