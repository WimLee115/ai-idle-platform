<?php
/**
 * 404 Template
 *
 * @package AI_IDLE
 */

get_header();
?>

<main class="main-content">
    <div class="container" style="text-align: center; padding: 6rem 2rem;">
        <h1 style="font-size: 6rem; color: var(--primary); margin-bottom: 1rem;">404</h1>
        <h2 style="margin-bottom: 1rem;">Pagina niet gevonden</h2>
        <p style="color: var(--gray-600); margin-bottom: 2rem;">De pagina die je zoekt bestaat niet of is verplaatst.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
            Terug naar Home
        </a>
    </div>
</main>

<?php get_footer(); ?>
