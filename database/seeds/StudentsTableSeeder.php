<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $students = [
                [
                    "surname"     => "Dare",
                    "firstname"   => "Koby",
                    "nationality" => "UK",
                    "email"       => "Astrid@salma.com",
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Dicki",
                    "firstname"   => "Kelli",
                    "nationality" => "UK",
                    "email"       => "Ivory@ashtyn.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Carter",
                    "firstname"   => "Golden",
                    "nationality" => "UK",
                    "email"       => "Ari@flo.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Koch",
                    "firstname"   => "Emory",
                    "nationality" => "UK",
                    "email"       => "Gene_Hilpert@laurie.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kilback",
                    "firstname"   => "Marjorie",
                    "nationality" => "Dominican Republic",
                    "email"       => "Antonia.Hauck@giuseppe.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Hoeger",
                    "firstname"   => "Ernest",
                    "nationality" => "Panama",
                    "email"       => "Maritza_Mann@abelardo.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Hudson",
                    "firstname"   => "Rebecca",
                    "nationality" => "Chile",
                    "email"       => "Reynold_Ferry@bennett.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Hirthe",
                    "firstname"   => "Josefina",
                    "nationality" => "Kyrgyzstan",
                    "email"       => "Augustine@cassie.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Ebert",
                    "firstname"   => "Wanda",
                    "nationality" => "Palau",
                    "email"       => "Amina.Farrell@charlie.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Denesik",
                    "firstname"   => "Burnice",
                    "nationality" => "Kuwait",
                    "email"       => "Tyrese@don.ca"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Moen",
                    "firstname"   => "Harold",
                    "nationality" => "Vatican City",
                    "email"       => "Neil@merlin.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Spencer",
                    "firstname"   => "Brennon",
                    "nationality" => "Cambodia",
                    "email"       => "Alexandria@eva.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Ziemann",
                    "firstname"   => "Stanley",
                    "nationality" => "Azerbaijan",
                    "email"       => "Micaela@millie.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Rempel",
                    "firstname"   => "Forest",
                    "nationality" => "Seychelles",
                    "email"       => "Chyna_Nolan@elody.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Zboncak",
                    "firstname"   => "Gregory",
                    "nationality" => "Kazakhstan",
                    "email"       => "Annamae_Runte@soledad.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Weimann",
                    "firstname"   => "Valentine",
                    "nationality" => "Turks and Caicos Islands",
                    "email"       => "Jeromy_Blick@katrine.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Waelchi",
                    "firstname"   => "Alexandria",
                    "nationality" => "People's Democratic Republic of Yemen",
                    "email"       => "Everette_Torphy@halle.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Altenwerth",
                    "firstname"   => "Florian",
                    "nationality" => "Wake Island",
                    "email"       => "Adelbert.Ryan@francisca.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Zieme",
                    "firstname"   => "Faye",
                    "nationality" => "Guatemala",
                    "email"       => "Joannie.Brown@sigurd.co.uk"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Beatty",
                    "firstname"   => "Raleigh",
                    "nationality" => "British Antarctic Territory",
                    "email"       => "Alessandra_Hayes@jamal.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kuhic",
                    "firstname"   => "Dolly",
                    "nationality" => "Paraguay",
                    "email"       => "Sonny@golda.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Koepp",
                    "firstname"   => "Mikel",
                    "nationality" => "Liberia",
                    "email"       => "Rosella@cruz.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Pfannerstill",
                    "firstname"   => "May",
                    "nationality" => "Puerto Rico",
                    "email"       => "Dave@carlee.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Douglas",
                    "firstname"   => "Otho",
                    "nationality" => "Denmark",
                    "email"       => "Walter@karley.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Conroy",
                    "firstname"   => "Napoleon",
                    "nationality" => "Afghanistan",
                    "email"       => "Charley.Orn@frances.co.uk"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Doyle",
                    "firstname"   => "Elza",
                    "nationality" => "Liechtenstein",
                    "email"       => "Isobel@simone.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Schulist",
                    "firstname"   => "Maci",
                    "nationality" => "United States",
                    "email"       => "Reginald.Klein@keshawn.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Hansen",
                    "firstname"   => "Kyler",
                    "nationality" => "Canada",
                    "email"       => "Lorine@rebeka.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Conn",
                    "firstname"   => "Jean",
                    "nationality" => "Kiribati",
                    "email"       => "Zackary.Dickinson@gonzalo.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Yost",
                    "firstname"   => "Reilly",
                    "nationality" => "South Africa",
                    "email"       => "Herman@avis.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Quigley",
                    "firstname"   => "Shad",
                    "nationality" => "Bhutan",
                    "email"       => "Roy@judah.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Quitzon",
                    "firstname"   => "Beatrice",
                    "nationality" => "Timor-Leste",
                    "email"       => "Jana@herta.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Langworth",
                    "firstname"   => "Lonny",
                    "nationality" => "New Zealand",
                    "email"       => "Sophia.Paucek@jamir.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kiehn",
                    "firstname"   => "Rosalinda",
                    "nationality" => "Dominican Republic",
                    "email"       => "Gia@nestor.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Parker",
                    "firstname"   => "Rebekah",
                    "nationality" => "Kyrgyzstan",
                    "email"       => "Faustino@shane.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kuhlman",
                    "firstname"   => "Rhoda",
                    "nationality" => "Gibraltar",
                    "email"       => "Roel@kianna.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Cruickshank",
                    "firstname"   => "Judd",
                    "nationality" => "Macau SAR China",
                    "email"       => "Bell@buddy.co.uk"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Yundt",
                    "firstname"   => "Sarah",
                    "nationality" => "Papua New Guinea",
                    "email"       => "Marcia@noe.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Pacocha",
                    "firstname"   => "Russ",
                    "nationality" => "Greenland",
                    "email"       => "Shakira_Kessler@moriah.co.uk"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Purdy",
                    "firstname"   => "Kali",
                    "nationality" => "Mauritania",
                    "email"       => "Ignatius@madison.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Block",
                    "firstname"   => "Janick",
                    "nationality" => "Belarus",
                    "email"       => "Lamont@david.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Waelchi",
                    "firstname"   => "Ford",
                    "nationality" => "Paraguay",
                    "email"       => "Marta.Grimes@malinda.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Batz",
                    "firstname"   => "Francesca",
                    "nationality" => "Netherlands Antilles",
                    "email"       => "Janie.Klocko@dallin.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Rogahn",
                    "firstname"   => "Lukas",
                    "nationality" => "Cape Verde",
                    "email"       => "Gage.Willms@ruben.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Funk",
                    "firstname"   => "Wilhelmine",
                    "nationality" => "Zimbabwe",
                    "email"       => "Daphne@darryl.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Nader",
                    "firstname"   => "Jude",
                    "nationality" => "Panama Canal Zone",
                    "email"       => "Payton@rupert.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Stroman",
                    "firstname"   => "Frankie",
                    "nationality" => "Saint Martin",
                    "email"       => "Saul@gia.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Jaskolski",
                    "firstname"   => "Mina",
                    "nationality" => "Bermuda",
                    "email"       => "Amos_Effertz@jennie.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Zieme",
                    "firstname"   => "Mack",
                    "nationality" => "Uzbekistan",
                    "email"       => "Martin@isabelle.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Tromp",
                    "firstname"   => "Celestine",
                    "nationality" => "Peru",
                    "email"       => "Loy@evalyn.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Nitzsche",
                    "firstname"   => "Zella",
                    "nationality" => "New Zealand",
                    "email"       => "Bridgette@gordon.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kuphal",
                    "firstname"   => "Ila",
                    "nationality" => "Maldives",
                    "email"       => "Terrance.Rowe@mario.co.uk"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Cruickshank",
                    "firstname"   => "Eda",
                    "nationality" => "Jamaica",
                    "email"       => "Abelardo@elza.ca"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Koepp",
                    "firstname"   => "Jaylen",
                    "nationality" => "Monaco",
                    "email"       => "Norbert@kristian.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kohler",
                    "firstname"   => "Kristina",
                    "nationality" => "Russia",
                    "email"       => "Aidan@nona.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Ondricka",
                    "firstname"   => "Sean",
                    "nationality" => "Turks and Caicos Islands",
                    "email"       => "Kristin.Rolfson@madelyn.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Leuschke",
                    "firstname"   => "Estelle",
                    "nationality" => "Niue",
                    "email"       => "Chauncey.Hoeger@jeramie.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Funk",
                    "firstname"   => "Roselyn",
                    "nationality" => "Djibouti",
                    "email"       => "Korbin@hallie.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Romaguera",
                    "firstname"   => "Kariane",
                    "nationality" => "Djibouti",
                    "email"       => "Jocelyn_Fadel@lauryn.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Nitzsche",
                    "firstname"   => "Adrian",
                    "nationality" => "Guernsey",
                    "email"       => "Markus.Gulgowski@nicolas.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Windler",
                    "firstname"   => "Maggie",
                    "nationality" => "Guernsey",
                    "email"       => "Shayna.Lesch@donny.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Blanda",
                    "firstname"   => "Ken",
                    "nationality" => "French Southern Territories",
                    "email"       => "Modesta_Aufderhar@belle.co.uk"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Reilly",
                    "firstname"   => "Antone",
                    "nationality" => "Yemen",
                    "email"       => "Ford@garfield.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Cassin",
                    "firstname"   => "Yadira",
                    "nationality" => "Mayotte",
                    "email"       => "Anastacio@murray.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Macejkovic",
                    "firstname"   => "Marge",
                    "nationality" => "Slovakia",
                    "email"       => "Retha@griffin.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Feest",
                    "firstname"   => "Rogers",
                    "nationality" => "Monaco",
                    "email"       => "Keshawn_Kuvalis@orlando.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Fadel",
                    "firstname"   => "Candelario",
                    "nationality" => "Belarus",
                    "email"       => "Kailee_Casper@reina.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Shields",
                    "firstname"   => "Eldridge",
                    "nationality" => "Neutral Zone",
                    "email"       => "Rachel_Block@olin.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Romaguera",
                    "firstname"   => "Lavina",
                    "nationality" => "Canton and Enderbury Islands",
                    "email"       => "Cathrine@virgie.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Hessel",
                    "firstname"   => "Matt",
                    "nationality" => "Czech Republic",
                    "email"       => "Skyla@gonzalo.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Donnelly",
                    "firstname"   => "Barrett",
                    "nationality" => "South Korea",
                    "email"       => "Sheila.Abshire@david.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Hagenes",
                    "firstname"   => "Betty",
                    "nationality" => "Samoa",
                    "email"       => "Linda@monte.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Schmeler",
                    "firstname"   => "Alphonso",
                    "nationality" => "Palau",
                    "email"       => "Raphael_Senger@vernon.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Shields",
                    "firstname"   => "Selmer",
                    "nationality" => "Samoa",
                    "email"       => "Michelle.Rice@pat.me"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kemmer",
                    "firstname"   => "Earl",
                    "nationality" => "Niger",
                    "email"       => "Terry.Rau@brennan.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kunde",
                    "firstname"   => "Sharon",
                    "nationality" => "French Guiana",
                    "email"       => "Julius@isabell.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Jacobs",
                    "firstname"   => "Jeffry",
                    "nationality" => "Albania",
                    "email"       => "Juliana.Stanton@magnolia.ca"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Ritchie",
                    "firstname"   => "Eliane",
                    "nationality" => "Chad",
                    "email"       => "Kaleigh.Durgan@verner.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Erdman",
                    "firstname"   => "Howard",
                    "nationality" => "Puerto Rico",
                    "email"       => "Arthur_Stroman@quinn.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Schimmel",
                    "firstname"   => "Lance",
                    "nationality" => "Serbia",
                    "email"       => "Dovie.Williamson@alycia.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Tillman",
                    "firstname"   => "Elliott",
                    "nationality" => "Botswana",
                    "email"       => "Bethel@jess.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Boyle",
                    "firstname"   => "Emanuel",
                    "nationality" => "Tokelau",
                    "email"       => "Claude@brent.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Feest",
                    "firstname"   => "Norma",
                    "nationality" => "Georgia",
                    "email"       => "Abdullah.Terry@leonardo.net"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "O'Conner",
                    "firstname"   => "Jenifer",
                    "nationality" => "Nepal",
                    "email"       => "Virgie@robert.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Towne",
                    "firstname"   => "Lilliana",
                    "nationality" => "New Caledonia",
                    "email"       => "Henri@breana.org"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Padberg",
                    "firstname"   => "Verner",
                    "nationality" => "Seychelles",
                    "email"       => "Florencio@barney.com"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Stiedemann",
                    "firstname"   => "Adelia",
                    "nationality" => "Greece",
                    "email"       => "Jessika.Nader@glennie.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Turcotte",
                    "firstname"   => "Tristin",
                    "nationality" => "Nauru",
                    "email"       => "Joyce_Jaskolski@emmalee.name"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Pouros",
                    "firstname"   => "Cooper",
                    "nationality" => "Micronesia",
                    "email"       => "Chase_Kub@emely.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Romaguera",
                    "firstname"   => "Judy",
                    "nationality" => "Australia",
                    "email"       => "Charlotte@earl.info"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Tremblay",
                    "firstname"   => "Maxie",
                    "nationality" => "French Guiana",
                    "email"       => "Annamae.Upton@roma.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Barrows",
                    "firstname"   => "Akeem",
                    "nationality" => "Mozambique",
                    "email"       => "Wellington@mara.ca"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Funk",
                    "firstname"   => "Florencio",
                    "nationality" => "Malawi",
                    "email"       => "Kenna@vicky.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Welch",
                    "firstname"   => "Margarita",
                    "nationality" => "Ethiopia",
                    "email"       => "Wellington_Cormier@novella.tv"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Legros",
                    "firstname"   => "Helmer",
                    "nationality" => "Antigua and Barbuda",
                    "email"       => "Ubaldo@bessie.us"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Labadie",
                    "firstname"   => "Carole",
                    "nationality" => "Martinique",
                    "email"       => "Josh@kelvin.io"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Klein",
                    "firstname"   => "Desiree",
                    "nationality" => "Nepal",
                    "email"       => "Isidro_Homenick@jerald.biz"
                    ,
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Kuvalis",
                    "firstname"   => "Eloy",
                    "nationality" => "Panama Canal Zone",
                    "email"       => "Annabelle_Okuneva@christelle.com",
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Macejkovic",
                    "firstname"   => "Lucinda",
                    "nationality" => "Austria",
                    "email"       => "Ada_Wuckert@kirk.us",
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ],
                [
                    "surname"     => "Bosco",
                    "firstname"   => "Emilia",
                    "nationality" => "São Tomé and Príncipe",
                    "email"       => "Yasmin@darwin.us",
                    "address_id"  => rand(0, 88),
                    "course_id"   => rand(0, 199)
                ]
            ];

            foreach ($students as $student) {
            	Student::create($student);
            }
        }
    }
}
