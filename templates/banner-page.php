<?php if(is_home()):?>
<section class="event page-banner pt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <?php the_archive_title( ' <h1 class="title">', '</h1>' ); ?>
            </div>
        </div>
    </div>
</section>
<?php elseif(is_archive()): ?>

<section class="event page-banner pt-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <?php the_archive_title( ' <h1 class="title">', '</h1>' ); ?>
            </div>
        </div>
    </div>
</section>
<?php elseif (is_single()): ?>
<section class="event page-banner pt-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <?php the_title( ' <h1 class="title">', '</h1>' ); ?>
            </div>
        </div>
    </div>
</section>
<?php elseif(is_page()): ?>
    <section class="event page-banner pt-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <?php the_title( ' <h1 class="title">', '</h1>' ); ?>
                </div>
            </div>
        </div>
    </section>
<?php elseif(is_404()): ?>
    <section class="event page-banner pt-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1 class="title">404</h1>
                </div>
            </div>
        </div>
    </section>
<?php elseif(is_search()): ?>
    <section class="event page-banner pt-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <?php the_archive_title( ' <h1 class="title">', '</h1>' ); ?>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="event page-banner pt-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <?php the_title( ' <h1 class="title">', '</h1>' ); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
