<?php

namespace Database\Seeders;

use App\Models\Backend\UserEducationalInfo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $name = ['Mahfuz Ahmed Murad', 'Jeanette Osinski', 'Sobuj Khan', 'Karemoul islam'];
      $username = ['@murad', '@Jeanette', '@sobuj','karemoul'];
      $email = ['muradprivatecenter@gmail.com', 'ferwerdm@gmail.com', 'sobujkhanbd203@gmail.com','karemoulislam225@gmail.com'];
      $password = ['$2y$10$KwyPxSvvXo9wF4E8wHiFQusQ/3jwQUJnn3QMZ2h2XFTrxktaCHCoW', '$2y$10$PXs/xNhOqOA5Go4j16qOouG2wc4ZZoNrG5umwth1ZxbQV24u5BupC', '$2y$10$az9SnQKf8x0Z.P.RpuCoeOyVp2g6hQevhmjJkmlrnieGHoqC3KnTu', '$2y$10$wvjj/EwEtrVUA/lUv4rBb.2oQ7BcJ6BWbCldsVHwqCRt/gKJNwkaW'];
      
        for ($i=0; $i < count($name); $i++) { 
          $user = [
            'name'=>$name[$i],
            'username' => $username[$i],
            'email'=>$email[$i],
            'password'=>$password[$i],
            'phone' => "123456789.$i",
            'refer_code' => $email[$i],
            'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
            'address' => 'Please input your address',
            'city' => 'Input your city',
            'post_code' => '0000',
            'country' => 'input country',
            'about' => 'write something about you.',
            'level' => '1st',
            'facebook' => 'your facebook url',
            'twitter' => 'your twitter url',
            'google_plus' => 'your google account',
            'pinterest' => 'your pinterest url',
          ];
          User::create($user);
          UserEducationalInfo::create([
            'username' => $username[$i],
          ]);
        }
    }
}



// $name = [Kakon Sarker, Sumiaya, Monoar Hossain Dip, MD Emon Hassan, Noyon Khan, Abdul Hannan, Shamim Babu, Moni Akter Monira, Shotu Biswas, Amin Hossain, MD Noyon Khan Joy, Tanim Hossai, Jhangir Alom, Shovosaha, Biplob haldar, Mahdi Mahmud, Swopno, HANNAN MULLA, Md.Ripon, Norma Douglas, Md.Emtiaj ahmed jony, Shohidul islam, Hero, Sony, Mrs. Jackie Schneider, Sajib Rahman, Sajib Rahman, Skakil Khan, Zeehad, MA Sobhan, Md. Kamal, Md.Faridul islam, Nilufa iasmin, Urmi jannat, Humayon, Muha Mukul Hossen, Anik Hassan, Manik hossain, Jannatull Fardous Rakhi, Chumky Akte, Georgia Romaguera, JYDNOLHNWL3HJFDP2HJ, Romana Akter Mim, Miss Valentin Baumbach, MD EMON HASSAN, Mrs. George Hand, Regina Simonis, Jared Lakin, Lionel Legros, Salehin Islam Arafat, Karl Cummerata DDS, Gordon Conroy, Nigel Ondricka, Kara Kovacek,    ];
// $username = [@kakon, @]Sumiaya, @Monoar, @Emon, @Noyon, @abdul hannan, @babu, @monira, @shotu, @Amin, @Noyon, @Tanim, @Jhangir, @shovo, @Biplob, @mahdi, @swopno, @Hannan, @Ripon, Noman Gouglas,  @jony, @shodiul islam, @Hero, @sony, @Jackie, @Sajib, @Sajib, @shakil, @Zheead, @ma sobahan, @Kamal, @faridul, @nilufa, @urmi, @humayon, muha mukul hossain, @anik, @manik, @jannatull rakhi, @chumky, @georgia romaguera, @ jydnolhnwl, @Mim, @valentin, @Emon, @George Hand, @regina, @Jared, @Lionel Legros, @ Salehin Islam Arafat, @Karl Cummerata DDS, @Gordon Conroy, @Nigel Ondricka, @Kara Kovacek  ;
// $email = [kakonsarkerkushtia@gmail.com, s38307332@gmail.com, monoarhossaindip@gmail.com, 	
// freelanceremonhassan@gmail.com, kmehassan@gmail.com,  abdulhanna1971@gmail.com, shamimbabugold2020@gmail.com, moniaktarmonira117@gmail.com, sotukhoksa2@gmail.com, shamimbabu@gmail.com, noyonkhan1494@gmail.com, alaminkhoksha720@gmail.com, jhangiralomkhoksa90@gmail.com, dipsahakhoksa1@gmail.com, biplobhaldar.bd@gmail.com, mdazahar1980@gmail.com, mdswopno2929@gmail.com, hannanmulla009@gmail.com, rmd346672@gmail.com, katyprz14@yahoo.com, Sumonkhan199888889@gmail.com, skshahidshekh@gmail.com, heroa2373@gmail.com, mds735648@gmail.com, kerry.daley@yahoo.com, sajibkhan52@yahoo.com, sajibrahman019@gmali.com, ashrafulhasankhan4444@gmail.com, arshinagar67@gmail.com, masobhan007@gmail.com, kh328311@gmail.com, mdforidsheikh78@gmail.com, isminnilufa0@gmail.com, Khansagor50480@gmail.com, humayon363646@gmail.com, smmukul39@gmail.com, ah7940212@gmail.com, mh5317710@gmail.com, rabbira091@gmail.com, chumkyakter7@gmail.com, zrajwani@ualberta.ca, GennadiiLavrentev95@inbox.ru, akterk611@gmail.com, poinbuster@gmail.com, superadmin@gmail.com, asjulietis4romeo@aol.com, dawr1@yahoo.com, whitney.deschamps@gmail.com, jkd002@aol.com, rdxarafat987@gmail.com, kadi2cute4u@yahoo.com, roryt1015@yahoo.com, manorhome1@verizon.net, bfroidcoeur01@yahoo.com];

