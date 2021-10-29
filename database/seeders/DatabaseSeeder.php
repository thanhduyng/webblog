<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {

         DB::table('users')->insert(
            [
                'id' => 1,
                'name' => "Thanh",
                'password' => bcrypt('12345678'),
                'email' => "thanhnguyenduyy@gmail.com",
                'leve' => 1,
            ]
        );


        DB::table('slides')->insert(
            [
                'id' => 1,
                'name' => "Slide 1",
                'image' => "https://lh3.googleusercontent.com/fife/AAWUweXPLouHNffU8PKiUfv9brrmxzgEruK8GqbwpnrMiB2u52Uw5okdMVnDJIeZ-mTUW5vp6h_jjjcz9ZhfSSMJ4lYs7eYaMYUBYp8F-sWYFmoyJMf5x_CYvXEC_nuULKFJdXaK8Ofc5EL-vyrcjaDkvsGOx403iqVcERZAMkk6_fpRqgDzhbCDnpNIwwH6mkjba9g5WUeDTrIaE1ktGC22yfqGN7OC5n37JdWCzv8xHIR5OxCYaiXk4VhzJmjVTKxM8EeLkttGQcEU3F5Jhn9esIDGUQvyZi_rSMbUrlNiCLumw6l0eGuC-TwCt8arx7KEMi2MDRe3RFnED3sAGUyzJm_F37s2wMmiwk4V4Yc4dWzVDnNVroCoRP8qb0YRRFL6aqzert5Em_EMxPlsIC6FdLkj7Sc_AIAB2k-4emnjFXZC0E7r7rLZ_vrpmYbW3KFetCbGa9LLGB4hYn4hYsAJ7nn8tdlZSZMqdlP_TYI8WrRoV6f-wToBQag7YAFA-ru3Jb2VamhLg7XrERwRdlsz3AR5p9AMtqHmGTW7dospALlXz9kB3Fn0m5wWwUBkqxQOd4QRsYlqtnxe5xS1_OyNIlif6F6aFrsn45YPpHYmMHveNHiyubEKfwa2ZEVykhlJ5rZcsbcvtuKTm3W8Rf5GbQbp6h1y_T0DsRS7yzgcz_grfJLCU-npuV5qvbeIf08Ky64Vv5ZHTWtVNSLztWxVLi2KdPG1pTVKAQ=w1366-h657-ft",
                'status' => 1,
                'sort_desc' => 1,
            ]
        );

        DB::table('slides')->insert(
            [
                'id' => 2,
                'name' => "Slide 2",
                'image' => "https://lh3.googleusercontent.com/fife/AAWUweXM-g7oalyn92DUGGk7SwaVls77cdqjcZ5ras9aWi4TVGvkXXAotjJQYZ21PyLWn8Xknuf2yYuiHQ06Voo8YXCBTlp74_GUn9m4J3dgIwZdn3mi8PUdTGoKul2wI2wcdOWujhfQ393pwhao464MBiZisnYcZXfZwT4UbvfgFDm08UNMElsOE93XfFMX7ASdJcabZadPW9xnJR7NIVvqTuHq0bFemXQEFvjW2BgvCn3xN8l8RX1H3hKm5UFmXRXTA3X1Qcns7ckNsFwWQ6eYnXmIHDvP-O0RF5e1LpQWzphFcPq1KUVX8De96HzWl1IiukhODrAx7b-keZPUKTl4flc0nS8JzNOMaasE2MM958KWD9NAP5zIkMozG5opy6D-eXm4pdHnLUIraXJIuEGa0XVnSpQMum9pMsbpkmkS1RkOdDIstlMZTEIdsfF3dl1x5rw7rGleAEYBhqifXz3j50qdFxNOSdCcsOt9JnSlfzcKYzxjXR-gpDdi9Z_CCEmAvvkcac_GzgjGOm9ef1DAypyGuv6vesvY9OHTb4DO5hnyGJ3LqW3Ymed2ZmHU7VRctGm5QKbHygD8CVlexGEgjp04O3OMeXR3OoThd8dCE2TGy1Q3fI1eK8v8QEMNpbk66ZtedBumfWtUMxmoHsgN1hje1ERtDN7SieCqpCMA4IcRm5LahlyoiSkgoGgHYmm7TOVGeXDyCyhmCv-e7UefVO7hC_DIVmzt3A=w1366-h657-ft",
                'status' => 1,
                'sort_desc' => 2,
            ]
        );

        DB::table('slides')->insert(
            [
                'id' => 3,
                'name' => "Slide 3",
                'image' => "https://lh3.googleusercontent.com/fife/AAWUweUiPTLY-vcE7ylnBKkoc7WfL3P2_ZlM4m97vPTuyisKnvPjfYaJpm5g2alBYSuVBsDIhLgKI8o_h4gXp1oiVyIZPh500WtBX9uht5Od2qqSQWX006j-2sxjjaBE2QoMP0QWAmoFeOKZHmjGArxsXqy_I8b0MPHGvFgr2ccSmFVTT67ioUpzUNJDcaDX3tKlS30oagDQletmd8iqcTpYxBgsat7lc_ap_rRU__wG1aYAe2V9tinqxxOea1hw5kgoWDzZUZ6bQROqYo_oSFs6rxa9ulLFp_ROryeOcxZjuRY-5ZS1rAOMIvh7OTyHQcpC1dC9y5kPM3NDaDQg4zsQfArqFMhUeHm9FTFLsJeIvW9Z3YySMjQzHubtkBJDpy-jKnqu3SkI2Uf-nm7w9QggO90pSXEmCgUpygDhhZx9gBULbtT8ODi4eGoSMZP6WDSRbRdzxMO7SxBSNSiGmRa91mdNaD-2bwLAwviLu77dmUPvizadkL5-k81vFF9UnP35w35Gnq4W5bU00MNaKRSiGIVUojRtlGW53rYSwoocxj0-fNReq6wqVp4I5htXkBokL3qKLerQdU1TipLl1JCkQdZgft5L3-fuhgR0ps5wIwrisVCPBpK9AQQqjJFH9cIE0STmC2J96xGinjOLy0VnHD-WCtNE_79DxAsZmfBqRsJfVWMMH24lFppuMoZByK8yC1EsxAKwxNRtc_bg6jqUg-ICO_50nlEMdA=w1366-h657-ft",
                'status' => 1,
                'sort_desc' => 3,
            ]
        );

        DB::table('abouts')->insert(
            [
                'title' => 'Giới thiệu',
                'image' => 'https://lh3.googleusercontent.com/fife/AAWUweU82TZUZDPD3dOyQGfA2BtIYreCTFi_Q9q3Y7J1w_BHh4PX3XYYztpK_j33KZbVg9tlD8jZqyWFHZCcNOOZgeI3lA_uwfTPcSYRa-eBIXnXYSf6rX1m0-kK8-ZPC4VH_l6DxqgXUY2bH8pVJNOwOPGct3r2Hnki356HKcdZZbPOrqioOOuyhY12pkvI0zkSjjKwWTysbEX7pjhwgv12EyFvEMoYr8PzPuE1Ioau2vjRqWDyScoPi7is09FP6CYAtz439WMhKw0lNZncSrHwTvwTRqohdkaWc2fpGFBnSndVZmcaPlNy8iKF9SfZTGEydrsD7LW3o20hATiKhLDPi5sgW6_WZJ2JX9uKVHdOuO3_ww3-PXC_oyedoyPAWBAwCdIR7Um_vub7eqZ31cugV5JfUK6A46RqIzJrwie1id6qnilPsfZium7XBY52oorp0sDyfdSJqqGOJQw9hpv7hfa5Kfjz1CIubGWGEqo8lhYAPAH5Su4HHFU9lGG7DtatndpCFtZnmJHB-57UoMaUNscKCp2-9WjJlz12HzAz_n4fj1kPw3Hsigb9KsPIn_lBzAuZANQY_l7qDG0_nmGfld9jCM2-d7zGnNZa3gxsPS6kLQY4HvQ5SklhEEzmaS4zyhnEfPb2elOIGclkRZmzqmA2LBeSG83mCvUmLb9LrGCcq10qGMkjKTktQBg2k3RZtKTluYFN18cFIJEYJAjfsaL4SCH2Bw8Tqg=w1366-h657-ft',
                'description' => "<p>Mình tạo ra Blog 'Bầu Trời Xanh' này với hy vọng chia sẻ những bức ảnh, câu chuyện, tip nhỏ.v.v. Đây như là một cuốn sổ nhật ký ghi lại hành trình trưởng thành của bản thân.<br>
                 Được ghi lại những kỷ niệm qua những bức ảnh, đó là điều mình rất thích từ khi còn nhỏ. Nó giúp mình có thêm niềm vui, động lực và theo thời gian thì mình cảm thấy mỗi bức hình mình chụp nó đều mang những ý nghĩa và giá trị riêng.<br>
                 Và một điều nữa, mình muốn bản thân cũng như mọi người: <span style='font-style: italic;'>'Hãy để mắt đến những vì sao và đôi chân của bạn trên mặt đất'</span>. Miễn là bạn đã có mục tiêu của mình, thì hãy cứ bước đi trên con đường đó, mọi sự cố gắng đều có kết quả thôi.</p>",
                'facebook_link' => 'https://www.facebook.com/bluesky2o02',
                'instagram_link' => 'https://www.instagram.com/thanh.duy.ng/',
                'skype_link' => '#',
                ]
        );

        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "HUẾ",
        //         'image' => "1634908861.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "ĐÀ NẴNG",
        //         'image' => "1634909782.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "HẢI VÂN QUAN",
        //         'image' => "1634908785.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "NHẬP NGŨ",
        //         'image' => "1634909221.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "INTERNSHIP 2021",
        //         'image' => "1634908885.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "VỀ TÔI",
        //         'image' => "1634909827.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "NHỮNG NGÀY MƯA",
        //         'image' => "1634982979.jpg",
        //         'status' => 1,
        //     ]
        // );
        // DB::table('new_categorys')->insert(
        //     [
        //         'name' => "COFFEE",
        //         'image' => "1634909753.jpg",
        //         'status' => 1,
        //     ]
        // );

        // DB::table('news')->insert(
        //     [
        //         'id_category_new' => 2,
        //         'name' => "Bình minh Đà Nẵng",
        //         'background_image' => "1634913060.jpg",
        //         'description' => 1,
        //         'address' => "Mân Thái-ĐN",
        //         'go_date' => "2021-10-21",
        //     ],

        // );
        // DB::table('news')->insert(
        //     [
        //         'id_category_new' => 2,
        //         'name' => "View mới ở Đà Nẵng",
        //         'background_image' => "1634913243.jpg",
        //         'address' => "HUẾ",
        //         'go_date' => "2021-10-21",
        //     ],

        // );
        // DB::table('news')->insert(
        //     [
        //         'id_category_new' => 1,
        //         'name' => "Chuyến đi chơi Cầu Vòm Đồn Cả",
        //         'background_image' => "1634913468.jpg",
        //         'address' => "MỸ KHÊ-ĐN",
        //         'go_date' => "2021-10-21",
        //     ],

        // );

        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "KOEG_IMG_8408.jpg",
        //         'id_new' => 1,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "OhMl_IMG_8433.jpg",
        //         'id_new' => 1,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "Rsn7_IMG_8432.jpg",
        //         'id_new' => 1,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "Ax4j_IMG_0385 (1).jpg",
        //         'id_new' => 2,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "Gedn_PicsArt_06-19-11.28.21.jpg",
        //         'id_new' => 2,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "K8TF_IMG_1724.jpg",
        //         'id_new' => 3,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "u76a_IMG_1666.jpg",
        //         'id_new' => 3,
        //     ],
        // );
        // DB::table('image_news')->insert(
        //     [
        //         'name_image' => "hlBT_IMG_0354.jpg",
        //         'id_new' => 2,
        //     ],
        // );
    }
}
