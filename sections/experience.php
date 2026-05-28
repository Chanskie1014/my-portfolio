<?php
$timeline = [
    ['year' => '2026', 'title' => 'BS Information Technology - 4th Year', 'type' => 'Education', 'detail' => 'Specializing in web systems, responsive interfaces, and real-world application development.'],
    ['year' => '2026', 'title' => 'Internship - Actively Seeking', 'type' => 'Internship', 'detail' => 'Preparing for hands-on training in web development, QA, and IT support environments.'],
    ['year' => '2025', 'title' => 'Capstone Project Developer', 'type' => 'Projects', 'detail' => 'Built responsive modules for mapping, monitoring, and marketplace-style applications.'],
    ['year' => '2021', 'title' => '
NC II – Computer Systems Servicing', 'type' => 'Certification', 'detail' => 'Certified in computer hardware servicing, basic networking, troubleshooting, and technical support.'],
    ['year' => '2022', 'title' => 'Pump Boy – Green Gold Gasoline Station', 'type' => 'Organization', 'detail' => 'Handled daily customer service and assisted in station operations while maintaining efficiency and teamwork.
'],
];
?>
<!-- Experience Timeline Section -->
<section id="experience" class="section-shell">
    <article class="dashboard-card h-full p-6" data-aos="fade-up">
        <h2 class="card-title">Experience</h2>
        <div class="relative mt-5 space-y-6 before:absolute before:left-2 before:top-2 before:h-[calc(100%-1rem)] before:w-px before:bg-slate-200 dark:before:bg-zinc-800">
            <?php foreach ($timeline as $item) : ?>
                <div class="relative grid gap-3 pl-8 sm:grid-cols-[1fr_auto]">
                    <span class="absolute left-[3px] top-1.5 h-3 w-3 rounded-full border-2 border-white bg-blue-600 dark:border-black"></span>
                    <div>
                        <h3 class="text-sm font-bold text-slate-950 dark:text-white"><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p class="mt-1 text-xs font-medium text-slate-500 dark:text-zinc-400"><?php echo htmlspecialchars($item['detail']); ?></p>
                    </div>
                    <time class="text-xs font-bold text-slate-500 dark:text-zinc-400"><?php echo htmlspecialchars($item['year']); ?></time>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</section>
