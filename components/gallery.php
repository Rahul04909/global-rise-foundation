<section class="gallery-section">
    <div class="container-fluid" style="padding: 0;">
        <div class="gallery-container">
            <div class="gallery-track">
                <?php
                // Placeholder images for demonstration. 
                // In a real scenario, these would be fetched from a database or a folder.
                $images = [
                    'https://placehold.co/400x300/E63946/FFFFFF?text=Award+1',
                    'https://placehold.co/400x300/1D3557/FFFFFF?text=Event+2',
                    'https://placehold.co/400x300/457B9D/FFFFFF?text=Community+3',
                    'https://placehold.co/400x300/A8DADC/333333?text=Volunteer+4',
                    'https://placehold.co/400x300/F1FAEE/333333?text=Impact+5',
                    'https://placehold.co/400x300/2A9D8F/FFFFFF?text=Work+6',
                    'https://placehold.co/400x300/E9C46A/333333?text=Success+7',
                    'https://placehold.co/400x300/F4A261/333333?text=Growth+8',
                ];

                // Function to render images
                function renderGalleryImages($imgs) {
                    foreach ($imgs as $img) {
                        echo '<div class="gallery-item">';
                        echo '<img src="' . $img . '" alt="Gallery Image">';
                        echo '</div>';
                    }
                }

                // Render Original Set
                renderGalleryImages($images);
                // Render Duplicate Set for Seamless Loop
                renderGalleryImages($images);
                ?>
            </div>
        </div>
    </div>
</section>
