-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2023 at 03:34 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_neil_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name_agent` varchar(60) DEFAULT NULL,
  `surname_agent` varchar(60) DEFAULT NULL,
  `phone_number` varchar(60) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name_agent`, `surname_agent`, `phone_number`, `image`) VALUES
(2, 'Danielle', 'Dupont', '73370623456', 'b6369d010ebc94206931fdf543088226.jpeg'),
(26, 'Anna', 'Bernard', '3400624935', 'cdca3ee686f2eb5a0c73ca3edcda3bc4.jpeg'),
(28, 'Thomas', 'Bernard', '754393481', 'f035e729446f938b3d041f979df3b2de.jpeg'),
(29, 'Madeleine', 'Dubois', '7434218321', '96d63d5b134f983d9867e1c610c168ac.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `address_name` varchar(60) DEFAULT NULL,
  `address_number` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `agents_id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `address_name`, `address_number`, `description`, `image`, `area`, `rooms`, `date_creation`, `agents_id`, `price`) VALUES
(674, 'Villa in countryside', ' Rue de la Petite Provence', 52, 'Discover the epitome of small-town charm with this cozy apartment tucked away in the heart of a picturesque French village. Nestled in the idyllic town of Beaumont-sur-Mer, this residence offers a unique opportunity to experience the tranquility of provincial life while enjoying the rich cultural heritage of France.\r\n\r\nThe apartment itself is a delightful haven of comfort. Its interior features a tasteful blend of modern amenities and rustic accents, creating an inviting atmosphere. Large windows bathe the living spaces in natural light, illuminating the exposed wooden beams and adding to the overall warmth.', 'cf7df94d84fc66b990fd4c0537c69d8d.jpeg', 96, 3, '2023-09-29', 2, 37300.00),
(676, 'Majestic French Villa ', ' Rue du Château Magnifique', 14, 'Experience the epitome of elegance and sophistication in this majestic French villa located at 14 Rue du Château Magnifique, 82340 Belle Vue, France. Nestled amidst rolling hills, this remarkable property offers unparalleled panoramic views of the surrounding countryside.\r\n\r\nThe villa\'s grand facade and meticulous landscaping exude timeless charm, while the interior showcases opulent design and modern amenities. Expansive windows bathe the living spaces in natural light, highlighting the exquisite detailing, from ornate moldings to the sweeping staircase.\r\n\r\nWith multiple spacious bedrooms, luxurious bathrooms, and a gourmet kitchen, this villa is the perfect blend of comfort and style. Step outside to discover a sprawling garden with a private terrace, ideal for entertaining guests or simply savoring the stunning vistas.', '69e9a30391d858233e7397defc3bb673.jpeg', 340, 6, '2023-09-29', 2, 431000.00),
(677, 'Parisian Apartment', 'Rue de la Vie Enchantée,', 32, 'Experience the romance and allure of Paris from your own pied-à-terre in the heart of the city. This charming apartment, tucked away in a historic Parisian building, offers the perfect blend of elegance and convenience.\r\n\r\nLocated at 23 Rue de la Vie Enchantée, 75004 Paris, France, this apartment enjoys a prime location that allows you to immerse yourself in the rich culture and vibrant energy of the city.\r\n\r\nUpon entering, you\'ll be greeted by a warm and inviting interior with classic Parisian features such as hardwood floors, ornate moldings, and large windows that flood the space with natural light. The open living area provides a cozy atmosphere for relaxation, while the compact kitchen is well-equipped for culinary enthusiasts.\r\n\r\nThis apartment features a comfortable bedroom and a stylish bathroom, providing all the essentials for city living. Additionally, the building offers a charming courtyard where you can unwind after a day of exploring Paris.\r\n\r\nWith its proximity to world-famous landmarks, trendy cafes, boutique shops, and cultural treasures, this apartment is the perfect base for experiencing the magic of Paris. Don\'t miss the opportunity to make this charming Parisian apartment your own and indulge in the beauty and culture of this captivating city.', '95ae1826a6c61c7c065eb76aef5d65a2.jpeg', 32, 3, '2023-09-29', 2, 245000.00),
(678, 'Charming Rural', 'Rue de la Belle Campagne', 10, 'Discover serenity in the heart of the French countryside at this idyllic retreat located at 10 Rue de la Belle Campagne, 82360 Provence Tranquille, France.\r\n\r\nNestled amidst rolling hills and picturesque landscapes, this charming countryside house offers a unique opportunity to embrace the peace and beauty of rural France. The property\'s exterior features classic French architecture with a rustic touch, and the interior boasts a warm and welcoming atmosphere, complete with exposed wooden beams and stone accents.\r\n\r\nWith spacious living areas, a cozy fireplace, and a well-appointed kitchen, this house provides all the comforts of modern living while surrounded by nature\'s tranquility. Step outside to enjoy the expansive garden, perfect for gardening enthusiasts and outdoor gatherings.\r\nProvence Tranquille is a quaint village known for its friendly community and proximity to local markets, vineyards, and scenic hiking trails, ensuring a peaceful yet fulfilling lifestyle.\r\n\r\nSeize the chance to own this charming countryside retreat and experience the timeless beauty of rural France in your own haven of tranquility.', '239eb58d3534ffeb7af84ec6a0d67835.jpeg', 120, 4, '2023-09-29', 2, 230000.00),
(679, 'Elegan Apartment', 'Rue de la Belle Époque', 22, 'Nestled in the heart of the City of Lights, this elegant Parisian apartment offers a quintessential urban living experience. Situated on 22 Rue de la Belle Époque, 75008 Paris, France, this meticulously designed residence allows you to immerse yourself in the rich culture and sophistication of Paris.\r\n\r\nAs you step inside, you\'ll be captivated by the apartment\'s classic Parisian features, including high ceilings, herringbone parquet floors, and decorative moldings. Large windows invite an abundance of natural light, illuminating the spacious living area with a cozy fireplace and an open-concept design that seamlessly blends the living, dining, and kitchen spaces.\r\n\r\nThe apartment boasts multiple bedrooms, each adorned with unique character and modern amenities. The elegant bathrooms feature luxurious fixtures and finishes. Additionally, a charming balcony offers a perfect spot for sipping coffee or enjoying the view of the bustling Parisian streets below.\r\nThis apartment is ideally located, allowing you to stroll to world-renowned landmarks, dine at exquisite restaurants, and shop at prestigious boutiques. Live the Parisian dream in this timeless and sophisticated residence, where the essence of Paris is at your doorstep. Don\'t miss this opportunity to own a piece of this iconic city\'s history and lifestyle.', 'bad3e449ac653b87c11ad5141cbb1d27.jpeg', 80, 4, '2023-09-29', 2, 210000.00),
(680, 'Parisian Residence', 'Rue de la Belle Époque', 7, 'Discover timeless sophistication at this exquisite residence located at 7 Rue de la Belle Époque, 75007 Paris, France.\r\n\r\nNestled in one of the city\'s most prestigious districts, this elegant home reflects the quintessential Parisian lifestyle. The façade showcases classic Haussmannian architecture, and as you step inside, you\'ll be enveloped in an atmosphere of refined luxury.\r\n\r\nSpacious and light-filled living areas feature soaring ceilings, polished parquet floors, and large windows that frame picturesque views of the city. The open-concept design seamlessly connects the living, dining, and chef\'s kitchen, creating an ideal space for hosting and entertaining.\r\n\r\nThis residence offers a selection of beautifully appointed bedrooms and lavish bathrooms, each designed with meticulous attention to detail. A private garden courtyard provides a serene escape from the bustling city streets.\r\n\r\nNestled within the heart of Paris, this home is surrounded by cultural landmarks, Michelin-starred restaurants, and high-end boutiques, offering an unparalleled urban living experience.\r\n\r\nDon\'t miss the rare opportunity to own this elegant Parisian residence, where classic style meets modern comfort in one of the world\'s most iconic cities.\r\n', '39c7a6a20d902a437610496a9505b9f2.jpeg', 134, 4, '2023-09-29', 2, 370000.00),
(681, 'Villa in Corse', ' Rue de la Belle Plage', 6, 'ndulge in the mesmerizing beauty of Corsica with this exquisite luxury villa nestled in a pristine corner of the island. Perched upon a private promontory along 6 Rue de la Belle Plage, Corse, this residence offers an unparalleled living experience amidst the captivating Mediterranean landscape.\r\n\r\nThe villa boasts a seamless blend of classic Mediterranean architecture and contemporary sophistication. Its white façade harmoniously contrasts with the lush greenery of meticulously landscaped gardens.\r\n\r\nInside, the villa\'s spacious interiors are adorned with designer furnishings, creating an ambiance of refined elegance. Floor-to-ceiling windows frame breathtaking sea views, providing a continuous connection to the natural beauty that surrounds this haven.\r\n\r\nThe outdoor spaces are equally enchanting, featuring an infinity pool, expansive terraces, and a meticulously manicured garden, all meticulously designed for ultimate outdoor relaxation and enjoyment.\r\n\r\nA private staircase leads directly to a secluded sandy beach, affording you the privilege of enjoying the crystal-clear waters of the Mediterranean in complete privacy.\r\n\r\nThis villa epitomizes luxury coastal living, offering a unique and serene environment where you can relish in spectacular sunsets and direct access to the sea. It\'s a place where dreams of Mediterranean paradise come to life.', '3a6a66c7acb6cf6842232d111dbedaeb.jpeg', 359, 6, '2023-09-29', 2, 278000.00),
(682, 'Provencal Villa', 'Avenue des Lavandes', 15, 'Nestled within the enchanting landscape of Southern France, this Provençal villa in the heart of Belle Provence is a haven of tranquility and elegance. The villa\'s rustic stone façade, complemented by terracotta roof tiles, welcomes you into a world of timeless charm.\r\n\r\nInside, the spacious and luminous interiors are adorned with a warm and inviting palette, exposed wooden beams, and artisanal tile accents. The open-plan living area, featuring a welcoming fireplace, provides a gathering space filled with natural light.\r\n\r\nThe well-appointed gourmet kitchen, complete with modern amenities and a central island, beckons culinary enthusiasts. Multiple elegantly appointed bedrooms ensure comfort and serenity, with the master suite boasting a private terrace overlooking the Provençal countryside.\r\n\r\nOutside, mature gardens envelop the villa, offering a private courtyard, fragrant rose gardens, and a shimmering pool—a peaceful retreat for relaxation and outdoor gatherings.\r\nBelle Provence is celebrated for its picturesque setting, local markets, vineyards, and charming bistros, inviting you to experience the quintessential Provençal lifestyle.\r\n\r\nEmbrace the allure of Provençal living in this elegant villa, where traditional craftsmanship marries modern comfort in the heart of Southern France. Discover a timeless retreat in Belle Provence.', '14065ff6193f4748e8c99e2302ec559c.jpeg', 80, 5, '2023-09-29', 2, 372000.00),
(683, 'Luxurious Villa', 'Rue de la Vie Belle', 18, 'Indulge in Parisian elegance with this luxurious villa nestled at 18 Rue de la Vie Belle, 75007 Paris, France. This remarkable residence effortlessly combines classic Parisian charm with modern opulence.\r\n\r\nStep inside to discover spacious, light-infused interiors featuring high ceilings, herringbone parquet floors, and an open-concept layout perfect for hosting and entertaining. Multiple well-appointed bedrooms and lavish bathrooms ensure both comfort and sophistication.\r\n\r\nA private courtyard garden provides a serene retreat from the vibrant city. Located in one of Paris\'s most exclusive districts, this villa grants easy access to cultural landmarks, Michelin-starred dining, and upscale boutiques.\r\n\r\nExperience the epitome of Parisian living in this luxurious villa where timeless style harmonizes with contemporary comfort in one of the world\'s most iconic cities.', '3b3fe84f71ef45ed4cd9d19add3d82d5.jpeg', 340, 8, '2023-09-29', 2, 361000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'admintest@email.com', '$2y$10$vWxjrPa69SIiWvm49h.4.uYX5NMn9vin/3hxh8NVLj9Qot/xUBKTe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_properties_agents_idx` (`agents_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=685;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `fk_properties_agents` FOREIGN KEY (`agents_id`) REFERENCES `agents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
