<?php include 'header.php'; ?>

<main class="donate-page">
    
    <!-- HERO SECTION -->
    <section class="hero donate-hero" style="background-image: linear-gradient(rgba(18,21,17,0.7), rgba(18,21,17,0.85)), url('https://kalkifoundation.in/wp-content/uploads/2024/09/IMG_20240918_233604.png');">
        <div class="hero-content">
            <h1>Make a <span class="highlight">Difference</span></h1>
            <p>Your generosity directly fuels our initiatives and changes lives in real, tangible ways.</p>
        </div>
    </section>

    <!-- DONATE OPTIONS SECTION -->
    <section class="section-padding">
        <div class="container text-center">
            <h2 class="section-title">Support Our <span class="highlight">Cause</span></h2>
            <p class="section-subtitle">
                At the Kalki Foundation, every contribution helps us provide healthcare, menstrual hygiene awareness, education, and relief to underprivileged communities.
            </p>

            <div class="lists-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; text-align: left; margin-top: 40px;">
                
                <!-- UPI & QR Scan Option -->
                <div class="list-card border-orange" style="background: var(--card-bg); padding: 32px; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--brand-orange); display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center;">
                    <div style="width: 100%;">
                        <h2>Scan & <span class="highlight">Donate</span></h2>
                        <p style="margin-bottom: 20px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">Quickly support our initiatives via any UPI app (Google Pay, PhonePe, Paytm, etc.):</p>
                        
                        <!-- QR Code -->
                        <div style="margin: 20px auto; padding: 12px; background: #fff; border-radius: var(--radius-md); display: inline-block; box-shadow: var(--shadow-sm); border: 1px solid var(--glass-border);">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=upi%3A%2F%2Fpay%3Fpa%3D42264244172%40sbi%26pn%3DKALKI%2520FOUNDATION%26cu%3DINR" alt="UPI QR Code" style="width: 180px; height: 180px; display: block;">
                        </div>

                        <p style="margin-top: 5px; font-weight: 600; font-size: 0.95rem; color: var(--brand-dark);">UPI ID: <span style="color: var(--brand-orange);">42264244172@sbi</span></p>

                        <!-- Instant mobile app trigger button -->
                        <a href="upi://pay?pa=42264244172@sbi&pn=KALKI%20FOUNDATION&cu=INR" class="action-btn" style="display: block; margin-top: 24px; width: 100%; text-decoration: none; text-align: center;">Donate Now via UPI</a>
                    </div>
                </div>

                <!-- Online Banking Details -->
                <div class="list-card" style="background: var(--card-bg); padding: 32px; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--glass-border); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h2><span class="highlight">Direct</span> Bank Transfer</h2>
                        <p style="margin-bottom: 20px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">Transfer your contribution securely via direct bank deposit, NEFT, or IMPS:</p>
                        
                        <ul class="custom-list" style="margin-top: 15px;">
                            <li><strong>Account Name:</strong> KALKI FOUNDATION</li>
                            <li><strong>Bank Name:</strong> Union Bank of India</li>
                            <li><strong>Account Type:</strong> Current Account</li>
                            <li><strong>Account Number:</strong> 390101010041264</li>
                            <li><strong>IFSC Code:</strong> UBIN0539015</li>
                            <li><strong>Branch:</strong> Banaras Hindu University, Varanasi</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact for Donation / Inquiry -->
                <div class="list-card" style="background: var(--card-bg); padding: 32px; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--glass-border); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h2>Reach <span class="highlight">Out</span></h2>
                        <p style="margin-bottom: 20px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">For corporate CSR partnerships or physical item donations (like clothes and blankets):</p>
                        
                        <ul class="custom-list" style="margin-top: 15px;">
                            <li><strong>Email:</strong> donate@kalkifoundation.in</li>
                            <li><strong>General Inquiry:</strong> contact@kalkifoundation.in</li>
                            <li><strong>Phone:</strong> +91 9118556677</li>
                        </ul>
                    </div>

                    <a href="contact.php" class="outline-btn" style="width: 100%; text-align: center; text-decoration: none; margin-top: 24px; border-color: var(--brand-orange); color: var(--brand-dark);">Contact for Partnership</a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>
