<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => '1More Piston Fit In-Ear Earphones',
            'harga' => 69000,
            'elektronika_id' => 1,
            'gambar' => '1more-earphone.png',
            'deskripsi' => 'Kelebihan : 
            -	Desain 45 in-ear, ringan dan nyaman, dengan Teknologi Logam Presisi 20 Arah, dan 4 warna yang dipersonlalisasi',
        ]);

        DB::table('products')->insert([
            'nama' => 'dbE DJ80 Foldable DJ Headphone with Detachable Microphone',
            'harga' => 199000,
            'elektronika_id' => 1,
            'gambar' => 'dbe-dj80.jpg',
            'deskripsi' => ' Spesifikasi: 
            Speaker Driver : 40 mm Dynamic Driver
            Impedance : 32 Ohm 
            Freq Response : 20 Hz - 20 kHz
            Sensiivitas : 110 dB +- dB
            Plug Type : 3.5mm',
        ]);

        DB::table('products')->insert([
            'nama' => 'Dualshock 4 / DS4 / Stick PS4 Wireless LED Light Bar',
            'harga' => 599000,
            'elektronika_id' => 1,
            'gambar' => 'ds4.jpg',
            'deskripsi' => 'Yang sangat mencolok dari DS4 terbaru ini, 
            kita bisa melihat Light Bar dari atas, Trackpad di stick DS4.',
        ]);

        DB::table('products')->insert([
            'nama' => 'HP s1000 Mouse Wireless USB Optical 1600DPI',
            'harga' => 55000,
            'elektronika_id' => 1,
            'gambar' => 'hp-s1000.jpg',
            'deskripsi' => '- Wireless mouse 2.4Ghz
            - Setting DPI 3x (800 / 1600 / 2400)
            - Ergonomic design
            - Support usb 3.0 / 2.0 / 1.1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Keyboard Flexible',
            'harga' => 50000,
            'elektronika_id' => 1,
            'gambar' => 'keyboard-flexi.jpeg',
            'deskripsi' => 'Keyboard Fleksibel USB - Flexible Keyboard USB

            Keyboard dapat digulung fleksibel
            Plug and Play
            Bisa dibersihkan dengan air dan sabun
            Ultra Slim, Ringan
            Dimensi Keyboard: 35cm x 13cm',
        ]);

        DB::table('products')->insert([
            'nama' => 'Rexus Mousepad Gaming Kvlar T5',
            'harga' => 35000,
            'elektronika_id' => 1,
            'gambar' => 'mousepad-kvlar.jpg',
            'deskripsi' => 'Rexus KVLAR T5. Smooth & Precise Tracking Gaming Mousepad
            Tampilkan permainan terbaikmu dengan menggunakan Mousepad Rexus KVLAR T5.',
        ]);

        DB::table('products')->insert([
            'nama' => 'OontZ Angle Ultra 3 Portable Wireless Bluetooth Speaker',
            'harga' => 849000,
            'elektronika_id' => 1,
            'gambar' => 'oontz.jpg',
            'deskripsi' => 'Sempurna untuk dibawa ke pantai, di tepi kolam renang, atau di lapangan golf.',
        ]);

        DB::table('products')->insert([
            'nama' => 'USB Hub 3.0',
            'harga' => 57000,
            'elektronika_id' => 1,
            'gambar' => 'usb-hub.jpg',
            'deskripsi' => 'USB Hub 4 ports 3.0 dengan high speed data transfer up to 5Gbps.',
        ]);

        DB::table('products')->insert([
            'nama' => 'Infinix Hot 9 Play 4/64 GB',
            'harga' => 1540000,
            'elektronika_id' => 2,
            'gambar' => 'infinix-hot9.jpg',
            'deskripsi' => 'Spesifikasi:
                Smartphone dengan RAM 4GB ROM 64GB
                XOS 6.0 based Android 10',
        ]);

        DB::table('products')->insert([
            'nama' => 'Inone Official Smartphone Lava R3 Note 3GB RAM 16GB ROM 13MP Camera',
            'harga' => 1599000,
            'elektronika_id' => 2,
            'gambar' => 'inone-lava.jpg',
            'deskripsi' => 'Spesifikasi :
                Display: 6.22-inch
                SoC: MediaTek Helio P22 MT6762
                Processor: Octa-core 4 x2.0GHz Cortex A53, 4 x1.5Ghz Cortex A53
                Battery: 3260mAh',
        ]);

        DB::table('products')->insert([
            'nama' => 'Nokia 105 Mobile Phone Dual Sim',
            'harga' => 135000,
            'elektronika_id' => 2,
            'gambar' => 'nokia-105.jpg',
            'deskripsi' => 'Nokia Jadul Murah dan Bergaransi.
            1 x HP 2 SIM
            1 x Quality battery ori 99%
            1 x New charger 
            1 x Box-dus
            TIDAK ADA bawaan Handsfree !
            Bisa Bahasa Indonesia',
        ]);

        DB::table('products')->insert([
            'nama' => 'Nokia E90 Communicator',
            'harga' => 370000,
            'elektronika_id' => 2,
            'gambar' => 'nokia-communicator.jpg',
            'deskripsi' => 'Nokia E90 Communicator, cocok untuk pecinta HP jadul',
        ]);

        DB::table('products')->insert([
            'nama' => 'Realme C11 3/32 GB',
            'harga' => 1699000,
            'elektronika_id' => 2,
            'gambar' => 'realme-c11.png',
            'deskripsi' => 'Spesifikasi
            Layar 6,5” Mini-drop Fullscreen
            Baterai 5000mAh(typ) Massive Battery
            Kamera Belakang : 13MP Primary Camera, Kamera Depan : 5MP AI Selfie
            Prosesor : MediaTek Helio G35
            Android 10',
        ]);

        DB::table('products')->insert([
            'nama' => 'Redmi 3S 2/16 GB',
            'harga' => 749000,
            'elektronika_id' => 2,
            'gambar' => 'redmi-3s.jpg',
            'deskripsi' => 'Sudah versi global (Ready bahasa Indonesia & Playstore',
        ]);

        DB::table('products')->insert([
            'nama' => 'Samsung A11 3/32 GB',
            'harga' => 1750000,
            'elektronika_id' => 2,
            'gambar' => 'samsung-a11.jpg',
            'deskripsi' => 'Spesifikasi:
            Display 6.5" HD+ 
            AP Snapdragon 450 (Octa 1.8GHz) 
            Camera Front 8MP (F2.0) Rear 13 MP + 5 MP + 2 MP 
            Battery (mAh) 4,000mAh (15W)',
        ]);

        DB::table('products')->insert([
            'nama' => 'Samsung Lipat GT-E1272 Dual Sim',
            'harga' => 160000,
            'elektronika_id' => 2,
            'gambar' => 'samsung-lipat.jpg',
            'deskripsi' => 'Samsung Lipat GT-E1272 Dual Sim,
            Kelengkapan : 
            - Unit Hp,
            - Baterai,
            - Charger,
            - Kondisi baru,
            - Box HP dalam kondisi disegel',
        ]);

        DB::table('products')->insert([
            'nama' => 'Acer Aspire 3 A314-32 N4000 4GB 1TB WIN10 14inch HD',
            'harga' => 5199000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'acer-aspire-3.jpg',
            'deskripsi' => 'Specifications:
                - 14 Inch HD 1366x 768
                - 4GB DDR4 UpTo 12GB
                - 256 SSD (Ada Slot kosong untuk HDD)',
        ]);

        DB::table('products')->insert([
            'nama' => 'Acer Aspire 5 A514-53 - i3-1005G1 4GB 512GB SSD 14" W10 OFFICE',
            'harga' => 7499000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'acer-aspire-5.jpg',
            'deskripsi' => 'Spesifikasi : 
            - Intel® Core™ i3-1005G1
            - Windows 10 Home
            - 14" FHD 1366 x 768
            - RAM 4GB DDR4
            - 512GB SSD + Intel Optane
            - Intel® UHD Graphics',
        ]);

        DB::table('products')->insert([
            'nama' => 'Acer Swift 3 SF314-57-39WL With Intel Gen 10th And SSD 256GB',
            'harga' => 7799000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'acer-swift-3.jpg',
            'deskripsi' => '- 10th gen Intel Core™ i3-1005G1
            - Windows 10 Home (64-bit)
            - Intel UHD Graphics
            - 14" FHD IPS LED-backlit Narrow Bezel Display
            - 4GB RAM
            - 256GB PCle SSD
            - Intel AX WLAN',
        ]);

        DB::table('products')->insert([
            'nama' => 'ASUS X441NA WIN 10 - INTEL N3350/4GB/500GB/14inch',
            'harga' => 4599000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'asus-x441na.jpg',
            'deskripsi' => 'Spesifikasi:
                - INTEL CELERON DualCore N3350
                - WINDOWS 10 ORIGINAL
                - RAM 4GB
                - HDD 1TB
                - LAYAR 14inch HD (1366*768)
                - INTEL HD Graphics',
        ]);

        DB::table('products')->insert([
            'nama' => 'Lenovo Ideapad 320 Core i3-6006U RAM 4GB HDD 1TB Win10',
            'harga' => 5950000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'lenovo-ideapad.jpg',
            'deskripsi' => 'Spesifikasi :
                - Intel" Core i3-6006U Processor
                - RAM 4GB DDR4
                - 1TB HDD
                - LED 14 Inch
                - INTEL HD 
                - GARANSI 1 TAHUN',
        ]);

        DB::table('products')->insert([
            'nama' => 'Lenovo Thinkpad T440 Core i5 Gen 4 RAM 4GB HDD 500GB',
            'harga' => 5950000,
            'elektronika_id' => 3,
            'jenis' => 'Barang Second',
            'berat' => 4,
            'gambar' => 'thinkpad-t440.jpg',
            'deskripsi' => '- CORE i5 M 520 2.40 GHz
            - RAM 4GB DDR3
            - HDD 500GB 
            - LAYAR 14 inch (1280x800)',
        ]);

        DB::table('products')->insert([
            'nama' => 'Toshiba Dynabook R732 CORE i5 3340M RAM 4GB HDD 320GB',
            'harga' => 2450000,
            'elektronika_id' => 3,
            'jenis' => 'Barang Second',
            'berat' => 4,
            'gambar' => 'toshiba-dynabook.jpg',
            'deskripsi' => 'Intel Core i5 Gen.3
            RAM DDR3 4GB
            HDD 320GB
            Camera
            Wi-fi
            Screen 13.3"',
        ]);

        DB::table('products')->insert([
            'nama' => 'Zyrex Sky 360 2in1 Touchscreen N3350 4GB 256SSD W10 11.6FHD',
            'harga' => 4199000,
            'elektronika_id' => 3,
            'berat' => 3.5,
            'gambar' => 'zyrex.jpg',
            'deskripsi' => 'Spesifikasi
            Intel Celeron N4000 Processor @ 1.10GHz
            Display 13.3″ Full HD (1920x1080) Touch Screen
            Memory 4GB (onboard)
            256GB SSD
            Intel UHD Graphics 600',
        ]);

        DB::table('products')->insert([
            'nama' => 'AOC Monitor 24 inch 24V2Q',
            'harga' => 1575000,
            'elektronika_id' => 4,
            'berat' => 10,
            'gambar' => 'aoc-24inch.jpg',
            'deskripsi' => 'Spesifikasi :

                Resolusi : 1920 x 1080
                Refresh Rate : 75Hz
                Response Time : 5 ms
                Panel : IPS
                Backlight : WLED
                Aspect Ratio : 16:9',
        ]);

        DB::table('products')->insert([
            'nama' => ' ASUS LED Gaming TUF VG249Q - Wide Screen Full HD 24 inch',
            'harga' => 3480000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'asus-24inch.jpg',
            'deskripsi' => 'Display :
            Resolution : 1920x1080
            Refresh Rate (Max) : 144Hz
            Panel Type : IPS
            Backlight : LED
            Aspect Ratio : 16:9',
        ]);

        DB::table('products')->insert([
            'nama' => 'DELL P2419H Monitor',
            'harga' => 2679000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'dell-24inch.jpg',
            'deskripsi' => 'Brand Type : P2419H
            Panel Size(Inch) : 24"
            Resolution : 1920x1080
            Refresh Rate(hz) : 60
            Panel Type : IPS 
            Aspect Ratio : 16 : 9',
        ]);

        DB::table('products')->insert([
            'nama' => 'LG 24MP59G 24" Inch 21:9 IPS Gaming Monitor FULL HD AMD FreeSync 75Hz',
            'harga' => 1900000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'lg-24inch.jpg',
            'deskripsi' => 'Ukuran (Inci) 23,8"
            Aspect Ratio 16:09
            Resolusi 1920 X 1080
            Kecerahan 250 cd/m2
            Response Time 5ms
            Jenis Panel IPS',
        ]);

        DB::table('products')->insert([
            'nama' => 'MSI Optix G241VC 24 Inch Curved Gaming Monitor - 1080p FHD 75Hz 1ms',
            'harga' => 2175000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'msi-curved-24inch.jpg',
            'deskripsi' => 'Brand Type : G241VC
            Panel Size(Inch) : 24” ( 23. 6” )
            Panel Type : VA
            Resolution : 1920x1080
            Aspect Ratio : 16 : 9 
            Refresh Rate(hz) : 75
            Response Time (ms) : 1',
        ]);

        DB::table('products')->insert([
            'nama' => 'LED MONITOR PHILIPS 24 INCH IPS HDMI FRAMELESS 243V7Q-2437QDSB',
            'harga' => 1425000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'philips-24inch.jpg',
            'deskripsi' => 'LCD panel type IPS technology
            Backlight type W-LED system
            Panel Size 23.8 inch
            Aspect ratio 16:9
            Resolution 1920 x 1080 @ 60 H
            Response time 4 ms',
        ]);

        DB::table('products')->insert([
            'nama' => 'SAMSUNG Monitor LED Curved 24" LC24F390FHE',
            'harga' => 1515000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'samsung-curved-24-inch.png',
            'deskripsi' => 'Spesifikasi :

                Display Type : LED Curve
                Ukuran Layar : 24"
                Resolusi : 1920 x 1080
                Waktu Respon : 4ms (GTG) ms
                Teknologi Layar : VA Panel',
        ]);

        DB::table('products')->insert([
            'nama' => 'Monitor VIEWSONIC 24 INCH VA2465SH',
            'harga' => 1450000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'viewsonic-24inch.jpg',
            'deskripsi' => 'Type : 23.6" TFT VA LCD
            Display Area : 521.28 x 293.22mm
            Response Time : 5ms (GtG delta)
            Colours : 16.7M
            Colour Gamut : 94.4% sRGB, 73% AdobeRGB, 67% NTSC color coverage',
        ]);
    }
}
