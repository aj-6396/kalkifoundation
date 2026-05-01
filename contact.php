<?php include 'header.php'; ?>

<main class="contact-page">
    
    <!-- HERO SECTION -->
    <section class="hero contact-hero" style="background-image: linear-gradient(rgba(18,21,17,0.7), rgba(18,21,17,0.85)), url('https://kalkifoundation.in/wp-content/uploads/2024/03/IMG_8229-1024x682.jpg');">
        <div class="hero-content">
            <h1>Contact <span class="highlight">Us</span></h1>
            <p>We would love to hear from you. Reach out for queries, partnerships, and collaborations.</p>
        </div>
    </section>

    <!-- CONTACT CONTENT SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="lists-grid">
                
                <!-- Contact Details -->
                <div class="list-card">
                    <h2><span class="highlight">Get</span> In Touch</h2>
                    <p class="section-subtitle" style="margin-bottom: 24px;">Our team is always ready to collaborate and help.</p>
                    
                    <ul class="custom-list mt-3">
                        <li><strong>Registered Name:</strong> Kalki Foundation Trust</li>
                        <li><strong>Registration:</strong> Indian Trust Act, 1882</li>
                        <li><strong>Office:</strong> Varanasi (Near Banaras Hindu University), Uttar Pradesh</li>
                        <li><strong>Email:</strong> contact@kalkifoundation.in</li>
                        <li><strong>Certifications:</strong> ISO 9001:2015 certified</li>
                    </ul>
                </div>
                
                <!-- Simple Message Form -->
                <div class="list-card border-orange">
                    <h2>Send a <span class="highlight">Message</span></h2>
                    
                    <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 16px; margin-top: 24px;">
                        <div>
                            <label for="name" style="font-weight: 600; font-size: 14px; color: var(--brand-dark); display:block; margin-bottom: 6px;">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required style="width:100%; padding:12px; border: 1.5px solid var(--glass-border); border-radius: var(--radius-sm); font-size:15px; outline:none;">
                        </div>
                        
                        <div>
                            <label for="email" style="font-weight: 600; font-size: 14px; color: var(--brand-dark); display:block; margin-bottom: 6px;">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required style="width:100%; padding:12px; border: 1.5px solid var(--glass-border); border-radius: var(--radius-sm); font-size:15px; outline:none;">
                        </div>
                        
                        <div>
                            <label for="message" style="font-weight: 600; font-size: 14px; color: var(--brand-dark); display:block; margin-bottom: 6px;">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="How can we collaborate?" required style="width:100%; padding:12px; border: 1.5px solid var(--glass-border); border-radius: var(--radius-sm); font-size:15px; outline:none; font-family:inherit;"></textarea>
                        </div>
                        
                        <button type="submit" class="action-btn" style="align-self: flex-start;">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>
