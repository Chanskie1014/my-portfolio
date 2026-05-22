<?php
$skills = [
    'Frontend' => ['HTML', 'CSS', 'Tailwind CSS', 'JavaScript'],
    'Backend' => ['PHP', 'MySQL'],
    'Tools & Frameworks' => ['Git', 'GitHub', 'Firebase', 'VS Code', 'Figma'],
];
?>
<!-- Tech Stack Section -->
<section id="tech-stack" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Tech Stack</h2>

        <div class="mt-5 grid gap-5 md:grid-cols-3">
            <?php foreach ($skills as $category => $items) : ?>
                <article class="inner-panel p-5">
                    <div class="mb-5 flex items-center justify-between">
                        <h3 class="text-sm font-bold text-slate-950 dark:text-white"><?php echo htmlspecialchars($category); ?></h3>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-xs font-bold text-blue-600 dark:bg-blue-500/10 dark:text-blue-300"><?php echo count($items); ?></span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($items as $skill) : ?>
                            <span class="skill-badge"><?php echo htmlspecialchars($skill); ?></span>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </article>
</section>
