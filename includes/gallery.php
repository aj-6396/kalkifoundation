<?php
/**
 * REUSABLE INITIATIVE PHOTO GALLERY
 * ────────────────────────────────────────────────────────
 * Usage: Set $galleryImages array BEFORE including this file, e.g.:
 *
 *   $galleryImages = [
 *       'path/to/image1.jpg',
 *       'path/to/image2.jpg',
 *   ];
 *   include 'includes/gallery.php';
 *
 * Leave $galleryImages empty (or don't define it) to show 6 placeholders.
 */

$images = isset($galleryImages) && !empty($galleryImages) ? $galleryImages : [];
$placeholderCount = max(0, 6 - count($images)); // fill remaining slots with placeholders

// We duplicate the whole set for the seamless infinite scroll
$allSlides = $images;
for ($i = 0; $i < $placeholderCount; $i++) { $allSlides[] = null; }
$loopedSlides = array_merge($allSlides, $allSlides); // duplicate for loop
?>

<!-- PHOTO GALLERY -->
<section class="initiative-gallery-section">
    <div class="gallery-header">
        <h2 class="section-title">Our <span class="highlight">Gallery</span></h2>
        <p class="section-subtitle" style="font-size:0.95rem;">A glimpse of our work on the ground. Replace placeholders with real drive photos.</p>
    </div>
    <div class="gallery-carousel-wrapper">
        <div class="gallery-track">
            <?php foreach ($loopedSlides as $src): ?>
                <?php if ($src): ?>
                    <div class="gallery-slide">
                        <img src="<?= htmlspecialchars($src) ?>" alt="Drive Photo" loading="lazy">
                    </div>
                <?php else: ?>
                    <div class="gallery-slide placeholder">
                        <span class="ph-icon">📸</span>
                        <span class="ph-text">Add Drive Photo</span>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
