<?php
$projects = [
    [
        'title' => 'AquaTrack',
        'image' => 'assets/images/project-aquatrack.jpg',
        'description' => 'A clean monitoring dashboard for tracking water quality readings, alerts, and historical trends.',
        'stack' => ['PHP', 'Python', 'MySQL', 'JavaScript', 'Tailwind'],
    ],
    [
        'title' => 'Developer Portfolio',
        'image' => 'assets/images/project-developerportfolio.jpg',
        'description' => 'A responsive internship portfolio built with pure PHP, Tailwind CDN, JavaScript, reusable includes, and dark mode support.',
        'stack' => ['PHP', 'Tailwind CSS', 'JavaScript', 'AOS'],
    ],
];
?>
<!-- Projects Section -->
<section id="projects" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Projects</h2>

        <div class="mt-5 grid gap-5 md:grid-cols-2">
            <?php foreach ($projects as $index => $project) : ?>
                <article class="inner-panel group overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo $index * 80; ?>">
                    <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?> preview" class="h-56 w-full border-b border-slate-200 object-cover transition duration-500 group-hover:scale-[1.02] dark:border-zinc-800">
                    <div class="p-5">
                        <h3 class="text-xl font-extrabold text-slate-950 dark:text-white"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="mt-3 min-h-16 text-sm leading-6 text-slate-500 dark:text-zinc-400"><?php echo htmlspecialchars($project['description']); ?></p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <?php foreach ($project['stack'] as $tech) : ?>
                                <span class="mini-badge"><?php echo htmlspecialchars($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                            <a href="#" class="project-button border-slate-200 bg-white text-slate-700 hover:border-blue-200 hover:text-blue-600 dark:border-zinc-800 dark:bg-black dark:text-zinc-200 dark:hover:border-blue-500/40 dark:hover:text-blue-400">GitHub</a>
                            <a href="#" class="project-button border-blue-600 bg-blue-600 text-white hover:bg-blue-700">Live Demo</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </article>
</section>
