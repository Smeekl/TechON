<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:39
 */
namespace Models;


Class productsModel extends \Core\Model
{
    private $products = array(
        array(
            'id'=>'1',
            'short_name'=>'Farberware_3.2-Quart_Oil',
            'name'=>'Farberware 3.2-Quart Oil-Less Multi-Functional Fryer',
            'price'=>'$55',
            'reviews'=>'115',
            'mark'=>'Farberware',
            'full_img'=>'https://i5.walmartimages.com/asr/ee8cb60f-a21a-4756-add1-93226907a056_1.52b85af2a96888e733b6f07612e89d76.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'ava'=>'https://i5.walmartimages.com/asr/ee8cb60f-a21a-4756-add1-93226907a056_1.52b85af2a96888e733b6f07612e89d76.jpeg?odnWidth=200&odnHeight=200&odnBg=ffffff',
            'qty_in_stock'=>'45',
            'description' => 'You can now cook faster, healthier meals thanks to the Farberware 3.2 Quart Oil-Less Multi-Functional Fryer. This advanced fryer is the perfect appliance to grill, bake, roast or fry family favorites like chicken, french fries, onion rings and even desserts. Using Rapid Hot Air Technology, it cooks foods to a golden and crispy finish using little to no oil, reducing fat and calories compared to traditional frying. This oil-less fryer features easy-to-use controls to set cooking time up to 30 minutes and temperature up to 400F. The 3.2-quart food basket fits up to 2 pounds of food and, thanks to the non-stick and dishwasher-safe food basket, youll spend less time cleaning and more time enjoying delicious meals. As an added bonus, youll receive a recipe book with 25 recipes. Your new favorite kitchen appliance is going to be the Farberware 3.2 Quart Oil-Less Multi-Functional Fryer.',
            'about' => array('Cook faster, healthier meals', 'Uses rapid hot air technology to cook food using little to no oil', 'Easy to use controls' , '3.2 quart basket fits up to 2 lbs of food', 'Food basket is non-stick and dishwasher-safe', 'Bonus recipe book with 25 recipes', 'Low odor, no mess'),

        ),

        array(
            'id'=>'2',
            'short_name'=>'SAMSUNG_Galaxy_Tab_E_9.6_16GB',
            'name'=>'SAMSUNG Galaxy Tab E 9.6" 16GB',
            'price'=>'$99',
            'reviews'=>'107',
            'mark'=>'Samsung',
            'full_img'=>'https://i5.walmartimages.com/asr/ee8cb60f-a21a-4756-add1-93226907a056_1.52b85af2a96888e733b6f07612e89d76.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'ava'=>'https://i5.walmartimages.com/asr/eea7b933-227b-4fad-b717-66fce905e065_8.307eba03e720164e251774de6b325e69.jpeg?odnWidth=200&odnHeight=200&odnBg=ffffff',
            'qty_in_stock'=>'35',
            'description' => 'Purchase a Samsung Galaxy Tab E 9.6" between 11/21/18 and 12/31/18 and get $25 in Google Play credit. Watch and play your favorites. Portable entertainment for everyone The Galaxy Tab E was made to go wherever you go and do whatever you want to do. From watching a movie with the family at home to reading a best seller at the coffee shop, the big, bright screen keeps everyone entertained. Keep it all with you Enjoy more of your favorite music, photos, movies and games on the go with a microSD card* that expands your tablets memory from 16GB** to up to an additional 400GB. Capture more every day Make shareable moments better with the Galaxy Tab Es advanced camera features. Catch more in each photo with Panorama and Continuous Shot modes. Video chat from anywhere. And quickly toggle between camera and video modes. With the Galaxy Tab E, you wont miss a thing. Safe. Fun. Kid-Friendly. Kids Mode, available for free from Samsung Galaxy Essentials, gives parents peace of mind while providing a colorful, engaging place for kids to play. Easily manage what your kids access and how long they spend using it, all while keeping your own documents private. Premium content all in one place Customize your Galaxy Tab E with the apps you use most. The Samsung Galaxy Essentials widget provides a collection of premium, complimentary apps optimized for your tablet screen. Select and download the apps you want to upgrade your tablet experience. More reasons to love your tablet Get the most out of your Galaxy Tab E with the Samsung+ app. Along with one-touch access to customer support, youll discover device tips, a library of resources and more. Plus youll have access to great music and exclusive content. Samsung+ makes life with a tablet even better.',
            'about' => array('Android', 'Quad-Core (1.2GHz), Qualcomm APQ 8016', 'resolution (back): 5MP' , 'battery type: Li-Ion 7,300 mAh
', 'internal memory: 1.5GB RAM, 16GB ROM', 'wifi: Wi-Fi 802.11 a/b/g/n', 'main display resolution: 1280 x 800 pixels'),
        ),

        array(
            'id'=>'3',
            'short_name'=>'Fluxx_Watt_UL2272LED',
            'name'=>'Fluxx Watt UL2272 LED Hoverboard',
            'price'=>'$97',
            'reviews'=>'2',
            'mark'=>'Samsung',
            'full_img'=>'https://i5.walmartimages.com/asr/2f44f437-452d-462c-b47e-2599f46c6dcb_3.4174f52324a0f8a4f0d5d2ac57c4aa7c.png?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'ava'=>'https://i5.walmartimages.com/asr/2f44f437-452d-462c-b47e-2599f46c6dcb_3.4174f52324a0f8a4f0d5d2ac57c4aa7c.png?odnWidth=200&odnHeight=200&odnBg=ffffff',
            'qty_in_stock'=>'15',
            'description' => 'The FLUXX watt is the best entry level hoverboard available. It has all the features a new rider should look for, UL certification, Training mode and 400 WATTS of power! The unique design and fun LED lights make the FLUXX an awesome ride, the 6" wheels which have quickly become the standard for hoverboards are made of solid rubber for a smooth ride.',
            'about' => array('UL2272 Certified Safe! - Our batteries are Underwriter labs certified', 'Unique LED Lights! - Each Fluxx Watt Hoverboard has multiple LED lights to make your hover board look awesome and unique', 'Training Mode - Set the hover board to training mode to limit the speed so you can get used to controlling the self balancing scooter' , '200 Watt Dual Motors - Reach speeds of 6.5mph'),
        ),

        array(
            'id'=>'4',
            'short_name'=>'Microsoft_Xbox_One_X_1TB',
            'name'=>'Microsoft Xbox One X 1TB Console',
            'price'=>'$399',
            'reviews'=>'57',
            'mark'=>'Microsoft',
            'full_img'=>'https://i5.walmartimages.com/asr/1b1cd79d-cd43-4ad8-b79c-850a7e7e0d34_1.4c6589b0d40393a0d045594981c8e66b.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'ava'=>'https://i5.walmartimages.com/asr/1b1cd79d-cd43-4ad8-b79c-850a7e7e0d34_1.4c6589b0d40393a0d045594981c8e66b.jpeg?odnWidth=200&odnHeight=200&odnBg=ffffff',
            'qty_in_stock'=>'135',
            'description' => 'Games play better on Xbox One X. With 40% more power than any other console, experience immersive true 4K gaming. Blockbuster titles look great, run smoothly, and load quickly even on a 1080p screen. Xbox One X also works with all your Xbox One games and accessories as well as Xbox Live, the most advanced multiplayer network, giving you more ways to play.',
            'about' => array('Games play better on Xbox One X. Experience 40% more power than any other console', '6 teraflops of graphical processing power and a 4K Blu-ray player provides more immersive gaming and entertainment', 'Play with the greatest community of gamers on the most advanced multiplayer network' , 'Works with all your Xbox One games and accessories', 'Great for 1080p screensgames run smoothly, look great, and load quickly
 '),
        ),

        array(
            'id'=>'5',
            'short_name'=>'Sceptre_32_LED_TV',
            'name'=>'Sceptre 32" Class HD (720P) LED TV',
            'price'=>'$79',
            'reviews'=>'2807',
            'mark'=>'Sceptre',
            'full_img'=>'https://i5.walmartimages.com/asr/587e8a6f-6f44-45d1-81b7-2f66753b4610_2.fc0d5afbb58ec1fd983a0378788c4dc3.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'ava'=>'https://i5.walmartimages.com/asr/38ee580a-8e54-48fa-8f0d-4ca6be5b4c29_3.57548f072dc4d4eb3833b7b2837c5f35.jpeg?odnWidth=200&odnHeight=200&odnBg=ffffff',
            'qty_in_stock'=>'5',
            'description' => 'Escape into a world of splendid color and clarity with the X322BV-SR. Clear QAM tuner is included to make cable connection as easy as possible, without an antenna. HDMI input delivers the unbeatable combination of high-definition video and clear audio. A USB port comes in handy when you want to flip through all of your stored pictures and tune into your stored music. More possibilities: with HDMI, VGA, Component and Composite inputs, we offer a convenient balance between the old and new to suit your diverse preferences. ',
            'about' => array('Screen Size (Diag.): 31.5*', 'Backlight Type: LED', 'Resolution: 720p' , 'Effective Refresh Rate: 60Hz', 'Remote Control', 'Mount Pattern: 100mm x 100mm', 'Screw Length: 6mm'),
        ),

        array(
            'id'=>'6',
            'short_name'=>'Gold\'s_Gym_Trainer_720_Treadmill',
            'name'=>'Gold\'s Gym Trainer 720 Treadmill with Power Incline',
            'price'=>'$449',
            'reviews'=>'227',
            'mark'=>'Gold`s Gym',
            'full_img'=>'https://i5.walmartimages.com/asr/a297f9ae-45dd-4d7a-aa17-587a1292b357_1.6767a387542aa8a1d1e1b8aaa463b32b.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'ava'=>'https://i5.walmartimages.com/asr/a297f9ae-45dd-4d7a-aa17-587a1292b357_1.6767a387542aa8a1d1e1b8aaa463b32b.jpeg?odnWidth=200&odnHeight=200&odnBg=ffffff',
            'qty_in_stock'=>'14',
            'description' => 'Conquer your fitness goals with the Golds Gym Trainer 720 Treadmill. With 18 different workout apps designed by a certified personal trainer, you can automatically adjust your speed and incline with the quick touch of a button. And conveniently view all of your workout stats from your multi-window LED display, which shows stats like time, speed, distance, and calorie burn. A spacious 20 x 55 tread belt gives you plenty of room for those long runs. The Golds Gym Trainer 720 Treadmill also delivers a high performance, low impact workout with AirStride Cushioning built into the deck to reduce joint impact. Stay motivated and listen to your favorite playlist from your MP3 player with the music port built into your console. Additionally, stay cool and exercise longer, thanks to the built-in CoolAire workout fan. Treat yourself to a powerful workout and incredible performance with the Golds Gym Trainer 720 Treadmill.',
            'about' => array('Keep a close eye on all of your workout stats like time, speed, distance, and calorie burn', 'Never get bored with your workout by choosing one of the 18 workout apps designed by a certified personal trainer just for you', 'Plug your own mp3 device into the built-in sound system and stay motivated with your favorite workout playlists' , 'Raise your incline with the touch of a button to burn more calories and focus on specific muscles', 'Mix up your workout for varied intensity or accommodate users of different fitness levels with the machines speed range', 'The 55-inch length gives your legs plenty of room to stretch out your stride, and the 20-inch width allows your upper-body extra elbow room', 'Workout longer and stay cool while burning serious calories with the workout fan built right into your machines console'),
        ),

    );

    public function getSortArrayByLowest()
    {
            function array_sorter($key)
            {
                return function ($a, $b) use ($key) {
                    return strnatcmp($a[$key], $b[$key]);
                };
            }


        usort($this->products, array_sorter('price'));

        return $this->products;
    }

    public function getSortArrayByHighest()
    {
        function array_sorter($key)
        {
            return function ($a, $b) use ($key) {
                return strnatcmp($b[$key], $a[$key]);
            };
        }


        usort($this->products, array_sorter('price'));

        return $this->products;
    }




    public function getAll(){
        return $this->products;
    }
}
