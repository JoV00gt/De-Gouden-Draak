<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{

    public function run(): void
    {
        Dish::create(['item_number' => 1, 'addition' => 'A','name' => 'Soep Ling Fa', 'description' => null, 'price' => 3.80, 'dish' => 'Soep']);
        Dish::create(['item_number' => 2, 'addition' => 'A','name' => 'Kippensoep', 'description' => null, 'price' => 2.90, 'dish' => 'Soep']);
        Dish::create(['item_number' => 3, 'addition' => 'A','name' => 'Tomatensoep', 'description' => null, 'price' => 2.90, 'dish' => 'Soep']);
        Dish::create(['item_number' => 4, 'addition' => 'A','name' => 'Haaienvinnensoep', 'description' => null, 'price' => 3.10, 'dish' => 'Soep']);
        Dish::create(['item_number' => 5, 'addition' => 'A','name' => 'Champignonsoep', 'description' => null, 'price' => 3.30, 'dish' => 'Soep']);
        Dish::create(['item_number' => 6, 'addition' => 'A','name' => 'Pekingsoep', 'description' => null, 'price' => 3.80, 'dish' => 'Soep']);
        Dish::create(['item_number' => 7, 'addition' => 'A','name' => 'Wan Tan Soep', 'description' => null, 'price' => 4.30, 'dish' => 'Soep']);
        Dish::create(['item_number' => 8, 'addition' => 'A','name' => 'Chinese Champignonsoep', 'description' => null, 'price' => 4.10, 'dish' => 'Soep']);
        
        Dish::create(['item_number' => 1, 'addition' => 'B','name' => 'Loempia Ling Fa', 'description' => 'met atjar, ananas en pindasaus', 'price' => 6.20, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 2, 'addition' => 'B','name' => 'Loempia Compleet', 'description' => 'met gesmoord rundvlees en pikante saus', 'price' => 6.20, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 3, 'addition' => 'B','name' => 'Loempia met Kip', 'description' => null, 'price' => 3.90, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 4, 'addition' => 'B','name' => 'Loempia', 'description' => null, 'price' => 3.80, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 5, 'addition' => 'B','name' => 'Chinese mini loempia', 'description' => '4 st.', 'price' => 4.90, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 6, 'addition' => 'B','name' => 'Vegetarische mini loempia', 'description' => '12 st.', 'price' => 4.90, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 7, 'addition' => 'B','name' => 'Kroepoek', 'description' => null, 'price' => 2.50, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 8, 'addition' => 'B','name' => 'Casave Kroepoek', 'description' => null, 'price' => 2.70, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 9, 'addition' => 'B','name' => 'Pangsit Goreng', 'description' => '7 st.', 'price' => 3.90, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 10, 'addition' => 'B','name' => 'Pisang Goreng', 'description' => '5 st.', 'price' => 3.40, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 11, 'addition' => 'B','name' => 'Chinese Dim Sum', 'description' => 'mini loempia, kerry ko, pangsit goreng, garnalenpasteitje', 'price' => 5.40, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 12, 'addition' => 'B','name' => 'Saté Babi', 'description' => '4 st.', 'price' => 5.40, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 13, 'addition' => 'B','name' => 'Saté Ajam', 'description' => '4 st.', 'price' => 5.40, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 14, 'addition' => 'B','name' => 'Saté Garnalen', 'description' => '3 st.', 'price' => 9.90, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 15, 'addition' => 'B','name' => 'Fong Mei Ha', 'description' => 'krokant gepaneerd garnalen. 4 st.', 'price' => 8.10, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 16, 'addition' => 'B','name' => 'Patat', 'description' => null, 'price' => 2.30, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 17, 'addition' => 'B','name' => 'Tsa Siu Mai', 'description' => 'gebakken vleespasteitje. 4 st.', 'price' => 3.50, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 18, 'addition' => 'B','name' => 'Atjar', 'description' => null, 'price' => 3.00, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 19, 'addition' => 'B','name' => 'Witte Rijst', 'description' => null, 'price' => 3.00, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 20, 'addition' => 'B','name' => 'Grote pindasaus', 'description' => null, 'price' => 3.90, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 21, 'addition' => 'B','name' => 'Kleine pindasaus', 'description' => null, 'price' => 2.30, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 22, 'addition' => 'B','name' => 'Kippenpootje', 'description' => null, 'price' => 2.30, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 23, 'addition' => 'B','name' => 'Halve kip', 'description' => null, 'price' => 6.00, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 24, 'addition' => 'B','name' => 'Kroket', 'description' => null, 'price' => 1.40, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 25, 'addition' => 'B','name' => 'Frikandel', 'description' => null, 'price' => 1.40, 'dish' => 'Voorgerecht']);
        Dish::create(['item_number' => 26, 'addition' => 'B','name' => 'Kleine Sambal', 'description' => null, 'price' => 2.50, 'dish' => 'Voorgerecht']);
        
        Dish::create(['item_number' => 1, 'addition' => 'C','name' => 'Bami of Nasi Goreng Ling Fa', 'description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje', 'price' => 14.30, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 2, 'addition' => 'C','name' => 'Bami of Nasi Goreng met ei', 'description' => null, 'price' => 5.00, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 3, 'addition' => 'C','name' => 'Bami of Nasi Goreng speciaal', 'description' => null, 'price' => 8.50, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 4, 'addition' => 'C','name' => 'Bami of Nasi Goreng met sat&eacute;', 'description' => '3 st.', 'price' => 8.50, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 5, 'addition' => 'C','name' => 'Nasi Yeung Chow', 'description' => null, 'price' => 10.90, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 6, 'addition' => 'C','name' => 'Nasi Yeung Chow', 'description' => 'met garnaaltjes en Cha Sieuw-vlees', 'price' => 13.00, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 7, 'addition' => 'C','name' => 'Bami of Nasi Malay', 'description' => null, 'price' => 9.30, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 8, 'addition' => 'C','name' => 'Bami of Nasi met kipfilet', 'description' => null, 'price' => 9.30, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 9, 'addition' => 'C','name' => 'Bami of Nasi met varkensvlees', 'description' => null, 'price' => 9.30, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 10, 'addition' => 'C','name' => 'Bami of Nasi met garnalen', 'description' => null, 'price' => 14.30, 'dish' => 'Bami en Nasi Gerechten']);
        Dish::create(['item_number' => 11, 'addition' => 'C','name' => 'Bami of Nasi met ossenhaas', 'description' => null, 'price' => 15.30, 'dish' => 'Bami en Nasi Gerechten']);  
        
        Dish::create(['item_number' => 1, 'addition' => 'D','name' => 'Babi Pangang, Foe Yong Hani en saté', 'description' => null, 'price' => 15.80, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'D','name' => 'Babi Pangang, Tjap Tjoy en saté', 'description' => null, 'price' => 15.80, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'D','name' => 'Babi Pangang, Koe Loe Yuk en saté', 'description' => null, 'price' => 15.80, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'D','name' => 'Babi Pangang, Tau Sie Kai en saté', 'description' => null, 'price' => 16.50, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'D','name' => 'Koe Loe Yuk, Foe Yong Hai en saté', 'description' => null, 'price' => 15.80, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'D','name' => 'Koe Loe Yuk, Tjap Tjoy en saté', 'description' => null, 'price' => 15.80, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 7, 'addition' => 'D','name' => 'Foe Yong Hai, Tjap Tjoy en saté', 'description' => null, 'price' => 15.80, 'dish' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 8, 'addition' => 'D','name' => 'Foe Yong Hai, Kip Kerrie en Saté', 'description' => null, 'price' => 16.50, 'dish' => 'Combinatie Gerechten (met witte rijst)']);     
        
        Dish::create(['item_number' => 1, 'addition' => 'E','name' => 'Mihoen Ling Fa', 'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje', 'price' => 16.4, 'dish' => 'Mihoen Gerechten']);
        Dish::create(['item_number' => 2, 'addition' => 'E','name' => 'Mihoen met varkensvlees', 'description' => null, 'price' => 9.30, 'dish' => 'Mihoen Gerechten']);
        Dish::create(['item_number' => 3, 'addition' => 'E','name' => 'Mihoen met kipfilet', 'description' => null, 'price' => 10.40, 'dish' => 'Mihoen Gerechten']);
        Dish::create(['item_number' => 4, 'addition' => 'E','name' => 'Mihoen met ossenhaas', 'description' => null, 'price' => 16.4, 'dish' => 'Mihoen Gerechten']);
        Dish::create(['item_number' => 5, 'addition' => 'E','name' => 'Mihoen met garnalen', 'description' => null, 'price' => 15.30, 'dish' => 'Mihoen Gerechten']);
        Dish::create(['item_number' => 6, 'addition' => 'E','name' => 'Mihoen Singapore-style', 'description' => 'met kleine garnaaltjes en Cha Sieuw-vlees en kerrie poeder', 'price' => 11.90, 'dish' => 'Mihoen Gerechten']);
        Dish::create(['item_number' => 7, 'addition' => 'E','name' => 'Mihoen met Cha Sieuw vlees', 'description' => null, 'price' => 11.20, 'dish' => 'Mihoen Gerechten']);
        
        Dish::create(['item_number' => 1, 'addition' => 'F','name' => 'Chinese Bami Ling Fa', 'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje', 'price' => 16.90, 'dish' => 'Chinese Bami Gerechten']);
        Dish::create(['item_number' => 2, 'addition' => 'F','name' => 'Chinese Bami met varkensvlees', 'description' => null, 'price' => 10.10, 'dish' => 'Chinese Bami Gerechten']);
        Dish::create(['item_number' => 3, 'addition' => 'F','name' => 'Chinese Bami met kipfilet', 'description' => null, 'price' => 11.20, 'dish' => 'Chinese Bami Gerechten']);
        Dish::create(['item_number' => 4, 'addition' => 'F','name' => 'Chinese Bami met Cha Sieuw-vlees', 'description' => null, 'price' => 12.20, 'dish' => 'Chinese Bami Gerechten']);
        Dish::create(['item_number' => 5, 'addition' => 'F','name' => 'Chinese Bami met garnalen', 'description' => null, 'price' => 15.80, 'dish' => 'Chinese Bami Gerechten']);
        Dish::create(['item_number' => 6, 'addition' => 'F','name' => 'Chinese Bami met ossenhaas', 'description' => null, 'price' => 17.4, 'dish' => 'Chinese Bami Gerechten']);
        
        Dish::create(['item_number' => 1, 'addition' => 'G','name' => 'Bami of Nasi Rames Ling Fa', 'description' => 'Babi Pangan, Foe Yong Hai, Daging Roedjak, Atjar en kippootje', 'price' => 15.30, 'dish' => 'Indische Gerechten']);
        Dish::create(['item_number' => 2, 'addition' => 'G','name' => 'Bami of Nasi Rames', 'description' => null, 'price' => 8.80, 'dish' => 'Indische Gerechten']);
        Dish::create(['item_number' => 3, 'addition' => 'G','name' => 'Bami of Nasi Rames speciaal', 'description' => null, 'price' => 10.80, 'dish' => 'Indische Gerechten']);
        Dish::create(['item_number' => 4, 'addition' => 'G','name' => 'Gado Gado', 'description' => 'met witte rijst', 'price' => 7.60, 'dish' => 'Indische Gerechten']);
        Dish::create(['item_number' => 5, 'addition' => 'G','name' => 'Daging Smoor', 'description' => 'met witte rijst', 'price' => 13.30, 'dish' => 'Indische Gerechten']);
        Dish::create(['item_number' => 6, 'addition' => 'G','name' => 'Daging Roedjak', 'description' => 'met witte rijst', 'price' => 13.30, 'dish' => 'Indische Gerechten']);
        
        Dish::create(['item_number' => 1, 'addition' => 'H','name' => 'Foe Yong Hai Ling Fa', 'description' => 'ossenhaas, garnalen en kipfilet', 'price' => 16.4, 'dish' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'H','name' => 'Foe Yong Hai met varkensvlees', 'description' => null, 'price' => 8.80, 'dish' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'H','name' => 'Foe Yong Hai met kipfilet', 'description' => null, 'price' => 9.20, 'dish' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'H','name' => 'Foe Yong Hai met garnalen', 'description' => null, 'price' => 15.30, 'dish' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'H','name' => 'Foe Yong Hai met krab', 'description' => null, 'price' => 15.30, 'dish' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'H','name' => 'Foe Yong Hai met Cha Sieuw Vlees', 'description' => null, 'price' => 11.20, 'dish' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['item_number' => 7, 'addition' => 'H','name' => 'Foe Yong Hai met ossenhaas', 'description' => null, 'price' => 16.4, 'dish' => 'Eiergerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'I','name' => 'Tjap Tjoy Ling Fa', 'description' => 'ossenhaas, garnalen en kipfilet', 'price' => 16.4, 'dish' => 'Groenten Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'I','name' => 'Tjap Tjoy met varkensvlees', 'description' => null, 'price' => 8.80, 'dish' => 'Groenten Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'I','name' => 'Tjap Tjoy met kipfilet', 'description' => null, 'price' => 9.20, 'dish' => 'Groenten Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'I','name' => 'Tjap Tjoy met ossenhaas', 'description' => null, 'price' => 16.4, 'dish' => 'Groenten Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'I','name' => 'Tjap Tjoy met garnalen', 'description' => null, 'price' => 15.30, 'dish' => 'Groenten Gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'J','name' => 'Babi Pangang', 'description' => null, 'price' => 12.20, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'J','name' => 'Babi Pangang in ketjapsaus', 'description' => null, 'price' => 12.30, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'J','name' => 'Cha Sieuw', 'description' => 'rood geroosterd varkensvlees', 'price' => 13.30, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'J','name' => 'Cha Sieuw in pikante saus', 'description' => null, 'price' => 13.80, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'J','name' => 'Geroosterde speenvarken', 'description' => null, 'price' => 13.80, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'J','name' => 'Koe Loe Yuk', 'description' => 'bolletjes vlees met zoetzure saus', 'price' => 11.90, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 7, 'addition' => 'J','name' => 'Varkenshaas met kerriesaus', 'description' => null, 'price' => 11.90, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 8, 'addition' => 'J','name' => 'Varkenshaas met ketjapsaus', 'description' => null, 'price' => 11.90, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 9, 'addition' => 'J','name' => 'Varkenshaas met tomatensaus', 'description' => null, 'price' => 11.90, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 10, 'addition' => 'J','name' => 'Varkenshaas met champignons in knoflooksaus', 'description' => null, 'price' => 11.90, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 11, 'addition' => 'J','name' => 'Varkenshaas met Chinese champignons', 'description' => null, 'price' => 12.20, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 12, 'addition' => 'J','name' => 'Varkenshaas met zwarte bonensaus', 'description' => null, 'price' => 12.20, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 13, 'addition' => 'J','name' => 'Varkenshaas met verse ananas in zoetzure saus', 'description' => null, 'price' => 13.30, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 14, 'addition' => 'J','name' => 'Yu Sian Yuk', 'description' => 'varkenshaas met licht zoet pikante kruiden saus', 'price' => 13.30, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 15, 'addition' => 'J','name' => 'SzeChuan Yuk', 'description' => 'varkenshaas met pittige kruiden saus', 'price' => 13.30, 'dish' => 'Vlees Gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'K','name' => 'Ajam Pangang', 'description' => null, 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'K','name' => 'Ajam Pangang in ketjapsaus', 'description' => null, 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'K','name' => 'Koe Loe Kai', 'description' => 'bolletjes kip met zoetzure saus', 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'K','name' => 'Kipfilet met kerriesaus', 'description' => null, 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'K','name' => 'Kipfilet met champignons in knoflooksaus', 'description' => null, 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'K','name' => 'Kipfilet met tomatensaus', 'description' => null, 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 7, 'addition' => 'K','name' => 'Kipfilet met ketjapsaus', 'description' => null, 'price' => 13, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 8, 'addition' => 'K','name' => 'Kipfilet met broccoli in knoflooksaus', 'description' => null, 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 9, 'addition' => 'K','name' => 'Kipfilet met Chinese champignons', 'description' => null, 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 10, 'addition' => 'K','name' => 'Kipfilet met zwarte pepersaus', 'description' => null, 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 11, 'addition' => 'K','name' => 'Kipfilet met verse ananas in zoetzure saus', 'description' => null, 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 13, 'addition' => 'K','name' => 'Tjieuw Yem Kai', 'description' => 'licht gebraden kipfilet met zout en peper', 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 14, 'addition' => 'K','name' => 'Yao Koe Kai', 'description' => 'kipfilet met cashewnoten in licht pikante saus', 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 15, 'addition' => 'K','name' => 'Lychee Kai', 'description' => 'licht gebraden kipfilet met lychee in zoetzure saus', 'price' => 13.80, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 16, 'addition' => 'K','name' => 'Yu Sian Kai', 'description' => 'kipfilet met licht zoet pikante kruidensaus', 'price' => 13.30, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 17, 'addition' => 'K','name' => 'Sze Chuan Kai', 'description' => 'kipfilet met pittige kruidensaus', 'price' => 13.80, 'dish' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 18, 'addition' => 'K','name' => 'Kung Bao Kai', 'description' => 'kipfilet met cashewnoten in pittige saus', 'price' => 13.80, 'dish' => 'Kip Gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'L','name' => 'Garnalen met champignons in knoflooksaus', 'description' => null, 'price' => 15.90, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'L','name' => 'Garnalen met tomatensaus', 'description' => null, 'price' => 15.90, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'L','name' => 'Garnalen met ketjapsaus', 'description' => null, 'price' => 15.90, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'L','name' => 'Garnalen met broccoli', 'description' => null, 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'L','name' => 'Garnalen met kerriesaus', 'description' => null, 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'L','name' => 'Garnalen met Chinese champignons', 'description' => null, 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 7, 'addition' => 'L','name' => 'Garnalen met zwarte pepersaus', 'description' => null, 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 8, 'addition' => 'L','name' => 'Garnalen met chilisaus', 'description' => null, 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 9, 'addition' => 'L','name' => 'Yu Sian Haa', 'description' => 'garnalen met licht zoet pikante kruidensaus', 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 10, 'addition' => 'L','name' => 'Tjieuw Yem Haa', 'description' => 'licht gebraden garnalen met zout en peper', 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 11, 'addition' => 'L','name' => 'Tja Tai Haa', 'description' => 'krokant gebakken garnalen', 'price' => 16.10, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 12, 'addition' => 'L','name' => 'Sze Chuan Haa', 'description' => null, 'price' => 16.4, 'dish' => 'Garnalen Gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'M','name' => 'Ossenhaas met chanpignons in knoflooksaus', 'description' => null, 'price' => 16.90, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'M','name' => 'Ossenhaas met tomatensaus', 'description' => null, 'price' => 16.90, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'M','name' => 'Ossenhaas met ketjapsaus', 'description' => null, 'price' => 16.90, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'M','name' => 'Ossenhaas met broccoli', 'description' => null, 'price' => 17.10, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'M','name' => 'Ossenhaas met Chinese champignons', 'description' => null, 'price' => 17.10, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'M','name' => 'Ossenhaas met kerriesaus', 'description' => null, 'price' => 17.10, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 7, 'addition' => 'M','name' => 'Ossenhaas met zwarte bonensaus', 'description' => null, 'price' => 17.10, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 8, 'addition' => 'M','name' => 'Ossenhaas met zwarte pepersaus', 'description' => null, 'price' => 17.10, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 9, 'addition' => 'M','name' => 'Yu Sian Ngau Yuk', 'description' => 'ossenhaas met licht zoet pikante kruidensaus', 'price' => 17.10, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 10, 'addition' => 'M','name' => 'Sze Chuan Ngau Yuk', 'description' => 'ossenhaas met pittige kruidensaus', 'price' => 17.4, 'dish' => 'Ossenhaas Gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'N','name' => 'Visfilet met kerriesaus', 'description' => null, 'price' => 14.50, 'dish' => 'Vissen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'N','name' => 'Visfilet met oestersaus', 'description' => null, 'price' => 14.50, 'dish' => 'Vissen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'N','name' => 'Visfilet met zoetzure saus', 'description' => 'licht gebraden visfilet in zoete pikante saus', 'price' => 14.50, 'dish' => 'Vissen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'N','name' => 'Hong Shau Yu', 'description' => 'licht gebraden visfilet in zoete pikante saus', 'price' => 14.50, 'dish' => 'Vissen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'N','name' => 'Tjeuw Yem Yu', 'description' => 'licht gebraden visfilet met zout en peper', 'price' => 15, 'dish' => 'Vissen Gerechten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'N','name' => 'San Sching Po', 'description' => 'visfilet, garnalen, krab en groenten in knoflooksaus', 'price' => 16.10, 'dish' => 'Vissen Gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'P','name' => 'Geroosterde Peking Eend', 'description' => null, 'price' => 16.60, 'dish' => 'Peking Eend (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'P','name' => 'Peking Eend met verse ananas in zoetzure saus', 'description' => null, 'price' => 17.10, 'dish' => 'Peking Eend (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'P','name' => 'Peking Eend met Chinese champignons in oestersaus', 'description' => null, 'price' => 17.10, 'dish' => 'Peking Eend (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'P','name' => 'Yu Sian Ya', 'description' => 'peking eend met licht zoet pikante kruidensaus', 'price' => 17.10, 'dish' => 'Peking Eend (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'O','name' => 'Tiepan Ling Fa', 'description' => 'garnalen, kipfilet, ossenhaas en groenten in zwarte pepersaus', 'price' => 17.90, 'dish' => 'Tiepan Specialiteiten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'O','name' => 'Tiepan Kai', 'description' => 'licht gebraden kipfilet en groenten met zoet pikante saus', 'price' => 15.30, 'dish' => 'Tiepan Specialiteiten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'O','name' => 'Tiepan San Yuk', 'description' => 'lichtgrbaden varkenshaas, kipfilet, ossenhaas en groenten met zoet pikante saus', 'price' => 17.10, 'dish' => 'Tiepan Specialiteiten (met witte rijst)']);
        Dish::create(['item_number' => 4, 'addition' => 'O','name' => 'Tiepan Haa', 'description' => 'garnalen en groenten met zoet pikante saus', 'price' => 17.4, 'dish' => 'Tiepan Specialiteiten (met witte rijst)']);
        Dish::create(['item_number' => 5, 'addition' => 'O','name' => 'Tiepan Ngau Yuk', 'description' => '5st. ossenhaas en groenten met zoet pikante saus', 'price' => 19.50, 'dish' => 'Tiepan Specialiteiten (met witte rijst)']);
        Dish::create(['item_number' => 6, 'addition' => 'O','name' => 'Tau Fu Po', 'description' => 'sojakaas, cha sieuw garnalen en chinese paddenstoelen', 'price' => 15.30, 'dish' => 'Tiepan Specialiteiten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'Q','name' => 'Vegetarische Tjap Tjoy', 'description' => null, 'price' => 8.30, 'dish' => 'Vegetarische gerechten (met witte rijst)']);
        Dish::create(['item_number' => 2, 'addition' => 'Q','name' => 'Lo Han Zhai', 'description' => 'sojakaas, Chinese paddenstoelen en groenten in knoflooksaus', 'price' => 11.20, 'dish' => 'Vegetarische gerechten (met witte rijst)']);
        Dish::create(['item_number' => 3, 'addition' => 'Q','name' => 'Vegetarische Foe Yong Hai', 'description' => null, 'price' => 8.30, 'dish' => 'Vegetarische gerechten (met witte rijst)']);
        
        Dish::create(['item_number' => 1, 'addition' => 'S','name' => 'Frites, saté (2st.) en ei', 'description' => null, 'price' => 6.50, 'dish' => 'Kindermenu']);
        Dish::create(['item_number' => 2, 'addition' => 'S','name' => 'Frites, kippootje en ei', 'description' => null, 'price' => 6.50, 'dish' => 'Kindermenu']);
        Dish::create(['item_number' => 3, 'addition' => 'S','name' => 'Frites, mini loempia (2st.) en ei', 'description' => null, 'price' => 6.50, 'dish' => 'Kindermenu']);
        Dish::create(['item_number' => 4, 'addition' => 'S','name' => 'Kinder Bami of Nasi met saté (2st.) en ei', 'description' => null, 'price' => 6.50, 'dish' => 'Kindermenu']);
        
        Dish::create(['item_number' => 1, 'addition' => 'R','name' => 'Indische rijsttafel (voor 1 persoon)', 'description' => 'Gado gado, Foe Yong Hai, saté, Daging Roedjak, Daging Smoor, Ajam Ketjap, Atjar, Pisang Goreng, Pindas en Cocos', 'price' => 16.4, 'dish' => 'Rijsttafels']);
        Dish::create(['item_number' => 2, 'addition' => 'R','name' => 'Indische rijsttafel vanaf 2 personen... Per persoon', 'description' => 'Ajam Ketjap, Gado Gado, Daging Smoor, Kroepoek, Daging Roedjak, Foe Yong Hai, Saté, Sambal Goreng Boontjes, Sambal Goreng Kering, Atjar, Pisang Goreng, Pinda en Cocos', 'price' => 15, 'dish' => 'Rijsttafels']);
        Dish::create(['item_number' => 3, 'addition' => 'R','name' => 'Chinese Indische Rijsttafel vanaf 4 personen... per persoon', 'description' => 'Foe Yong Hai, Babi Pangang, Tjap Tjoy, Koe Loe Yuk, Ajam Ketjap, Daging Smoor, Daging Roedjak, Saté, Ei, Kroepoek, Sambal Goeren boontjes, Atjar, Pisang Goreng, Pinda en Cocos', 'price' => 16.50, 'dish' => 'Rijsttafels']);
        Dish::create(['item_number' => 4, 'addition' => 'R','name' => 'Chinese Rijsttafel vanaf 2 personen... per persoon', 'description' => 'Kippen- of Tomatensoep, Tjap Tjoy met kipfilet, Koe Loe Yuk, Gebakken garnalen, Babi Pangang, Foe Yong Hai, saté, kroepoek', 'price' => 17, 'dish' => 'Rijsttafels']);
        Dish::create(['item_number' => 5, 'addition' => 'R','name' => 'Kantones Rijsttafel vanaf 2 personen... per persoon', 'description' => 'Wan Tan soep, Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pasteitje), Geroosterde Peking Eend, Lychee Kai (licht gebraden kipfilet met lychee in zoetzure saus), Tau Sie Haa (garnalen met zwarte bonensaus)', 'price' => 23, 'dish' => 'Rijsttafels']);
        Dish::create(['item_number' => 6, 'addition' => 'R','name' => 'Sze Chuan Rijsttafel vanaf 2 personen... per persoon', 'description' => 'Peking Soep (pittige lichtzure soep), Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pastei(tje), Tjieuw Yem Kai (licht gebakken kipfilet met zout en peper), Lychee Yuk (licht gebraden varkensvlees met lychee in zoetzure saus), Yu Sian Ngau Yuk (ossenhaas met licht zoet pikante kruiden saus)', 'price' => 23, 'dish' => 'Rijsttafels']);
        
        Dish::create(['item_number' => 1, 'addition' => 'T','name' => 'Buffet Menu A, per persoon', 'description' => 'Mini Loempia\'s, Pisang Goreng, Babi Pangang, Koe Loe Yuk, Foe Yong Hai, Kipfilet met zwarte bonensaus, Tjap Tjoy met kipfilet, saté Ajam', 'price' => 12.80, 'dish' => 'Buffet']);
        Dish::create(['item_number' => 2, 'addition' => 'T','name' => 'Buffet Menu B, per persoon', 'description' => 'Mini Loempia\'s, Pisang Goreng, Babi Pangang, Foe Yong Hai, Kung Bao Kai, Hong Shau Yu, saté Ajam, Ossenhaas met zwarte bonensaus, Kipfilet met kerriesaus', 'price' => 15, 'dish' => 'Buffet']);
        
        Dish::create(['item_number' => 1, 'addition' => 'U','name' => 'Bami of Nasi Goreng ipv rijst', 'description' => null, 'price' => 0.90, 'dish' => 'Diversen']);
        Dish::create(['item_number' => 2, 'addition' => 'U','name' => 'Mihoen Goreng ipv rijst', 'description' => null, 'price' => 2.50, 'dish' => 'Diversen']);
        Dish::create(['item_number' => 3, 'addition' => 'U','name' => 'Chinese Bami ipv rijst', 'description' => null, 'price' => 2.50, 'dish' => 'Diversen']);
        

    }
}
