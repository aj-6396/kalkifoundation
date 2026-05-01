<?php include 'header.php'; ?>

<main class="initiative-single-page">
    
    <!-- HERO SECTION -->
    <section class="hero initiative-single-hero" style="background-image: linear-gradient(rgba(18,21,17,0.7), rgba(18,21,17,0.85)), url('https://kalkifoundation.in/wp-content/uploads/2024/03/IMG_8229-scaled.jpg');">
        <div class="hero-content">
            <h1>Stationary Donation <span class="highlight">Drives</span></h1>
            <p>Empowering young minds with the educational tools they need to succeed.</p>
        </div>
    </section>

    <!-- INITIATIVE DETAILS -->
    <section class="section-padding">
        <div class="container" style="max-width: 800px; margin: 0 auto;">
            
            <img src="assets/img/stationary_donation_1777636686960.png" alt="Stationary Donation Drive" style="width: 100%; border-radius: var(--radius-md); margin-bottom: 30px;">
            
            <p class="section-subtitle" style="text-align: left; margin-bottom: 20px;">
                Education is the foundation of a bright future, but many marginalized students lack access to basic educational supplies. Kalki Foundation organizes regular Stationary Donation Drives to ensure that every child has the tools they need to learn and grow. We primarily focus on supporting the students at Prathamik Vidyalaya in Jangampur.
            </p>

            <p class="section-subtitle" style="text-align: left; margin-bottom: 40px;">
                We don't just drop off supplies. Our dedicated volunteer teams make regular visits to mentor these young learners, track their academic progress, and provide guidance. The smiles on their faces and their eagerness to learn are the true rewards of our efforts.
            </p>

            <div class="list-card border-orange" style="margin-bottom: 40px;">
                <h2>Our <span class="highlight">Impact</span></h2>
                <ul class="custom-list mt-3">
                    <li>Consistently supporting <strong>100+ students</strong> with basic stationary and learning materials.</li>
                    <li>Providing ongoing mentorship and academic guidance through regular visits.</li>
                    <li>Fostering a love for learning and reducing school dropout rates caused by financial constraints.</li>
                    <li>Recognized by Prof. Ajit Kumar Chaturvedi during his visit to the Jangampur school.</li>
                </ul>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <h3 style="margin-bottom: 20px; font-family: var(--font-heading); color: var(--brand-dark);">Help us equip the next generation!</h3>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="register.php" class="action-btn">Volunteer as a Mentor</a>
                    <a href="donate.php" class="outline-btn" style="border: 2px solid var(--brand-primary); color: var(--brand-primary); padding: 12px 28px; border-radius: 9999px; text-decoration: none; font-weight: 600;">Donate Stationary</a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
$galleryImages = [
    'assets/img/stationary_donation_1777636686960.png',
    // Add more drive photo URLs here
];
include 'includes/gallery.php';
?>

<?php include 'footer.php'; ?>
