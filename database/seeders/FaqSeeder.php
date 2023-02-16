<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'Hoe print je een document vanaf je laptop bij de HZ?',
                'answer' => 'Document naar printer sturen, daarna pasje scannen en uit printen.',
                'link' => 'https://print.hz.nl/login.cfm?dest=index.cfm&'
            ],
            [
                'question' => 'Hoe scan je een document en stuur je het naar je laptop bij de HZ?',
                'answer' => 'scan je pasje leg je papieren op de printer een stuur het dan naar de persoon waar je het wilt hebben.',
                'link' => ''
            ],
            [
                'question' => 'Hoe kan ik iets kopen op de HZ webshop?',
                'answer' => 'Je logt in met je HZ account, gaat naar webshop en zoekt het product wat je wilt hebben en betaald.',
                'link' => 'https://webshop.hz.nl/WebshopApp/default.aspx?menu=082076044027019251066025111065201099237062130097'
            ],
            [
                'question' => 'Waar kan ik de laatste instructies vinden over wat te doen als je ziek bent / symptomen van COVID vertoont?',
                'answer' => 'Op het rijksoverheid',
                'link' => 'https://www.rijksoverheid.nl/onderwerpen/coronavirus-covid-19'
            ],
            [
                'question' => 'Hoe boek je een projectruimte in een van de vleugels?',
                'answer' => 'Ga naar hz boeken pagina en via daar kan je een ruimte boeken',
                'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/'
            ],
            [
                'question' => 'Wat zijn de instructies als u uw auto wilt parkeren op de HZ-parkeerplaats?',
                'answer' => 'Bij het pand zijn acht parkeerplaatsen: twee invalideplaatsen en plekken voor HZ-auto’s.
                             Je eigen auto kun je parkeren in de parkeergarage aan de Kousteensedijk 3 (tussen de Rechtbank en de Bibliotheek).
                             Op vertoon van de inrijkaart krijg je bij de HZ-receptie gratis een uitrijkaart.',
                'link' => ''
            ],
        ];

        foreach ($faqs as $faq) {
            DB::table('faqs')->insert($faq);
        }
    }
}
