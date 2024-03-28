-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2024 at 04:09 AM
-- Server version: 8.0.36
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkt171_healthfare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `appointment_date` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pref_time` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `userid` int NOT NULL,
  `status` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `name`, `email`, `phone`, `appointment_date`, `department`, `doctor`, `message`, `pref_time`, `userid`, `status`) VALUES
(4, 'q', 'q@gmail.com', 'q', 'q', 'Department 2', 'Dr.abc', 'q', '', 0, ''),
(5, 'q', 'q@gmail.com', 'q', 'q', 'Department 1', 'Dr.abcd', 'q', '', 0, ''),
(6, 'q', 'q@gmail.com', 'q', 'q', 'Department 1', 'Dr.abc', 'q', '', 0, ''),
(10, 'q', 'q@gmail.com', NULL, '2024-01-04', NULL, 'Dr.abc', 'q', '23:07', 4, ''),
(11, 'Akhil', 'akhilanwarm@gmail.com', '123456789', '19/02/2023', 'Department 1', 'Doctor 1', 'hi', '', 0, ''),
(12, 'mirsab', '', '', '', '', '', '', '', 0, ''),
(13, 'q', 'q@gmail.com', 'qq', '2024-03-05', NULL, 'Dilshad P L', 'q', '', 0, 'In Progress'),
(14, 'q', 'test@gmail.com', 'q', '2024-03-12', NULL, 'Dilshad P L', 'q', '', 0, ''),
(15, 'Profile', 'test@gmail.com', '9876543210', '2024-02-29', NULL, 'Dilshad P L', 'sss', '', 11, ''),
(16, 'kevin', 'kevin@gmail.com', '9876543210', '2024-03-13', NULL, 'Dilshad P L', 'message', '', 12, 'Pending'),
(17, 'shibil', 'shibu@12Gmail.com', '6235860712', '11/4/2024', 'Department 3', 'Doctor 3', '', '', 0, 'Pending'),
(18, 'shibil', 'shibu@12Gmail.com', '6235860712', '11/4/2024', 'Department 1', 'Doctor 1', 'heavy mygraine...', '', 0, 'Pending'),
(19, 'shibil', 'shibu@12Gmail.com', '6235860711', '2024-03-13', NULL, 'Dilshad P L', 'heavy migranee', '', 2, 'Pending'),
(20, 'Arshad', 'sample@gmail.com', '868724789', '2024-03-22', NULL, 'Dilshad P L', 'hooo', '', 4, 'Pending'),
(21, 'azess', 'azees123@gmail.com', '6235860711', '12-20-2024', 'Department 2', 'Doctor 2', 'headakeeee', '', 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bmi`
--

CREATE TABLE `bmi` (
  `bid` int NOT NULL,
  `height` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `weight` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `age` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `userid` int NOT NULL,
  `status` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_to` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `req_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `subject`, `message`, `userid`, `status`, `assigned_to`, `req_date`, `phone`) VALUES
(1, 'Harry', 'q@gmail.com', 'q', 'q', 4, 'In Progress', 'Dr.Joseph', '2024-01-11 13:41:08', ''),
(2, 'Ron', 'q@gmail.com', NULL, 'q', 2, 'Pending', 'Dr.abc', '2024-01-11 13:41:08', ''),
(3, 'q', 'q@gmail.com', NULL, 'q', 1, ' Completed', 'Dr.abc', '2024-01-04 00:00:00', 'q'),
(4, 'ibin', 'dishaddilu5@gmail.com', NULL, 'not working', 4, 'In Progress', 'Dr.abc', '2024-02-16 05:31:45', ''),
(5, 'athul krishnan kr', 'athulkrishnan@gmail.com', NULL, 'fever', 2, 'Pending', 'Dr.abc', '2003-10-24 00:00:00', '6235860712'),
(6, 'athul krishnan kr', 'athulkrishnankr05@gmail.com', NULL, 'my bmi isnot working properlly..', 2, 'Pending', 'Dr.abc', '2024-02-16 05:36:37', ''),
(7, 'hi`hi', 'i@gmai.comd', NULL, 're', 4, '', '', '2024-02-18 15:15:38', ''),
(8, 'akhil', 'ak@m', NULL, 'hi', 4, '', '', '2002-12-12 00:00:00', '12345'),
(9, 'Arshad', 'sample@gmail.com', NULL, 'hloo', 4, '', '', '2024-03-18 09:21:11', '');

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `did` int NOT NULL,
  `health_condition` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `severity` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `additional_info` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `userid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`did`, `health_condition`, `severity`, `additional_info`, `userid`) VALUES
(1, 'High Cholesterol', NULL, NULL, NULL),
(2, 'Diabetes', NULL, NULL, NULL),
(3, 'High Blood Pressure', NULL, NULL, NULL),
(4, 'Low Cholesterol', NULL, NULL, NULL),
(5, 'Obesity', '', '', NULL),
(6, 'Cancer', '', '', NULL),
(7, 'Heart Attack', '', '', NULL),
(8, 'Influenza', '', '', NULL),
(9, 'Stroke', '', '', NULL),
(10, 'Constipation', '', '', NULL),
(11, 'Ulcers', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dietary_pref`
--

