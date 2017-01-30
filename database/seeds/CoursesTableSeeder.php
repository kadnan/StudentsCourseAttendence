<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    public function run()
    {
        $courses = [
            ["course_name" => "Computer Science", "university" => "University of Nairobi"],
            ["course_name" => "Industrial Design", "university" => "Sheffield, University of"],
            ["course_name" => "Digital Forensics", "university" => "Deakin University"],
            ["course_name" => "Psychology", "university" => "University of Michigan"],
            ["course_name" => "Health Science", "university" => "University of Science and Technology Beijing"],
            ["course_name" => "Engineering", "university" => "Middlebury College"],
            ["course_name" => "Social Care", "university" => "Elmhurst College"],
            ["course_name" => "Maths", "university" => "Griffith University"],
            ["course_name" => "English Literature", "university" => "Sauder School of Business"],
            ["course_name" => "English Language", "university" => "University of Southern Maine"],
            ["course_name" => "Business", "university" => "Nanyang Academy of Fine Arts"],
            ["course_name" => "Law", "university" => "Aalto University"],
            ["course_name" => "European Law", "university" => "Jonkoping University College"],
            ["course_name" => "Business Information Systems", "university" => "Florida International University"],
            ["course_name" => "Software Engineering", "university" => "Lebanese American University"],
            ["course_name" => "Product Design", "university" => "Imperial College London"],
            ["course_name" => "Computing", "university" => "Jiangxi University of Finance and Economics"],
            ["course_name" => "Advertising", "university" => "Regensburg University"],
            ["course_name" => "Banking - Commercial", "university" => "New York University"],
            ["course_name" => "Art", "university" => "Ealing & West London College"],
            ["course_name" => "Banking - Investment", "university" => "University of Witten/Herdecke"],
            ["course_name" => "Auditing/Tax", "university" => "Hankuk University of Foreign Studies"],
            ["course_name" => "E-Business", "university" => "Warburg Institute"],
            ["course_name" => "Arts/Entertainment/Media", "university" => "Liverpool John Moores University"],
            ["course_name" => "Automotive", "university" => "Erasmus University Rotterdam"],
            ["course_name" => "Accountancy", "university" => "University of South Australia"],
            ["course_name" => "Design", "university" => "University of Groningen"],
            ["course_name" => "Msc Construction Project Management", "university" => "Drake University"],
            ["course_name" => "Music", "university" => "University of Szeged"],
            ["course_name" => "Business Management", "university" => "Southampton, University of"],
            [
                "course_name" => "Politics And Eastern European Studies With A Year Abroad",
                "university"  => "Abingdon and Witney College"
            ],
            ["course_name" => "Politics And English", "university" => "University of Tsukuba"],
            ["course_name" => "International Politics", "university" => "Newcastle University"],
            ["course_name" => "IMML German", "university" => "Aalborg University"],
            ["course_name" => "BA Modern Languages With Business Management", "university" => "Chungang University"],
            ["course_name" => "BEng Mechanical Engineering", "university" => "Padjadjaran University"],
            ["course_name" => "Business And Management", "university" => "PACE University"],
            ["course_name" => "Business And Management (Accounting)", "university" => "Humboldt University"],
            ["course_name" => "History", "university" => "Chulalongkorn University"],
            ["course_name" => "Geography", "university" => "University of the Philippines - Los Banos"],
            ["course_name" => "PPS", "university" => "Sacred Heart University"],
            ["course_name" => "Environment, Society And Development", "university" => "Lodz University"],
            ["course_name" => "Sport Exercise Science", "university" => "National Sun Yat-sen University"],
            ["course_name" => "Forensic Science", "university" => "Morehouse College"],
            ["course_name" => "Criminology And Social Policy", "university" => "Dublin City University"],
            ["course_name" => "Commerce", "university" => "Columbia Business School"],
            ["course_name" => "Bar Professional Training Course", "university" => "Ecole Centrale de Paris"],
            ["course_name" => "BPTC", "university" => "University of Maine"],
            ["course_name" => "Creative Writing", "university" => "Kasetsart University"],
            ["course_name" => "Forensic Science With Crimonology", "university" => "Glasgow School of Art"],
            ["course_name" => "Ll.b Law With Criminology", "university" => "Molloy College"],
            [
                "course_name" => "Global Crime, Justice, Security",
                "university"  => "Swiss School of International Banking"
            ],
            ["course_name" => "Linguistics", "university" => "Cooper Union"],
            ["course_name" => "LLB LAW", "university" => "Obafemi Awololo University"],
            ["course_name" => "History And Politics", "university" => "Turku University"],
            ["course_name" => "LLB", "university" => "Management Development Institute"],
            ["course_name" => "BA, Hons Accounting And Finance", "university" => "Ochanomizu Univ"],
            ["course_name" => "Accountancy & Business Law", "university" => "Winthrop University"],
            ["course_name" => "Human Resource Management", "university" => "ENSAE"],
            ["course_name" => "Accounting And Financial Management", "university" => "University of Waterloo"],
            ["course_name" => "Biomedical Science", "university" => "ESSEC Business School (Paris)"],
            [
                "course_name" => "French And History",
                "university"  => "Graduate University of Chinese Academy of Sciences"
            ],
            ["course_name" => "BBA Management", "university" => "Barnet College"],
            [
                "course_name" => "German And Management",
                "university"  => "Ecole Nationale Superieure de Techniques Avancees"
            ],
            ["course_name" => "Biological Sciences", "university" => "University of KwaZulu Natal"],
            ["course_name" => "Law LLB", "university" => "The Grimsby Institute of Further & Higher Education"],
            ["course_name" => "History (BA Hons)", "university" => "Flinders University"],
            ["course_name" => "Economic And Social History", "university" => "Universidad Internacional"],
            ["course_name" => "Process Design Engineering", "university" => "Villanova University"],
            ["course_name" => "LPC", "university" => "Universidad Adolfo Ibanez (Creo que es Chilena tambien)"],
            ["course_name" => "Medicine", "university" => "University of St. La Salle - Bacolod"],
            [
                "course_name" => "Human Resource Management And Organisational Analysis",
                "university"  => "Universita degli Studi di Venezia"
            ],
            ["course_name" => "BA", "university" => "University of Bonn"],
            ["course_name" => "MBA", "university" => "SUNY Fredonia"],
            ["course_name" => "BSc Economics", "university" => "Universidad Ramon Llull"],
            ["course_name" => "Economics And Politics", "university" => "Universita Cattolica del Sacro Cuore"],
            ["course_name" => "Geography And Geology", "university" => "Delhi University"],
            ["course_name" => "MSc Digital Anthropology", "university" => "The State University of New Jersey"],
            ["course_name" => "Neuroscience", "university" => "Hobart and William Smith"],
            ["course_name" => "International Relations", "university" => "Ealing & West London College"],
            [
                "course_name" => "LLM In International Business Law",
                "university"  => "Institut Superieur des Affaires (ISA)"
            ],
            ["course_name" => "Modern Languages", "university" => "University of Newcastle"],
            ["course_name" => "Politics", "university" => "American University of Kuwait"],
            ["course_name" => "Environmental Science", "university" => "Duisenberg School of Finance"],
            ["course_name" => "LLB Law With European Law", "university" => "Aberdeen, University of"],
            ["course_name" => "Mathematics", "university" => "Royal Academy of Music"],
            ["course_name" => "Natural Sciences", "university" => "DIW Berlin"],
            ["course_name" => "Law With Criminology", "university" => "Universidad Panamericana"],
            ["course_name" => "Open Degree", "university" => "Parahyangan University"],
            [
                "course_name" => "Bachelor Of Computer Science Engineering",
                "university"  => "Malaysia University of Science and Technology"
            ],
            ["course_name" => "Philosophy", "university" => "Bishop Grosseteste College"],
            ["course_name" => "PPE", "university" => "Scuola Normale Superiore (Pisa)"],
            ["course_name" => "Applied Accounting", "university" => "Friedrich Alexander University"],
            ["course_name" => "LAW AND INTERNATIONAL RELATIONS", "university" => "BPP"],
            [
                "course_name" => "Social Work",
                "university"  => "LUISS (Libera Universita Internazionale degli Studi Sociali)"
            ],
            ["course_name" => "HR", "university" => "National Tsing-Hua University"],
            [
                "course_name" => "Wildlife Conservation With Zoo Biology",
                "university"  => "University of San Jose - Recoletos"
            ],
            ["course_name" => "Chinese", "university" => "University of Connecticut"],
            ["course_name" => "Maths And Accounting", "university" => "Asia Pacific College"],
            ["course_name" => "Business And HR Management", "university" => "Miriam College"],
            ["course_name" => "Law And French", "university" => "University of Central Florida"],
            ["course_name" => "Business Analysis And Consulting", "university" => "Scuola Superiore S.Anna (Pisa)"],
            ["course_name" => "Health And Social Care", "university" => "UHI Millennium Institute"],
            ["course_name" => "Social. Science", "university" => "Moscow State Technical University"],
            [
                "course_name" => "International Commercial & Maritime Law",
                "university"  => "Bandung Institute of Technology"
            ],
            ["course_name" => "BSc Computer Networks", "university" => "Coastal Carolina University"],
            ["course_name" => "Historical Archaeology", "university" => "Shanghai Maritime University"],
            ["course_name" => "English Literature And Politics", "university" => "Creighton University"],
            ["course_name" => "Chemistry", "university" => "Universita degli Studi di Roma/La Sapienza"],
            ["course_name" => "Business/Management", "university" => "Queen Mary, University of London"],
            ["course_name" => "Other", "university" => "Wilmington College"],
            ["course_name" => "Biology", "university" => "UHI Millennium Institute"],
            ["course_name" => "Economics", "university" => "Molloy College"],
            ["course_name" => "Languages", "university" => "Camberwell College of Arts"],
            ["course_name" => "English", "university" => "University of Nurtingen"],
            ["course_name" => "Physics", "university" => "Indian Institute of Management, Indore"],
            ["course_name" => "Sciences", "university" => "Richmond School of Business"],
            ["course_name" => "Classics", "university" => "College of the Holy Cross"],
            ["course_name" => "Information Technology", "university" => "University of Washington"],
            ["course_name" => "Education/Teaching", "university" => "Sabhal Mor Ostaig"],
            ["course_name" => "Electronic And Electrical Engineering", "university" => "Universidad Francisco Gavidia"],
            ["course_name" => "Civil Engineering", "university" => "Universita degli Studi di Firenze"],
            ["course_name" => "Agriculture", "university" => "Moscow University of People's Friendship"],
            ["course_name" => "Management Consultancy", "university" => "Clark Atlanta University"],
            ["course_name" => "Human Resources", "university" => "University of the Philippines - Pampanga"],
            ["course_name" => "Financial Management", "university" => "University of Limerick"],
            ["course_name" => "Marketing", "university" => "Scarborough Campus, University of Hull"],
            ["course_name" => "Mathematics/Statistics", "university" => "Abertay, University of"],
            ["course_name" => "Chemical Engineering", "university" => "Universita degli Studi di Padova"],
            ["course_name" => "Banking/Finance", "university" => "Winchester, University of"],
            ["course_name" => "Sport/Sports Management", "university" => "Schiller University"],
            [
                "course_name" => "Business Analytics",
                "university"  => "College of Staten Island - Macaulay Honors College"
            ],
            ["course_name" => "Retail/Merchandising", "university" => "New York University"],
            ["course_name" => "Business Intelligence/Market Research", "university" => "St. Xavier's College"],
            ["course_name" => "Actuarial", "university" => "St. John's University"],
            ["course_name" => "Material And Mineral Engineering", "university" => "ESB-Reutlingen"],
            ["course_name" => "Computer And Systems Engineering", "university" => "City University of Hong Kong"],
            ["course_name" => "Legal/Law", "university" => "Moscow State Technical University"],
            ["course_name" => "Pharmaceutical", "university" => "US Military Acedemy"],
            ["course_name" => "Environmental", "university" => "Dundee College"],
            ["course_name" => "Science/Research", "university" => "Royal Veterinary College"],
            ["course_name" => "Food And Drink", "university" => "Universita Cattolica di Milano"],
            ["course_name" => "Mechanical Engineering", "university" => "Doncaster College"],
            ["course_name" => "Architecture", "university" => "Singapore Polytechnic"],
            ["course_name" => "Charity/Non Profit", "university" => "University of the Witwatersrand"],
            ["course_name" => "Aeronautical Engineering", "university" => "University of Western Ontario"],
            ["course_name" => "Medical/Health", "university" => "Chuo University"],
            ["course_name" => "Administration/Secretarial", "university" => "Le Moyne College"],
            [
                "course_name" => "Public Sector/Governmental",
                "university"  => "European Business School (Oestrich-Winkel)"
            ],
            ["course_name" => "Anthropology", "university" => "Lebanese American University"],
            ["course_name" => "Property/Real Estate", "university" => "Brooklyn College"],
            ["course_name" => "Banking - Retail", "university" => "Hebrew University"],
            ["course_name" => "Sociology", "university" => "University of Southern Maine"],
            ["course_name" => "Mathematical & Computer Sciences", "university" => "XLRI, Jamshedpur"],
            ["course_name" => "Business & Management", "university" => "East China Normal University"],
            ["course_name" => "Arts & Humanities", "university" => "RCN Institute"],
            ["course_name" => "Physical Earth & Biological Sciences", "university" => "University of Calgary"],
            ["course_name" => "Social Sciences Incl Human Geography", "university" => "European Business School"],
            ["course_name" => "Accountancy Banking & Finance", "university" => "University of Pennsylvania"],
            ["course_name" => "BA(Hons) Politics And Modern History", "university" => "Askham Bryan College"],
            ["course_name" => "Law LLB (Hons)", "university" => "University of Phoenix"],
            ["course_name" => "LL.B (Hons)", "university" => "Barking College"],
            ["course_name" => "LLB Law With Politics", "university" => "Blackburn College"],
            [
                "course_name" => "(BA) English Literature And American Studies",
                "university"  => "Birmingham, University of"
            ],
            ["course_name" => "Law With Politics LLB", "university" => "Mahidol University"],
            ["course_name" => "International Business, Finance & Economics", "university" => "La Trobe University"],
            ["course_name" => "MSc International Politics", "university" => "University of the Philippines - Diliman"],
            ["course_name" => "Business And Law", "university" => "ESCP Europe (London)"],
            [
                "course_name" => "European Studies (Politics, History, French, Italian)",
                "university"  => "Xi'an Jiaotong university"
            ],
            ["course_name" => "LLM Laws", "university" => "SKEMA Business School"],
            ["course_name" => "Business & Law", "university" => "Blackburn College"],
            ["course_name" => "LL.M", "university" => "University of Koln"],
            ["course_name" => "German And History", "university" => "Nottingham Trent University"],
            [
                "course_name" => "LLM In International Finance And Banking Law",
                "university"  => "St Andrews, University of"
            ],
            ["course_name" => "Comparative Literature", "university" => "Hunan University"],
            ["course_name" => "LLM", "university" => "Ghent University"],
            ["course_name" => "Master Of Law", "university" => "Arizona State University"],
            ["course_name" => "MSc Social Cognition", "university" => "XLRI, Jamshedpur"],
            ["course_name" => "English Law And German Law", "university" => "Stirling, University of"],
            ["course_name" => "English Law & Hong Kong Law", "university" => "Edinburgh, University of"],
            ["course_name" => "LLB 2014", "university" => "Edinburgh, University of"],
            ["course_name" => "Law LLB 2015", "university" => "Bradford, University of"],
            ["course_name" => "Politics, Philosophy And Law LLB", "university" => "Leuphana University"],
            ["course_name" => "LLM In International Commercial Law", "university" => "UAM University"],
            [
                "course_name" => "BA Management And Leadership With European Study",
                "university"  => "Polytechnic di Torino"
            ],
            ["course_name" => "Philosophy, Politics And Economics", "university" => "Trinity College Carmarthen"],
            ["course_name" => "LL.B Law", "university" => "Clark Atlanta University"],
            ["course_name" => "European Law (Maitrise)", "university" => "Providence College"],
            ["course_name" => "LLB (European) Law", "university" => "City of Sunderland College"],
            ["course_name" => "BA Economics", "university" => "University College Birmingham"],
            ["course_name" => "Anthropology And Law", "university" => "Xidian University"],
            ["course_name" => "LLM In Banking And Finance", "university" => "Cardiff University"],
            ["course_name" => "BSc Philosophy, Logic And Scientific Method", "university" => "ESCP Europe (London)"],
            ["course_name" => "LLM Tax Law", "university" => "UAM University"],
            ["course_name" => "Law (3yr LLB)", "university" => "Koc University"],
            ["course_name" => "Law And Business", "university" => "Brighton College of Technology"],
            [
                "course_name" => "Law And European Law (Qualifying Year Abroad In English)",
                "university"  => "Saint Mary's College of Meycauayan"
            ],
            ["course_name" => "Law (3 Years)", "university" => "Jacksonville University"],
            ["course_name" => "Law (M100)", "university" => "Hofstra University"],
            ["course_name" => "Law And Business Studies", "university" => "Beijing Institute of Technology"],
        ];


        foreach ($courses as $course) {
            Course::create($course);
        }
    }

}
