-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-16 02:15:21
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- データベース: `teamadb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `blog`
--

CREATE TABLE `blog` (
  `item_id` int(11) NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_image` varchar(191) NOT NULL,
  `blog_title` varchar(191) NOT NULL,
  `blog_headline` varchar(191) NOT NULL,
  `blog_contents` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `blog`
--

INSERT INTO `blog` (`item_id`, `blog_date`, `blog_image`, `blog_title`, `blog_headline`, `blog_contents`) VALUES
(7, '2023-01-11', 'img/BLOG/akiedablog.jpg', 'AKIEDA BAG[RECYCLED NYLON]', '本日は学祭に行くときなど少し外を出歩くときにピッタリのこちらのアイテムの紹介です。', 'リサイクルナイロン100%、camoはそれに加え、引き染めという京都では着物を染める手法で、<br><br>ハケを使用し手作業で染められたヘルメットバッグ。<br><br>ショルダーストラップは取り外し可能な2WAY仕様になります。<br><br>ぜひお使いのシーンに合わせて使用していただけたらなと思います。'),
(11, '2022-12-10', 'img/BLOG/ikedablog.jpg', 'Dyed Corduroy Shirt', ' IKKE22AWコレクションからコーデュロイのレギュラーカラーシャツのご紹介です。', '素材は、製品染を施した細畝コーデュロイを使用しており後染めならではの良い風合いと経年変化が楽しめます。<br><br>ゆるすぎないレギュラーフィットのボディーなので、アウターの下に着やすいですし時代の流行り廃り関係なく長く愛用していただけると思います。<br><br>素材感で秋冬らしい季節感も演出できるのでこれからのシーズンにオススメです。'),
(21, '2022-11-23', 'img/BLOG/kanekoblog.jpg', 'BAGGY FIT JEANS (WALLET CHAIN)', 'KANEKO22AWからウォレットチェーンの柄をレザーブリーチで表現したデザインが施されたバギーデニムの登場です。', '歪んだリベットやオリジナルのボタンに加えて、ブランドのシグネチャーであるZIP-UPディテールがフロントに配されており、<br><br>普遍的なイメージをひとつのアイディアで変化させるというブランドらしいアプローチを感じる1本。<br><br>脇に垂れるウォレットチェーンの柄はレーザーブリーチで表現されており、強いアクセントとなっている。'),
(32, '2022-07-24', 'img/BLOG/nakagawablog.jpg', 'NAKAGAWA 1st delivery', '本日のブログは、新鋭ブランド「NAKAGAWA」から入荷がありましたのでそちらを。', 'デニムではあまり見られないスラントポケット仕様。<br><br>ウエストにはドローコードも搭載されておりますのでベルトレスでも着用可能。<br><br>バックポケットは、一つでやや下につけることでショート丈のアウターを羽織った際も裾の下から見えるようになっております。 <br><br>大人なバギーデニム、非常にお勧めです！！'),
(33, '2022-10-24', 'img/BLOG/nakamurablog.jpg', 'NAKAMURA MSW 1st delivery', 'NAKAMURAの1st deliveryのご紹介です！！', 'NAKAMURAのスタンダードラインからニュースタンダードニットカーディガンです。<br><br>ウールナイロンの温かみのある素材を発色の良い色味に仕上げております。<br><br>サイズ感は従来のシルエットよりゆとりを持たせていてリラックス感のある着用感に！！このお手頃プライスも見過ごせないですね！！'),
(42, '2022-12-20', 'img/BLOG/nomurablog.jpg', 'NOMURA 22AW last delivery', '本日はNOMURA22AWラストデリバリーを紹介します。', 'とてつもなくイカしたアイテムだけに色々商品の魅力について語りたいところですがそれはちゃんと写真撮ってからにいたします！<br><br>気になるかたはお先に店頭でご覧いただけるので直接お試しくださいませ。');

-- --------------------------------------------------------

--
-- テーブルの構造 `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(191) NOT NULL,
  `brand_image` varchar(191) NOT NULL,
  `brand_overview` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_image`, `brand_overview`) VALUES
