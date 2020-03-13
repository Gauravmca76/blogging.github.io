-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 12:22 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_sarestates_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `content_image` varchar(20000) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `tags`, `content`, `content_image`, `photo`, `posted`, `date`, `author`, `category`) VALUES
(40, 'Company Profile', 'Profiles', '<p>A company profile is an essential part of a business plan &amp; organization. It is a professional introduction which helps to create identity of the company. It describes overview of the company to its partners, investors &amp; shareholders. The company profile usually includes the products &amp; services provided by the company, current position, short term &amp; long term goals. It also contains the basic information about the company (Name, address, Contact number), all business strategies &amp; activities, financial data &amp; achievements of the business.</p>', NULL, 'cp.jpg', 'publish', '2020-03-05', 'Admin', '5'),
(41, 'Financial Analysis', 'Financial Analysis', '<p>Financial analysis is the method to estimate the budget, businesses, projects &amp; other financial entities of the organization. It helps to determine performance &amp; relevancy. It also estimates financial policies, plans for business activities, economic trends. A financial expert manages analysis on income statement, cash flow statement balance sheet.</p><p>The financial experts prepare reports using ratios that use information from financial statements. These reports are presented to upper management which supports them to take business decisions.</p>', NULL, 'financial.jpg', 'publish', '2020-03-05', 'Admin', '6'),
(42, 'Business For Sale', 'Sale', '<p>Bekreta is the perfect website for those who genuinely want to sell the business. We sell all kinds of business according to your needs and wants. This site provides help to find business that satisfy you. We promote your business to the wide &amp; well-educated audience. You will get best deals for your business. Selling process is extremely easy. You will gain massive exposure for your business.</p>', NULL, 'business.jpg', 'publish', '2020-03-05', 'Admin', '7'),
(44, 'Bekreta', 'Business', '<p>Bekreta is the only impeccable digital fintech service Platform utilizing advanced technology at attractive costing in a simplified user-friendly manner. It is providing solutions from start-up to maturity stage companies from Business <strong>Planning</strong> to <strong>Selling</strong> the company on a single platform. It is an easy to access &amp; fully secured digital platform which includes entire Business Cycle Stages. We introduce authentic investors, which will invest in startups to accelerate businesses. We bridge the gap between potential business buyers and sellers by creating Clear and Transparent deals.</p>', NULL, 'bekreta.png', 'publish', '2020-03-05', 'Admin', '7'),
(46, 'Ratio Analysis', 'Ratios', '<p><strong>1. Current Ratio:</strong></p><p>The current Ratio is one of the significant/ vital ratios in financial analysis. The current ratio measures companyâ€™s ability to pay liabilities through current assets. A higher current ratio is good for companyâ€™s health.</p><p>Low: Less than 1</p><p>Medium: 1.5-2</p><p>High:&nbsp; 2.1-3</p><p>Some sources said current ratio should be generally between 1.5% and 3% for healthy businesses.</p><p><strong>2. Quick Ratio:</strong></p><p>Quick ratio is also known as acid-test ratio. Quick ratio is a method to measures capability of the company to use quick assets to retire/ withdraw the liabilities. It offers more reliable information about the industry.</p><p>Low: Less than 1</p><p>Medium: &gt;1 â€“ 1.5</p><p>High: 4</p><p><strong>3.&nbsp;&nbsp;&nbsp; Debt Ratio:</strong></p><p>Debt ratio provides the total number of debts the company has in the balance sheet as compared to assets. Debt ratio used to know the financial health of the company. The ratio gives an idea to investors about overall debts of the company.</p><p>Low: Less than 1</p><p>Medium: Greater than 1</p><p>High:</p><p><strong>4. Debt-Equity Ratio:</strong> It is a proportional ratio of business assets is being funded by debts. The debt-equity ratio is calculated as Total liabilities of the company divided by Total shareholderâ€™s equity.</p><p>Low: less than 1</p><p>Medium: 1</p><p>High: more than 1</p><p><strong>5. Net Profit Margin:</strong></p><p>The net profit margin is a method to know how much net income is generated by the organization. The high net profit margin will help the organization to evaluate the lending decisions.</p><p>Low:</p><p>Medium:</p><p>High:</p><p><strong>6. Return on Equity:</strong>&nbsp; Return on Equity is a two way ratio which analyzes how efficiently a company uses its assets. A high Return on Equity is a sign of company is great at creating/ building shareholder value.</p><p>Low: 1-25%</p><p>Medium: 25-50%</p><p>High: 50% and onwards</p><p><strong>7. Gross Profit Margin:</strong></p><p>This is the one of the techniques used to measure gross profit of the business. It is an initial point to accomplish net profit. A High Gross Profit signifies better position of business &amp; strongly planned operations.</p><p>Low:</p><p>Medium:</p><p>High:</p><p><strong>8. Return on Total Asset: </strong>Return on Total Asset is a financial ratio shows percentage of Profit Company gain as compare to its assets. The value of return on asset differs from company and industry. A Higher Return on Total Asset represents that the company is heading towards successful organization.</p><p>Low:</p><p>Medium:</p><p>High:</p><p><strong>9.</strong>&nbsp;&nbsp; <strong>Sales to Working Capital Ratio:</strong></p><p>A Sale to Working Capital Ratio is also known as working Capital Turnover Ratio. The working capital ratio uses working capital &amp; previous year sales. Higher sales can increase the efficiency of the company and it affects this ratio.</p><p>Low:</p><p>Medium:</p><p>High:</p><p>&nbsp;</p><p><strong>10. Profit before Tax Margin:</strong></p><p>The ratio shows profit which is earned by company before paying corporate taxes. This ratio helps the companyâ€™s internal &amp; external factors. The Profit before Tax Margin is the best way to compare the rivals.</p><p>Low:</p><p>Medium:</p><p>High:</p><p><strong>11. Fixed Asset Turnover Ratio:</strong> The motive of any business is to earn profit. Asset turnover ratio is also known as asset management ratio. This ratio indicates efficiency of a business. A higher turnover ratio is sign of efficient business.</p><p>Low:</p><p>Medium:</p><p>High:</p><p><strong>12. Sales to Total Asset Ratio: </strong>Sales to Asset ratio is calculated as Total assets of the organization divided by Total sales in the financial statement.</p><p><strong>13. Depreciation to Sales Ratio: </strong>The formula for depreciation to sales ratio is depreciation amount divided by sales of the company. Depreciation means/refers to a reduction in the value of an asset over time, due in particular to usage.</p><p>&nbsp;</p><p><strong>14. EBIT margin:</strong> EBIT Margin stands for earnings of an organization before interest &amp; taxes. EBIT margin shows profitability of an organization on sales over a time period. EBIT is beneficial in Business metrics.</p><p><strong>15. EBITDA Interest Ratio:</strong> To check organizationâ€™s financial durability EBIT interest ratio plays a crucial role in it. It also helps people to check profitability to pay off the interest. EBITDA includes sum of net income, interest expenses, taxes, depreciation &amp; Amortization.</p>', '[\"assetstosale.png\",\"currentratio.png\",\"debtequityratio.png\",\"debtratio.png\",\"ebitdaratio.png\",\"ebitmargin.png\",\"fixedasseststuronover.png\",\"grossprofitmargin.jpg\",\"netprofit.png\",\"profitbefortax.png\",\"quickratio.png\",\"returnonassets.png\",\"returnonequity.png\",\"salesworking.png\"]', 'ratioanalysis.jpg', 'publish', '2020-03-06', 'Admin', '4');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'Ratio Analysis'),
(5, 'Company Profile'),
(6, 'Financial'),
(7, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `page_hits`
--

CREATE TABLE `page_hits` (
  `page` varchar(500) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_hits`
--

INSERT INTO `page_hits` (`page`, `count`) VALUES
('Ratio Analysis', 193),
('Business For Sale', 8),
('Bekreta', 10),
('Financial Analysis', 7),
('Company Profile', 2);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(2000) DEFAULT NULL,
  `bannertext1` varchar(150) DEFAULT NULL,
  `bannertext2` varchar(150) DEFAULT NULL,
  `bannertext3` varchar(150) DEFAULT NULL,
  `bannertext4` varchar(150) DEFAULT NULL,
  `detailed_description` text,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `bannertext1`, `bannertext2`, `bannertext3`, `bannertext4`, `detailed_description`, `address`, `email`, `phone`) VALUES
(1, 'Bekreta Responsive Blog', 'Blogging For Passion', 'blogimage/bekreta.png', 'blog,tech blog,tricks,hacks,technology news,fantastic blog', 'Bekreta is the only impeccable digital fintech service Platform utilizing advanced technology at attractive costing in a simplified user-friendly manner. It is providing solutions from start-up to maturity stage companies from Business Planning to Selling the company on a single platform. It is an easy to access & fully secured digital platform which includes entire Business Cycle Stages. \r\nWe introduce authentic investors, which will invest in startups to accelerate businesses. We bridge the gap between potential business buyers and sellers by creating Clear and Transparent deals.\r\n', 'Create a lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Create the lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Bekreta is the only impeccable digital fintech service Platform utilizing advanced technology at attractive costing in a simplified user-friendly manner. It is providing solutions from start-up to maturity stage companies from Business Planning to Selling the company on a single platform. It is an easy to access & fully secured digital platform which includes entire Business Cycle Stages. \r\nWe introduce authentic investors, which will invest in startups to accelerate businesses. We bridge the gap between potential business buyers and sellers by creating Clear and Transparent deals.\r\n', 'Lodha Supermus, Thane(West)', 'info@bekreta.com', '+91 95080 22222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
