<?php
$certifications = [
    ['title' => 'IT Specialist - Device Configuration and Management', 'issuer' => 'Certiport', 'year' => '2025'],
    ['title' => 'Front-End Development Libraries', 'issuer' => 'freeCodeCamp', 'year' => '2025'],
    ['title' => 'Legacy Responsive Web Design', 'issuer' => 'freeCodeCamp', 'year' => '2024'],
];
?>
<!-- Certifications Section -->
<section id="certifications" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Certifications</h2>

        <div class="mt-5 grid gap-5 md:grid-cols-3">
            <?php foreach ($certifications as $index => $certification) : ?>
                <article class="inner-panel p-5" data-aos="fade-up" data-aos-delay="<?php echo $index * 80; ?>">
                    <div class="mb-5 grid h-11 w-11 place-items-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-300">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M8 21h8m-4-4v4m7-11a7 7 0 1 1-14 0V4h14v6Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 5h2v4a3 3 0 0 1-3 3M5 5H3v4a3 3 0 0 0 3 3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                    </div>
                    <h3 class="text-base font-bold leading-6 text-slate-950 dark:text-white"><?php echo htmlspecialchars($certification['title']); ?></h3>
                    <p class="mt-3 text-sm text-slate-500 dark:text-zinc-400"><?php echo htmlspecialchars($certification['issuer']); ?></p>
                    <p class="mt-4 text-xs font-bold uppercase text-blue-600 dark:text-blue-400"><?php echo htmlspecialchars($certification['year']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </article>
</section>
