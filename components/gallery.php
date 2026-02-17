<section class="gallery-section">
    <div class="container-fluid" style="padding: 0;">
        <div class="gallery-container">
            <!-- Row 1: Moves Left -->
            <div class="gallery-track scroll-left">
                <?php
                $images_row1 = [
                    'assets/frontend/disaster-management.jpg',
                    'assets/frontend/Girl-Child-Education.jpg',
                    'assets/frontend/persons-disabilites.jpg',
                    'assets/frontend/women-empowerment.jpg',
                    'assets/frontend/disaster-management.jpg',
                    'assets/frontend/Girl-Child-Education.jpg',
                    'assets/frontend/persons-disabilites.jpg',
                    'assets/frontend/women-empowerment.jpg',
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
                    'assets/frontend/disaster-management.jpg',
                    'assets/frontend/Girl-Child-Education.jpg',
                    'assets/frontend/persons-disabilites.jpg',
                    'assets/frontend/women-empowerment.jpg',
                    'assets/frontend/disaster-management.jpg',
                    'assets/frontend/Girl-Child-Education.jpg',
                    'assets/frontend/persons-disabilites.jpg',
                    'assets/frontend/women-empowerment.jpg',
                ];

                renderGalleryItems($images_row2);
                renderGalleryItems($images_row2); // Duplicate for loop
                ?>
            </div>
        </div>
    </div>
</section>