(1, 'AKIED', 'img/LOGO/akieda.png', '2020年秋冬シーズンよりイブキ(IBUKI)から、アキエダ(AKIEDA)にブランド名変更。<br><br>\r\nアキエダ(AKIEDA)は、日本のカジュアルブランド。デザイナーは秋枝聖貴。<br><br>\r\n様々なフィールドに順応し、現代の生活をシンプルにする機能的ウェアを製作する事と、そこから自然に生まれるファッション的アプローチを提案している。'),
(2, 'IKKE', 'img/LOGO/ikeda.png', '2020年の春夏シーズンよりスタートしたIKEDA。<br><br>\r\nコムデギャルソン出身者らにより発足。 常に変化していく時代の中において、洗練された”新しいベーシック”を追求している。'),
(3, 'KANEKO', 'img/LOGO/kaneko.png', ''),
(4, 'NAKAGAWA', 'img/LOGO/nakagawa.png', 'NAKAGAWAのブランドコンセプトは「時代背景や事象、また自身が日々感じることをファッションというフィルターを通し表現する」。<br><br>\r\n洋服の始まりは旧約聖書においてアダムとイブが善悪の知識の実(禁断の果実)を食べた時ととらえ、<br><br>\r\nデザイナー自身がいつまでも洋服、もの作りに対する初心を忘れないようにとの想いからブランドのアイコンに「名前」を使用している'),
(5, 'NAKAMURA', 'img/LOGO/nakamura.png', 'ジャンルレス、ジェンダーレス、ボーダーレス」を掲げるモダンストリートウェアブランド。<br><br>\r\n様々な特殊素材を巧みに使用し、リアルクロージングへの新たなアプローチを試みており、<br><br>\r\n上質なファブリックを採用し着心地、機能性を重視したプロダクト提案を行う。'),
(6, 'ryonomura', 'img/LOGO/nomura.png', '2016年秋冬コレクションより、自身の名前を冠にしたブランド「ノムラ　リョウ(NOMURA RYO)」を本格的にスタート。<br><br>\r\nパターンから縫製、生地加工まで全て自身で手がけ、オーダーメイド服として、ときにアートワークとして発表。<br><br>\r\n2018年春夏ではプレタポルテコレクションとして初めてコレクションを展開');

-- --------------------------------------------------------

--
-- テーブルの構造 `buys`
--

