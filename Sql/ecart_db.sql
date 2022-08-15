-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 09:16 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `puid_b` text NOT NULL,
  `price` int(20) NOT NULL,
  `buy_time` text NOT NULL,
  `delivered_time` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`ID`, `username`, `puid_b`, `price`, `buy_time`, `delivered_time`) VALUES
(1, 'radhika@gmail.com', '609fc751d4693', 87, '2022-08-14 09:13:25', '2022-08-14 11:26:45'),
(2, 'radhika@gmail.com', '609fc751d4693', 87, '2022-08-14 09:13:28', '2022-08-14 11:26:48'),
(3, 'radhika@gmail.com', '60a3b0f7f0650', 97, '2022-08-14 09:13:31', '2022-08-14 11:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `c_puid` text NOT NULL,
  `c_pnocount` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `username`, `c_puid`, `c_pnocount`, `p_price`) VALUES
(4, 'radhika@gmail.com', '60a3afed03070', 1, 86),
(6, 'radhika@gmail.com', '60a10ec03c916', 4, 148);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `uid` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `pname` text NOT NULL,
  `pprice` int(20) NOT NULL,
  `pofferce` text NOT NULL,
  `pinfo` text NOT NULL,
  `pseller` text NOT NULL,
  `pdescription` text NOT NULL,
  `pimage` text NOT NULL,
  `ptype` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `uid`, `username`, `pname`, `pprice`, `pofferce`, `pinfo`, `pseller`, `pdescription`, `pimage`, `ptype`) VALUES
