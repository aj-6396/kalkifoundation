<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalki Foundation</title>
    <link rel="stylesheet" href="style.css">
    <!-- Adding modern fonts: Outfit for headings, Inter for body, and Sanskrit support -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&family=Inter:wght@300;400;500;600&family=Noto+Sans+Devanagari:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="header-container">
            
            <!-- Left: Logo & Stacked Text -->
            <a href="index.php" class="brand-area">
                <!-- Replace 'logo.png' with the actual path to your black circular logo image -->
                <img src="https://kalkifoundation.in/wp-content/uploads/2024/03/Logo-150x150.png.webp" alt="Kalki Foundation Logo" class="brand-logo-img">
                <div class="brand-text-stack">
                    <span class="brand-title">KALKI FOUNDATION</span>
                    <span class="brand-sanskrit">यतो धर्मस्ततो जय:</span>
                    <span class="brand-iso">ISO 9001:2015 certified</span>
                </div>
            </a>

            <!-- Middle: Navigation -->
            <nav class="desktop-nav">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="team.php">Our Core Team</a>
                <div class="dropdown">
                    <a href="initiatives.php" class="dropdown-toggle">Our Work <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <div class="dropdown-menu">
                        <a href="blood-donation-drives.php">Blood Donation Drives</a>
                        <a href="haemoglobin-test-drive.php">Haemoglobin & Blood Test</a>
                        <a href="menstrual-health-drives.php">Menstrual Health Drives</a>
                        <a href="cloth-donation-drives.php">Cloth Donation Drives</a>
                        <a href="mental-health-drives.php">Mental Health Drives</a>
                        <a href="cleanliness-drive.php">Cleanliness Drive</a>
                        <a href="stationary-donation-drives.php">Stationery Donation Drive</a>
                        <a href="survey-drives.php">Survey Drive</a>
                        <a href="science-festival-drive.php">Science Festival Drive</a>
                        <a href="social-awareness-short-films.php">Social Awareness Films</a>
                    </div>
                </div>
                <a href="transparency.php">Transparency</a>
                <a href="chhavi.php">Chhavi</a>
                <a href="contact.php">Contact Us</a>
            </nav>

            <!-- Right: Action Buttons -->
            <div class="desktop-btn-group">
                <a href="register.php" class="action-btn">Join Us</a>
                <a href="donate.php" class="action-btn">Donate Now</a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button class="hamburger" id="menu-btn">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="mobile-menu" id="mobile-menu">
            <nav class="mobile-nav">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="team.php">Our Core Team</a>
                <a href="initiatives.php" style="border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 8px;">Our Work (Hub)</a>
                <a href="blood-donation-drives.php" style="padding-left: 24px; font-size: 14.5px;">- Blood Donation Drives</a>
                <a href="haemoglobin-test-drive.php" style="padding-left: 24px; font-size: 14.5px;">- Haemoglobin & Blood Test</a>
                <a href="menstrual-health-drives.php" style="padding-left: 24px; font-size: 14.5px;">- Menstrual Health</a>
                <a href="cloth-donation-drives.php" style="padding-left: 24px; font-size: 14.5px;">- Cloth Donation</a>
                <a href="mental-health-drives.php" style="padding-left: 24px; font-size: 14.5px;">- Mental Health</a>
                <a href="cleanliness-drive.php" style="padding-left: 24px; font-size: 14.5px;">- Cleanliness Drive</a>
                <a href="stationary-donation-drives.php" style="padding-left: 24px; font-size: 14.5px;">- Stationery Donation</a>
                <a href="survey-drives.php" style="padding-left: 24px; font-size: 14.5px;">- Survey Drive</a>
                <a href="science-festival-drive.php" style="padding-left: 24px; font-size: 14.5px;">- Science Festival</a>
                <a href="social-awareness-short-films.php" style="padding-left: 24px; font-size: 14.5px;">- Social Awareness Films</a>
                <a href="transparency.php">Transparency</a>
                <a href="chhavi.php">Chhavi</a>
                <a href="contact.php">Contact Us</a>
                <div class="mobile-btn-group">
                    <a href="register.php" class="action-btn">Join Us</a>
                    <a href="donate.php" class="action-btn">Donate Now</a>
                </div>
            </nav>
        </div>
    </header>