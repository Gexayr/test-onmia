<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 484,
                'name' => 'vegas',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:00:44',
            ),
            1 => 
            array (
                'id' => 485,
                'name' => '001 Neon Brick Vegas',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:02:43',
            ),
            2 => 
            array (
                'id' => 486,
                'name' => '001 Neon Bond Vegas',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:05:07',
            ),
            3 => 
            array (
                'id' => 487,
                'name' => '001 Neon Wood Cocktail',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:07:11',
            ),
            4 => 
            array (
                'id' => 488,
                'name' => '001 Neon Brick Cocktail',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:09:36',
            ),
            5 => 
            array (
                'id' => 489,
                'name' => '001 Neon Bond Cocktail',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:12:22',
            ),
            6 => 
            array (
                'id' => 490,
                'name' => '001 Neon Wood Circle',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:14:45',
            ),
            7 => 
            array (
                'id' => 491,
                'name' => '001 Neon Brick Circle',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:17:43',
            ),
            8 => 
            array (
                'id' => 492,
                'name' => '001 Neon Bond Circle',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 13:20:23',
            ),
            9 => 
            array (
                'id' => 493,
                'name' => '001 Neon Wood Club',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 12:39:43',
            ),
            10 => 
            array (
                'id' => 494,
                'name' => '001 Neon Brick Club',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 12:43:16',
            ),
            11 => 
            array (
                'id' => 495,
                'name' => '001 Neon Bond Club',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 12:48:01',
            ),
            12 => 
            array (
                'id' => 496,
                'name' => '001 Neon Wood Welcome',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 12:52:05',
            ),
            13 => 
            array (
                'id' => 497,
                'name' => '001 Neon Brick Welcome',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 12:54:04',
            ),
            14 => 
            array (
                'id' => 498,
                'name' => '001 Neon Bond Welcome',
                'description' => 'Neon badge reveal',
                'created_at' => '2019-03-05 00:00:00',
                'updated_at' => '2020-07-17 12:57:08',
            ),
            15 => 
            array (
                'id' => 499,
                'name' => '002 Neon Brick Vegas',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:31:50',
            ),
            16 => 
            array (
                'id' => 500,
                'name' => '002 Neon Wood Vegas',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:35:14',
            ),
            17 => 
            array (
                'id' => 501,
                'name' => '002 Neon Bond Vegas',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:35:57',
            ),
            18 => 
            array (
                'id' => 502,
                'name' => '002 Neon Wood Cocktail',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:32:51',
            ),
            19 => 
            array (
                'id' => 503,
                'name' => '002 Neon Brick Cocktail',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:33:46',
            ),
            20 => 
            array (
                'id' => 504,
                'name' => '002 Neon Bond Cocktail',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:34:32',
            ),
            21 => 
            array (
                'id' => 505,
                'name' => '002 Neon Wood Circle',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:15:59',
            ),
            22 => 
            array (
                'id' => 506,
                'name' => '002 Neon Brick Circle',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:23:32',
            ),
            23 => 
            array (
                'id' => 507,
                'name' => '002 Neon Bond Circle',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:24:27',
            ),
            24 => 
            array (
                'id' => 508,
                'name' => '002 Neon Wood Club',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:25:21',
            ),
            25 => 
            array (
                'id' => 509,
                'name' => '002 Neon Brick Club',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:26:20',
            ),
            26 => 
            array (
                'id' => 510,
                'name' => '002 Neon Bond Club',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:27:23',
            ),
            27 => 
            array (
                'id' => 511,
                'name' => '002 Neon Wood Welcome',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:28:16',
            ),
            28 => 
            array (
                'id' => 512,
                'name' => '002 Neon Brick Welcome',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:29:16',
            ),
            29 => 
            array (
                'id' => 513,
                'name' => '002 Neon Bond Welcome',
                'description' => 'Neon sign camera move',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 15:30:11',
            ),
            30 => 
            array (
                'id' => 514,
                'name' => '003 Neon Wood Vegas',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:06:05',
            ),
            31 => 
            array (
                'id' => 515,
                'name' => '003 Neon Brick Vegas',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:06:42',
            ),
            32 => 
            array (
                'id' => 516,
                'name' => '003 Neon Bond Vegas',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:07:05',
            ),
            33 => 
            array (
                'id' => 517,
                'name' => '003 Neon Wood Cocktail',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:07:32',
            ),
            34 => 
            array (
                'id' => 518,
                'name' => '003 Neon Brick Cocktail',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:08:01',
            ),
            35 => 
            array (
                'id' => 519,
                'name' => '003 Neon Bond Cocktail',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:08:29',
            ),
            36 => 
            array (
                'id' => 520,
                'name' => '003 Neon Wood Circle',
                'description' => 'Neon sign camera move scene 0',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:09:00',
            ),
            37 => 
            array (
                'id' => 521,
                'name' => '003 Neon Brick Circle',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:09:31',
            ),
            38 => 
            array (
                'id' => 522,
                'name' => '003 Neon Bond Circle',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:11:05',
            ),
            39 => 
            array (
                'id' => 523,
                'name' => '003 Neon Wood Club',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:12:00',
            ),
            40 => 
            array (
                'id' => 524,
                'name' => '003 Neon Brick Club',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:12:27',
            ),
            41 => 
            array (
                'id' => 525,
                'name' => '003 Neon Bond Club',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:12:53',
            ),
            42 => 
            array (
                'id' => 526,
                'name' => '003 Neon Wood Welcome',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:13:39',
            ),
            43 => 
            array (
                'id' => 527,
                'name' => '003 Neon Brick Welcome',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:14:08',
            ),
            44 => 
            array (
                'id' => 528,
                'name' => '003 Neon Bond Welcome',
                'description' => 'Neon sign camera move scene 03',
                'created_at' => '2019-03-06 00:00:00',
                'updated_at' => '2020-07-17 16:14:42',
            ),
            45 => 
            array (
                'id' => 529,
                'name' => '005 Neon Wood Vegas',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:43:45',
            ),
            46 => 
            array (
                'id' => 530,
                'name' => '005 Neon Brick Vegas',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:42:56',
            ),
            47 => 
            array (
                'id' => 531,
                'name' => '005 Neon Bond Vegas',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:44:29',
            ),
            48 => 
            array (
                'id' => 532,
                'name' => '005 Neon Wood Cocktail',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:45:12',
            ),
            49 => 
            array (
                'id' => 533,
                'name' => '005 Neon Brick Cocktail',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:45:40',
            ),
            50 => 
            array (
                'id' => 534,
                'name' => '005 Neon Bond Cocktail',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:46:00',
            ),
            51 => 
            array (
                'id' => 535,
                'name' => '005 Neon Wood Circle',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:46:25',
            ),
            52 => 
            array (
                'id' => 536,
                'name' => '005 Neon Brick Circle',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:46:45',
            ),
            53 => 
            array (
                'id' => 537,
                'name' => '005 Neon Bond Circle',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:47:09',
            ),
            54 => 
            array (
                'id' => 538,
                'name' => '005 Neon Wood Club',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:47:35',
            ),
            55 => 
            array (
                'id' => 539,
                'name' => '005 Neon Brick Club',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:47:59',
            ),
            56 => 
            array (
                'id' => 540,
                'name' => '005 Neon Bond Club',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:48:24',
            ),
            57 => 
            array (
                'id' => 541,
                'name' => '005 Neon Wood Welcome',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:48:45',
            ),
            58 => 
            array (
                'id' => 542,
                'name' => '005 Neon Brick Welcome',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:49:10',
            ),
            59 => 
            array (
                'id' => 543,
                'name' => '005 Neon Bond Welcome',
                'description' => 'Neon sign camera move scene 05',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 16:49:39',
            ),
            60 => 
            array (
                'id' => 544,
                'name' => '006 Neon Wood Vegas',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:08:03',
            ),
            61 => 
            array (
                'id' => 545,
                'name' => '006 Neon Brick Vegas',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:11:12',
            ),
            62 => 
            array (
                'id' => 546,
                'name' => '006 Neon Bond Vegas',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:12:49',
            ),
            63 => 
            array (
                'id' => 547,
                'name' => '006 Neon Wood Cocktail',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:13:13',
            ),
            64 => 
            array (
                'id' => 548,
                'name' => '006 Neon Brick Cocktail',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:13:31',
            ),
            65 => 
            array (
                'id' => 549,
                'name' => '006 Neon Bond Cocktail',
                'description' => 'neon, backdrops, wall, wood, brick',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:13:58',
            ),
            66 => 
            array (
                'id' => 550,
                'name' => '006 Neon Wood Circle',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:14:23',
            ),
            67 => 
            array (
                'id' => 551,
                'name' => '006 Neon Brick Circle',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:14:48',
            ),
            68 => 
            array (
                'id' => 552,
                'name' => '006 Neon Bond Circle',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:15:18',
            ),
            69 => 
            array (
                'id' => 553,
                'name' => '006 Neon Wood Club',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:15:36',
            ),
            70 => 
            array (
                'id' => 554,
                'name' => '006 Neon Brick Club',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:16:01',
            ),
            71 => 
            array (
                'id' => 555,
                'name' => '006 Neon Bond Club',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:16:23',
            ),
            72 => 
            array (
                'id' => 556,
                'name' => '006 Neon Wood Welcome',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:16:48',
            ),
            73 => 
            array (
                'id' => 557,
                'name' => '006 Neon Brick Welcome',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:17:17',
            ),
            74 => 
            array (
                'id' => 558,
                'name' => '006 Neon Bond Welcome',
                'description' => 'Neon sign camera move scene 06',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:17:44',
            ),
            75 => 
            array (
                'id' => 559,
                'name' => '008 Neon Wood Vegas',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:49:13',
            ),
            76 => 
            array (
                'id' => 560,
                'name' => '008 Neon Brick Vegas',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:50:04',
            ),
            77 => 
            array (
                'id' => 561,
                'name' => '008 Neon Bond Vegas',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:50:26',
            ),
            78 => 
            array (
                'id' => 562,
                'name' => '008 Neon Wood Cocktail',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:50:54',
            ),
            79 => 
            array (
                'id' => 563,
                'name' => '008 Neon Brick Cocktail',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:51:18',
            ),
            80 => 
            array (
                'id' => 564,
                'name' => '008 Neon Bond Cocktail',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:51:41',
            ),
            81 => 
            array (
                'id' => 565,
                'name' => '008 Neon Wood Circle',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:52:02',
            ),
            82 => 
            array (
                'id' => 566,
                'name' => '008 Neon Brick Circle',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:52:25',
            ),
            83 => 
            array (
                'id' => 567,
                'name' => '008 Neon Bond Circle',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:52:45',
            ),
            84 => 
            array (
                'id' => 568,
                'name' => '008 Neon Wood Club',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:53:16',
            ),
            85 => 
            array (
                'id' => 569,
                'name' => '008 Neon Brick Club',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:53:58',
            ),
            86 => 
            array (
                'id' => 570,
                'name' => '008 Neon Bond Club',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:54:16',
            ),
            87 => 
            array (
                'id' => 571,
                'name' => '008 Neon Wood Welcome',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:54:36',
            ),
            88 => 
            array (
                'id' => 572,
                'name' => '008 Neon Brick Welcome',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:54:54',
            ),
            89 => 
            array (
                'id' => 573,
                'name' => '008 Neon Bond Welcome',
                'description' => 'Neon sign camera move scene 08',
                'created_at' => '2019-03-07 00:00:00',
                'updated_at' => '2020-07-17 17:55:16',
            ),
            90 => 
            array (
                'id' => 574,
                'name' => '009 Neon Wood Vegas',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:09:09',
            ),
            91 => 
            array (
                'id' => 575,
                'name' => '009 Neon Brick Vegas',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:09:43',
            ),
            92 => 
            array (
                'id' => 576,
                'name' => '009 Neon Bond Vegas',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:10:26',
            ),
            93 => 
            array (
                'id' => 577,
                'name' => '009 Neon Wood Cocktail',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:10:50',
            ),
            94 => 
            array (
                'id' => 578,
                'name' => '009 Neon Brick Cocktail',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:11:07',
            ),
            95 => 
            array (
                'id' => 579,
                'name' => '009 Neon Bond Cocktail',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:11:26',
            ),
            96 => 
            array (
                'id' => 580,
                'name' => '009 Neon Wood Circle',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:11:48',
            ),
            97 => 
            array (
                'id' => 581,
                'name' => '009 Neon Brick Circle',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:12:07',
            ),
            98 => 
            array (
                'id' => 582,
                'name' => '009 Neon Bond Circle',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:12:25',
            ),
            99 => 
            array (
                'id' => 583,
                'name' => '009 Neon Wood Club',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:12:47',
            ),
            100 => 
            array (
                'id' => 584,
                'name' => '009 Neon Brick Club',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:13:10',
            ),
            101 => 
            array (
                'id' => 585,
                'name' => '009 Neon Bond Club',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:13:29',
            ),
            102 => 
            array (
                'id' => 586,
                'name' => '009 Neon Wood Welcome',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:13:58',
            ),
            103 => 
            array (
                'id' => 587,
                'name' => '009 Neon Brick Welcome',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:14:26',
            ),
            104 => 
            array (
                'id' => 588,
                'name' => '009 Neon Bond Welcome',
                'description' => 'Neon sign camera move scene 09',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:14:50',
            ),
            105 => 
            array (
                'id' => 589,
                'name' => '010 Neon Wood Vegas',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:33:16',
            ),
            106 => 
            array (
                'id' => 590,
                'name' => '010 Neon Brick Vegas',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:33:36',
            ),
            107 => 
            array (
                'id' => 591,
                'name' => '010 Neon Bond Vegas',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:33:57',
            ),
            108 => 
            array (
                'id' => 592,
                'name' => '010 Neon Wood Cocktail',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:34:18',
            ),
            109 => 
            array (
                'id' => 593,
                'name' => '010 Neon Brick Cocktail',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:34:44',
            ),
            110 => 
            array (
                'id' => 594,
                'name' => '010 Neon Bond Cocktail',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:35:04',
            ),
            111 => 
            array (
                'id' => 595,
                'name' => '010 Neon Wood Circle',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:35:35',
            ),
            112 => 
            array (
                'id' => 596,
                'name' => '010 Neon Brick Circle',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:35:59',
            ),
            113 => 
            array (
                'id' => 597,
                'name' => '010 Neon Bond Circle',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:36:18',
            ),
            114 => 
            array (
                'id' => 598,
                'name' => '010 Neon Wood Club',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:36:40',
            ),
            115 => 
            array (
                'id' => 599,
                'name' => '010 Neon Brick Club',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:37:00',
            ),
            116 => 
            array (
                'id' => 600,
                'name' => '010 Neon Bond Club',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:37:26',
            ),
            117 => 
            array (
                'id' => 601,
                'name' => '010 Neon Wood Welcome',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:37:44',
            ),
            118 => 
            array (
                'id' => 602,
                'name' => '010 Neon Brick Welcome',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:38:09',
            ),
            119 => 
            array (
                'id' => 603,
                'name' => '010 Neon Bond Welcome',
                'description' => 'Neon sign camera move scene 010',
                'created_at' => '2019-03-08 00:00:00',
                'updated_at' => '2020-07-17 20:38:29',
            ),
            120 => 
            array (
                'id' => 658,
                'name' => '001 Chicago',
                'description' => 'Live motion, Camera Pan titles',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-23 19:26:36',
            ),
            121 => 
            array (
                'id' => 659,
                'name' => '002 NYC TimeSquare',
                'description' => 'Camera pan with wall sign titles in NYC TimeSquare',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:16:06',
            ),
            122 => 
            array (
                'id' => 660,
                'name' => '022 Attractive woman holding the sign',
                'description' => 'Attractive woman pointing at the sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:38:35',
            ),
            123 => 
            array (
                'id' => 661,
                'name' => '023 Attractive woman holding the sign',
                'description' => 'Attractive  smiling woman holding the sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:36:06',
            ),
            124 => 
            array (
                'id' => 662,
                'name' => '031 Cheering Team',
                'description' => 'Cheering Congratulations  Team',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:25:08',
            ),
            125 => 
            array (
                'id' => 663,
                'name' => '032 Cheering Team',
                'description' => 'Happy Cheering Team Congrats',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:23:56',
            ),
            126 => 
            array (
                'id' => 664,
                'name' => '024 Man with a broken car holding the sign',
                'description' => 'Man with a broken car holding the sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:34:34',
            ),
            127 => 
            array (
                'id' => 665,
                'name' => '003 Welcome Sign',
                'description' => 'Hanging Welcome Sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:14:14',
            ),
            128 => 
            array (
                'id' => 666,
                'name' => '007 Restaurant table sign',
                'description' => 'Restaurant table sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:06:33',
            ),
            129 => 
            array (
                'id' => 667,
                'name' => '008 Woman holding Card',
                'description' => 'Woman holding Card',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:04:53',
            ),
            130 => 
            array (
                'id' => 668,
                'name' => '009 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman holding the sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:01:43',
            ),
            131 => 
            array (
                'id' => 669,
                'name' => '010 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman holding two text sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:59:56',
            ),
            132 => 
            array (
                'id' => 670,
                'name' => '011 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman holding two text sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:58:38',
            ),
            133 => 
            array (
                'id' => 671,
                'name' => '012 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman pop up with the sign sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:57:09',
            ),
            134 => 
            array (
                'id' => 672,
                'name' => '004 Woman Logo',
                'description' => 'Beautiful woman holding the logo',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:12:23',
            ),
            135 => 
            array (
                'id' => 673,
                'name' => '005 Happy Attractive woman phone',
                'description' => 'Happy Attractive woman holding the phone, place your logo,  place your image',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 10:10:22',
            ),
            136 => 
            array (
                'id' => 674,
                'name' => '013 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman holding a text  sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:54:45',
            ),
            137 => 
            array (
                'id' => 675,
                'name' => '014 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman holding text sign',
                'created_at' => '2019-11-10 00:00:00',
                'updated_at' => '2020-07-17 09:52:30',
            ),
            138 => 
            array (
                'id' => 676,
                'name' => '015 Happy Attractive woman sign',
                'description' => 'Happy Attractive woman holding text sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:51:05',
            ),
            139 => 
            array (
                'id' => 677,
                'name' => '016 Smiling Attractive woman sign',
                'description' => 'Smiling Attractive woman holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:49:48',
            ),
            140 => 
            array (
                'id' => 678,
                'name' => '017 Smiling Attractive woman sign',
                'description' => 'Smiling Attractive woman holding the sign sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:48:28',
            ),
            141 => 
            array (
                'id' => 679,
                'name' => '018 Smiling Attractive woman sign',
                'description' => 'Smiling Attractive woman holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:46:03',
            ),
            142 => 
            array (
                'id' => 680,
                'name' => '019 Sad woman holding the sign',
                'description' => '019 Sad woman holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:44:30',
            ),
            143 => 
            array (
                'id' => 681,
                'name' => '020 Sad woman holding the sign',
                'description' => 'Sad woman holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:42:53',
            ),
            144 => 
            array (
                'id' => 682,
                'name' => '021 Woman thumbs up holding the sign',
                'description' => 'Young woman thumbs-up holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:41:04',
            ),
            145 => 
            array (
                'id' => 683,
                'name' => '025 Car Sales Man Holding sign',
                'description' => 'Car Sale Man Holding sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:33:09',
            ),
            146 => 
            array (
                'id' => 684,
                'name' => '026 Warehouse Sign',
                'description' => 'Warehouse team holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:32:03',
            ),
            147 => 
            array (
                'id' => 685,
                'name' => '027 Employee holding the sign',
                'description' => 'An employee holding the sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:30:47',
            ),
            148 => 
            array (
                'id' => 686,
                'name' => '028 Woman Warehouse',
                'description' => 'Woman holding the sign in the warehouse',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:29:21',
            ),
            149 => 
            array (
                'id' => 687,
                'name' => '029 Green energy sign',
                'description' => 'Team of employees holding green energy sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:28:15',
            ),
            150 => 
            array (
                'id' => 688,
                'name' => '030 Green energy sign',
                'description' => 'The corporate team holding the green energy sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:26:18',
            ),
            151 => 
            array (
                'id' => 689,
                'name' => '033 Attractive Dancing Woman',
                'description' => 'Attractive Dancing Woman pointing finger at your text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:22:04',
            ),
            152 => 
            array (
                'id' => 690,
                'name' => '034 Attractive Woman presenting text',
                'description' => 'Attractive Woman presenting text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:20:52',
            ),
            153 => 
            array (
                'id' => 691,
                'name' => '035 Smiling man presenting text',
                'description' => 'The smiling man presenting text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:17:06',
            ),
            154 => 
            array (
                'id' => 692,
                'name' => '036 Smiling man presenting text',
                'description' => 'The smiling man presenting text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:15:21',
            ),
            155 => 
            array (
                'id' => 693,
                'name' => '037 Smiling woman presenting text',
                'description' => 'Smiling woman presenting text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:12:18',
            ),
            156 => 
            array (
                'id' => 694,
                'name' => '038 Smiling woman presenting text',
                'description' => 'Smiling woman presenting text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:07:58',
            ),
            157 => 
            array (
                'id' => 695,
                'name' => '039 Smiling woman presenting text',
                'description' => 'Smiling woman presenting text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:05:45',
            ),
            158 => 
            array (
                'id' => 696,
                'name' => '040 Female Kid and her mom thumbs up',
                'description' => 'Female Kid and her mom thumbs up',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:35:44',
            ),
            159 => 
            array (
                'id' => 697,
                'name' => '041 Business woman touchscreen',
                'description' => 'Businesswoman touchscreen',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:33:09',
            ),
            160 => 
            array (
                'id' => 698,
                'name' => '042 Businesswoman image touchscreen',
                'description' => 'Businesswoman image touchscreen',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:31:30',
            ),
            161 => 
            array (
                'id' => 699,
                'name' => '043 Sand text reveal',
                'description' => 'Sand text reveal',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:29:24',
            ),
            162 => 
            array (
                'id' => 700,
                'name' => '044 Sand Logo reveal',
                'description' => 'Sand Logo reveal',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:27:47',
            ),
            163 => 
            array (
                'id' => 701,
                'name' => '045 Welcome sign',
                'description' => 'Welcome sign',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:25:26',
            ),
            164 => 
            array (
                'id' => 702,
                'name' => '046 Fruits & text',
                'description' => 'Fruits & text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:24:12',
            ),
            165 => 
            array (
                'id' => 703,
                'name' => '047 Brick Wall',
                'description' => 'Brick house',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:23:00',
            ),
            166 => 
            array (
                'id' => 704,
                'name' => '048 Truck text',
                'description' => 'Truck driving',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:21:10',
            ),
            167 => 
            array (
                'id' => 705,
                'name' => '049 Romantic',
                'description' => 'Rotating romantic text',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:19:40',
            ),
            168 => 
            array (
                'id' => 706,
                'name' => '050 Cocktail Holiday',
                'description' => 'Cocktail Holiday',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 09:02:51',
            ),
            169 => 
            array (
                'id' => 707,
                'name' => '006 Phone Track',
                'description' => 'Phone camera track',
                'created_at' => '2019-11-11 00:00:00',
                'updated_at' => '2020-07-17 10:08:43',
            ),
            170 => 
            array (
                'id' => 708,
                'name' => 'Christmas Party',
                'description' => 'Chrismas, Party',
                'created_at' => '2019-12-18 00:00:00',
                'updated_at' => '2020-07-17 07:03:37',
            ),
            171 => 
            array (
                'id' => 710,
                'name' => 'Christmas Sale',
                'description' => 'Christmas Sale Commercial',
                'created_at' => '2019-12-19 00:00:00',
                'updated_at' => '2020-07-30 08:59:56',
            ),
            172 => 
            array (
                'id' => 711,
                'name' => 'Social Media Agency Red',
                'description' => 'Social Media',
                'created_at' => '2020-02-18 00:00:00',
                'updated_at' => '2020-07-17 06:58:35',
            ),
            173 => 
            array (
                'id' => 712,
                'name' => 'Social Media Agency Purple',
                'description' => 'Social Media Agency',
                'created_at' => '2020-02-18 00:00:00',
                'updated_at' => '2020-07-17 08:02:11',
            ),
            174 => 
            array (
                'id' => 713,
                'name' => 'Social Media Agency Green',
                'description' => 'Social Media Agency',
                'created_at' => '2020-02-18 00:00:00',
                'updated_at' => '2020-07-17 08:03:29',
            ),
            175 => 
            array (
                'id' => 714,
                'name' => 'Social Media Agency 02 Blue',
                'description' => 'Social Media',
                'created_at' => '2020-02-19 00:00:00',
                'updated_at' => '2020-07-17 06:50:46',
            ),
            176 => 
            array (
                'id' => 715,
                'name' => 'Social Media Agency 02 Turquoise',
                'description' => 'Social Media Agency 02 Turquoise',
                'created_at' => '2020-02-19 00:00:00',
                'updated_at' => '2020-07-17 06:50:22',
            ),
            177 => 
            array (
                'id' => 716,
                'name' => 'Social Media Agency 02 Orange',
                'description' => 'Social Media Agency',
                'created_at' => '2020-02-19 00:00:00',
                'updated_at' => '2020-07-17 06:47:41',
            ),
            178 => 
            array (
                'id' => 717,
                'name' => 'Video Agency',
                'description' => 'Video Agency, online marketing',
                'created_at' => '2020-02-20 00:00:00',
                'updated_at' => '2020-07-16 21:34:06',
            ),
            179 => 
            array (
                'id' => 718,
                'name' => 'Realtor',
                'description' => 'Realtor',
                'created_at' => '2020-02-21 00:00:00',
                'updated_at' => '2020-07-17 07:21:58',
            ),
            180 => 
            array (
                'id' => 720,
                'name' => 'Spa & Wellness',
                'description' => 'Spa, Wellness, Pictures',
                'created_at' => '2020-02-23 00:00:00',
                'updated_at' => '2020-07-17 08:13:21',
            ),
            181 => 
            array (
                'id' => 721,
                'name' => 'E-Commerce',
                'description' => 'E-Commerce Explainer',
                'created_at' => '2020-02-28 00:00:00',
                'updated_at' => '2020-07-17 07:26:57',
            ),
            182 => 
            array (
                'id' => 722,
                'name' => 'Solar Energy',
                'description' => 'Solar energy intro',
                'created_at' => '2020-03-03 00:00:00',
                'updated_at' => '2020-07-16 21:28:24',
            ),
            183 => 
            array (
                'id' => 723,
                'name' => 'Online Shop',
                'description' => 'Products sale commercial for online shop',
                'created_at' => '2020-03-18 00:00:00',
                'updated_at' => '2020-07-16 21:25:47',
            ),
            184 => 
            array (
                'id' => 724,
                'name' => 'Restaurant Display',
                'description' => 'Camera fly-through products and prices',
                'created_at' => '2020-03-23 00:00:00',
                'updated_at' => '2020-07-17 08:35:19',
            ),
            185 => 
            array (
                'id' => 725,
                'name' => 'Online Store And Delivery with Boxes',
                'description' => 'Online Store and delivery',
                'created_at' => '2020-04-02 00:00:00',
                'updated_at' => '2020-07-16 21:18:42',
            ),
            186 => 
            array (
                'id' => 726,
                'name' => 'Online Store And Delivery  With Bags',
                'description' => 'online store and delivery',
                'created_at' => '2020-04-02 00:00:00',
                'updated_at' => '2020-07-16 21:20:23',
            ),
            187 => 
            array (
                'id' => 727,
                'name' => 'nnnnnnnnnnn',
                'description' => 'sdadsa',
                'created_at' => '2020-04-30 00:00:00',
                'updated_at' => '2020-07-17 08:58:11',
            ),
            188 => 
            array (
                'id' => 728,
                'name' => 'Test',
                'description' => 'Some Desc',
                'created_at' => '2020-05-04 00:00:00',
                'updated_at' => '2020-07-17 08:57:36',
            ),
            189 => 
            array (
                'id' => 730,
                'name' => 'Super Sale',
                'description' => 'Super Sale Banner',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-17 08:45:23',
            ),
            190 => 
            array (
                'id' => 731,
                'name' => 'Summer Sale',
                'description' => 'Summer Sale Banner',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-17 08:38:40',
            ),
            191 => 
            array (
                'id' => 732,
                'name' => 'Pest Control Visit',
                'description' => 'ant walks through a Facebook post',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 21:01:44',
            ),
            192 => 
            array (
                'id' => 733,
                'name' => 'Service Product e-Shop Promotion',
                'description' => 'Service Product e-Shop Promotion',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:59:09',
            ),
            193 => 
            array (
                'id' => 734,
                'name' => 'Dropper Bottle Pharma',
                'description' => 'Pharmaceutical Dropper Bottle',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:56:07',
            ),
            194 => 
            array (
                'id' => 735,
                'name' => 'The best for your business',
                'description' => 'Company quote and What is best for your business',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 21:11:29',
            ),
            195 => 
            array (
                'id' => 736,
                'name' => 'Instagram Promo',
                'description' => 'Instagram Xmas Product Promo',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:53:53',
            ),
            196 => 
            array (
                'id' => 737,
                'name' => 'Hemp Oil Dropper bottle mockup',
                'description' => 'Dropper bottle mockup with ingredients',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:50:59',
            ),
            197 => 
            array (
                'id' => 738,
                'name' => 'Cream Company Promo',
                'description' => 'Cream jar mockup',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:49:28',
            ),
            198 => 
            array (
                'id' => 739,
                'name' => 'Auto repair ad',
                'description' => 'Car repair commercial',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:47:02',
            ),
            199 => 
            array (
                'id' => 740,
                'name' => 'Magazine Promo CTA',
                'description' => 'Magazine and E-reader mockup, Call to action message',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:44:29',
            ),
            200 => 
            array (
                'id' => 741,
                'name' => 'Car Insurance FB ad',
                'description' => 'Car Insurance',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:42:16',
            ),
            201 => 
            array (
                'id' => 742,
                'name' => 'YouTube Intro',
                'description' => 'Stormy Epic Logo name reveal',
                'created_at' => '2020-05-19 00:00:00',
                'updated_at' => '2020-07-16 20:40:15',
            ),
            202 => 
            array (
                'id' => 743,
                'name' => 'Dental Discount InstaStory',
                'description' => 'Dental InstaStory Discount',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:38:42',
            ),
            203 => 
            array (
                'id' => 744,
                'name' => 'Taxi Service InstaStory',
                'description' => 'Taxi Service',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:36:59',
            ),
            204 => 
            array (
                'id' => 745,
                'name' => 'Architect InstaStory',
                'description' => 'Architect',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:35:47',
            ),
            205 => 
            array (
                'id' => 746,
                'name' => 'Unique Instagram story ad',
                'description' => 'A unique Instagram story ad',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:33:42',
            ),
            206 => 
            array (
                'id' => 747,
                'name' => 'Quiz promo',
                'description' => 'quiz promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:31:50',
            ),
            207 => 
            array (
                'id' => 748,
                'name' => 'Real Estate Story Promo',
                'description' => 'real estate promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:27:32',
            ),
            208 => 
            array (
                'id' => 750,
                'name' => 'Lead Magnet Story Promo',
                'description' => 'Lead Magnet Story Promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:14:04',
            ),
            209 => 
            array (
                'id' => 751,
                'name' => 'Question Story Promo',
                'description' => 'Question Story Promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:12:35',
            ),
            210 => 
            array (
                'id' => 752,
                'name' => 'Quiz Promo 2',
                'description' => 'Poll',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:11:11',
            ),
            211 => 
            array (
                'id' => 753,
                'name' => 'Attorney story Promo',
                'description' => 'Attorney story Promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:09:33',
            ),
            212 => 
            array (
                'id' => 754,
                'name' => 'Restaurant Story Promo 2',
                'description' => 'Restaurant Story Promo 2',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:07:56',
            ),
            213 => 
            array (
                'id' => 755,
                'name' => 'Yoga Studio Story Promo',
                'description' => 'Yoga Studio Story Promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:06:06',
            ),
            214 => 
            array (
                'id' => 756,
                'name' => 'Story promo for youtubers',
                'description' => 'Story promo for youtubers',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:04:14',
            ),
            215 => 
            array (
                'id' => 757,
                'name' => 'E-COM Video Ad Promo',
                'description' => 'E-COM Video Ad Promo',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 20:01:51',
            ),
            216 => 
            array (
                'id' => 758,
                'name' => 'Sports Promo 01',
                'description' => 'Sports Promo 01',
                'created_at' => '2020-05-20 00:00:00',
                'updated_at' => '2020-07-16 19:54:58',
            ),
            217 => 
            array (
                'id' => 759,
                'name' => 'Sports Promo 02',
                'description' => 'Fitness trainer promo',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:52:52',
            ),
            218 => 
            array (
                'id' => 760,
                'name' => 'Sports Promo 03',
                'description' => 'Basketball quote',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:59:20',
            ),
            219 => 
            array (
                'id' => 762,
                'name' => 'Sports Promo 04',
                'description' => 'fitness',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:42:25',
            ),
            220 => 
            array (
                'id' => 764,
                'name' => 'Sports Promo 05',
                'description' => 'fitness',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:40:37',
            ),
            221 => 
            array (
                'id' => 767,
                'name' => 'Sports Promo 06',
                'description' => 'fight night promo',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:38:10',
            ),
            222 => 
            array (
                'id' => 768,
                'name' => 'Sports Promo 07',
                'description' => 'Sports Promo 07',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:36:02',
            ),
            223 => 
            array (
                'id' => 769,
                'name' => 'Sports Promo 08',
                'description' => 'fitness',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:34:32',
            ),
            224 => 
            array (
                'id' => 774,
                'name' => 'Sports Promo 09',
                'description' => 'NFL FOOTBALL PROMO',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:57:22',
            ),
            225 => 
            array (
                'id' => 776,
                'name' => 'Sports Promo 010',
                'description' => 'tennis',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 19:27:53',
            ),
            226 => 
            array (
                'id' => 778,
                'name' => 'Happy Birthday Promo 01',
                'description' => 'Birthday slides',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:37:24',
            ),
            227 => 
            array (
                'id' => 779,
                'name' => 'Happy Birthday Promo 02',
                'description' => 'birthday promo Boy',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:35:20',
            ),
            228 => 
            array (
                'id' => 781,
                'name' => 'Happy Birthday Promo 03 Girl',
                'description' => 'Happy birthday Girl',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:32:46',
            ),
            229 => 
            array (
                'id' => 782,
                'name' => 'Happy Birthday Promo 03 Boy',
                'description' => 'Happy birthday boy',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:32:15',
            ),
            230 => 
            array (
                'id' => 784,
                'name' => 'Portfolio Promo Female',
                'description' => 'text portfolio with 5 pictures',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:28:13',
            ),
            231 => 
            array (
                'id' => 786,
                'name' => 'Portfolio Promo Male',
                'description' => 'Portfolio male promo showing skills and portfolio images',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:27:21',
            ),
            232 => 
            array (
                'id' => 787,
                'name' => 'Testimonial Style Promo',
                'description' => 'Instagram Company post. A couple of positive comments and likes.',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-17 08:54:15',
            ),
            233 => 
            array (
                'id' => 789,
                'name' => 'UGC Promo 02',
                'description' => 'Instagram post add with preview grid',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:23:33',
            ),
            234 => 
            array (
                'id' => 790,
                'name' => 'UGC Promo 03',
                'description' => 'Instagram Company Story with preview images',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:21:12',
            ),
            235 => 
            array (
                'id' => 792,
            'name' => 'Unique e-com Promo Landscape (16:9)',
                'description' => 'Unique commerce promo with the product, price, and logo Placement',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:18:52',
            ),
            236 => 
            array (
                'id' => 793,
            'name' => 'Unique e-com Promo Square (1:1)',
                'description' => 'Unique commerce promo with the product, price, and logo placement',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:15:02',
            ),
            237 => 
            array (
                'id' => 796,
            'name' => 'Unique e-com Promo Vertical (9:16)',
                'description' => 'Unique commerce promo with the product, price, and logo placement',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:10:49',
            ),
            238 => 
            array (
                'id' => 797,
                'name' => 'Life insurance banner',
                'description' => 'life insurance company banner',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 17:00:08',
            ),
            239 => 
            array (
                'id' => 799,
                'name' => 'Life insurance Phone',
                'description' => 'Family Life insurance ad',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:59:36',
            ),
            240 => 
            array (
                'id' => 801,
                'name' => 'Emotional 3d Animation Video',
                'description' => 'Emotional 3d Animation Video',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:47:26',
            ),
            241 => 
            array (
                'id' => 804,
                'name' => 'Unique E-com 01',
                'description' => 'Unique E-com promo',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:42:33',
            ),
            242 => 
            array (
                'id' => 807,
                'name' => 'Unique E-com 02',
                'description' => 'Unique E-com 02',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:42:02',
            ),
            243 => 
            array (
                'id' => 808,
                'name' => 'Unique E-com 03',
                'description' => 'Unique E-com 03',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:41:14',
            ),
            244 => 
            array (
                'id' => 810,
                'name' => 'Unique E-com 04',
                'description' => 'Unique E-com 04',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:40:21',
            ),
            245 => 
            array (
                'id' => 812,
                'name' => 'Unique E-com 05',
                'description' => 'Unique E-com 05',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:39:37',
            ),
            246 => 
            array (
                'id' => 814,
                'name' => 'Unique E-com 06',
                'description' => 'Unique E-com 06',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:31:51',
            ),
            247 => 
            array (
                'id' => 815,
                'name' => 'Unique E-com 07',
                'description' => 'Unique E-com 07',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:29:45',
            ),
            248 => 
            array (
                'id' => 817,
                'name' => 'Unique E-com 08',
                'description' => 'Unique E-com 08',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:27:25',
            ),
            249 => 
            array (
                'id' => 818,
                'name' => 'Unique E-com 09',
                'description' => 'Unique E-com 09',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:26:39',
            ),
            250 => 
            array (
                'id' => 820,
                'name' => 'Unique E-com 10',
                'description' => 'Unique E-com 10',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:25:55',
            ),
            251 => 
            array (
                'id' => 821,
                'name' => 'Unique E-com 11',
                'description' => 'Unique E-com 11',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:25:13',
            ),
            252 => 
            array (
                'id' => 823,
                'name' => 'Unique E-com 12',
                'description' => 'Unique E-com 12',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:24:23',
            ),
            253 => 
            array (
                'id' => 824,
                'name' => 'Unique E-com 13',
                'description' => 'Unique E-com 13',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:23:43',
            ),
            254 => 
            array (
                'id' => 826,
                'name' => 'Unique E-com 14',
                'description' => 'Unique E-com 14',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:23:02',
            ),
            255 => 
            array (
                'id' => 827,
                'name' => 'Unique E-com 15',
                'description' => 'Unique E-com 15',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:21:30',
            ),
            256 => 
            array (
                'id' => 828,
                'name' => 'Unique E-com 16',
                'description' => 'Unique E-com 16',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:20:47',
            ),
            257 => 
            array (
                'id' => 830,
                'name' => 'Unique E-com 17',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:09:09',
            ),
            258 => 
            array (
                'id' => 832,
                'name' => 'Unique E-com 18',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:16:16',
            ),
            259 => 
            array (
                'id' => 833,
                'name' => 'Unique E-com 19',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:15:38',
            ),
            260 => 
            array (
                'id' => 835,
                'name' => 'Unique E-com 20',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:14:56',
            ),
            261 => 
            array (
                'id' => 836,
                'name' => 'Unique E-com 21',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:14:20',
            ),
            262 => 
            array (
                'id' => 837,
                'name' => 'Unique E-com 22',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:13:44',
            ),
            263 => 
            array (
                'id' => 838,
                'name' => 'Unique E-com 23',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:13:05',
            ),
            264 => 
            array (
                'id' => 839,
                'name' => 'Unique E-com 24',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:12:27',
            ),
            265 => 
            array (
                'id' => 840,
                'name' => 'Unique E-com 25',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:11:55',
            ),
            266 => 
            array (
                'id' => 841,
                'name' => 'Unique E-com 26',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:10:52',
            ),
            267 => 
            array (
                'id' => 842,
                'name' => 'Unique E-com 27',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:10:16',
            ),
            268 => 
            array (
                'id' => 843,
                'name' => 'Unique E-com 28',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:09:39',
            ),
            269 => 
            array (
                'id' => 844,
                'name' => 'Unique E-com 29',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:08:46',
            ),
            270 => 
            array (
                'id' => 845,
                'name' => 'Unique E-com 30',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:08:14',
            ),
            271 => 
            array (
                'id' => 846,
                'name' => 'Unique E-com 31',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:07:38',
            ),
            272 => 
            array (
                'id' => 848,
                'name' => 'Unique E-com 32',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:07:02',
            ),
            273 => 
            array (
                'id' => 849,
                'name' => 'Unique E-com 33',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:06:15',
            ),
            274 => 
            array (
                'id' => 851,
                'name' => 'Unique E-com 34',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:04:37',
            ),
            275 => 
            array (
                'id' => 852,
                'name' => 'Unique E-com 35',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 13:02:59',
            ),
            276 => 
            array (
                'id' => 853,
                'name' => 'Unique E-com 36',
                'description' => 'Unique e-commerce one product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 16:09:55',
            ),
            277 => 
            array (
                'id' => 854,
                'name' => 'Supplement E-com 01',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:08:21',
            ),
            278 => 
            array (
                'id' => 855,
                'name' => 'Supplement E-com 02',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:01:20',
            ),
            279 => 
            array (
                'id' => 856,
                'name' => 'Supplement E-com 03',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:00:52',
            ),
            280 => 
            array (
                'id' => 857,
                'name' => 'Supplement E-com 04',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:00:22',
            ),
            281 => 
            array (
                'id' => 858,
                'name' => 'Supplement E-com 05',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:59:54',
            ),
            282 => 
            array (
                'id' => 859,
                'name' => 'Supplement E-com 06',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:58:46',
            ),
            283 => 
            array (
                'id' => 860,
                'name' => 'Supplement E-com 07',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:58:14',
            ),
            284 => 
            array (
                'id' => 861,
                'name' => 'Supplement E-com 08',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:56:05',
            ),
            285 => 
            array (
                'id' => 862,
                'name' => 'Supplement E-com 09',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:55:36',
            ),
            286 => 
            array (
                'id' => 863,
                'name' => 'Supplement E-com 010',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:54:35',
            ),
            287 => 
            array (
                'id' => 864,
                'name' => 'Supplement E-com 011',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:53:50',
            ),
            288 => 
            array (
                'id' => 865,
                'name' => 'Supplement E-com 012',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:05:54',
            ),
            289 => 
            array (
                'id' => 866,
                'name' => 'Supplement E-com 013',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:52:18',
            ),
            290 => 
            array (
                'id' => 867,
                'name' => 'Supplement E-com 014',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:06:29',
            ),
            291 => 
            array (
                'id' => 868,
                'name' => 'Supplement E-com 015',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:50:40',
            ),
            292 => 
            array (
                'id' => 869,
                'name' => 'Supplement E-com 016',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:05:20',
            ),
            293 => 
            array (
                'id' => 870,
                'name' => 'Supplement E-com 017',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:49:34',
            ),
            294 => 
            array (
                'id' => 871,
                'name' => 'Supplement E-com 018',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 10:48:41',
            ),
            295 => 
            array (
                'id' => 872,
                'name' => 'Supplement E-com 019',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:04:46',
            ),
            296 => 
            array (
                'id' => 873,
                'name' => 'Supplement E-com 020',
                'description' => 'Supplement e-commerce product placement with price',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 11:09:26',
            ),
            297 => 
            array (
                'id' => 874,
                'name' => 'Scroll Stopping Promo',
                'description' => 'Web Magician reveals web site',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 08:44:35',
            ),
            298 => 
            array (
                'id' => 875,
                'name' => 'Big Sale Promo',
                'description' => 'Big Sale promo with the product showcase',
                'created_at' => '2020-05-21 00:00:00',
                'updated_at' => '2020-07-16 08:42:24',
            ),
            299 => 
            array (
                'id' => 880,
                'name' => 'PROMO_01_16:9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-24 00:00:00',
                'updated_at' => '2020-07-16 07:42:45',
            ),
            300 => 
            array (
                'id' => 881,
                'name' => 'PROMO_02_16:9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-24 00:00:00',
                'updated_at' => '2020-07-16 07:40:56',
            ),
            301 => 
            array (
                'id' => 882,
                'name' => 'PROMO_03_16:9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-24 00:00:00',
                'updated_at' => '2020-07-16 07:39:33',
            ),
            302 => 
            array (
                'id' => 883,
                'name' => 'PROMO_04_16:9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-24 00:00:00',
                'updated_at' => '2020-07-16 07:38:04',
            ),
            303 => 
            array (
                'id' => 884,
                'name' => 'PROMO_07_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-25 00:00:00',
                'updated_at' => '2020-07-16 07:31:56',
            ),
            304 => 
            array (
                'id' => 885,
                'name' => 'PROMO_05_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-25 00:00:00',
                'updated_at' => '2020-07-16 07:35:27',
            ),
            305 => 
            array (
                'id' => 886,
                'name' => 'PROMO_06_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-25 00:00:00',
                'updated_at' => '2020-07-16 07:33:34',
            ),
            306 => 
            array (
                'id' => 887,
                'name' => 'PROMO_08_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-25 00:00:00',
                'updated_at' => '2020-07-16 07:29:07',
            ),
            307 => 
            array (
                'id' => 888,
                'name' => 'PROMO_09_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-25 00:00:00',
                'updated_at' => '2020-07-16 07:27:31',
            ),
            308 => 
            array (
                'id' => 889,
                'name' => 'PROMO_010_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-25 00:00:00',
                'updated_at' => '2020-07-16 07:25:08',
            ),
            309 => 
            array (
                'id' => 890,
                'name' => 'PROMO_011_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:23:47',
            ),
            310 => 
            array (
                'id' => 891,
                'name' => 'PROMO_012_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:22:19',
            ),
            311 => 
            array (
                'id' => 892,
                'name' => 'PROMO_013_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:20:51',
            ),
            312 => 
            array (
                'id' => 893,
                'name' => 'PROMO_014_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:15:31',
            ),
            313 => 
            array (
                'id' => 894,
                'name' => 'PROMO_015_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:13:52',
            ),
            314 => 
            array (
                'id' => 895,
                'name' => 'PROMO_016_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:11:58',
            ),
            315 => 
            array (
                'id' => 896,
                'name' => 'PROMO_017_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:07:45',
            ),
            316 => 
            array (
                'id' => 897,
                'name' => 'PROMO_018_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:17:52',
            ),
            317 => 
            array (
                'id' => 898,
                'name' => 'PROMO_019_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:04:20',
            ),
            318 => 
            array (
                'id' => 899,
                'name' => 'PROMO_020_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-26 00:00:00',
                'updated_at' => '2020-07-16 07:00:18',
            ),
            319 => 
            array (
                'id' => 900,
                'name' => 'PROMO_021_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 07:02:01',
            ),
            320 => 
            array (
                'id' => 901,
                'name' => 'PROMO_022_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:57:30',
            ),
            321 => 
            array (
                'id' => 902,
                'name' => 'PROMO_023_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:55:52',
            ),
            322 => 
            array (
                'id' => 903,
                'name' => 'PROMO_024_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:53:49',
            ),
            323 => 
            array (
                'id' => 904,
                'name' => 'PROMO_025_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:51:42',
            ),
            324 => 
            array (
                'id' => 905,
                'name' => 'PROMO_026_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:49:58',
            ),
            325 => 
            array (
                'id' => 906,
                'name' => 'PROMO_027_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:46:52',
            ),
            326 => 
            array (
                'id' => 907,
                'name' => 'PROMO_028_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:44:21',
            ),
            327 => 
            array (
                'id' => 908,
                'name' => 'PROMO_029_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:42:11',
            ),
            328 => 
            array (
                'id' => 909,
                'name' => 'PROMO_030_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-27 00:00:00',
                'updated_at' => '2020-07-16 06:40:05',
            ),
            329 => 
            array (
                'id' => 920,
                'name' => 'PROMO_031_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:38:30',
            ),
            330 => 
            array (
                'id' => 921,
                'name' => 'PROMO_032_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:36:53',
            ),
            331 => 
            array (
                'id' => 922,
                'name' => 'PROMO_033_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:33:09',
            ),
            332 => 
            array (
                'id' => 923,
                'name' => 'PROMO_034_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:30:44',
            ),
            333 => 
            array (
                'id' => 924,
                'name' => 'PROMO_035_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:29:08',
            ),
            334 => 
            array (
                'id' => 925,
                'name' => 'PROMO_036_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:26:16',
            ),
            335 => 
            array (
                'id' => 926,
                'name' => 'PROMO_037_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:19:50',
            ),
            336 => 
            array (
                'id' => 927,
                'name' => 'PROMO_038_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:17:55',
            ),
            337 => 
            array (
                'id' => 928,
                'name' => 'PROMO_039_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:23:41',
            ),
            338 => 
            array (
                'id' => 929,
                'name' => 'PROMO_040_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:12:48',
            ),
            339 => 
            array (
                'id' => 930,
                'name' => 'PROMO_041_16_9',
                'description' => 'Social media Sale e-commerce Ad',
                'created_at' => '2020-05-29 00:00:00',
                'updated_at' => '2020-07-16 06:10:53',
            ),
            340 => 
            array (
                'id' => 964,
                'name' => 'Woman Shopping Catwalk',
                'description' => 'Thumb Stopping Woman Shopping Catwalk with Call To Action',
                'created_at' => '2020-06-12 00:00:00',
                'updated_at' => '2020-07-15 09:10:28',
            ),
            341 => 
            array (
                'id' => 965,
                'name' => 'Casual Girl Walk',
                'description' => 'Casual Woman Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:13:08',
            ),
            342 => 
            array (
                'id' => 966,
                'name' => 'Fashion 3d',
                'description' => 'Fashion Woman Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 10:01:18',
            ),
            343 => 
            array (
                'id' => 967,
                'name' => 'Announcement 3d',
                'description' => 'Soldier Announcement on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:59:12',
            ),
            344 => 
            array (
                'id' => 969,
                'name' => 'Happpy Girl 3d',
                'description' => 'Happy girl Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 12:31:20',
            ),
            345 => 
            array (
                'id' => 970,
                'name' => 'Happy 3d',
                'description' => 'A happy guy on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:54:28',
            ),
            346 => 
            array (
                'id' => 972,
                'name' => 'Graduation 3d',
                'description' => 'A graduate walk doing selfie  on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:52:28',
            ),
            347 => 
            array (
                'id' => 974,
                'name' => 'Doctor X Ray 3d',
                'description' => 'Disappointed doctor seeing X-Ray on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-26 19:28:16',
            ),
            348 => 
            array (
                'id' => 977,
                'name' => 'X Ray 3d',
                'description' => 'Doctor Walking holding X-ray on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:43:30',
            ),
            349 => 
            array (
                'id' => 980,
                'name' => 'Business Promotion',
                'description' => 'Businessman Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:40:20',
            ),
            350 => 
            array (
                'id' => 981,
                'name' => 'Summer Sale Tap',
                'description' => 'Hand tap on a sale banner with a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:36:21',
            ),
            351 => 
            array (
                'id' => 982,
                'name' => 'Super Summer Sale',
                'description' => 'Woman Walking, sale banner with a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:33:51',
            ),
            352 => 
            array (
                'id' => 983,
                'name' => 'City 3d',
                'description' => 'Casual people Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:30:27',
            ),
            353 => 
            array (
                'id' => 984,
                'name' => 'Arabian 3d',
                'description' => 'Sheikh Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:28:13',
            ),
            354 => 
            array (
                'id' => 985,
                'name' => 'Startup 3d',
                'description' => 'Businessman Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:26:29',
            ),
            355 => 
            array (
                'id' => 986,
                'name' => 'Valentine 3d',
                'description' => 'A casual guy with ukulele Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:24:38',
            ),
            356 => 
            array (
                'id' => 987,
                'name' => 'Good News 3d',
                'description' => 'Pregnant Woman Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:22:43',
            ),
            357 => 
            array (
                'id' => 988,
                'name' => 'Dog 3d',
                'description' => 'A dog passing by on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:18:49',
            ),
            358 => 
            array (
                'id' => 989,
                'name' => 'VR Lady',
                'description' => 'VR Lady Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-14 00:00:00',
                'updated_at' => '2020-07-15 09:16:09',
            ),
            359 => 
            array (
                'id' => 990,
                'name' => 'VR Guy',
                'description' => 'VR Guy Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 09:07:50',
            ),
            360 => 
            array (
                'id' => 991,
                'name' => 'Spot check Guy',
                'description' => 'Spot check Guy Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:58:21',
            ),
            361 => 
            array (
                'id' => 992,
                'name' => 'Selfie Guy',
                'description' => 'Selfie Guy Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:54:04',
            ),
            362 => 
            array (
                'id' => 993,
                'name' => 'Horse 3d',
                'description' => '3d Horse Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:50:56',
            ),
            363 => 
            array (
                'id' => 994,
                'name' => 'Soldier 3d',
                'description' => 'Soldier 3d Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:48:26',
            ),
            364 => 
            array (
                'id' => 995,
                'name' => 'Paining Guy',
                'description' => 'Paining Guy Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:43:45',
            ),
            365 => 
            array (
                'id' => 996,
                'name' => 'Contractor',
                'description' => 'Contractor Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:37:43',
            ),
            366 => 
            array (
                'id' => 997,
                'name' => 'Doctor',
                'description' => 'Doctor Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:28:55',
            ),
            367 => 
            array (
                'id' => 998,
                'name' => 'Coffee Guy',
                'description' => 'Coffee Guy Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:21:01',
            ),
            368 => 
            array (
                'id' => 999,
                'name' => 'Winning Businessman',
                'description' => 'Winning Businessman Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 08:16:49',
            ),
            369 => 
            array (
                'id' => 1000,
                'name' => 'Fathers Day 3 Products V',
                'description' => 'Story Product Promo showing three products',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 18:24:24',
            ),
            370 => 
            array (
                'id' => 1001,
                'name' => 'Fathers Day 2 Products V',
                'description' => 'Story Promo showing two products',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 18:21:56',
            ),
            371 => 
            array (
                'id' => 1002,
                'name' => 'Fathers Day 3 Products S',
                'description' => 'Square Product Promo showing three products',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 18:20:07',
            ),
            372 => 
            array (
                'id' => 1003,
                'name' => 'Fathers Day 2 Products S',
                'description' => 'Square Product Promo showing two products',
                'created_at' => '2020-06-15 00:00:00',
                'updated_at' => '2020-07-15 18:17:49',
            ),
            373 => 
            array (
                'id' => 1005,
                'name' => 'Chicken 3D Walking',
                'description' => 'Chicken 3D Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-16 00:00:00',
                'updated_at' => '2020-07-15 11:39:00',
            ),
            374 => 
            array (
                'id' => 1007,
                'name' => 'Pig 3D Walk',
                'description' => 'Pig 3D Walk Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-16 00:00:00',
                'updated_at' => '2020-07-15 11:37:14',
            ),
            375 => 
            array (
                'id' => 1010,
                'name' => 'Stag 3D Walk',
                'description' => 'Stag 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-16 00:00:00',
                'updated_at' => '2020-07-15 11:34:36',
            ),
            376 => 
            array (
                'id' => 1012,
                'name' => 'Street Sweeper Moonwalk',
                'description' => 'Street Sweeper Moonwalk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-16 00:00:00',
                'updated_at' => '2020-07-15 11:27:57',
            ),
            377 => 
            array (
                'id' => 1014,
                'name' => 'Cat 3D Running',
                'description' => 'Cat 3D Running on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-16 00:00:00',
                'updated_at' => '2020-07-15 11:26:20',
            ),
            378 => 
            array (
                'id' => 1016,
                'name' => 'Dinosaur 3D Walk',
                'description' => 'Dinosaur 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:24:29',
            ),
            379 => 
            array (
                'id' => 1017,
                'name' => 'Rooster 3D Walk',
                'description' => 'Rooster 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:22:27',
            ),
            380 => 
            array (
                'id' => 1018,
                'name' => 'Frog 3D Walking',
                'description' => 'Frog 3D Walking on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:20:17',
            ),
            381 => 
            array (
                'id' => 1019,
                'name' => 'Zebra 3D Walk',
                'description' => 'Zebra 3D Walk',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:15:21',
            ),
            382 => 
            array (
                'id' => 1020,
                'name' => 'Puma Hunt 3D Walk',
                'description' => 'Puma Hunt 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:12:06',
            ),
            383 => 
            array (
                'id' => 1021,
                'name' => 'Lion3D Walk',
                'description' => 'Lion3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:09:53',
            ),
            384 => 
            array (
                'id' => 1022,
                'name' => 'Tiger 3D Walk',
                'description' => 'Tiger 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:07:55',
            ),
            385 => 
            array (
                'id' => 1023,
                'name' => 'Wolf 3D Walk',
                'description' => 'Wolf 3D Walk',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:06:05',
            ),
            386 => 
            array (
                'id' => 1024,
                'name' => 'Sheep Dog 3D Insurance',
                'description' => 'Sheep Dog 3D Insurance on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:04:05',
            ),
            387 => 
            array (
                'id' => 1025,
                'name' => 'Dachshund 3D Walk Insurance',
                'description' => 'Insurance Dachshund 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 11:01:56',
            ),
            388 => 
            array (
                'id' => 1026,
                'name' => 'Dog 3D  Running',
                'description' => 'Dog 3D  Running on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 10:59:21',
            ),
            389 => 
            array (
                'id' => 1027,
                'name' => 'SWAT Police Running',
                'description' => 'SWAT Police Running on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 10:56:00',
            ),
            390 => 
            array (
                'id' => 1028,
                'name' => 'Doctor 3D Walk',
                'description' => 'Doctor 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 10:51:50',
            ),
            391 => 
            array (
                'id' => 1029,
                'name' => 'Sheeps 3D',
                'description' => 'Sheeps 3D on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 10:49:55',
            ),
            392 => 
            array (
                'id' => 1030,
                'name' => 'Cheetah 3D Walk',
                'description' => 'Cheetah 3D Walk on a thumb-stopping ad with Call To Action',
                'created_at' => '2020-06-17 00:00:00',
                'updated_at' => '2020-07-15 10:45:56',
            ),
            393 => 
            array (
                'id' => 1031,
                'name' => '3D Cheetah Running to Camera',
                'description' => '3D Cheetah Running to Camera',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:41:21',
            ),
            394 => 
            array (
                'id' => 1032,
                'name' => '3D Deer Running To Camera',
                'description' => '3D Deer Running To Camera',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:43:21',
            ),
            395 => 
            array (
                'id' => 1033,
                'name' => '3D Ghoul Walking to Camera',
                'description' => '3D Ghoul Walking to Camera',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:44:58',
            ),
            396 => 
            array (
                'id' => 1034,
                'name' => '3D Lion Running to Camera',
                'description' => '3D Lion Running to Camera',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:46:20',
            ),
            397 => 
            array (
                'id' => 1035,
                'name' => '3D Tiger Running to Camera',
                'description' => '3D Tiger Running to Camera',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:47:37',
            ),
            398 => 
            array (
                'id' => 1036,
                'name' => '3D Alligator Walking to Camera',
                'description' => '3D Alligator Walking to Camera',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:49:05',
            ),
            399 => 
            array (
                'id' => 1037,
                'name' => '3D Zombie',
                'description' => '3D Zombie',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:50:18',
            ),
            400 => 
            array (
                'id' => 1038,
                'name' => 'Baseball Pitch',
                'description' => 'Baseball Pitch',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:51:42',
            ),
            401 => 
            array (
                'id' => 1039,
                'name' => 'Restaurant Boy Cake',
                'description' => 'Restaurant Boy presenting a Cake on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:50:59',
            ),
            402 => 
            array (
                'id' => 1040,
                'name' => 'Restaurant Boy Cake with mask',
                'description' => 'Restaurant Boy with a mask presenting a Cake on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:48:33',
            ),
            403 => 
            array (
                'id' => 1041,
                'name' => 'Restaurant Boy Gift',
                'description' => 'Restaurant Boy presenting a Gift on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:46:34',
            ),
            404 => 
            array (
                'id' => 1042,
                'name' => 'Restaurant Boy Gift with mask',
                'description' => 'Restaurant Boy with a mask presenting a Gift on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:42:56',
            ),
            405 => 
            array (
                'id' => 1043,
                'name' => 'Restaurant Boy Pizza',
                'description' => 'Restaurant Boy presenting a Pizza on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:40:24',
            ),
            406 => 
            array (
                'id' => 1044,
                'name' => 'Restaurant Boy Pizza with mask',
                'description' => 'Restaurant Boy with a mask presenting a Pizza on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:38:15',
            ),
            407 => 
            array (
                'id' => 1045,
                'name' => 'Restaurant Boy Tooth',
                'description' => 'Restaurant Boy presenting a Tooth on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:57:38',
            ),
            408 => 
            array (
                'id' => 1046,
                'name' => 'Restaurant Boy Tooth with mask',
                'description' => 'Restaurant Boy with a mask presenting a Tooth on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 11:55:25',
            ),
            409 => 
            array (
                'id' => 1047,
                'name' => 'Restaurant Boy Plate',
                'description' => 'Restaurant Boy presenting a Plate on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:10:51',
            ),
            410 => 
            array (
                'id' => 1048,
                'name' => 'Restaurant Boy Plate with mask',
                'description' => 'Restaurant Boy with a mask presenting a Plate on a scroll-stopping ad with Call To Action',
                'created_at' => '2020-06-18 00:00:00',
                'updated_at' => '2020-07-15 12:03:30',
            ),
            411 => 
            array (
                'id' => 1056,
                'name' => 'E-com Search Bar 14',
                'description' => 'Search Bar Ecom Video Ad  showing 4 products and Call To Action',
                'created_at' => '2020-06-22 00:00:00',
                'updated_at' => '2020-07-15 13:42:44',
            ),
            412 => 
            array (
                'id' => 1057,
                'name' => 'E-com Search Bar 15',
                'description' => 'Search Bar Ecom Video Ad  showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:41:06',
            ),
            413 => 
            array (
                'id' => 1058,
                'name' => 'E-com Search Bar 16',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:39:14',
            ),
            414 => 
            array (
                'id' => 1059,
                'name' => 'E-com Search Bar 17',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:37:36',
            ),
            415 => 
            array (
                'id' => 1060,
                'name' => 'E-com Search Bar 18',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:35:59',
            ),
            416 => 
            array (
                'id' => 1061,
                'name' => 'E-com Search Bar 19',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:33:51',
            ),
            417 => 
            array (
                'id' => 1062,
                'name' => 'E-com Search Bar 20',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:31:55',
            ),
            418 => 
            array (
                'id' => 1063,
                'name' => 'E-com Search Bar 21',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:29:49',
            ),
            419 => 
            array (
                'id' => 1064,
                'name' => 'E-com Search Bar 22',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:26:50',
            ),
            420 => 
            array (
                'id' => 1065,
                'name' => 'E-com Search Bar 23',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:23:29',
            ),
            421 => 
            array (
                'id' => 1066,
                'name' => 'E-com Search Bar 24',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:20:36',
            ),
            422 => 
            array (
                'id' => 1067,
                'name' => 'E-com Search Bar 25',
                'description' => 'Search Bar Ecom Video Ad showing 4 products and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 13:17:41',
            ),
            423 => 
            array (
                'id' => 1068,
                'name' => 'Live Action Messaging Beauty Salon',
                'description' => 'Beautiful Woman chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 18:13:11',
            ),
            424 => 
            array (
                'id' => 1069,
                'name' => 'Live Action Restaurant booking',
                'description' => 'Beautiful Woman chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 18:10:43',
            ),
            425 => 
            array (
                'id' => 1070,
                'name' => 'Live Action Clinic 01',
                'description' => 'Doctor chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 18:09:00',
            ),
            426 => 
            array (
                'id' => 1071,
                'name' => 'Live Action Hotel',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 18:06:09',
            ),
            427 => 
            array (
                'id' => 1072,
                'name' => 'Live Action Construction/Repair 01',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 18:02:49',
            ),
            428 => 
            array (
                'id' => 1073,
                'name' => 'Live Action Construction/Repair 02',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 18:04:02',
            ),
            429 => 
            array (
                'id' => 1074,
                'name' => 'Live Action Construction/Repair 03',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:58:22',
            ),
            430 => 
            array (
                'id' => 1075,
                'name' => 'Live Action Cleaning 01',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:13:27',
            ),
            431 => 
            array (
                'id' => 1076,
                'name' => 'Live Action Cleaning 02',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:11:35',
            ),
            432 => 
            array (
                'id' => 1077,
                'name' => 'Live Action Catering',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:09:46',
            ),
            433 => 
            array (
                'id' => 1078,
                'name' => 'Live Action General 01',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:07:16',
            ),
            434 => 
            array (
                'id' => 1079,
                'name' => 'Live Action General 02',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:05:29',
            ),
            435 => 
            array (
                'id' => 1080,
                'name' => 'Live Action General 03',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:03:31',
            ),
            436 => 
            array (
                'id' => 1081,
                'name' => 'Live Action General 04',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 17:01:55',
            ),
            437 => 
            array (
                'id' => 1082,
                'name' => 'Live Action General 05',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 16:59:16',
            ),
            438 => 
            array (
                'id' => 1083,
                'name' => 'Live Action General 06',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 16:57:47',
            ),
            439 => 
            array (
                'id' => 1084,
                'name' => 'Live Action General 07',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 16:55:38',
            ),
            440 => 
            array (
                'id' => 1085,
                'name' => 'Live Action General 08',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 16:53:23',
            ),
            441 => 
            array (
                'id' => 1086,
                'name' => 'Live Action General 09',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 16:51:22',
            ),
            442 => 
            array (
                'id' => 1087,
                'name' => 'Live Action Clinic 02',
                'description' => 'Chat making an appointment and Call To Action',
                'created_at' => '2020-06-23 00:00:00',
                'updated_at' => '2020-07-15 16:49:20',
            ),
            443 => 
            array (
                'id' => 1088,
                'name' => 'Simple  Fitness Promo 01',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:34:13',
            ),
            444 => 
            array (
                'id' => 1089,
                'name' => 'Simple Sandwich Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 13:54:47',
            ),
            445 => 
            array (
                'id' => 1090,
                'name' => 'Simple Real Estate Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:02:25',
            ),
            446 => 
            array (
                'id' => 1091,
                'name' => 'Simple Pizza Delivery  Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:05:49',
            ),
            447 => 
            array (
                'id' => 1092,
                'name' => 'Simple Restaurant  Promo 01',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 13:59:05',
            ),
            448 => 
            array (
                'id' => 1093,
                'name' => 'Simple Cafe Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:31:53',
            ),
            449 => 
            array (
                'id' => 1094,
                'name' => 'Simple Christmas Promo 01',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:24:28',
            ),
            450 => 
            array (
                'id' => 1095,
                'name' => 'Simple Event Planning  Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:20:11',
            ),
            451 => 
            array (
                'id' => 1096,
                'name' => 'Simple Valentine\'s Promo 01',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 13:49:16',
            ),
            452 => 
            array (
                'id' => 1097,
                'name' => 'Simple Valentine\'s Promo 02',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 13:47:06',
            ),
            453 => 
            array (
                'id' => 1098,
                'name' => 'Simple Spa  Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 13:52:10',
            ),
            454 => 
            array (
                'id' => 1099,
                'name' => 'Simple Fitness Promo 02',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:10:01',
            ),
            455 => 
            array (
                'id' => 1100,
                'name' => 'Simple Restaurant  Promo 02',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 13:56:50',
            ),
            456 => 
            array (
                'id' => 1101,
                'name' => 'Simple Hamburger Promo',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:07:57',
            ),
            457 => 
            array (
                'id' => 1102,
                'name' => 'Simple Christmas Promo 02',
                'description' => 'Simple promo showcasing pictures and texts with a hand tap, particles, and Call To Action',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:22:23',
            ),
            458 => 
            array (
                'id' => 1103,
                'name' => 'Independence Day 01',
                'description' => 'Independence Day',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:49:06',
            ),
            459 => 
            array (
                'id' => 1104,
                'name' => 'Independence Day 02',
                'description' => 'Independence Day',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:46:50',
            ),
            460 => 
            array (
                'id' => 1105,
                'name' => 'Independence Day 03',
                'description' => 'Independence Day',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-19 14:02:33',
            ),
            461 => 
            array (
                'id' => 1106,
                'name' => 'Independence Day 04',
                'description' => 'Independence Day',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:41:40',
            ),
            462 => 
            array (
                'id' => 1107,
                'name' => 'Independence Day 05',
                'description' => 'Independence Day',
                'created_at' => '2020-06-25 00:00:00',
                'updated_at' => '2020-07-15 14:38:01',
            ),
            463 => 
            array (
                'id' => 1108,
                'name' => 'Logo Reveal 01',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:42:14',
            ),
            464 => 
            array (
                'id' => 1109,
                'name' => 'Logo Reveal 02',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:40:08',
            ),
            465 => 
            array (
                'id' => 1110,
                'name' => 'Logo Reveal 03',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:38:25',
            ),
            466 => 
            array (
                'id' => 1111,
                'name' => 'Logo Reveal 04',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:36:07',
            ),
            467 => 
            array (
                'id' => 1112,
                'name' => 'Logo Reveal 05',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:32:05',
            ),
            468 => 
            array (
                'id' => 1113,
                'name' => 'Logo Reveal 06',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:30:17',
            ),
            469 => 
            array (
                'id' => 1114,
                'name' => 'Logo Reveal 07',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:44:37',
            ),
            470 => 
            array (
                'id' => 1115,
                'name' => 'Logo Reveal 08',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:27:21',
            ),
            471 => 
            array (
                'id' => 1116,
                'name' => 'Logo Reveal 09',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:43:37',
            ),
            472 => 
            array (
                'id' => 1117,
                'name' => 'Logo Reveal 10',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:24:27',
            ),
            473 => 
            array (
                'id' => 1118,
                'name' => 'Logo Reveal 11',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:22:46',
            ),
            474 => 
            array (
                'id' => 1119,
                'name' => 'Logo Reveal 12',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:21:01',
            ),
            475 => 
            array (
                'id' => 1120,
                'name' => 'Logo Reveal 13',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 16:18:50',
            ),
            476 => 
            array (
                'id' => 1121,
                'name' => 'Logo Reveal 14',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 14:58:00',
            ),
            477 => 
            array (
                'id' => 1122,
                'name' => 'Logo Reveal 15',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 14:54:12',
            ),
            478 => 
            array (
                'id' => 1123,
                'name' => 'Logo Reveal 16',
                'description' => 'Logo Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 14:52:14',
            ),
            479 => 
            array (
                'id' => 1124,
                'name' => 'Company Name Reveal 01',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 08:05:04',
            ),
            480 => 
            array (
                'id' => 1125,
                'name' => 'Company Name Reveal 02',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:57:18',
            ),
            481 => 
            array (
                'id' => 1126,
                'name' => 'Company Name Reveal 03',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:54:22',
            ),
            482 => 
            array (
                'id' => 1127,
                'name' => 'Company Name Reveal 04',
                'description' => 'Company Name Revea',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:26:58',
            ),
            483 => 
            array (
                'id' => 1128,
                'name' => 'Company Name Reveal 05',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:22:10',
            ),
            484 => 
            array (
                'id' => 1129,
                'name' => 'Company Name Reveal 06',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:19:58',
            ),
            485 => 
            array (
                'id' => 1130,
                'name' => 'Company Name Reveal 07',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:17:30',
            ),
            486 => 
            array (
                'id' => 1131,
                'name' => 'Company Name Reveal 08',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:14:56',
            ),
            487 => 
            array (
                'id' => 1132,
                'name' => 'Company Name Reveal 09',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:07:45',
            ),
            488 => 
            array (
                'id' => 1133,
                'name' => 'Company Name Reveal 10',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:04:57',
            ),
            489 => 
            array (
                'id' => 1134,
                'name' => 'Company Name Reveal 11',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:02:10',
            ),
            490 => 
            array (
                'id' => 1135,
                'name' => 'Company Name Reveal 12',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 07:00:02',
            ),
            491 => 
            array (
                'id' => 1136,
                'name' => 'Company Name Reveal 13',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 06:57:10',
            ),
            492 => 
            array (
                'id' => 1137,
                'name' => 'Company Name Reveal 14',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 06:54:31',
            ),
            493 => 
            array (
                'id' => 1138,
                'name' => 'Company Name Reveal 15',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 06:51:16',
            ),
            494 => 
            array (
                'id' => 1139,
                'name' => 'Company Name Reveal 16',
                'description' => 'Company Name Reveal',
                'created_at' => '2020-06-28 00:00:00',
                'updated_at' => '2020-07-15 06:46:58',
            ),
            495 => 
            array (
                'id' => 1140,
                'name' => 'Virtual Event Promotion',
                'description' => 'Rhythm Synchronised Virtual Event Promotion',
                'created_at' => '2020-06-29 00:00:00',
                'updated_at' => '2020-07-15 06:43:08',
            ),
            496 => 
            array (
                'id' => 1141,
                'name' => 'Real Estate Property Showcase',
                'description' => 'Real Estate Property Showcase',
                'created_at' => '2020-06-29 00:00:00',
                'updated_at' => '2020-07-15 06:41:27',
            ),
            497 => 
            array (
                'id' => 1142,
                'name' => 'Lift Alpha Ad',
                'description' => 'Add your video and a picture to the shopping mall ad',
                'created_at' => '2020-06-29 00:00:00',
                'updated_at' => '2020-07-15 06:37:24',
            ),
            498 => 
            array (
                'id' => 1144,
                'name' => 'Fitness Gym Promo',
                'description' => 'Create A Professional Looking Fitness Gym Promo as an Instagram Story to Inform your Followers more About Your Fitness Gym',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 12:57:21',
            ),
            499 => 
            array (
                'id' => 1145,
                'name' => 'Travel Agency Promo',
                'description' => 'Create Professional Travel Agency Instagram Stories to Showcase Different Travel Packages to Travel Customers',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:05:48',
            ),
        ));
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1146,
                'name' => 'Church Sermon Story',
                'description' => 'Create An Animated Instagram Story Of Sermons Of Your Church And Let People Know Of the Speaker That Will Be Coming',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 19:21:29',
            ),
            1 => 
            array (
                'id' => 1148,
                'name' => 'Church Congregation Story',
                'description' => 'A Beautiful Story For Churches to Give Updates And Announcements Of the Next Preachers who will be Invited In Their Church',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 19:27:23',
            ),
            2 => 
            array (
                'id' => 1149,
                'name' => 'Church Worship Story',
                'description' => 'Create a Global Prayer Night Social Media Post and Inform Your Followers of the Importance Of Worship',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 19:31:01',
            ),
            3 => 
            array (
                'id' => 1150,
                'name' => 'Church Speakers Story',
                'description' => 'Showcase The Next Church Speakers of The Sermon To Your Followers Through This Story That Engages The Viewers',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:16:44',
            ),
            4 => 
            array (
                'id' => 1152,
                'name' => 'Church Preachers Story',
                'description' => 'An Engaging  Story Presenting the Next Preachers That Will Be Invited to the Church To Preach about Religion',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 19:39:32',
            ),
            5 => 
            array (
                'id' => 1154,
                'name' => 'Festive Christmas Party',
                'description' => 'Create An Astounding Christmas Party Celebrations Instagram Story To Invite Your Friends Or Employees To An Arranged Party',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 03:40:50',
            ),
            6 => 
            array (
                'id' => 1155,
                'name' => 'Joyous Winter Holidays',
                'description' => 'Want to Create An Awesome Winter Holidays Story? Create Joyous Winter Holidays Social Media Story For Christmas Celebrations And Make Everyone Happy',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 20:14:17',
            ),
            7 => 
            array (
                'id' => 1156,
                'name' => 'Lively Christmas Eve',
                'description' => 'Spread Happiness To Others Through this Lively Christmas Eve Story and Make Everyone Delighted!',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 03:35:21',
            ),
            8 => 
            array (
                'id' => 1157,
                'name' => 'Cheerful Christmas Season',
                'description' => 'Have a Christmas Party Arranged? Use this Unique Cheerful Christmas Celebrations Story as an Invitation To Your Friends',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:24:10',
            ),
            9 => 
            array (
                'id' => 1158,
                'name' => 'Winter Christmas Celebrations',
                'description' => 'Create an Astounding Winter Celebrations Story And Wish Everyone a Happy Christmas!',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:26:13',
            ),
            10 => 
            array (
                'id' => 1159,
                'name' => 'Women\'s Fashion Promo',
                'description' => 'A Stylish Promo for Women\'s Fashion Apparel and Accessories that Can Be Used For Sale Promotions',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 03:54:26',
            ),
            11 => 
            array (
                'id' => 1160,
                'name' => 'Men\'s Apparel Promo',
                'description' => 'Create a Men\'s Apparel Sale Animation for Clothing and Accessories and Use It as A Promo For Your Store',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-26 17:17:49',
            ),
            12 => 
            array (
                'id' => 1161,
                'name' => 'Imitation Jewelry Promo',
                'description' => 'Have an Artificial Jewelry Store? Create an Engaging Imitation Jewelry Promo and Use it in Your Store Ad Campaigns',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-26 17:18:37',
            ),
            13 => 
            array (
                'id' => 1163,
                'name' => 'Drones Product Delivery',
                'description' => 'Create A Unique Drones\' Delivery Promo to Use In Your Advertising Campaigns',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 10:13:02',
            ),
            14 => 
            array (
                'id' => 1164,
                'name' => 'Corporate Gifts Promo',
                'description' => 'Have A Personalized Gift Store? Use This Amazing Template to Create Corporate Gifts\' Promos For your Store, Targeting Businesses and Employers',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 11:53:45',
            ),
            15 => 
            array (
                'id' => 1167,
                'name' => 'Keto Recipe',
                'description' => 'Recipe Intro ad',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-15 06:35:28',
            ),
            16 => 
            array (
                'id' => 1168,
                'name' => 'Handbags Promo',
                'description' => 'Create An Engaging Showcase Video For Luxury and Prestige Handbags and Use It As Promo In Your Campaigns',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 20:27:08',
            ),
            17 => 
            array (
                'id' => 1169,
                'name' => 'E-COM BABY PROMO',
                'description' => 'E-COM BABY PROMO',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-15 06:32:31',
            ),
            18 => 
            array (
                'id' => 1170,
                'name' => 'DIY Tools Promo',
                'description' => 'Want to Create A DIY Tools Story? Create An Amazing DIY Tools Promo Story and Get Your Customers to Buy From You',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-26 17:46:36',
            ),
            19 => 
            array (
                'id' => 1171,
                'name' => 'Vacation Packages Promo',
                'description' => 'Create a Vacation Packages Promo and Showcase Limited Time Travel Deals and Discounts',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 04:37:51',
            ),
            20 => 
            array (
                'id' => 1172,
                'name' => 'Eyewear Products Promo',
                'description' => 'Do you Have an Eyewear Store and Want to Create an Animated Promo? Use this Template and Showcase your Best Eyewear Products',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:38:19',
            ),
            21 => 
            array (
                'id' => 1174,
                'name' => 'Nutritional Supplements Promo',
                'description' => 'Do you Have a Nutritional Supplements Store? Now You Can Create Captivating Supplements Promo Stories to Showcase the Importance of Health and Promote Your Products',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:40:14',
            ),
            22 => 
            array (
                'id' => 1175,
                'name' => 'Garden Accessories Promo',
                'description' => 'An Animated Promo  Story that You Can Use to Advertise Garden Accessories and Tools From Your Store',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:41:06',
            ),
            23 => 
            array (
                'id' => 1176,
                'name' => 'Handmade Jewelry Promo',
                'description' => 'Want to Create Beautiful Stories For Handmade Jewelry? Use this Template and Showcase Your Best Handmade Jewelry Collection',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 09:25:04',
            ),
            24 => 
            array (
                'id' => 1177,
                'name' => 'Rock Climbing Equipment',
                'description' => 'Use this Powerful and Energizing Story Promo For Rock Climbing Equipment And Use It In your Advertising Campaigns',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 05:00:42',
            ),
            25 => 
            array (
                'id' => 1178,
                'name' => 'Mountain Bike Promo',
                'description' => 'An Adventuresome and Energetic Promo For Mountain Bike Stores to Use In Their Campaign Promotions',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-16 18:58:50',
            ),
            26 => 
            array (
                'id' => 1179,
                'name' => 'Basic Kitchen Products Promo',
                'description' => 'Create A Modern and Minimalist Video For Basic Kitchen Products and Showcase A Limited Time Discount For Kitchen Accessories',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 05:10:36',
            ),
            27 => 
            array (
                'id' => 1180,
                'name' => 'Fishing Tackle Promo',
                'description' => 'Fishing Enthusiasts have Craze about Having Good Fishing Equipment. Get Them To Buy A Fishing Tackle By Using this Professional Story Promo',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-19 13:48:58',
            ),
            28 => 
            array (
                'id' => 1181,
                'name' => 'Cool Sportswear Promo',
                'description' => 'Advertise Cool and Sweat-Wicking Sportswear For Your Store Promotions through this Promo Story',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 05:16:58',
            ),
            29 => 
            array (
                'id' => 1182,
                'name' => 'Manicure and Pedicure Products',
                'description' => 'Craft A Modern and Beautifully Designed Social Media Story For Promoting Manicure and Pedicure Kits',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-27 12:23:04',
            ),
            30 => 
            array (
                'id' => 1183,
                'name' => 'Musical Instruments Promo',
                'description' => 'Selling Musical Instruments? Use this  Animated Story to Get Your Audience to Buy Musical Instruments',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 05:26:50',
            ),
            31 => 
            array (
                'id' => 1185,
                'name' => 'Sunglasses Promo',
                'description' => 'Create An Awesome Sunglasses Promo that Can Be Used As Social Media Story',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 05:55:18',
            ),
            32 => 
            array (
                'id' => 1186,
                'name' => 'Minimalist Watch Promo',
                'description' => 'Create a Modern Minimalist Watch Promo For Your Store and Display the Best Watches to Your Customers',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-23 15:12:06',
            ),
            33 => 
            array (
                'id' => 1187,
                'name' => 'Interior Car Accessories',
                'description' => 'Have A Store of Interior Car Accessories? Use this Template to Create a Captivating Promo For Car Accessories',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-26 18:09:44',
            ),
            34 => 
            array (
                'id' => 1188,
                'name' => 'Smart Watch Promo',
                'description' => 'Create a Smart Watch Story Promo and Showcase it through Instagram Stories',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-28 06:06:02',
            ),
            35 => 
            array (
                'id' => 1190,
                'name' => 'Women\'s Summer Clothing',
                'description' => 'A Beautiful  Story For Women\'s Summer Clothing that Can Be Used in Clothing Promotions',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-26 18:09:44',
            ),
            36 => 
            array (
                'id' => 1191,
                'name' => 'DETOX PROMO',
                'description' => 'DETOX PROMO',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-15 06:28:31',
            ),
            37 => 
            array (
                'id' => 1192,
                'name' => 'Anti Aging CBD ad',
                'description' => 'Anti Aging CBD ad',
                'created_at' => '2020-06-30 00:00:00',
                'updated_at' => '2020-07-15 06:25:41',
            ),
            38 => 
            array (
                'id' => 1193,
                'name' => 'LIVE ACTION AD 01',
                'description' => 'LIVE ACTION AD',
                'created_at' => '2020-07-01 00:00:00',
                'updated_at' => '2020-07-15 06:22:30',
            ),
            39 => 
            array (
                'id' => 1194,
                'name' => 'LIVE ACTION AD 02',
                'description' => 'LIVE ACTION AD',
                'created_at' => '2020-07-01 00:00:00',
                'updated_at' => '2020-07-15 06:19:36',
            ),
            40 => 
            array (
                'id' => 1195,
                'name' => 'Heart Warming AR Ad',
                'description' => 'Heart Warming AR Ad',
                'created_at' => '2020-07-01 00:00:00',
                'updated_at' => '2020-07-15 06:09:38',
            ),
            41 => 
            array (
                'id' => 1196,
                'name' => 'Mobile Room',
                'description' => 'Mobile 3d room showing delivery food products',
                'created_at' => '2020-07-01 00:00:00',
                'updated_at' => '2020-07-19 14:47:02',
            ),
            42 => 
            array (
                'id' => 1197,
                'name' => 'Gif Machine',
                'description' => 'Gif Machine',
                'created_at' => '2020-07-02 00:00:00',
                'updated_at' => '2020-07-15 06:14:32',
            ),
            43 => 
            array (
                'id' => 1198,
                'name' => 'Delivery Promo',
                'description' => 'Restaurant Delivery Promo',
                'created_at' => '2020-07-02 00:00:00',
                'updated_at' => '2020-07-24 15:35:43',
            ),
            44 => 
            array (
                'id' => 1199,
                'name' => 'Halloween Story 07',
                'description' => 'Halloween Story 07',
                'created_at' => '2020-07-03 00:00:00',
                'updated_at' => '2020-07-14 21:43:55',
            ),
            45 => 
            array (
                'id' => 1200,
                'name' => 'Halloween Story 09',
                'description' => 'Halloween Story',
                'created_at' => '2020-07-03 00:00:00',
                'updated_at' => '2020-07-14 21:41:43',
            ),
            46 => 
            array (
                'id' => 1201,
                'name' => 'Halloween Story 10',
                'description' => 'Halloween Story 10',
                'created_at' => '2020-07-03 00:00:00',
                'updated_at' => '2020-07-14 21:39:03',
            ),
            47 => 
            array (
                'id' => 1202,
                'name' => 'Free Delivery Story 31',
                'description' => 'Free Food Delivery Story',
                'created_at' => '2020-07-03 00:00:00',
                'updated_at' => '2020-07-14 21:34:10',
            ),
            48 => 
            array (
                'id' => 1203,
                'name' => 'Energy Drink Promo Label',
                'description' => 'Energy Drink Promo',
                'created_at' => '2020-07-04 00:00:00',
                'updated_at' => '2020-07-14 21:30:35',
            ),
            49 => 
            array (
                'id' => 1204,
                'name' => 'Energy Drink Promo Can Upload',
                'description' => 'Energy Drink Promo Can Upload',
                'created_at' => '2020-07-04 00:00:00',
                'updated_at' => '2020-07-19 13:13:20',
            ),
            50 => 
            array (
                'id' => 1205,
                'name' => 'Pet Health Horizontal',
                'description' => 'Pet Health ad Horizontal',
                'created_at' => '2020-07-05 00:00:00',
                'updated_at' => '2020-07-06 06:34:53',
            ),
            51 => 
            array (
                'id' => 1206,
                'name' => 'Pet Health Square',
                'description' => 'Pet Health ad Square',
                'created_at' => '2020-07-05 18:13:08',
                'updated_at' => '2020-07-05 18:13:08',
            ),
            52 => 
            array (
                'id' => 1207,
                'name' => 'Pet Health Vertical',
                'description' => 'Pet Health ad Vertical',
                'created_at' => '2020-07-05 18:17:42',
                'updated_at' => '2020-07-05 18:17:42',
            ),
            53 => 
            array (
                'id' => 1208,
            'name' => 'Pet Health Vertical (9:16)',
                'description' => 'Pet Health Ad Story Vertical',
                'created_at' => '2020-07-05 00:00:00',
                'updated_at' => '2020-07-14 21:21:03',
            ),
            54 => 
            array (
                'id' => 1209,
                'name' => 'Children\'s Health Horizontal',
                'description' => 'Children\'s Health Ad',
                'created_at' => '2020-07-06 12:14:53',
                'updated_at' => '2020-07-06 12:14:53',
            ),
            55 => 
            array (
                'id' => 1210,
                'name' => 'Children\'s Health Square',
                'description' => 'Children\'s Health ad  Square version',
                'created_at' => '2020-07-06 12:20:38',
                'updated_at' => '2020-07-06 12:20:38',
            ),
            56 => 
            array (
                'id' => 1211,
                'name' => 'Children\'s Health Vertical',
                'description' => 'Children\'s Health Vertical',
                'created_at' => '2020-07-06 12:26:50',
                'updated_at' => '2020-07-06 12:26:50',
            ),
            57 => 
            array (
                'id' => 1212,
                'name' => 'Children\'s Health Story',
                'description' => 'Children\'s Health Story',
                'created_at' => '2020-07-06 00:00:00',
                'updated_at' => '2020-07-06 12:37:30',
            ),
            58 => 
            array (
                'id' => 1213,
            'name' => 'Fat Burner Product Ad Landscape (16:9)',
                'description' => 'Fat Burner Ad',
                'created_at' => '2020-07-07 00:00:00',
                'updated_at' => '2020-07-14 21:14:11',
            ),
            59 => 
            array (
                'id' => 1214,
            'name' => 'Fat Burner Mock-up Ad Landscape (16:9)',
                'description' => 'Fat Burner Color changing bottle mockup ad',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:15:00',
            ),
            60 => 
            array (
                'id' => 1215,
            'name' => 'Fat Burner Product Ad Square (1:1)',
                'description' => 'Fat Burner square',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-19 13:39:38',
            ),
            61 => 
            array (
                'id' => 1216,
            'name' => 'Children\'s Health Landscape (16:9)',
            'description' => 'Children\'s Health Landscape (16:9)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:18:47',
            ),
            62 => 
            array (
                'id' => 1217,
            'name' => 'Children\'s Health Square (1:1)',
            'description' => 'Children\'s Health Square (1:1)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:17:53',
            ),
            63 => 
            array (
                'id' => 1218,
            'name' => 'Children\'s Health Portrait (4:5)',
            'description' => 'Children\'s Health Portrait (4:5)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:16:53',
            ),
            64 => 
            array (
                'id' => 1219,
            'name' => 'Children\'s Health Vertical (9:16)',
            'description' => 'Children\'s Health Vertical (9:16)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:15:58',
            ),
            65 => 
            array (
                'id' => 1220,
            'name' => 'Pet Health Landscape (16:9)',
            'description' => 'Pet Health Landscape (16:9)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:23:59',
            ),
            66 => 
            array (
                'id' => 1221,
            'name' => 'Pet Health Square (1:1)',
            'description' => 'Pet Health Square (1:1)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:22:44',
            ),
            67 => 
            array (
                'id' => 1222,
            'name' => 'Pet Health Portrait (4:5)',
            'description' => 'Pet Health Portrait (4:5)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-24 15:49:25',
            ),
            68 => 
            array (
                'id' => 1223,
            'name' => 'Fat Burner Mock up Ad Square (1:1)',
            'description' => 'Fat Burner Mockup Ad Square (1:1)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:13:04',
            ),
            69 => 
            array (
                'id' => 1224,
            'name' => 'Fat Burner Product Ad Portrait (4:5)',
            'description' => 'Fat Burner Product Ad Portrait (4:5)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:09:30',
            ),
            70 => 
            array (
                'id' => 1225,
            'name' => 'Fat Burner Mock up Ad Portrait (4:5)',
            'description' => 'Fat Burner Mockup Ad Portrait (4:5)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:10:19',
            ),
            71 => 
            array (
                'id' => 1226,
            'name' => 'Fat Burner Product Ad Vertical (9:16)',
            'description' => 'Fat Burner Product Ad Vertical (9:16)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-14 21:03:22',
            ),
            72 => 
            array (
                'id' => 1227,
            'name' => 'Fat Burner Mock up Ad Vertical (9:16)',
            'description' => 'Fat Burner Mockup Ad Vertical (9:16)',
                'created_at' => '2020-07-08 00:00:00',
                'updated_at' => '2020-07-24 16:07:58',
            ),
            73 => 
            array (
                'id' => 1228,
                'name' => 'Merry Christmas Celebration',
                'description' => 'Create A Christmas Celebration Instagram Story to Use during the Christmas Season to Wish Greetings to Your Customers',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 19:08:32',
            ),
            74 => 
            array (
                'id' => 1229,
                'name' => 'Christmas Gifts Party',
                'description' => 'Create An Instagram Story for Christmas Gifts Party for your Employees Or your Customers and get the Best Out Of Every Christmas Celebration',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-28 03:44:54',
            ),
            75 => 
            array (
                'id' => 1230,
                'name' => 'Pet Shop Promo',
                'description' => 'Do you own a Pet Store? Create An Awesome Pet Shop Promo as a Social Media Story',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 18:55:47',
            ),
            76 => 
            array (
                'id' => 1231,
                'name' => 'Beauty Care Services',
                'description' => 'Do you Have a Beauty Care Salon? Showcase your Beauty Care Services with this Stylish Promo',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 18:48:40',
            ),
            77 => 
            array (
                'id' => 1232,
                'name' => 'Sports Motivation Promo',
                'description' => 'Create A Strong Instagram Story Filled with Sports Motivation and Energy',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 18:44:15',
            ),
            78 => 
            array (
                'id' => 1233,
                'name' => 'Online Fitness Club',
                'description' => 'Are you an Online Fitness Training Company or an Individual? Create A Professional Looking Fitness Classes Promo and get More Registrations for your Classes',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 18:39:40',
            ),
            79 => 
            array (
                'id' => 1236,
                'name' => 'Fashion Clothing New Arrivals',
                'description' => 'Create a Modern Fashion Promo, Highlighting New Arrivals in Your Clothing Store For your Customers',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 11:28:27',
            ),
            80 => 
            array (
                'id' => 1237,
                'name' => 'Electronics Big Sale Promo',
                'description' => 'Create an Engaging Electronics Promo with Special Deals and Discounts and Showcase it as Social Media Story',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 18:20:39',
            ),
            81 => 
            array (
                'id' => 1238,
                'name' => 'Educational Course',
                'description' => 'An Online Educational Course Promo Story To showcase your Course with Limited Time Offer',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-19 12:55:28',
            ),
            82 => 
            array (
                'id' => 1239,
                'name' => 'Trendy Gadget Promo',
                'description' => 'Create Trendy Style Stories For your Next Gadget Promotions For Your Audience',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 18:07:43',
            ),
            83 => 
            array (
                'id' => 1240,
                'name' => 'Real Estate Ideal Residence',
                'description' => 'Showcase An Ideal House Residence to Investors through this Story Promo',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-19 12:53:31',
            ),
            84 => 
            array (
                'id' => 1241,
                'name' => 'Apparel Mega Sale Promo',
                'description' => 'Have an Amazing Mega Sale Promotion Running On Your Store? Create Apparel Sale Promotions and Showcase them on Social Media',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-28 09:03:02',
            ),
            85 => 
            array (
                'id' => 1243,
                'name' => 'Valentine\'s Special Sale',
                'description' => 'Create An Attention-Grabbing Instagram Story for Your Valentine Special Sale Promotion',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-27 17:58:48',
            ),
            86 => 
            array (
                'id' => 1244,
                'name' => 'Clothing Promo',
                'description' => 'Promote Your Upcoming Clothing Discounts and Sales with Your Audience on Social Media',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-19 12:50:52',
            ),
            87 => 
            array (
                'id' => 1245,
                'name' => 'Real Estate Advertisement for Renting Houses',
                'description' => 'A Clean-Style Real Estate Advertisement Animation for Renting Houses',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-26 16:11:57',
            ),
            88 => 
            array (
                'id' => 1246,
                'name' => 'Real Estate Advertisement for Selling Houses',
                'description' => 'A Clean-Style Real Estate Advertisement Animation for Selling Houses',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-26 16:01:20',
            ),
            89 => 
            array (
                'id' => 1247,
            'name' => 'Eye Care Product Ad Landscape (16:9)',
            'description' => 'Eye Care Product Ad Landscape (16:9)',
                'created_at' => '2020-07-09 00:00:00',
                'updated_at' => '2020-07-14 21:00:54',
            ),
            90 => 
            array (
                'id' => 1248,
                'name' => 'Volunteer Fundraising Advert',
                'description' => 'Create a Professional Volunteer Fundraising Advert / NGO Charity Campaign Animation',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:44:45',
            ),
            91 => 
            array (
                'id' => 1250,
                'name' => 'Business Event Promo',
                'description' => 'Create A Clean Business Event Animation For Your Next Event Promotion',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:59:39',
            ),
            92 => 
            array (
                'id' => 1251,
                'name' => 'Modern YouTube End Screen #5',
                'description' => 'Create A Modern YouTube End Screen Animation For your YouTube Videos',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:40:53',
            ),
            93 => 
            array (
                'id' => 1252,
                'name' => 'Modern YouTube End Screen #4',
                'description' => 'Create A Modern YouTube End Screen Animation For your YouTube Videos',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:40:18',
            ),
            94 => 
            array (
                'id' => 1253,
                'name' => 'Modern YouTube End Screen #3',
                'description' => 'Create A Modern YouTube End Screen Animation For your YouTube Videos',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:39:05',
            ),
            95 => 
            array (
                'id' => 1254,
                'name' => 'Modern YouTube End Screen #2',
                'description' => 'Create A Modern YouTube End Screen Animation For your YouTube Videos',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:37:19',
            ),
            96 => 
            array (
                'id' => 1255,
                'name' => 'Modern YouTube End Screen #1',
                'description' => 'Create A Modern YouTube End Screen Animation For your YouTube Videos',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:36:51',
            ),
            97 => 
            array (
                'id' => 1256,
                'name' => 'Fashion Facebook Cover Video',
                'description' => 'A Modern Style Facebook Cover Video For Fashion Businesses',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:54:16',
            ),
            98 => 
            array (
                'id' => 1257,
                'name' => 'Restaurant Facebook Cover Video',
                'description' => 'A Facebook Cover Animation For Fast Food Restaurants to Showcase their Best Dish Promotions',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:46:39',
            ),
            99 => 
            array (
                'id' => 1258,
                'name' => 'eCommerce Facebook Cover Video#4',
                'description' => 'Create an eCommerce Facebook Cover Video For Product Promotion',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:46:11',
            ),
            100 => 
            array (
                'id' => 1260,
                'name' => 'eCommerce Facebook Cover Video#3',
                'description' => 'Create an eCommerce Facebook Cover Video For Product Promotion',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:46:01',
            ),
            101 => 
            array (
                'id' => 1261,
                'name' => 'Black Friday Sale Facebook Cover Video',
                'description' => 'Black Friday Sale Facebook Cover Animation for eCommerce Product Promotions',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-27 09:11:29',
            ),
            102 => 
            array (
                'id' => 1262,
                'name' => 'Travel Tour Facebook Cover Video',
                'description' => 'A Stylish Facebook Cover Video For Travel Tour Agencies and Businesses',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:38:40',
            ),
            103 => 
            array (
                'id' => 1263,
                'name' => 'Real Estate Facebook Cover Video',
                'description' => 'A Modern Elegant Facebook Cover Video For Real Estate Agents',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:37:38',
            ),
            104 => 
            array (
                'id' => 1264,
                'name' => 'eCommerce Facebook Cover Video#2',
                'description' => 'Create an eCommerce Facebook Cover Video For Product Promotion',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:27:03',
            ),
            105 => 
            array (
                'id' => 1265,
                'name' => 'eCommerce Facebook Cover Video#1',
                'description' => 'Create an eCommerce Facebook Cover Video For Product Promotion',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 18:17:55',
            ),
            106 => 
            array (
                'id' => 1266,
            'name' => 'Eye Care Mock-up Ad Square (1:1)',
            'description' => 'Eye Care Mock-up Ad Square (1:1)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:43:08',
            ),
            107 => 
            array (
                'id' => 1267,
                'name' => 'Huge Sale/Discount Facebook Cover Video',
                'description' => 'A Facebook Cover Video Animation for eCommerce Store Facebook Pages, Best Suited for Sale and Discount Promotions',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:26:02',
            ),
            108 => 
            array (
                'id' => 1268,
            'name' => 'Eye Care Product Ad Square (1:1)',
            'description' => 'Eye Care Product Ad Square (1:1)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:42:18',
            ),
            109 => 
            array (
                'id' => 1269,
                'name' => 'Coronavirus COVID - 19 Slideshow#5',
                'description' => 'Create a Modern Coronavirus COVID - 19 Slideshow for Educational and Promotional Purposes',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-27 16:38:11',
            ),
            110 => 
            array (
                'id' => 1270,
            'name' => 'Eye Care Product Ad Portrait (4:5)',
            'description' => 'Eye Care Product Ad Portrait (4:5)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:39:55',
            ),
            111 => 
            array (
                'id' => 1271,
                'name' => 'Coronavirus COVID - 19 Slideshow#3',
                'description' => 'Create a Modern Coronavirus COVID - 19 Slideshow for Educational and Promotional Purposes',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:13:10',
            ),
            112 => 
            array (
                'id' => 1272,
            'name' => 'Eye Care Mock-up Ad Portrait (4:5)',
            'description' => 'Eye Care Mock-up Ad Portrait (4:5)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:40:51',
            ),
            113 => 
            array (
                'id' => 1273,
                'name' => 'Coronavirus COVID - 19 Slideshow#2',
                'description' => 'Create a Modern Coronavirus COVID - 19 Slideshow for Educational and Promotional Purposes',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:12:22',
            ),
            114 => 
            array (
                'id' => 1274,
                'name' => 'Coronavirus COVID - 19 Slideshow#1',
                'description' => 'Create a Modern Coronavirus COVID - 19 Slideshow for Educational and Promotional Purposes',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:21:49',
            ),
            115 => 
            array (
                'id' => 1276,
            'name' => 'Eye Care Product Ad Vertical (9:16)',
            'description' => 'Eye Care Product Ad Vertical (9:16)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:36:54',
            ),
            116 => 
            array (
                'id' => 1277,
            'name' => 'Eye Care Mock-up Ad Vertical (9:16)',
            'description' => 'Eye Care Mock-up Ad Vertical (9:16)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:34:18',
            ),
            117 => 
            array (
                'id' => 1279,
                'name' => 'T-Shirt Mockup Promo#1',
                'description' => 'A Modern Realistic T-Shirt Mock up that can be used for T-Shirt Promotions for eCommerce Stores',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:14:19',
            ),
            118 => 
            array (
                'id' => 1280,
                'name' => 'Real Estate Presentation Promo',
                'description' => 'A Beautiful Real Estate Animation that Real Estate Agencies and Agents can Use for Their Presentations',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-16 18:08:04',
            ),
            119 => 
            array (
                'id' => 1281,
                'name' => 'Mosaic Style Photo Reveal Promo',
                'description' => 'Mosaic Block Reveal Animation For eCommerce Stores to Display Product Photos For Commercials and Advertisements',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 12:11:43',
            ),
            120 => 
            array (
                'id' => 1282,
                'name' => 'Insurance Agent / Broker Promo Advert',
                'description' => 'A Promo Video For Insurance Agents and Brokers to Use in their Promotions',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-26 15:00:55',
            ),
            121 => 
            array (
                'id' => 1285,
                'name' => 'Mysterious Classified Detective Template',
                'description' => 'A Confidential, Top-Secret  Title Sequence. Create Mysterious and a Dark Style Video that Fits with Your Own Project',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-20 03:19:14',
            ),
            122 => 
            array (
                'id' => 1286,
                'name' => 'Online Shopping Explainer Video',
                'description' => 'Online Shopping Explainer Video that eCommerce Stores Can Use for their Product Promotions',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 11:18:51',
            ),
            123 => 
            array (
                'id' => 1287,
                'name' => 'Pet Products and Accessories',
                'description' => 'Create Captivating Pet Products and Accessories Video Animations and Use them In Your Pet Store Promotions',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-28 04:07:44',
            ),
            124 => 
            array (
                'id' => 1288,
            'name' => 'Food Promo Ad 01 Landscape (16:9)',
            'description' => 'Food Promo Ad Landscape (16:9)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:30:48',
            ),
            125 => 
            array (
                'id' => 1289,
            'name' => 'Food Promo Ad 01 Square (1:1)',
            'description' => 'Food Promo Ad Square (1:1)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-14 20:29:39',
            ),
            126 => 
            array (
                'id' => 1290,
            'name' => 'Food Promo Ad 01 Portrait (4:5)',
            'description' => 'Food Promo Ad Portrait (4:5)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-16 11:30:55',
            ),
            127 => 
            array (
                'id' => 1291,
            'name' => 'Food Promo Ad 01 Vertical (9:16)',
            'description' => 'Food Promo Ad Vertical (9:16)',
                'created_at' => '2020-07-10 00:00:00',
                'updated_at' => '2020-07-19 14:20:22',
            ),
            128 => 
            array (
                'id' => 1292,
                'name' => 'Prism App Promo',
                'description' => 'Create Prism Style App Promo For your Application and Showcase the Best Features Of the App',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-19 11:58:13',
            ),
            129 => 
            array (
                'id' => 1294,
                'name' => 'Shoe Sale Promo',
                'description' => 'Craft Gradient Promos For your Shoe Store and Captivate your Customers with Special Deals and Discounts',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-27 18:32:15',
            ),
            130 => 
            array (
                'id' => 1295,
                'name' => 'Adventure Kit Promo',
                'description' => 'A Creative Promo For Adventure and Outdoor Kits that Can be Used By Stores For Their Adventure Kit Promotions',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-26 17:44:16',
            ),
            131 => 
            array (
                'id' => 1298,
                'name' => 'Food Menu Promo#1',
                'description' => 'Food Menu Animation For Restaurant and Bakery Promotions',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-19 11:43:18',
            ),
            132 => 
            array (
                'id' => 1299,
                'name' => 'Food Menu Promo#2',
                'description' => 'Food Menu Animation For Restaurant and Bakery Promotions',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-19 11:44:59',
            ),
            133 => 
            array (
                'id' => 1300,
                'name' => 'Anti - Ageing Products Promo',
                'description' => 'Anti - Ageing Products Are Becoming Popular Time By Time. Create Awesome Anti - Ageing Product Promotions To Use In Your Campaigns',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-26 17:44:03',
            ),
            134 => 
            array (
                'id' => 1301,
                'name' => 'Food Menu Promo#3',
                'description' => 'Food Menu Animation For Restaurant and Bakery Promotions',
                'created_at' => '2020-07-11 00:00:00',
                'updated_at' => '2020-07-19 11:47:26',
            ),
            135 => 
            array (
                'id' => 1302,
            'name' => 'Food Promo Ad 02 Landscape (16:9)',
            'description' => 'Food Promo Ad 02 Landscape (16:9)',
                'created_at' => '2020-07-13 00:00:00',
                'updated_at' => '2020-07-14 20:18:05',
            ),
            136 => 
            array (
                'id' => 1303,
            'name' => 'Food Promo Ad 02 Square (1:1)',
            'description' => 'Food Promo Ad 02 Square (1:1)',
                'created_at' => '2020-07-13 00:00:00',
                'updated_at' => '2020-07-14 20:16:14',
            ),
            137 => 
            array (
                'id' => 1304,
            'name' => 'Food Promo Ad 02 Portrait (4:5)',
            'description' => 'Food Promo Ad 02 Portrait (4:5)',
                'created_at' => '2020-07-13 00:00:00',
                'updated_at' => '2020-07-14 20:10:10',
            ),
            138 => 
            array (
                'id' => 1305,
            'name' => 'Food Promo Ad 02 Vertical (9:16)',
            'description' => 'Food Promo Ad 02 Vertical (9:16)',
                'created_at' => '2020-07-13 00:00:00',
                'updated_at' => '2020-07-14 20:08:34',
            ),
            139 => 
            array (
                'id' => 1306,
            'name' => 'Food Promo Ad 03 Landscape (16:9)',
            'description' => 'Food Promo Ad 03 Landscape (16:9)',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-16 11:16:05',
            ),
            140 => 
            array (
                'id' => 1307,
            'name' => 'Food Promo Ad 03 Square (1:1)',
            'description' => 'Food Promo Ad 03 Square (1:1)',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-16 11:15:10',
            ),
            141 => 
            array (
                'id' => 1308,
            'name' => 'Food Promo Ad 03 Portrait (4:5)',
            'description' => 'Food Promo Ad 03 Portrait (4:5)',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-16 11:13:43',
            ),
            142 => 
            array (
                'id' => 1309,
            'name' => 'Food Promo Ad 03 Vertical (9:16)',
            'description' => 'Food Promo Ad 03 Vertical (9:16)',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-19 14:21:38',
            ),
            143 => 
            array (
                'id' => 1311,
                'name' => 'Modern Corporate Business Presentation',
                'description' => 'Gradient Slides\' Animations for Corporate Businesses to Use In their Presentations',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-27 17:42:29',
            ),
            144 => 
            array (
                'id' => 1312,
                'name' => 'Church Spiritual Orator',
                'description' => 'Want to Create An Amazing Instagram Story Showcasing the Spiritual Orator Invited In Your Church? Use This Template And Get Your Followers Excited On Coming To The Next Sermon',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-16 18:42:54',
            ),
            145 => 
            array (
                'id' => 1313,
                'name' => 'Church Prayer Night',
                'description' => 'Present Announcements of Church Prayer Night to Your Followers through this Instagram Post',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-27 11:45:31',
            ),
            146 => 
            array (
                'id' => 1314,
                'name' => 'Relaxing Sofas Promo',
                'description' => 'Create an Engaging Relaxing Sofas\' Promo Displaying Different Furniture From Your Sofa Store',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-27 10:17:36',
            ),
            147 => 
            array (
                'id' => 1315,
                'name' => 'Men\'s Grooming Products',
                'description' => 'Create A Premium Men\'s Grooming Products Promo For Your eCommerce Store and Showcase it Through Instagram Stories',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-19 15:33:36',
            ),
            148 => 
            array (
                'id' => 1316,
                'name' => 'T-Shirt Mockup Promo#2',
                'description' => 'A Modern Realistic T-Shirt Mock up that can be used for T-Shirt Promotions for eCommerce Stores',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-26 15:03:23',
            ),
            149 => 
            array (
                'id' => 1317,
                'name' => 'T-Shirt Mockup Promo#3',
                'description' => 'A Modern Realistic T-Shirt Mock up that can be used for T-Shirt Promotions for eCommerce Stores',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-19 12:20:00',
            ),
            150 => 
            array (
                'id' => 1318,
                'name' => 'Fast Food Promo',
                'description' => 'Showcase Your Fast Food Deal and Compel Your Customers to Buy Delicious Meals From Your Restaurant',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-27 18:01:18',
            ),
            151 => 
            array (
                'id' => 1319,
                'name' => 'Fashion Clothes Mega Sale',
                'description' => 'Showcase Fashion Clothing Sale Promotions through this Template to your Audience',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-19 12:59:30',
            ),
            152 => 
            array (
                'id' => 1320,
            'name' => 'Eye Care Mock-up Ad Landscape (16:9)',
            'description' => 'Eye Care Mock-up Ad Landscape (16:9)',
                'created_at' => '2020-07-14 00:00:00',
                'updated_at' => '2020-07-14 20:57:24',
            ),
            153 => 
            array (
                'id' => 1321,
                'name' => 'Luxury Watch Promo',
                'description' => 'Want to Sell Luxury Watches? Create An Elegant Luxurious Instagram Story as your next Luxury Watch Promo',
                'created_at' => '2020-07-15 00:00:00',
                'updated_at' => '2020-07-27 18:27:56',
            ),
            154 => 
            array (
                'id' => 1322,
                'name' => 'Formal Shoes Promo',
                'description' => 'An Engaging Story to Showcase Formal Shoes From Your Store with Special Discounts',
                'created_at' => '2020-07-15 00:00:00',
                'updated_at' => '2020-07-28 05:31:38',
            ),
            155 => 
            array (
                'id' => 1323,
                'name' => 'Burger Restaurant Story Promo',
                'description' => 'Burger Restaurant Story Promo',
                'created_at' => '2020-07-17 00:00:00',
                'updated_at' => '2020-07-20 07:05:42',
            ),
            156 => 
            array (
                'id' => 1326,
                'name' => 'Modern Elegant Promo',
                'description' => 'A Smooth, Modern Promo for your eCommerce Store. Promote Your Products Using this Elegant Promo',
                'created_at' => '2020-07-24 00:00:00',
                'updated_at' => '2020-07-27 14:15:28',
            ),
            157 => 
            array (
                'id' => 1327,
                'name' => 'Coronavirus COVID - 19 Slideshow#4',
                'description' => 'Create a Modern Coronavirus COVID - 19 Slideshow for Educational and Promotional Purposes',
                'created_at' => '2020-07-24 00:00:00',
                'updated_at' => '2020-07-26 15:15:18',
            ),
            158 => 
            array (
                'id' => 1328,
                'name' => 'Whiteboard Meet Mary Color',
                'description' => 'Whiteboard company presentation ad',
                'created_at' => '2020-07-25 00:00:00',
                'updated_at' => '2020-07-26 08:11:34',
            ),
            159 => 
            array (
                'id' => 1329,
                'name' => 'Whiteboard Meet Mary Black and White',
                'description' => 'female character company ad',
                'created_at' => '2020-07-25 00:00:00',
                'updated_at' => '2020-07-26 08:18:54',
            ),
            160 => 
            array (
                'id' => 1330,
                'name' => 'Whiteboard Meet Jason Color',
                'description' => 'Whiteboard male character company ad',
                'created_at' => '2020-07-25 00:00:00',
                'updated_at' => '2020-07-26 08:21:58',
            ),
            161 => 
            array (
                'id' => 1331,
                'name' => 'Whiteboard Meet Jason Black and White',
                'description' => 'whiteboard male character ad',
                'created_at' => '2020-07-25 00:00:00',
                'updated_at' => '2020-07-26 08:23:52',
            ),
            162 => 
            array (
                'id' => 1332,
                'name' => 'Whiteboard Explainer Female',
                'description' => 'Whiteboard Explainer Female',
                'created_at' => '2020-08-03 00:00:00',
                'updated_at' => '2020-08-03 19:28:34',
            ),
            163 => 
            array (
                'id' => 1333,
                'name' => 'Whiteboard Explainer Male',
                'description' => 'Whiteboard Explainer Male',
                'created_at' => '2020-08-03 19:42:42',
                'updated_at' => '2020-08-03 19:42:42',
            ),
            164 => 
            array (
                'id' => 1334,
                'name' => 'Whiteboard Teaser Female',
                'description' => 'Whiteboard Teaser Female',
                'created_at' => '2020-08-04 07:42:39',
                'updated_at' => '2020-08-04 07:42:39',
            ),
            165 => 
            array (
                'id' => 1335,
                'name' => 'Whiteboard Teaser Male',
                'description' => 'Whiteboard Teaser Male',
                'created_at' => '2020-08-04 07:52:01',
                'updated_at' => '2020-08-04 07:52:01',
            ),
        ));
        
        
    }
}