CREATE TABLE `dietary_pref` (
  `dpid` int NOT NULL,
  `dietary_pref` varchar(500) DEFAULT NULL,
  `description` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietary_pref`
--

INSERT INTO `dietary_pref` (`dpid`, `dietary_pref`, `description`) VALUES
(2, 'Vegetarian', 0x4578636c75646573206d6561742c20706f756c7472792c20616e6420736561666f6f642e20496e636c7564657320706c616e742d626173656420666f6f64732e),
(3, 'Vegan', 0x4578636c7564657320616c6c20616e696d616c2070726f64756374732c20696e636c7564696e6720646169727920616e6420656767732e205374726963746c7920706c616e742d62617365642e),
(4, 'Low Carb', 0x5265647563657320636172626f6879647261746520696e74616b652e20466f6375736573206f6e2070726f7465696e20616e64206865616c74687920666174732e),
(5, 'Gluten-Free', 0x41766f69647320676c7574656e2d636f6e7461696e696e6720677261696e73206c696b652077686561742c206261726c65792c20616e64207279652e205375697461626c6520666f722063656c69616320646973656173652e),
(6, 'Keto', 0x486967682d6661742c206c6f772d6361726220646965742e2041696d7320746f2061636869657665206b65746f73697320666f7220666174206275726e696e672e);

-- --------------------------------------------------------

--
-- Table structure for table `dietition`
--

CREATE TABLE `dietition` (
  `dietid` int NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `specialization` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietition`
--

INSERT INTO `dietition` (`dietid`, `name`, `email`, `specialization`, `contact`, `status`, `username`, `password`) VALUES
(1, 'Dr.abc', 'abc@gmail.com', 'Nutritionist', '1234567', 'Active', 'abc', '123'),
(2, 'Dr.abcd', 'abcd@gmail.com', 'Nutritionist', '1234567', 'Active', 'abcd', '123'),
(4, 'Dr.Joseph', 'joseph@gmail.com', 'Nutritionist', '123467890', 'Active', 'joe', '123');

-- --------------------------------------------------------

--
-- Table structure for table `familymember`
--

CREATE TABLE `familymember` (
  `fid` int NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relation` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `userid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `familymember`
--

INSERT INTO `familymember` (`fid`, `name`, `relation`, `image`, `userid`) VALUES
(8, 'Reya', 'Mother', 'image/1.jpg', 4),
(9, 'joel', 'Son', 'image/testimonials-4.jpg', 4),
(12, 'test', 'test', 'image/default.png', 3),
(13, 'q', 'q', 'image/default.png', 3),
(15, 'Harry', 'Father', 'image/messages-3.jpg', 12),
(19, 'George', 'Father', 'image/IMG_20240327_092652.jpg', 14),
(20, 'Merry', 'Mother', 'image/IMG_20240327_092728.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqid` int NOT NULL,
  `question` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `answer` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqid`, `question`, `answer`) VALUES
(1, 'How do I register an account?', 'To register an account, visit the registration page and provide your details.'),
(3, 'Can I update my profile information?', 'Yes, you can update your profile information by going to the profile page and making changes.'),
(4, 'What can I do if I have allergies?', 'If you have allergies, you can add them to your profile and the system will consider them while providing recommendations.'),
(5, 'How do I schedule a call with an expert?', 'You can schedule a call with an expert by visiting the \"Connect with Expert\" section and following the instructions.'),
(6, 'Can I customize the meals I receive?', 'Yes, you can customize your meals based on your preferences and dietary requirements.'),
(9, 'Question to ask', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `fdid` int NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fid` int DEFAULT NULL,
  `userid` int NOT NULL,
  `nutri_info` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredients` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `recipe` blob NOT NULL,
  `calories` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `health_condition` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`fdid`, `image`, `name`, `fid`, `userid`, `nutri_info`, `ingredients`, `recipe`, `calories`, `type`, `health_condition`) VALUES
(6, 'image/prevent-diabetes.webp', 'Oatmeal', NULL, 0, 'Calories: 150, Carbs: 30g, Protein: 5g, Fat: 2g', 'Oats, Water, Cinnamon, Banana', 0x312e20426f696c2077617465722e20322e20416464206f6174732e20332e20536c6963652062616e616e612e20342e204d697820616c6c20696e6772656469656e74732e, '150.00', 'Breakfast', 'Diabetes'),
(7, 'image/greek-20yogurt-20parfait.webp', 'Greek Yogurt Parfait', NULL, 0, 'Calories: 200, Carbs: 25g, Protein: 15g, Fat: 7g', 'Greek Yogurt, Berries, Honey, Granola', 0x312e204c6179657220796f677572742c20626572726965732c20616e64206772616e6f6c612e20322e204472697a7a6c6520686f6e6579206f6e20746f702e, '200.00', 'Breakfast', 'Diabetes'),
(8, NULL, 'Avocado Toast', NULL, 0, 'Calories: 250, Carbs: 20g, Protein: 5g, Fat: 18g', 'Whole Wheat Bread, Avocado, Tomato, Salt, Pepper', 0x312e20546f6173742062726561642e20322e204d6173682061766f6361646f2e20332e20537072656164206f6e2062726561642e20342e2041646420746f6d61746f2c2073616c742c20616e64207065707065722e09, '250.00', 'Breakfast', ''),
(10, NULL, 'Grilled Salmon with Asparagus', NULL, 0, 'Calories: 320, Carbs: 10g, Protein: 35g, Fat: 16g', 'Salmon, Asparagus, Olive Oil, Lemon, Garlic', 0x312e204772696c6c2073616c6d6f6e2077697468206f6c697665206f696c2c206c656d6f6e2c20616e64206761726c69632e20322e20526f617374206173706172616775732e, '320.00', 'Dinner', ''),
(11, NULL, 'Veggie Stir-Fry', NULL, 0, 'Calories: 250, Carbs: 35g, Protein: 10g, Fat: 8g', 'Mixed Vegetables, Tofu, Soy Sauce, Ginger, Garlic', 0x312e20537469722d667279207665676769657320616e6420746f6675207769746820736f792073617563652c2067696e6765722c20616e64206761726c69632e, '250.00', 'Dinner', ''),
(12, NULL, 'Spaghetti Bolognese', NULL, 0, 'Calories: 450, Carbs: 50g, Protein: 20g, Fat: 18g', 'Ground Beef, Tomatoes, Onion, Garlic, Spaghetti', 0x312e2042726f776e20626565662077697468206f6e696f6e7320616e64206761726c69632e20322e2041646420746f6d61746f65732e20332e205365727665207769746820636f6f6b6564207370616768657474692e, '450.00', 'Dinner', ''),
(14, NULL, 'Grilled Chicken Salad', NULL, 0, 'Calories: 300, Carbs: 15g, Protein: 30g, Fat: 12g', 'Grilled Chicken, Lettuce, Tomatoes, Cucumbers, Balsamic Dressing', 0x312e204772696c6c20636869636b656e2e20322e2043686f7020766567657461626c65732e20332e204d69782077697468206472657373696e672e, '300.00', 'Lunch', ''),
(15, NULL, 'Quinoa and Black Bean Bowl', NULL, 0, 'Calories: 350, Carbs: 45g, Protein: 15g, Fat: 10g', 'Quinoa, Black Beans, Corn, Avocado, Lime', 0x312e20436f6f6b207175696e6f612e20322e204d69782077697468206265616e732c20636f726e2c2061766f6361646f2e20332e2053717565657a65206c696d652e, '300.00', 'Lunch', ''),
(21, 'image/download (1).jpeg', 'Carrot Juice', NULL, 0, '94 kilocalories 2.24 grams (g) of protein 0.35 g of fat 21.9 g of carbohydrate 1.89 g of fiber', '250 grams carrots (9 ounce, 3 medium carrots) 4 to 8 ice cubes or fruit ice (use as required) ½ inch ginger (optional) 3 large oranges (or 1 cup orange juice or coconut water)', '', '', 'Breakfast', 'High Blood Pressure'),
(22, 'image/sprouts-salad-recipe.jpg', 'Sprouts salad', NULL, 0, '', '3/4 cup boiled mixed sprouts, 2 tablespoon chopped coriander, 1/4 cup finely chopped tomatoes, 1/4 cup finely chopped fenugreek leaves, salt to taste, 1 teaspoon oil, and 1 green chili (slit).', 0x436f6d62696e6520746865206d69786564207370726f7574732c20636f7269616e6465722c20746f6d61746f65732c2066656e75677265656b206c656176657320616e642073616c7420696e206120626f776c20616e64206d69782077656c6c2e204e6f772c2068656174206f696c20696e206120736d616c6c2070616e2c206164642074686520677265656e206368696c6920616e642073617574c3a920666f72206120666577207365636f6e64732e20506f75722074686973206f766572207468652073616c616420616e64206d69782077656c6c2e20536572766520616e6420656e6a6f792e, '', 'Dinner', 'High Cholesterol');

-- --------------------------------------------------------

--
-- Table structure for table `food_review`
--

CREATE TABLE `food_review` (
  `frid` int NOT NULL,
  `food_name` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `review` blob,
  `image` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `did` int DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `family_member` int NOT NULL,
  `fid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_review`
--

INSERT INTO `food_review` (`frid`, `food_name`, `review`, `image`, `did`, `date`, `status`, `user`, `family_member`, `fid`) VALUES
(13, 'Burger', 0x427572676572732063616e206265206120676f6f6420736f75726365206f662070726f7465696e206275742074686579206f6674656e20636f6e7461696e20736174757261746564206661747320616e64206d617920636f6e7472696275746520746f206865616c7468207269736b73206c696b65206865617274206469736561736520696620636f6e73756d6564206578636573736976656c79204f707420666f72206c65616e206d656174206f7220706c616e742d626173656420616c7465726e6174697665732c20616e642062616c616e6365207769746820766567676965732e20456174696e672062757267657273206f63636173696f6e616c6c792061732070617274206f66206120766172696564206469657420697320616476697361626c6520746f206d696e696d697a65207269736b732e, 'foods/crispy-comte-cheesburgers-FT-RECIPE0921-6166c6552b7148e8a8561f7765ddf20b.jpg', 3, '2024-03-12 09:42:25', 'Completed', '12', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `health_condition`
--

CREATE TABLE `health_condition` (
  `hcid` int NOT NULL,
  `health_condition` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hc_severity` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `allergy` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `allergy_severity` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dietary_pref` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fid` int DEFAULT NULL,
  `uid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_condition`
--

INSERT INTO `health_condition` (`hcid`, `health_condition`, `hc_severity`, `allergy`, `allergy_severity`, `dietary_pref`, `fid`, `uid`) VALUES
(10, 'High Blood Pressure', 'mild', 'peanuts', 'mild', 'Vegetarian', 15, 12),
(15, 'High Blood Pressure', 'mild', 'peanuts', 'mild', 'Vegetarian', 8, 4),
(16, 'Diabetes', 'moderate', 'dairy', 'mild', 'Keto', 8, 4),
(17, 'Diabetes', 'mild', 'peanuts', 'mild', 'Vegetarian', 9, 4),
(20, 'High Cholesterol', 'mild', NULL, NULL, NULL, 19, 14),
(21, 'Diabetes', 'mild', NULL, NULL, NULL, 20, 14);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype` varchar(1) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'U',
  `email` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `dob` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `address1` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `address2` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `region` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `postal_code` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'image/default.png',
  `specialization` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `usertype`, `email`, `username`, `password`, `number`, `dob`, `gender`, `address1`, `address2`, `country`, `city`, `region`, `postal_code`, `img`, `specialization`, `status`) VALUES
(1, 'Akhil Anwer M', 'A', 'akhilanwarm@gmail.com', 'akhil', '123', '9037356274', '2003-05-31', 'male', 'nil', 'nil', 'India', 'malappuram', 'ponnani', '679577', 'image/default.png', '', ''),
(2, 'Athul Krishnan K.R', 'U', 'athulkrishna@gmail.com', 'athul', '123', '6235860711', '2023-11-04', 'male', 'nil', 'nil', 'India', 'nil', 'nil', '678', 'image/digital-technology-software-development-concept-600nw-2111828198.webp', '', ''),
(3, 'Dilshad P L', 'D', 'dilshad@gmail.com', 'dilshad', '123', '1234567890', '2012-12-12', 'male', 'nil', 'nil', 'India', 'nil', 'nil', '678', 'image/default.png', 'Nutritionaist', 'Active'),
(4, 'Arshu', 'U', 'arshad123@gmail.com', 'arshad', '123', '0000000000', '2012-12-12', 'Female', 'nil', 'nil', 'Somalia', 'nil', 'nil', '123', 'image/IMG-20240325-WA0093.jpg', '', ''),
(6, 'dummy', 'U', 'farseenamr1997@gmail.com', 'dummy', '123', '12344', '2003-02-02', 'male', 'sda', 'asd', 'India', 'ddf', 'ddf', '123', 'image/default.png', '', ''),
(10, 'rahul', 'D', 'rahul@gmail.com', 'rahul', '123', '123456789', '', '', '', '', '', '', '', '', 'image/default.png', 'nutriotionalist', 'Inactive'),
(11, 'Mirsab km', 'U', 'Mirsabkm@gmail.com', 'mirsu', '1', '1234567890', '2004-03-23', 'male', 'abc house', '10', 'Japan', 'tokyo', 'kunnamkulam', '1212', 'image/default.png', '', 'Active'),
(12, 'Kevin', 'U', 'kevin@gmail.com', 'kevin', '1234', '9876543210', '1999-06-08', 'male', 'Address', 'test', 'India', 'city', 'region', '677867', 'image/profile-img.jpg', '', 'Active'),
(13, 'sample', 'D', 'sample@gmail.com', 'sample', '123', '8787878778', '', '', '', '', '', '', '', '', 'image/default.png', 'sample', 'Inactive'),
(14, 'John', 'U', 'john@gmail.com', 'john', '12345678', '9000000000', '2000-03-27', 'male', 'Valayamkulam ', 'Malappuram ', 'India', 'Valayamkulam ', 'Valayamkulam ', '679571', 'image/IMG_20240327_092534.jpg', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `body` blob NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `views`, `image`, `body`, `published`, `created_at`) VALUES
(11, 3, 'Coronavirus disease (COVID-19)', 0, 'image/corona-virus-getty.tmb-1200v.jpg', 0x436f726f6e6176697275736573206172652061206c617267652066616d696c79206f662c2072657370697261746f72792076697275736573207468617420696e636c7564657320434f5649442d31392c204d6964646c6520456173742052657370697261746f72792053796e64726f6d6520284d455253292c20616e64205365766572652041637574652052657370697261746f72792053796e64726f6d65202853415253292e200d0a436f726f6e617669727573657320636175736520646973656173657320696e20616e696d616c7320616e642068756d616e732e2054686579206f6674656e2063697263756c61746520616d6f6e672063616d656c732c20636174732c20616e6420626174732c20616e642063616e20736f6d6574696d65732065766f6c766520616e6420696e666563742070656f706c652e, 0, '2024-03-12 16:09:14'),
(18, 3, 'The benefits of eating protein for healthy and achievable weight loss', 0, 'image/the-benefits-of-eating-protein.jpeg', 0x446965746172792070726f7465696e20697320637269746963616c20746f206865616c74682062656361757365206f662074686520616d696e6f206163696473206f72206275696c64696e6720626c6f636b73206f662070726f7465696e732e2057652075736520616d696e6f20616369647320666f722067726f77746820616e6420646576656c6f706d656e742c2063656c6c2067656e65726174696f6e2c20686f726d6f6e6520616e6420656e7a796d65206275696c64696e672c20616e64206f746865722066756e6374696f6e73206c696b6520737570706f7274696e672061206865616c74687920696d6d756e652073797374656d2120456174696e672070726f7465696e206461696c7920697320766974616c20666f7220656e737572696e67206865616c74682e0d0a0d0a596f752063616e206d65657420796f7572206461696c792070726f7465696e206e656564732066726f6d20626f746820706c616e7420616e6420616e696d616c20666f6f64730d0a0d0a536f6d6520616e696d616c2070726f7465696e73206172652068696768657220696e2063616c6f726965732062656361757365206f66206661742e2043686f6f7365206c65616e20637574732c207472696d20657863657373206661742c20616e642061766f696420646565702d66617420667279696e6720746f20656e7375726520796f752072656170207468652062656e6566697473206f662070726f7465696e2d7269636820666f6f647320776974686f7574207468652065787472612063616c6f726965732e0d0a0d0a5469703a20436f6c647761746572206669736820616e6420736561666f6f642061726520657863656c6c656e742070726f7465696e2063686f696365732073696e6365207468657920636f6e7461696e2068656172742d6865616c746879206f6d6567612d3320666174732e0d0a0d0a506c616e742d62617365642070726f7465696e732c2073756368206173206472696564206265616e7320616e64207065617320286c6567756d6573292c20736f796265616e732c206e7574732c2073656564732c20616e6420677261696e732c2061726520740d0a0d0a5469703a204c6567756d657320737570706f7274206865616c7468792067757420626163746572696120616e642061726520626c6f6f642073756761722d667269656e646c792e, 0, '2024-03-12 04:15:54'),
(19, 3, 'What Are The Dos And Don’ts In Eating Habits?', 0, 'image/60c9c50a4c642eb02ebb0968_Kids Nutrition1.jpeg', 0x57686174204172652054686520446f7320416e6420446f6ee28099747320496e20456174696e67204861626974733f0d0a5468657265e28099732061206c6f742074686174e2809973206265656e207772697474656e2061626f757420776861742061206368696c642073686f756c64206e6f742065617420616e6420776861742074686579206e65656420746f20696e636c756465206f6e20746865697220706c617465206576657279206461792e204461696c79206e7574726974696f6e20666f72206b69647320697320776861742068656c7073206275696c642061207374726f6e6720696d6d756e652073797374656d2e2048657265e2809973207768617420746f20646f20e2809320616e642077686174206e6f7420746f20e2809320696e206f7264657220746f206b65657020796f7572206b696473206865616c7468792e0d0a0d0a446f6ee280997420736b6970206d65616c732e200d0a446f207072696f726974697365206d65616c74696d6520616e642065617420746f6765746865722e200d0a0d0a446f6ee2809974206b656570207468656d206f7574206f6620746865206b69746368656e2e200d0a446f20696e766f6c7665207468656d20696e20746865206b69746368656e20616e6420676574207468656d20746f206375742c2063686f702c207065656c20616e6420776173682e200d0a0d0a446f6ee280997420616c6c6f7720656173792061636365737320746f206a756e6b20666f6f642e200d0a446f206c696d69742074686520696e74616b65206f6620737567617220616e642063617262732e200d0a0d0a446f6ee28099742066696c6c20796f75722070616e7472792077697468207061636b6167656420666f6f647320616e6420736e61636b732e0d0a446f2073746f636b207570206f6e206865616c74687920736e61636b73206c696b65206672756974732c206d616b68616e612c20706f68612c206d75726d7572612e0d0a0d0a446f6ee280997420666f726365207468656d20746f206561742e200d0a446f20666f637573206f6e20612076617269657479206f6620666f6f647320616e642074616b6520697420736c6f772e20, 0, '2024-03-12 04:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tid` int NOT NULL,
  `type` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dietitian` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tid`, `type`, `name`, `dietitian`, `date`, `status`) VALUES
(1, 'Feedback', 'Meal Assessment ', 'Dilshad P L', '2024-01-10', 'Pending'),
(2, 'Consultation', 'Nutrition Counselling', 'Dilshad P L', '2024-01-09', 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bmi`
--
ALTER TABLE `bmi`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `dietary_pref`
--
ALTER TABLE `dietary_pref`
  ADD PRIMARY KEY (`dpid`);

--
-- Indexes for table `dietition`
--
ALTER TABLE `dietition`
  ADD PRIMARY KEY (`dietid`);

--
-- Indexes for table `familymember`
--
ALTER TABLE `familymember`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`fdid`);

--
-- Indexes for table `food_review`
--
ALTER TABLE `food_review`
  ADD PRIMARY KEY (`frid`);

--
-- Indexes for table `health_condition`
--
ALTER TABLE `health_condition`
  ADD PRIMARY KEY (`hcid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bmi`
--
ALTER TABLE `bmi`
  MODIFY `bid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `did` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dietary_pref`
--
ALTER TABLE `dietary_pref`
  MODIFY `dpid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dietition`
--
ALTER TABLE `dietition`
  MODIFY `dietid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `familymember`
--
ALTER TABLE `familymember`
  MODIFY `fid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `fdid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `food_review`
--
ALTER TABLE `food_review`
  MODIFY `frid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `health_condition`
--
ALTER TABLE `health_condition`
  MODIFY `hcid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