(2, '609fc751d4693', 'Admin', 'Kissan Fresh Tomato Ketchup', 87, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'Made from the finest quality ingredients\r\nFlavour enhancer', 'KISSAN', 'Kissan Fresh Tomato Ketchup - this one’s definitely a winner when it comes to cajoling your kids into eating their food. Its remarkable flavour comes from the 100% real juicy tomatoes that have gone in making it. It’s an assured hero for all the snacks, be it samosas, pakoras, noodles or plain roti', 'http://127.0.0.1:8080/e-cart/img/product/kissan-fresh-tomato-ketchup-950-g-0-20210330.jpg', 'groceries'),
(3, '609fc7c1c27f4', 'Admin', 'Super Sarvottam Physically Refined 100% Rice Bran Oil', 149, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'Premium quality oil\r\nConsistent in taste\r\nIdeal for shallow and deep frying', 'SUPER SARVOTTAM', 'Super Sarvottam Physically Refined 100% Rice Bran Oil 1 L\r\nSuper Sarvottam Physically Refined 100% Rice Bran Oil is a special cooking oil extracted from the brown layer of brown rice which is called rice bran. It instantly enhances the flavour of your food. Buy Super Sarvottam Physically Refined 100% Rice Bran Oil online today.', 'http://127.0.0.1:8080/e-cart/img/product/super-sarvottam-physicaly-refined-100-rice-bran-oil-1-l-pouch-0-20201021.jpg', 'groceries'),
(4, '609fc8e7ef464', 'Admin', 'Sunfeast Dark Fantasy Choco Fill Cookies', 90, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'Made from the finest quality ingredients', 'SUNFEAST', 'Give in to your sweet cravings with Sunfeast Dark Fantasy Choco Fill Cookies. These cookies are crunchy yet delicate in texture. They are a perfect accompaniment to your tea or coffee. These cookies are prepared using the finest ingredients and its hygienic packaging ensures that they remain fresh over a longer period. So go ahead, buy Sunfeast Dark Fantasy Choco Fill Cookies online', 'http://127.0.0.1:8080/e-cart/img/product/sunfeast-dark-fantasy-choco-fill-cookies-300-g-0-20201125.jpg', 'groceries'),
(5, '609fc92ac5f72', 'Admin', 'Lays American Style Cream & Onion Chips', 50, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'Made from choicest ingredients', 'LAYS', 'Lay''s Potato Chips are simply irresistible with their spicy and tangy flavours. Premium quality potatoes are sliced and fried in oil, tossed with select spices, to make these crispy and delicious chips. They are ideal as a snack or for parties. Go ahead, buy this product online now!', 'http://127.0.0.1:8080/e-cart/img/product/lays-american-style-cream-onion-chips-130-g-0-20210405.jpg', 'groceries'),
(6, '609fcafeafa37', 'Admin', 'Aashirvaad Whole Wheat Atta', 375, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'No chemical fertilizers\r\nFree from pesticides\r\nExtra protein helps build strength', 'AASHIRVAAD', 'Aashirvaad Whole Wheat Atta provides the goodness of health in every bite. This product incorporates many benefits of wheat and lets your body maintain a nutrient balance. It is made of nutritious wheat grains. Also, it has a sweet taste that gives you fuller and softer rotis, every single time. Buy Aashirvaad Whole Wheat Atta online now.\r\n\r\nBenefits:', 'http://127.0.0.1:8080/e-cart/img/product/aashirvaad-whole-wheat-atta-10-kg-0-20201117.jpg', 'groceries'),
(7, '60a10ec03c916', 'admin', 'Britannia 100% Whole Wheat Bread 450 g', 37, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'Whole Wheat Bread\r\nCan be used for making sandwiches, desserts etc', 'BRITANNIA', 'Make delicious sandwiches and toasts with Britannia 100% Whole Wheat Bread. This bread is made from finest ingredients that are baked to perfection to make this soft & spongy bread. Go ahead, buy this product online now!', 'http://127.0.0.1:8080/e-cart/img/product/britannia-100-whole-wheat-bread-400-g-0-20200826.jpg', 'Bread/Bakery'),
(8, '60a10f1ec7de3', 'admin', 'Amul Taaza Homogenised Toned Long Life Milk 1 L', 61, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- ', 'Rich in calcium\r\nIt is a source of nutrition for all age groups', 'AMUL', 'Enjoy the goodness of calcium and vitamin in every glass of Amul Taaza Homogenised Toned Milk. A glass of milk a day contributes significantly to the dietary requirement of the body. It is recommended for both children and adults. Consume directly or add to your breakfast cereal, daily', 'http://127.0.0.1:8080/e-cart/img/product/amul-taaza-homogenised-toned-long-life-milk-1-l-tetra-pak-0-20210210.jpg', 'Dry/Baking Goods'),
(9, '60a10f970c5ec', 'admin', 'Knorr Classic Thick Tomato Soup 53 g', 51, 'Mobikwik - Get 5% Cashback. Valid Once per customer.', 'Made from the finest quality ingredients\r\nEasy to make', 'KNORR', 'Feel like having something light yet wholesome for dinner? Introducing Knorr Classic Thick Tomato Soup, a product made from the finest vegetables that are handpicked and blended with the right mix of spices. Apart from being a premium quality product, it is also easy to make as it', 'http://127.0.0.1:8080/e-cart/img/product/knorr-classic-thick-tomato-soup-53-g-1-20210511.jpg', 'Frozen Foods'),
(10, '60a3a9eb9b136', 'admin', 'Saffola Active Oil 5 L', 1049, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/-', 'Marico Limited+Charminar,', 'SAFFOLA+KOHINOOR', 'Despite our attempts to provide you with the most accurate information possible, the actual packaging, ingredients and colour of the product may sometimes vary. Please read the label, directions and warnings carefully before use.', 'http://127.0.0.1:8080/e-cart/img/product/saffola-active-oil-5-l-kohinoor-charminar-basmati-rice-5-kg-0-20210504.jpg', 'Other'),
(11, '60a3aaf022f49', 'Admin', 'Puric Active Lime Multi-Purpose Disinfectant Liquid 500 ml', 161, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/-', 'Fights all germs & viruses.\r\nMultipurpose use', 'PURIC', 'Puric Active Lime Multi-Purpose Disinfectant Liquid protects you from illness-causing germs and viruses. It leaves behind a refreshing and pleasant fragrance. It can be used for bathing, shaving, laundry and cleaning the bathroom, kitchen and floor surfaces leaving everything clean and fresh. So', 'http://127.0.0.1:8080/e-cart/img/product/puric-active-lime-multi-purpose-disinfectant-liquid-500-ml-0-20210504.jpg', 'Cleaners'),
(12, '60a3aba12c795', 'Admin', 'Dettol Original Soap 125 g (Pack of 4)', 194, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/-', 'Dettol Original Soap provides 100% better protection than ordinary bar soaps Trusted protection', 'DETTOL', 'Dettol Original Soap has nourishing moisturizers. Dettol''s trusted germ protection helps make skin softer smoother and healthier every day. It protects against a wide range of unseen germs with nourishing multi-vitamins. So what are you waiting for? Buy the product online at the best rate.', 'http://127.0.0.1:8080/e-cart/img/product/dettol-original-soap-125-g-pack-of-4-0-20201015.jpg', 'Cleaners'),
(13, '60a3ac78e8a4c', 'Admin', 'Dettol Lime Fresh Disinfectant Liquid 1 L', 287, 'Mobikwik - Get 5% Cashback. Valid Once per customer.', 'Fresh and pleasant fragrance for stronger action\r\nRemoves tough stains\r\nGentle on your hands', 'DETTOL', 'Using Dettol Lime Fresh Disinfectant Liquid every day will protect you from germs and help keep your home hygienically clean. Dettol is a trusted germ protection formula will help maintain your skin healthy and fresh. Dettol has been the trusted partner of millions of mothers across the country,', 'http://127.0.0.1:8080/e-cart/img/product/dettol-lime-fresh-disinfectant-liquid-1-l-0-20210105.jpg', 'Cleaners'),
(14, '60a3accc4c56b', 'Admin', 'Lifebuoy Total 10 Hand Sanitizer 50 ml', 23, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/-', 'Safe to use\r\nLong lasting germ protection', 'LIFEBUOY', 'Now, get germ free hands with Lifebuoy Hand Sanitizer. It is easy to carry with its unique formulation helps you fight harmful bacteria and saves your family from germ-prone diseases. Infused with a scent that makes it pleasant to use. So what are you waiting for? Buy the product online at', 'http://127.0.0.1:8080/e-cart/img/product/lifebuoy-hand-sanitizer-50-ml-2-20210122.jpg', 'Cleaners'),
(15, '60a3ad25dac72', 'Admin', 'Puric Instasafe Hygiene Camphor & Neem Shower Gel 300 ml', 139, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- T&C Apply.', 'Suitable for all skin types\r\nLong lasting', 'PURIC', 'Refresh your body and mind with Puric InstaSafe Hygiene Camphor & Neem Shower Gel. A power gel that is designed to refresh your body after a shower. Enriched with the goodness of Neem and Camphor feel the instant freshness and keep your skin hydrated for the whole day.', 'http://127.0.0.1:8080/e-cart/img/product/puric-active-lime-multi-purpose-disinfectant-liquid-500-ml-0-20210504.jpg', 'Cleaners'),
(16, '60a3adadb181a', 'Admin', 'Amul Masti Spiced Buttermilk 1 L (Tetra Pak)', 47, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- T&C Apply.', 'Fresh and flavourful\r\nBlend of natural ingredients\r\nAmul Masti Spiced Buttermilk is fresh and refreshing', 'AMUL', 'Buttermilk is a tangy and spicy drink, preferred by both elders and children alike, especially during the scorching summer days. The unique assortment of spices used in the buttermilk gives a refreshing kick to the taste buds.', 'http://127.0.0.1:8080/e-cart/img/product/amul-masti-spiced-buttermilk-1-l-tetra-pak-0-20210115.jpg', 'Dry/Baking Goods'),
(17, '60a3afed03070', 'Admin', 'Amul Butter 500 g (Carton)', 86, 'Mobikwik - Get 5% Cashback. Valid Once per customer.', 'Smooth and creamy Easy to spread', 'AMUL', 'Buttermilk is a tangy and spicy drink, preferred by both elders and children alike, especially during the scorching summer days. The unique assortment of spices used in the buttermilk gives a refreshing kick to the taste buds.', 'http://127.0.0.1:8080/e-cart/img/product/amul-butter-500-g-carton-0-20210315.jpg', 'Dry/Baking Goods'),
(18, '60a3b08ecb488', 'Admin', 'Nestle EveryDay Dairy Whitener 200 g (Pouch)', 97, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Easily miscible\r\nSmooth and even texture', 'NESTLE', 'There''s no greater joy than finding a milk powder that works as a healthy substitute for milk with zero compromises in the natural taste. Nestle EveryDay Dairy Whitener made from wholesome milk adds the right texture and taste to your tea, cakes, cookies, sweets, and smoothies.', 'http://127.0.0.1:8080/e-cart/img/product/nestle-everyday-dairy-whitener-200-g-pouch-0-20210312.jpg', 'Dry/Baking Goods'),
(19, '60a3b0f7f0650', 'Admin', 'Amul Mithai Mate Sweetened Condensed Milk 400 g (Tin)', 97, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- T&C Apply.', 'Made from wholesome milk\r\nRich and smooth texture\r\nThe Amul Mithai Mate Sweetened Condensed Milk has a delectable taste', 'AMUL', 'Amul Mithai Mate Sweetened Condensed Milk is made from pure and wholesome milk. It is an instant sweetener that gives the right taste to your desserts, cakes and puddings. It is available in convenient, moisture-proof containers that ensure the milk stays fresh for a longer duration. ', 'http://127.0.0.1:8080/e-cart/img/product/amul-mithai-mate-sweetened-condensed-milk-400-g-tin-0-20210219.jpg', 'Bread/Bakery'),
(20, '60a3b17129510', 'Admin', 'Britannia Toastea Premium Bake Rusk', 25, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Fresh tasty', 'BRITANNIA', 'Britannia Toastea Premium Bake Rusk is a twice-baked dried bread, also referred to as the ''toast biscuit''. You can have these rusks as it is or along with your tea or coffee. You can also spread some butter, jam or cheese over them and make a wholesome snack of it.', 'http://127.0.0.1:8080/e-cart/img/product/britannia-toastea-premium-bake-rusk-200-g-0-20210210.jpg', 'Dry/Baking Goods'),
(21, '60a3b1c03339c', 'Admin', 'Britannia Toastea Premium Bake Rusk 273 g', 28, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Hygenic &amp; flavorful', 'BRITANNIA', 'The Britannia Toastea Premium Bake Rusk is a twice-baked dried bread, also referred to as the ''toast biscuit''. You can have these rusks as it is or along with your tea or coffee. You can also spread some butter, jam or cheese over them and make a wholesome snack of it.', 'http://127.0.0.1:8080/e-cart/img/product/britannia-toastea-premium-bake-rusk-273-g-0-20210224.jpg', 'Bread/Bakery'),
(22, '60a3b26a255c7', 'Admin', 'Muffets & Tuffets Brown Bread 400 g', 25, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Fresh &amp; tasty', 'MUFFETS & TUFFETS', 'Make delicious Pizza with Muffets And Tuffets White Bread. This bread is made from finest ingredients that are baked to perfection to make this soft & spongy bread. Go ahead, buy this product online now!', 'http://127.0.0.1:8080/e-cart/img/product/muffets-tuffets-brown-bread-400-g-0-20210210.jpg', 'Dry/Baking Goods'),
(23, '60a3b2a1e47f6', 'Admin', 'Muffets & Tuffets Pizza Base (2ea) 180 g', 17, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Fresh &amp; tasty', 'MUFFETS & TUFFETS', 'Bake the finest pizzas at home with Muffets & Tuffets Pizza Base. Each pizza base is made from fine batter that is kneaded and baked to perfection to make for the perfect base. Top up with your favorite toppings & pizza mixture and make a delicious snack.', 'http://127.0.0.1:8080/e-cart/img/product/muffets-tuffets-pizza-base-2ea-180-g-0-20210210.jpg', 'Bread/Bakery'),
(24, '60a3b34c651ae', 'Admin', 'Saffola Gold Pro Healthy Lifestyle Rice Bran Based Blended Oil 5 L', 1059, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'For less Fat absorption\r\nPremium quality product from Saffola\r\nCan be used for deep frying', 'SAFFOLA', 'Saffola Gold Pro Healthy Lifestyle Rice Bran Based Blended Oil has fatty acids to help give you a balance of MUFA and PUFA. Choose Saffola Gold Blended Oil which partners on your journey for a healthy lifestyle so that you have a healthy heart. Buy Saffola Gold Pro Healthy Lifestyle Rice Bra', 'http://127.0.0.1:8080/e-cart/img/product/saffola-gold-pro-healthy-lifestyle-rice-bran-based-blended-oil-5-l-0-20210302.jpg', 'Other'),
(25, '60a3b432552a2', 'Admin', 'Mango Kesar 4 pcs Box (Approx 800 g-1200 g) ', 129, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Despite our attempts to provide you with the most accurate information possible, the actual packaging, ingredients and colour of the product may sometimes vary. Please read the label, directions and warnings carefully before use.', 'LOOSE', 'Often referred as "The King of fruits", Mango is a juicy, nutrition-rich stone fruit with exclusive fragrance, flavour, varieties and health enhancing benefits. It is rich in Fiber, Antioxidants, Vitamins, Minerals and Poly-Phenolic Falvonoid. It prevents the severe risks of Cancer and Heart diseases.', 'http://127.0.0.1:8080/e-cart/img/product/mango-kesar-4-pcs-box-approx-800-g-1200-g-0-20210422.jpg', 'Produce'),
(26, '60a3b478ba893', 'Admin', 'Apple Royal Gala (4 pcs) (Approx 500 g - 700 g)', 199, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Packed with nutrients', 'Inaugural ', 'Apple is one of the most popular fruits worldwide. It is rich in Fiber, Potassium, Vitamin C, Vitamin K, Carbs and Calories. It also consists of soluble fibers that helps in weight loss and maintaining gut health. Eating apples lower the risks of major diseases like Cancer, Diabetes etc.', 'http://127.0.0.1:8080/e-cart/img/product/apple-royal-gala-4-pcs-0-20201118.jpg', 'Produce'),
(27, '60a3b4c65bea6', 'Admin', 'Banana Robusta 6 Pcs (Box) (Approx 800 g - 1100 g)', 44, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Packed with nutrients', 'naugural ', 'Bananas are one the world''s most appealing fruits. It is consumed both raw and ripe across the world. While the Raw Bananas are popular in the form of chips and pickles, ripe Banana is apprecieted for its high Iron and Energy content', 'http://127.0.0.1:8080/e-cart/img/product/banana-robusta-6-pcs-box-0-20201126.jpg', 'Produce'),
(28, '60a3b56135525', 'Admin', 'Tomato per kg', 29, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Rich in nutrients', 'naugural', 'Despite belonging from the Fruits family, Tomatoes are widely perceived as a vegetable and are used in several veggie preparations. Tomatoes are a rich source of Potassium, Folate, Lycopene and Vitamin C. It is also considered beneficial for skin health. Increase tomato intake for impoved heart health, Cancer prevention and protection from Sun damage. Buy Tomato (Tamatar) 1 Kg online now.', 'http://127.0.0.1:8080/e-cart/img/product/tomato-per-kg-0-20200710.jpg', 'Produce'),
(29, '60a3b588f0b25', 'Admin', 'Cabbage per Pc (Approx 600 g - 1000 g)', 14, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Packed with nutrients', 'naugural', 'Cabagge is a leafy green, purple or white plant that grows as an anuual vegetable crop. It is rich in Protein, Iron, Vitamin K, Fiber and Calories. It comes in a variety of shapes and colour and can be either crinkles or smooth. Buy Cabbage per Pc (Approx 600 g - 1000 g) online now.', 'http://127.0.0.1:8080/e-cart/img/product/cabbage-per-pc-0-20200710.jpg', 'Produce'),
(30, '60a3b5b809d1f', 'Admin', 'Cluster Beans 500 g', 30, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Rich in nutrients', 'naugural', 'Beans are the most inexpensive, easy to cook yet healthy edibles of all. They are high in Fibres, Proteins and Vitamins. There are countless Indian recipes prepared with Beans in it. You can add them to your diet and increase your nutrition intake. Buy Cluster Beans 1 kg online now.', 'http://127.0.0.1:8080/e-cart/img/product/cluster-beans-500-g-0-20201118.jpg', 'Produce'),
(31, '60a3b7c9a0887', 'Admin', 'Freshee Aluminium Foil 9 m (Pack of 2)', 99, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'It is safe and hygienic to use\r\nKeeps food fresh for long hours', 'FRESHEE', 'Freshee Aluminium Foil is hygienically safe for wrapping, storing, covering, sealing, baking, grilling and freezing to serving food in style. It helps in keeping your kitchen mess-free and your food tasty. It is extra thick, helping to retain moisture and aroma while bringing out the flavour and texture', 'http://127.0.0.1:8080/e-cart/img/product/freshee-aluminium-foil-9-m-pack-of-2-0-20200722.jpg', 'Paper Goods'),
(32, '60a3b84f1e8a8', 'Admin', 'Kissan Fresh Tomato Ketchup 1 kg', 117, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- T&C Apply.', 'Made from the finest quality ingredients', 'KISSAN', 'Kissan Fresh Tomato Ketchup - this one"s definitely a winner when it comes to cajoling your kids into eating their food. Its remarkable flavour comes from the 100% real juicy tomatoes that have gone in making it. It"s an assured hero for all the snacks, be it samosas, pakoras, noodles or plain rot', 'http://127.0.0.1:8080/e-cart/img/product/kissan-fresh-tomato-ketchup-1-kg-0-20210415.jpg', 'Paper Goods'),
(33, '60a3b8d2ae091', 'Admin', 'Ching''s Secret Schezwan Sauce 250 g', 79, 'Simpl - Pay using Simpl & Get Upto Rs. 100 Cashback* on Min. Txn of Rs. 500/- T&C Apply.', 'Made from the finest quality ingredients', 'CHING''S SECRET', '‘Schezwan’ has become India’s most popular Desi Chinese flavour – found across all kinds of dishes. Ching’s has blended fiery Sichuan peppers and pungent garlic to create the most versatile Ching''s Secret Schezwan Sauce. It can add a mouth-watering Schezwani tadka to any dish! For', 'http://127.0.0.1:8080/e-cart/img/product/ching-s-secret-schezwan-sauce-250-g-0-20200916.jpg', 'Paper Goods'),
(34, '60a3b9f77efc1', 'Admin', 'Colgate Maxfresh Peppermint Ice Blue Anticavity Toothpaste 150 g (Pack of 2)', 113, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Switch on the power of freshness with Colgate Maxfresh toothpaste that refreshes you and helps you size the day because every morning is a fresh start', 'COLGATE', 'Switch on the power of freshness with Colgate Maxfresh Peppermint Ice Blue Anticavity Toothpaste that refreshes you and helps you seize the day because every morning is a fresh start. The blue gel toothpaste contains unique cooling cyrstals that give you an intense cooling while you brush.', 'http://127.0.0.1:8080/e-cart/img/product/colgate-maxfresh-blue-saverpack-300-g-0-20201014.jpg', 'Other'),
(35, '60a3ba1f74ecc', 'Admin', 'Blue Bird Raspberry Veg Jelly Crystals 100 g', 46, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Made from the choicest ingredients\r\nInstant Mix\r\nEasy to make', 'BLUE BIRD', 'Blue Bird Raspberry Jelly Crystals are an all-time favourite with all age groups. It can be had by itself or accompanied with fresh cream, plain or flavoured custard. It can also be used to make myriad combitions with cakes, salads, ice creams and sundaes. So go ahead, buy Blue Bird', 'http://127.0.0.1:8080/e-cart/img/product/blue-bird-raspberry-veg-jelly-crystals-100-g-0-20210129.jpg', 'Frozen Foods'),
(36, '60a3ba54ad4d5', 'Admin', 'TE-A-ME Ice Brews Lychee Tea Bags 18 pcs', 274, 'Mobikwik - Get 5% Cashback. Valid Once per customer T&C Apply.', 'Tasty &amp; flavorful', 'TE-A-ME', 'Indulge in this rich blend and full-bodied TE-A-ME Ice Brews Lychee Tea to get the true flavour from every sip you have. A blend of high grown tea with real spices- no artificial flavours.TE-A-ME Ice Brews Lychee Teais a made of choicest ingredients. Go ahead and buy this flavourful tea online', 'http://127.0.0.1:8080/e-cart/img/product/te-a-me-ice-brews-lychee-tea-bags-18-pcs-0-20210208.jpg', 'Frozen Foods');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phoneno` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `qualification` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`ID`, `username`, `password`, `email`, `address`, `phoneno`, `gender`, `qualification`, `photo`) VALUES
(1, 'radhika@gmail.com', '123', 'radhika@gmail.com', '', , 'Female', '2022-08-13', 'http://localhost:8080/e-cart/img/admin.png');
