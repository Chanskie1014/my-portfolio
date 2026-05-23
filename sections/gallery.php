<?php
if (!function_exists('portfolioGalleryItems')) {
function portfolioGalleryItems(string $folder, string $titlePrefix): array
{
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    $items = [];

    if (!is_dir($folder)) {
        return $items;
    }

    foreach (new DirectoryIterator($folder) as $file) {
        if (!$file->isFile()) {
            continue;
        }

        $extension = strtolower($file->getExtension());

        if (!in_array($extension, $allowedExtensions, true)) {
            continue;
        }

        $fileName = $file->getBasename('.' . $file->getExtension());
        $label = ucwords(str_replace(['-', '_'], ' ', $fileName));

        $items[] = [
            'src' => str_replace('\\', '/', $folder . '/' . $file->getFilename()),
            'title' => $label ?: $titlePrefix,
            'meta' => $titlePrefix,
            'alt' => $label ? $label . ' image' : $titlePrefix . ' image',
        ];
    }

    usort($items, function (array $left, array $right): int {
        return strnatcasecmp($left['src'], $right['src']);
    });

    return $items;
}
}

if (!function_exists('portfolioGalleryCarousel')) {
function portfolioGalleryCarousel(string $label, array $items, string $imageMode): void
{
    $carouselId = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $label));
    $imageClass = $imageMode === 'contain'
        ? 'gallery-item__image gallery-item__image--contain'
        : 'gallery-item__image gallery-item__image--cover';
    ?>
    <div class="gallery-carousel" data-gallery-carousel>
        <div class="gallery-carousel__topline">
            <h3 class="gallery-carousel__title"><?php echo htmlspecialchars($label); ?></h3>
            <div class="gallery-carousel__controls" aria-label="<?php echo htmlspecialchars($label); ?> controls">
                <button type="button" class="gallery-carousel__button" data-gallery-prev aria-label="Previous <?php echo htmlspecialchars($label); ?>">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m15 18-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button type="button" class="gallery-carousel__button" data-gallery-next aria-label="Next <?php echo htmlspecialchars($label); ?>">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>

        <div id="<?php echo htmlspecialchars($carouselId); ?>-track" class="gallery-carousel__track" data-gallery-track tabindex="0" aria-label="<?php echo htmlspecialchars($label); ?> carousel">
            <?php foreach ($items as $index => $image) : ?>
                <button
                    type="button"
                    class="gallery-item group"
                    data-aos="fade-up"
                    data-aos-delay="<?php echo $index * 45; ?>"
                    data-gallery-slide
                    data-certificate-trigger
                    data-certificate-title="<?php echo htmlspecialchars($image['title']); ?>"
                    data-certificate-issuer="<?php echo htmlspecialchars($image['meta']); ?>"
                    data-certificate-image="<?php echo htmlspecialchars($image['src']); ?>"
                    data-certificate-alt="<?php echo htmlspecialchars($image['alt']); ?>"
                    aria-label="View <?php echo htmlspecialchars($image['title']); ?>"
                >
                    <img src="<?php echo htmlspecialchars($image['src']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>" class="<?php echo $imageClass; ?>">
                </button>
            <?php endforeach; ?>
        </div>

        <div class="gallery-carousel__dots" aria-label="<?php echo htmlspecialchars($label); ?> position">
            <?php foreach ($items as $index => $image) : ?>
                <button type="button" class="gallery-carousel__dot<?php echo $index === 0 ? ' is-active' : ''; ?>" data-gallery-dot data-gallery-index="<?php echo $index; ?>" aria-label="Show item <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
}

$minorCertificates = portfolioGalleryItems('assets/images/minor-certificates', 'Minor Certificate');
$personalPhotos = portfolioGalleryItems('assets/images/personal-photos', 'Personal Photo');

$fallbackPhotos = [
    ['src' => 'assets/images/gallery-1.svg', 'title' => 'Developer Workspace', 'meta' => 'Personal Photo', 'alt' => 'Developer workspace gallery placeholder'],
    ['src' => 'assets/images/gallery-2.svg', 'title' => 'Project Presentation', 'meta' => 'Personal Photo', 'alt' => 'Project presentation gallery placeholder'],
    ['src' => 'assets/images/gallery-3.svg', 'title' => 'Campus Technology Event', 'meta' => 'Personal Photo', 'alt' => 'Campus technology event gallery placeholder'],
    ['src' => 'assets/images/gallery-4.svg', 'title' => 'Design Review', 'meta' => 'Personal Photo', 'alt' => 'Design review gallery placeholder'],
];

if (count($personalPhotos) === 0) {
    $personalPhotos = $fallbackPhotos;
}
?>
<!-- Gallery Section -->
<section id="gallery" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Gallery</h2>

        <div class="mt-6">
            <?php if (count($minorCertificates) > 0) : ?>
                <?php portfolioGalleryCarousel('Minor Certificates', $minorCertificates, 'contain'); ?>
            <?php else : ?>
                <div class="mt-4 rounded-lg border border-dashed border-slate-300 p-5 text-sm text-slate-500 dark:border-zinc-800 dark:text-zinc-400">
                    Add certificate images inside <strong class="font-bold text-slate-700 dark:text-zinc-200">assets/images/minor-certificates</strong> and they will appear here automatically.
                </div>
            <?php endif; ?>
        </div>

        <div class="mt-8 border-t border-slate-200 pt-6 dark:border-zinc-800">
            <?php portfolioGalleryCarousel('Pictures', $personalPhotos, 'cover'); ?>
        </div>
    </article>
</section>
