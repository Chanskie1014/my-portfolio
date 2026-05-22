<?php
$galleryImages = [
    ['src' => 'assets/images/gallery-1.svg', 'alt' => 'Developer workspace gallery placeholder'],
    ['src' => 'assets/images/gallery-2.svg', 'alt' => 'Project presentation gallery placeholder'],
    ['src' => 'assets/images/gallery-3.svg', 'alt' => 'Campus technology event gallery placeholder'],
    ['src' => 'assets/images/gallery-4.svg', 'alt' => 'Design review gallery placeholder'],
];
?>
<!-- Gallery Section -->
<section id="gallery" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Gallery</h2>

        <div class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($galleryImages as $image) : ?>
                <img src="<?php echo htmlspecialchars($image['src']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>" class="h-56 w-full rounded-lg border border-slate-200 object-cover shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-soft dark:border-zinc-800">
            <?php endforeach; ?>
        </div>
    </article>
</section>