// $password = [$2y$10$.ibMwAxD/Vk6E7bsmvYBeuLiDa/yMtZpogMZbo0pxVexEfypO1sOe, $2y$10$ObbtotL8uoAj2cIgiZiiFucjEFuC2IuFVc6.uE7K.x93Epj7EAgNe, $2y$10$/SiMBVKprhnqrlcoK23omudkposNJkcyPnfQ7cmDPapTF4F7McfHC, $2y$10$781NYT2rzG.tyxREA2HBiOfj9XFjjc/Fefuj7AkD4.0bhMx4vSdw6, $2y$10$jKm874slLY5MP9gYha.GxuoFFfdrWuQQTxi/1osFzXDAPLIqN5r3q, $2y$10$w3QBQXfdVyt4tZ1qxYUhSOQdtSiUX1k/jgM9HUkUqljcBbfwyRt02, $2y$10$G7xNyoE50oZdrUlHB.mPJOo9FVPsNBh6UrAszKiLi1KMpLfqo3QXm, $2y$10$meTap8cm18JEpYnqKggiOe/7tEXnzGbznoZMWdIEoQGK6lJLtlOZ2, $2y$10$NyQ9YLK0M420JKRWyld8rO3IpJLdEoTeA9uxaKi1Mzp1HxxR4uKvO, $2y$10$qwGFj/kJHSKtpR9L1DKJ6.wbMY1C/xRvO25sb7/1ZjxGdVo.3eDNu, $2y$10$p8Rv0tRzkf7TOZG5OWAlCuiOWPUM0c2MQuMIfQm95QAXLVd7ovPKW, $2y$10$B8IygVljSV0T5Sxhyj6Kq.SShOMLzd2Z5t/gjkNC1.L9znFQcX4FW, $2y$10$JDO7ZWNV86e4tqLoqaj9MOZ.mg/TCDWlMcOSJkR3egtkUZckSOEh2, $2y$10$TK5mDUUsdwb2ep8hzinZvuVDIyMIkpOVH5cVfbuSTiTx0m8mcfK4a, $2y$10$qwjMbhTP88prJGTMiyspFuy6JTlq.FWhgjjQ/WNTTB.cfVWQw/Piu, $2y$10$PSzzVJq2qH9BhCv/zD/tleJ1ptopMWANY5iJQnjKV3oMX6UOmxxrK, $2y$10$LCPdBQ9RdCeGCjMowybkEuJlCSyCDxcSSKQU1K4uQWq2u.pwcvuTS, $2y$10$pCIJHtLVnOC6KZbiMmVH4eqnsOLVJmprdkD9s46lVS02FBBEwAFAi, $2y$10$7L7qdCfenQphVxZ35NHM/epYFBK8eO46c1bK4G7iFOY5Svu5CjVLi, $2y$10$nP8kHz8YOut8D7JVI2mMuOx.O6nhZghUPAeyjeRKzoJFsN2fBtpIi, $2y$10$.XJMLjfMwuPKeldtiyfUNOK0vJKQgjAXoYNqL.OInbhAO9v0tfDUS, $2y$10$LIHnN81I095UZ8gMmgNzNOfbDQhZ7eUoHWkaOtq8ZGUt2ORm0iZ6S, $2y$10$pIsNfHAwTekqY6qMcJFu7uYgvZjdhEZAONoksvJT8ACZifFeRULdq, $2y$10$0HzkF6SwmAZAWcv/E4.cH.ldRH5AnmTHjPA95Sd/cAc2YlqWClfuW, $2y$10$F6hYcwcK.k7P4JiPK928IehVVs6yUnlMEhG9aZajbOrGmtIyyhfZC, $2y$10$J1Fo6o5luCj96THI59jKMuA6.e7oaeU1xNhjdO2lLa5..5tW3PEKC, $2y$10$4PQuRirYhNNwj3ZQO1xg/ewi4C5oocmZQKJZdXcC2L4VZVPRov4mu, $2y$10$N61gs1VCIXWsTNoCuXtUU.cRfJkW0T.eYw5ZwqqzjlvS8zXst8cN., $2y$10$PjCOmzUQDbOT3Zuu2FDtl.IcOBDTpvzqJJvQitSKiBaeFUxszvpCC, $2y$10$gTux2rGOZHgQKe9WM89qWuoi.w1RS/AWAIErc94aN8EAfY7soUYaG, $2y$10$cKOw.GLMBZgyQJqCFs9XueLBk.6hT5Zq5Nl8Hk8fikYmIjE6EOgxG, $2y$10$IEs1qazTAvw.aNv3DhhdB.Uecdl8bv6b9PNm/ggjLWmewuAWKsDJK, $2y$10$mWeTIsyNEKvbG9MkUgTShOPGK.z7obAGTY9IK/f.hex25ZLs/zAFS, $2y$10$JW4ECV7Rnvs2Xg17RtWjW.kyK1l1hXP3Un6QvNormsA8quHNpEUXa, $2y$10$jlsZjIeHBHN8xn/s4w5g6OxLZD3UqfJaHhs/xn75pjz3Wp3Xd7Et., $2y$10$HH6CH.IlVtdNEIEgkgFFbu7J1F4hdoO/YtMyPdjE1NkMu5II.fa8S, $2y$10$26A4dmOO8L9GahsmHifh/eyFv1mWGpUP9A/htRyIR0dpPaZYorYIG, $2y$10$9USkgcPRfa9UVGAcT6MSJOJI.gGwShSPj3Kh8siyuW9qENGKnzCOe, $2y$10$ODwYalZbDbfZcDLibvAPw.gg/mafpJiLk2IUL9GesPud6jFcQicae, $2y$10$z7m/kr1fq2HLFl42IxVH7.WAA897BlCvGYsxWpIVJhB6smosUv3Gi, $2y$10$buA5UtgC6Zzl972Y4ynmi.epM5LJguiH5D13zAlxkzSs2tViKIkT., $2y$10$8fOuO9Uwz.OFApffzNRe.uPGt9L0r9YR4WeILkz9jN0fLK/k.S3RC, $2y$10$iARCKzChSxHbs.fc5AYRBuU.VwrT5HSEyuxnEh4knzdBOcVbZaYHy, $2y$10$5LN7iY8bZp9nw1rM/vM2Eur1NJw8zbSPaVTn2PRpGpJAuvvwaFeYS, $2y$10$vHaOrZX.gz51HBnFgvfeGuW8yvML5Jz5n9/JGftRy2HOtbOWCzrKu, $2y$10$3aEmBQ6P438jOLiE.FUm8.8T6Pv3oXwWJzvo1m5Bb79KldQtqFkXG, $2y$10$2YFbTK2KNFfnQGqRx6wK6uUr0DuzsBK674nBmuJk3CXxLSBvwTenK, $2y$10$4xif39tbbka5X2smtBiQTeRaVkwQ2HmknYXegsXlt401HzBoOYe4K, $2y$10$UUAy5jSZ/j3to7WQOZrVL.OG7F5w3hFghbk3cVCAaSVZQz8ZTb9o6, $2y$10$v./TrTlLiKL21IdxsTDs8OBi3sGHxULhVd8ONSHTTiKgoj0m.0Z1y, $2y$10$v6URj1UPSzaL3Mih5J9Cze9q5Y222/uWgPY7bvtVSpHImXHLlqeaG, $2y$10$tcjTV2.wCAWv0rPMbU5F8e9ibOm5aLncYOJL37IJXU9YRoyEpCJZy, $2y$10$51cqEAM7/J.HSs1zWVvk8OOWktW2Ire0wLxK1AnXPvVrfSreM9GRm, $2y$10$4SIKBj6M03ndSF107ZMmcOwHKAD5vsr7KethKowKk/ogsh2tVflSa];