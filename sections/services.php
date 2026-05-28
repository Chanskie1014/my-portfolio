<?php
$services = [
    [
        'title' => 'Canva Design Services',
        'description' => 'Clean and ready-to-use layouts for resumes, posters, presentations, certificates, and social media graphics.',
        'items' => ['Resume layouts', 'Posters', 'Presentations', 'Social media posts'],
    ],
    [
        'title' => 'Microsoft Office Setup',
        'description' => 'Installation, setup, and license activation assistance for Microsoft Office products using a valid product key or Microsoft account.',
        'items' => ['Office installation', 'License activation help', 'Account setup', 'Basic troubleshooting'],
    ],
    [
        'title' => 'Website Creation',
        'description' => 'Responsive websites and portfolio pages for personal profiles, school projects, small businesses, and simple online presence needs.',
        'items' => ['Portfolio websites', 'Business pages', 'Responsive layout', 'Basic maintenance'],
    ],
];
?>
<!-- Services Section -->
<section id="services" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Services Offered</h2>

        <div class="mt-5 grid gap-5 md:grid-cols-3">
            <?php foreach ($services as $index => $service) : ?>
                <article class="inner-panel flex h-full flex-col p-5" data-aos="fade-up" data-aos-delay="<?php echo $index * 80; ?>">
                    <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-sm font-extrabold text-blue-600 dark:bg-blue-500/10 dark:text-blue-300">
                        <?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?>
                    </div>

                    <h3 class="text-base font-extrabold text-slate-950 dark:text-white"><?php echo htmlspecialchars($service['title']); ?></h3>
                    <p class="mt-3 flex-1 text-sm leading-6 text-slate-500 dark:text-zinc-400"><?php echo htmlspecialchars($service['description']); ?></p>

                    <div class="mt-5 flex flex-wrap gap-2">
                        <?php foreach ($service['items'] as $item) : ?>
                            <span class="mini-badge"><?php echo htmlspecialchars($item); ?></span>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </article>
</section>
