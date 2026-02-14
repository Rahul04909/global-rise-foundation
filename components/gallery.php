<section class="gallery-section">
    <div class="container-fluid" style="padding: 0;">
        <div class="gallery-container">
            <!-- Row 1: Moves Left -->
            <div class="gallery-track scroll-left">
                <?php
                $images_row1 = [
                    'https://placehold.co/400x300/E63946/FFFFFF?text=Award+A',
                    'https://placehold.co/300x400/1D3557/FFFFFF?text=Cert+B',
                    'https://placehold.co/400x400/457B9D/FFFFFF?text=Medal+C',
                    'https://placehold.co/350x250/A8DADC/333333?text=Honor+D',
                    'https://placehold.co/300x300/F1FAEE/333333?text=Impact+E',
                    'https://placehold.co/400x300/2A9D8F/FFFFFF?text=Work+F',
                    'https://placehold.co/300x400/E9C46A/333333?text=Success+G',
                    'https://placehold.co/400x300/F4A261/333333?text=Growth+H',
                ];

                function renderGalleryItems($imgs) {
                    foreach ($imgs as $img) {
                        echo '<div class="gallery-item">';
                        echo '<img src="' . $img . '" alt="Gallery Image">';
                        echo '</div>';
                    }
                }

                renderGalleryItems($images_row1);
                renderGalleryItems($images_row1); // Duplicate for loop
                ?>
            </div>

            <!-- Row 2: Moves Right -->
             <div class="gallery-track scroll-right">
                <?php
                $images_row2 = [
                    'https://placehold.co/300x300/264653/FFFFFF?text=Win+I',
                    'https://placehold.co/400x300/2A9D8F/FFFFFF?text=Best+J',
                    'https://placehold.co/300x400/E9C46A/333333?text=Top+K',
                    'https://placehold.co/400x400/F4A261/333333?text=Hero+L',
                    'https://placehold.co/350x250/E76F51/FFFFFF?text=Star+M',
                    'https://placehold.co/400x300/1D3557/FFFFFF?text=Global+N',
                    'https://placehold.co/300x300/457B9D/FFFFFF?text=Rise+O',
                    'https://placehold.co/300x400/A8DADC/333333?text=Future+P',
                ];

                renderGalleryItems($images_row2);
                renderGalleryItems($images_row2); // Duplicate for loop
                ?>
            </div>
        </div>
    </div>
</section>
