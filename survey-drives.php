<?php include 'header.php'; ?>

<main class="initiative-single-page">
    
    <!-- HERO SECTION -->
    <section class="hero initiative-single-hero" style="background-image: linear-gradient(rgba(18,21,17,0.7), rgba(18,21,17,0.85)), url('https://kalkifoundation.in/wp-content/uploads/2024/09/Screenshot_2024_0918_201317.png');">
        <div class="hero-content">
            <h1>Survey <span class="highlight">Drives</span></h1>
            <p>Empowering our initiatives with data-driven community insights.</p>
        </div>
    </section>

    <!-- INITIATIVE DETAILS -->
    <section class="section-padding">
        <div class="container" style="max-width: 800px; margin: 0 auto;">
            
            <img src="assets/img/survey_drive_1777636706032.png" alt="Community Survey Drive" style="width: 100%; border-radius: var(--radius-md); margin-bottom: 30px;">
            
            <p class="section-subtitle" style="text-align: left; margin-bottom: 20px;">
                At Kalki Foundation, we believe that effective social work requires a deep understanding of the community's actual needs. Before launching any large-scale initiative, we conduct comprehensive survey drives. These data-driven assessments help us identify the most pressing issues and tailor our programs for maximum impact.
            </p>

            <p class="section-subtitle" style="text-align: left; margin-bottom: 40px;">
                Our dedicated volunteers venture into marginalized neighborhoods across Varanasi, engaging directly with residents. We gather crucial data on mental health awareness, menstrual hygiene practices, basic healthcare access, and educational needs. This grassroots approach ensures that our resources are allocated efficiently and our interventions are truly relevant.
            </p>

            <div class="list-card border-orange" style="margin-bottom: 40px;">
                <h2>Why Surveys <span class="highlight">Matter</span></h2>
                <ul class="custom-list mt-3">
                    <li>Provides an accurate, data-driven foundation for all our NGO activities.</li>
                    <li>Identifies hidden community needs that might otherwise go unnoticed.</li>
                    <li>Builds trust and rapport with the local communities before interventions begin.</li>
                    <li>Allows us to measure the baseline so we can track our long-term impact.</li>
                </ul>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <h3 style="margin-bottom: 20px; font-family: var(--font-heading); color: var(--brand-dark);">Help us gather insights!</h3>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="register.php" class="action-btn">Volunteer for Surveys</a>
                    <a href="donate.php" class="outline-btn" style="border: 2px solid var(--brand-primary); color: var(--brand-primary); padding: 12px 28px; border-radius: 9999px; text-decoration: none; font-weight: 600;">Support Our Research</a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
$galleryImages = [
    'assets/img/survey_drive_1777636706032.png',
    // Add more drive photo URLs here
];
include 'includes/gallery.php';
?>

<?php include 'footer.php'; ?>
