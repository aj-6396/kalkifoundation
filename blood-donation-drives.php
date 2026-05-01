<?php include 'header.php'; ?>

<main class="initiative-single-page">
    
    <!-- HERO SECTION -->
    <section class="hero initiative-single-hero" style="background-image: linear-gradient(rgba(18,21,17,0.7), rgba(18,21,17,0.85)), url('https://kalkifoundation.in/wp-content/uploads/2024/03/422117604_362387176543159_5310330027819801106_n.jpeg');">
        <div class="hero-content">
            <h1>Blood Donation <span class="highlight">Drives</span></h1>
            <p>Giving children a chance to grow and parents a hope to return home to their families.</p>
        </div>
    </section>

    <!-- INITIATIVE DETAILS -->
    <section class="section-padding">
        <div class="container" style="max-width: 800px; margin: 0 auto;">
            
            <img src="https://kalkifoundation.in/wp-content/uploads/2025/04/1000042109-1024x574.webp" alt="Blood Donation Drive" style="width: 100%; border-radius: var(--radius-md); margin-bottom: 30px;">
            
            <p class="section-subtitle" style="text-align: left; margin-bottom: 20px;">
                According to the Times of India, 12,000 people lose their lives every day only due to a sheer lack of donated blood. Our foundation conducts blood donation drives frequently to help people in dire need, to give children a chance to grow and parents a hope to return home to their families.
            </p>

            <p class="section-subtitle" style="text-align: left; margin-bottom: 40px;">
                We frequently conduct blood donation drives in collaboration with <strong>Sir Sunderlal Hospital (IMS-BHU), IIT BHU, and Kashi Vishwanath Temple</strong> to help people in need. We were also felicitated by Sir Sunderlal Hospital for 2 consecutive years on the occasion of World Blood Donor Day.
            </p>

            <div class="list-card border-orange" style="margin-bottom: 40px;">
                <h2>Key <span class="highlight">Achievements</span></h2>
                <ul class="custom-list mt-3">
                    <li>Successfully conducted several blood donation drives with utmost coordination and enthusiasm.</li>
                    <li>Collected more than <strong>1500+ units of blood</strong>, saving more than <strong>4500+ lives</strong>.</li>
                    <li>Conducted drives at multiple different locations, some of them being the New Vishwanath Temple, the Rajiv Gandhi South Campus, the Faculty of Arts at BHU etc.</li>
                </ul>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <h3 style="margin-bottom: 20px; font-family: var(--font-heading); color: var(--brand-dark);">Join us in making a difference!</h3>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="register.php" class="action-btn">Join Us</a>
                    <a href="donate.php" class="outline-btn" style="border: 2px solid var(--brand-primary); color: var(--brand-primary); padding: 12px 28px; border-radius: 9999px; text-decoration: none; font-weight: 600;">Donate Now</a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
$galleryImages = [
    'https://kalkifoundation.in/wp-content/uploads/2025/04/1000042109-1024x574.webp',
    'https://kalkifoundation.in/wp-content/uploads/2024/03/422117604_362387176543159_5310330027819801106_n.jpeg',
    'https://kalkifoundation.in/wp-content/uploads/2024/03/1000055738-png.webp',
    // Add more drive photo URLs here
];
include 'includes/gallery.php';
?>

<?php include 'footer.php'; ?>
