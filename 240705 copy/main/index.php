<?php
/* Template Name: Custom Page */
get_header();
?>

<main id="main-content">
    <div class="custom-page-content">
        <?php
        // 사용자 정의 콘텐츠 로직
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>내용이 없습니다.</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>
