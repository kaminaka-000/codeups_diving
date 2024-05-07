      <!-- パンくず -->
      <div class="breadcrumb sub-breadcrumb-spacing<?php if (is_404()) echo ' breadcrumb--not-found'; ?>">
        <div class="breadcrumb__inner inner">
        <?php if (function_exists('bcn_display')) {
        bcn_display();
        }?>
        </div>
      </div>