CREATE TABLE `buys` (
  `buy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `buy_itemsize` varchar(1) NOT NULL,
  `buy_sum` int(11) NOT NULL,
  `buy_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cart_itemsize` varchar(1) NOT NULL,
  `cart_sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(0, 'ALL ITEM'),
(1, 'COAT'),
(2, 'JACKET'),
(3, 'BLOUSON'),
(4, 'TOPS'),
(5, 'SHIRTS'),
(6, 'KNIT'),
(7, 'BOTTOMS'),
(8, 'SHOES'),
(9, 'BAGS'),
(10, 'ACCESSORIES');

-- --------------------------------------------------------

--
-- テーブルの構造 `inventories`
--

CREATE TABLE `inventories` (
  `item_id` int(11) NOT NULL,
  `inventory_itemsize` varchar(1) NOT NULL,
  `inventory_sum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `inventories`
--

INSERT INTO `inventories` (`item_id`, `inventory_itemsize`, `inventory_sum`) VALUES
(1, 'M', '3'),
(1, 'S', '3'),
(2, 'M', '3'),
(2, 'S', '3'),
(3, 'M', '3'),
(3, 'S', '3'),
(4, 'M', '3'),
(4, 'S', '3'),
(5, 'M', '3'),
(5, 'S', '3'),
(6, 'M', '3'),
(6, 'S', '3'),
(7, 'M', '3'),
(7, 'S', '3'),
(8, 'M', '3'),
(8, 'S', '3'),
(9, 'M', '2'),
(9, 'S', '3'),
(10, 'M', '3'),
(10, 'S', '3'),
(11, 'M', '3'),
(11, 'S', '3'),
(12, 'M', '3'),
(12, 'S', '3'),
(13, 'M', '3'),
(13, 'S', '3'),
(14, 'M', '3'),
(14, 'S', '3'),
(15, 'M', '3'),
(15, 'S', '3'),
(16, 'M', '3'),
(16, 'S', '3'),
(17, 'M', '3'),
(17, 'S', '3'),
(18, 'M', '3'),
(18, 'S', '3'),
(19, 'M', '3'),
(19, 'S', '3'),
(20, 'M', '3'),
(20, 'S', '3'),
(21, 'M', '3'),
(21, 'S', '3'),
(22, 'M', '3'),
(22, 'S', '3'),
(23, 'M', '3'),
(23, 'S', '3'),
(24, 'M', '3'),
(24, 'S', '3'),
(25, 'M', '3'),
(25, 'S', '3'),
(26, 'M', '3'),
(26, 'S', '3'),
(27, 'M', '3'),
(27, 'S', '3'),
(28, 'M', '3'),
(28, 'S', '3'),
(29, 'M', '3'),
(29, 'S', '3'),
(30, 'M', '3'),
(30, 'S', '3'),
(31, 'M', '3'),
(31, 'S', '3'),
(32, 'M', '3'),
(32, 'S', '3'),
(33, 'M', '3'),
(33, 'S', '3'),
(34, 'M', '3'),
(34, 'S', '3'),
(35, 'M', '3'),
(35, 'S', '3'),
(36, 'M', '3'),
(36, 'S', '3'),
(37, 'M', '3'),
(37, 'S', '3'),
(38, 'M', '3'),
(38, 'S', '3'),
(39, 'M', '3'),
(39, 'S', '3'),
(40, 'M', '3'),
(40, 'S', '3'),
(41, 'M', '3'),
(41, 'S', '3'),
(42, 'M', '3'),
(42, 'S', '3'),
(43, 'M', '3'),
(43, 'S', '3'),
(44, 'M', '3'),
(44, 'S', '3'),
(45, 'M', '3'),
(45, 'S', '3'),
(46, 'M', '3'),
(46, 'S', '3'),
(47, 'M', '3'),
(47, 'S', '3'),
(48, 'M', '3'),
(48, 'S', '3');

-- --------------------------------------------------------

--
-- テーブルの構造 `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_name` varchar(191) NOT NULL,
  `item_overview` varchar(191) NOT NULL,
  `item_image` varchar(191) NOT NULL,
  `item_money` int(11) NOT NULL,
  `item_insdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `items`
--

INSERT INTO `items` (`item_id`, `brand_id`, `category_id`, `item_name`, `item_overview`, `item_image`, `item_money`, `item_insdate`) VALUES
(1, 1, 1, 'WORK DRESS COAT', '前後のセンタークリースが特徴のワークコート。裏が綿になった二重織のテキスタイルを使用。フロントはスナップボタンで開閉します。ルーズフィットのストレートシルエット。', 'img/AKIEDA/akiedacoat.jpg', 60500, '2022-12-02'),
(2, 1, 1, 'WORK DRESS COAT', '前後のセンタークリースが特徴のワークコート。裏が綿になった二重織のテキスタイルを使用。フロントはスナップボタンで開閉します。ルーズフィットのストレートシルエット。', 'img/AKIEDA/akiedacoat2.jpg', 60500, '2022-12-03'),
(3, 1, 2, 'BOX SHIRT LS [RECYCLED NYLON]', 'リサイクルナイロン100%のテキスタイルを使用したボックスシルエットのシャツ。CAMOは引き染めという京都では着物を染める手法で、ハケを使って手作業で染めています。SUMIは墨染めになります。フロントはスナップ釦で開閉します。', 'img/AKIEDA/akiedajacket.jpg', 44000, '2022-12-04'),
(4, 1, 7, 'DOUBLE KNEE TROUSERS', 'ワイドシルエットのダブルニートラウザーズ。裏が綿になった二重織のテキスタイルを使用。フロントはCOBRAXのスライドホックで開閉します。', 'img/AKIEDA/akiedapants.jpg', 33000, '2022-12-05'),
(5, 1, 7, 'FIELD TROUSERS [ RECYCLED NYLON ]', 'リサイクルナイロン100%のテキスタイルを使用したフィールドトラウザー。CAMOは引き染めという京都では着物を染める手法で、ハケを使って手作業で染めています。SUMIは墨染めになります。ウエストベルトの後ろのみイージー仕様になります。', 'img/AKIEDA/akiedapants2.jpg', 49500, '2022-12-06'),
(6, 1, 8, 'AKIEDA × ASICS GEL-PTG VC', '1983年に発売されたバスケットボールシューズ、FABRE POINTGETTER-Sをデザイン\r\nベースにNULABELのワークテイストのエッセンスを組み合わせた新しいスタイルのシュ\r\nーズです。', 'img/AKIEDA/akiedashoes.jpg', 22000, '2022-12-07'),
(7, 1, 9, 'CIRCLE BAG [RECYCLED NYLON]', 'リサイクルナイロン100%のテキスタイルで作成したヘルメットバッグ。ショルダーストラップは取り外し可能な2WAY仕様になります。', 'img/AKIEDA/akiedabags2.jpg', 24200, '2022-12-08'),
(8, 1, 9, 'CIRCLE BAG [RECYCLED NYLON-2]', 'リサイクルナイロン100%のテキスタイルで作成したヘルメットバッグ。ショルダーストラップは取り外し可能な2WAY仕様。CAMOは引き染めという京都では着物を染める手法で、ハケを使って手作業で染めています。SUMIは墨染めになります。', 'img/AKIEDA/akiedabags.jpg', 24200, '2022-12-09'),
(9, 2, 3, 'Authentic Short Zip Blouson', '透湿防水性と通気性の高い機能素材を使用。機能的でありながら、微起毛した独特の素材感のある生地です。ポケットを4カ所配置し、高い収納性を実現しております。胸元に刺繍を施しております。リラックスしたシルエットです。撥水性があり通気性もよく蒸れにくい素材です。', 'img/IKEDA/ikedablouson.jpg', 52800, '2022-12-20'),
(10, 2, 5, 'Dyed Corduroy Shirt', 'ベーシックな21Wコーデユロイを後染めした定番型のレギュラーカラーシャツです。胸元に刺繍を施しております。', 'img/IKEDA/ikedashirt.jpg', 22000, '2022-12-09'),
(11, 2, 5, 'Dyed Corduroy Shirt', 'ベーシックな21Wコーデユロイを後染めした定番型のレギュラーカラーシャツです。胸元に刺繍を施しております。', 'img/IKEDA/ikedashirt2.jpg', 22900, '2022-12-24'),
(12, 2, 6, 'Half Zip Knit Tee', 'メリノウールとローピリングアクリルを配合し衿付きハーフジップの形で仕上げております。上品な見た目と軽い着心地が特徴です。', 'img/IKEDA/ikedaharfzip.jpg', 30800, '2022-12-01'),
(13, 2, 6, 'Half Zip Knit Tee', 'メリノウールとローピリングアクリルを配合し衿付きハーフジップの形で仕上げております。上品な見た目と軽い着心地が特徴です。', 'img/IKEDA/ikedaharfzip2.jpg', 30800, '2022-12-12'),
(14, 2, 4, 'Intarsia Sweater - a', 'メリノウール100%使用のインターシャ柄のセーターです。形は普遍的なベーシックな形を意識し、首元、裾、袖口を1×1リブのシングル仕上げ、縫製はリンキングによる縫製です。', 'img/IKEDA/ikedaknit.jpg', 41800, '2022-12-20'),
(15, 2, 3, 'Printed-Cotton Sweater', 'オリジナルのハイゲージ綿天竺セーターです。プレーティングの技法を使いしっかりとした編地に仕上げています。強撚糸を使用したドライなタッチが特徴です。シルエットは大きめに作り、ゆったりとした着用感です。シルクスクリーンプリントを施しております。\r\n', 'img/IKEDA/ikedasweat.jpg', 22000, '2022-12-10'),
(16, 2, 10, '6-PANEL CAP', '前面に刺繍を施した6パネルのベースボールキャップです。後ろにはベルクロがついており自由にサイズを調整することができます。', 'img/IKEDA/ikedacap.jpg', 7480, '2022-12-02'),
(17, 3, 2, 'NIBBLED BLAZER', 'スタジアムジャケットのディテールが反映されたテーラードジャケット。ジャケットは身頃と繋がったレイヤードデザインで、生地を生かした軽やかな仕立てが特徴的。従来チーム名などが入る背中のアップリケにはバッジが縫い付けられている。', 'img/KANEKO/kanekojacket.jpg', 84700, '2022-12-09'),
(18, 3, 2, 'MARBLE BANDANA PUFFER VEST', '特定のカルチャーを想起させるバンダナという柄をまるで溶かしたかのように崩したグラフィックを使用。更に生地には透け感と光沢感のある高密度メッシュを使用することで従来のイメージを一変させた。', 'img/KANEKO/kanekobest.jpg', 53900, '2022-12-11'),
(19, 3, 5, 'RAINBOW DUST SHIRT', '普遍的なチェック柄に潜むのはその名の通り七色の糸ネップ(節)。それによりカジュアル\r\nなチェック柄はファンタジーを想起させるテキスタイルに昇華された。程よくスッキリと\r\nしたシルエットのシャツの胸や裾にランダムに配されるのは、スパンコールに同じチェッ\r\nク柄をプリントした生地で、補修しながら飾りつけるというヴィンテージカルチャーの良\r\nい部分を新しく解釈して表現された。', 'img/KANEKO/kanekoshirt.jpg', 55000, '2022-12-28'),
(20, 3, 5, 'ZIP-UP MARBLE BANDANA SHIRT', '特定のカルチャーを想起させるバンダナという柄をまるで溶かしたかのように崩したグラフィックを使用。シグネチャーデザインであるZIP-UPシャツをベースに、襟の後ろ側はバンダナを首に巻いているかのようなカッティングとなっているなど、インスピレーション源へのリスペクトと遊び心を込めたデザイン。', 'img/KANEKO/kanekoshirt2.jpg', 47000, '2022-11-10'),
(21, 3, 7, 'BAGGY FIT JEANS(WALLET CHAIN)', 'ハラコに\"Mr classics\"と型押したパッチが縫い付けられたシリーズ。クラシックという\r\n単語からイメージされる定番的なシルエットではなく、デニムパンツは大胆なバギーシル\r\nエットにモディファイされており、未来のクラシックをつくっていくというブランドの意\r\n志が込められている。歪んだリベットやオリジナルのボタンに加えて、ブランドのシグネ\r\nチャーであるZIP-UPディテール', 'img/KANEKO/kanekopants.jpg', 45100, '2022-09-28'),
(22, 3, 7, 'MARBLE BANDANA PAINTER PANTS', '特定のカルチャーを想起させるバンダナという柄をまるで溶かしたかのように崩したグラ\r\nフィックを使用。更に生地には透け感と光沢感のある高密度メッシュを使用することで従\r\n来のイメージを一変させた。ゆとりのあるイージーパンツは、歩くたびに生地の滑らかな\r\n光沢を際立たせる。', 'img/KANEKO/kanekopants2.jpg', 53900, '2022-10-04'),
(23, 3, 10, 'SWORD SCARF', 'レオパード柄という一見ハードな柄は、ERIKA SKELTON氏の手によって油画で描き直す\r\nことで繊細で品のあるグラフィックに変わり、シルクの生地とマッチする。その名の通り\r\n剣の形を模したスカーフは、中心に開いたスリットに持ち手側を差し込んで形が安定する\r\nよう計算されている。スタイリングの良いアクセントになる1本。', 'img/KANEKO/kanekoscarf.jpg', 13200, '2022-08-05'),
(24, 3, 10, 'DIAMOND PUFFER SCARF', '特定のカルチャーを想起させるバンダナという柄をまるで溶かしたかのように崩したグラ\r\nフィックを使用。更に生地には透け感と光沢感のある高密度メッシュを使用することで従\r\n来のイメージを一変させた。1つずつにダウンパックが入ったダイヤ状のパーツをボタンで\r\n連結することで、アレンジ次第で大きく表情を変えることが出来るマフラー。', 'img/KANEKO/kanekoscarf2.jpg', 33000, '2022-10-10'),
(25, 4, 2, 'DOWN BIG JACKET', '大胆なドロップショルダーが特徴のオーバーサイズジャケット。どんな服装の上からでも羽織れるゆったりとしたストレスの無いサイズ感。衿を立てて着用する事が可能です。800HPのグースダウンを使用した、圧倒的な軽量性と保温性が特徴。', 'img/NAKAGAWA/yokosakamotodown.jpg', 45000, '2022-12-17'),
(26, 4, 4, 'BIG SWEATER', 'ラグランスリーブのビッグサイズトレーナー。どんな服装にも合わせ易いミニマムなデザインが特徴。一枚での着用は勿論、インナーにも着用し易いサイズ感に仕上げました。', 'img/NAKAGAWA/yokosakamotosweater.jpg', 17600, '2022-12-22'),
(27, 4, 4, 'Big Waffle Cardigan', 'ショート丈のカーディガン。表部分に上質なピマコットンを使し、裏部分にポリエステル糸でボーダー状に編んでから染分けをしてます。また、編地もローゲージのビックワッフル編みで希少です。', 'img/NAKAGAWA/matsufujiknit.jpg', 35200, '2022-05-27'),
(28, 4, 5, 'FLY FRONT STRIPE SHIRT', '仕上げにこだわり、天然素材らしい上品なナチュラル感を演出したプレミアオーガニック超長綿のタイプライター地を使用。スリットポケット ·フライフロント使用などミニマムなデザインが◎。', 'img/NAKAGAWA/no.shirts.jpg', 31900, '2022-07-20'),
(29, 4, 5, 'Royal Ox Dress Knit Loose Fit shirt', 'スーパーハイゲージで、タイプライターという織物の高密度平織組織を実現。ハイゲージニットシャツ地を使ったルーズシルエットが特徴のシャツ。しわになりにくいイージーケアとストレッチの効いた着心地が特徴です。裾に向かって広がる A ライン、ニット独特のふくらみが特徴的なシルエットとなります。', 'img/NAKAGAWA/kanemasashirts.jpg', 26000, '2022-06-21'),
(30, 4, 2, 'Drivers knit jacket - Mole yarn', '上品な光沢と、柔らかくしっとりとした肌触りのレーヨンナイロンモールヤーンで編み上げたトラックジャケット。', 'img/NAKAGAWA/supernovablouson.jpg', 42900, '2022-08-09'),
(31, 4, 6, 'border knit vest', 'レトロな配色のボーダーが魅力的です。一枚着はもちろん、春夏はTシャツ、シャツの上から。秋冬はジャケットやコートのインナーでアクセントとして幅広く着用いただけます。', 'img/NAKAGAWA/ttt_mswknitbest.jpg', 19800, '2022-12-27'),
(32, 4, 7, 'DENIM BAGGY TROUSERS', '古いヴィンテージからリプロダクトされたセルヴィッチデニムを使用したデニムバギースラックス。各所スラックス仕上げのディテールとセ ンタークリースを入れたクラシカルな佇まいが特\r\n徴的。', 'img/NAKAGAWA/yokosakamotobottoms.jpg', 45500, '2022-10-25'),
(33, 5, 6, 'New standard knit cardigan', 'ウルグアイ産の天然有色羊毛を使用した襟付きのニットカーディガン。染料を使用しない無染色のナチュラルカラーになります。5Ｇの畦の組織をベースに衿部分はボリューム感を出すために3Ｇで編成しています。', 'img/NAKAMURA/nakamuracardigan.jpg', 19800, '2022-06-10'),
(34, 5, 6, 'New standard knit cardigan', 'ウルグアイ産の天然有色羊毛を使用した襟付きのニットカーディガン。染料を使用しない無染色のナチュラルカラーになります。5Ｇの畦の組織をベースに衿部分はボリューム感を出すために3Ｇで編成しています。', 'img/NAKAMURA/nakamuracardigan2.jpg', 19800, '2022-11-20'),
(35, 5, 6, 'Border Knit Cardigan', '袋ジャガードで編み立てる事でダブルジャガードでは出せないスポンディッシュな編地になっています。オーストラリアの中でも特に品質の高いと評価されるジロン地方で産出されるエクストラファインラムウールを使用。', 'img/NAKAMURA/nakamuracardigan3.jpg', 26400, '2022-02-16'),
(36, 5, 6, 'Border Knit Cardigan', '袋ジャガードで編み立てる事でダブルジャガードでは出せないスポンディッシュな編地になっています。オーストラリアの中でも特に品質の高いと評価されるジロン地方で産出されるエクストラファインラムウールを使用。', 'img/NAKAMURA/nakamuracardigan4.jpg', 26400, '2022-09-01'),
(37, 5, 6, 'leopard knit cardigan', 'レトロタッチなレオパード柄と絶妙なカラーコントラストが魅力の本作。一枚着はもちろん、春夏はTシャツやタンクトップの上から。秋冬はジャケットやコートのインナーでアクセントとして幅広く着用いただけます。', 'img/NAKAMURA/nakamuracardigan5.jpg', 29700, '2022-10-11'),
(38, 5, 6, 'leopard knit cardigan', 'レトロタッチなレオパード柄と絶妙なカラーコントラストが魅力の本作。一枚着はもちろん、春夏はTシャツやタンクトップの上から。秋冬はジャケットやコートのインナーでアクセントとして幅広く着用いただけます。', 'img/NAKAMURA/nakamuracardigan6.jpg', 29700, '2022-06-04'),
(39, 5, 2, 'Loopyarn short coat', 'タテヨコに番手の違うコットン糸を使用し、2重織組織で織り上げたダブルフェイスの生地。裏には微起毛加工をし肌触り良さが感じられる素材です。', 'img/NAKAMURA/nakamurajacket.jpg', 29700, '2022-11-03'),
(40, 5, 7, 'Denim straight pants', 'NAKAMURAのデニムストレートパンツです。美しいストレートシルエットベースに拘り抜いたパターン構成が魅力的な本作。デニム特\r\n有の経年変化を愉しんでいただけるアイテムです。', 'img/NAKAMURA/nakamurapants.jpg', 19800, '2022-10-05'),
(41, 6, 6, 'Cardigan', 'スーパーキッドモヘヤを贅沢にお楽しみ頂けるように5Gの片畦でお作りしたVネックカーディガンです。Vネックの深さは何度も検討して深すぎず、浅すぎず飽きのこないバランスを探しました。軽くて暖かい、さっと羽織るだけで様になるカーディガンです。', 'img/NOMURA/nomuracardigan.jpg', 70400, '2022-12-05'),
(42, 6, 1, 'Dripping coat', '生地の漆加工は1点1点手作業での染色となる為、柄はアソートになります。', 'img/NOMURA/nomuracoat.jpg', 200200, '2022-11-29'),
(43, 6, 2, 'No collar jacket', '特殊な樹脂含浸を施し、独特なハリ感と落ち感を持たせています。二連に配したフロント釦にループ止めのスリットあきを施した袖口が特徴です。', 'img/NOMURA/nomurajacket.jpg', 92400, '2022-11-12'),
(44, 6, 2, 'Leather jacket', '素材はタテヨコの糸を変えることによって色の深みを表現し、シェットランドウールの糸を20%MIXすることによりハリ感と光沢を出しました。W100%なのでナチュラルなストレッチ性が特徴。', 'img/NOMURA/nomurajacket2.jpg', 255200, '2022-12-19'),
(45, 6, 7, 'Ski pants', '2/60ウールツイルを使用したストレートスラックス。特殊な樹脂含浸を施し、独特なハリ感と落ち感を持たせています。脇と内股のシームを排除し前後のクリースラインにシームを作る事で独特で洗練されたシルエットになっています。', 'img/NOMURA/nomurapants.jpg', 69300, '2022-12-20'),
(46, 6, 7, 'ski pants', '2/60ウールツイルを使用したストレートスラックス。特殊な樹脂含浸を施し、独特なハリ感と落ち感を持たせています。脇と内股のシームを排除し前後のクリースラインにシームを作る事で独特で洗練されたシルエットになっています。', 'img/NOMURA/nomurapants2.jpg', 69300, '2022-11-29'),
(47, 6, 7, 'Bicolour knit pants', 'オリジナルスーパーハイゲージ裏毛を使ったスウェットパンツ。ストレートシルエットで、わたりから裾までストンと落としたシルエットです。裾にゴムをいれることですっきりとした印象のアイテムです。', 'img/NOMURA/nomurapants3.jpg', 59400, '2022-10-17'),
(48, 6, 7, 'Slacks', '素材はタテヨコの糸を変えることによって色の深みを表現し、シェットランドウールの糸を20%MIXすることによりハリ感と光沢を出しました。W100%なのでナチュラルなストレッチ性が特徴。', 'img/NOMURA/nomurapants4.jpg', 56100, '2022-11-20');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_familyname` varchar(20) NOT NULL,
  `user_firstname` varchar(20) NOT NULL,
  `user_address` varchar(191) NOT NULL,
  `user_mail` varchar(191) NOT NULL,
  `user_password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`item_id`);

--
-- テーブルのインデックス `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- テーブルのインデックス `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `fkey5` (`user_id`),
  ADD KEY `fkey6` (`item_id`);

--
-- テーブルのインデックス `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fkey3` (`user_id`),
  ADD KEY `fkey4` (`item_id`);

--
-- テーブルのインデックス `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- テーブルのインデックス `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`item_id`,`inventory_itemsize`);

--
-- テーブルのインデックス `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fkey1` (`brand_id`),
  ADD KEY `fkey2` (`category_id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `buys`
--
ALTER TABLE `buys`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- テーブルの AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- テーブルの AUTO_INCREMENT `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fkey8` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- テーブルの制約 `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `fkey5` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `fkey6` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- テーブルの制約 `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fkey3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `fkey4` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- テーブルの制約 `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `fkey7` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- テーブルの制約 `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;