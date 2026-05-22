<?php
$contacts = [
    ['label' => 'Email', 'value' => $email, 'href' => 'mailto:' . $email],
    ['label' => 'GitHub', 'value' => 'github.com/yourusername', 'href' => $github],
    ['label' => 'LinkedIn', 'value' => 'linkedin.com/in/yourusername', 'href' => $linkedin],
    ['label' => 'Facebook', 'value' => 'facebook.com/yourusername', 'href' => $facebook],
];
?>
<!-- Contact Section -->
<section id="contact" class="section-shell pb-20">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Contact</h2>

        <div class="mt-5 grid gap-5 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="inner-panel p-5">
                <h3 class="text-base font-bold text-slate-950 dark:text-white">Open to opportunities</h3>
                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-zinc-300">
                    I am actively seeking an internship where I can contribute to web development, UI implementation, database-backed applications, and technical support tasks.
                </p>
                <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="mt-6 inline-flex rounded-lg bg-blue-600 px-5 py-3 text-sm font-bold text-white shadow-glow transition hover:-translate-y-0.5 hover:bg-blue-700">Send Email</a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2" data-aos="fade-left" data-aos-delay="100">
                <?php foreach ($contacts as $contact) : ?>
                    <a href="<?php echo htmlspecialchars($contact['href']); ?>" class="inner-panel p-5 transition hover:-translate-y-1 hover:border-blue-200 dark:hover:border-blue-500/40" target="_blank" rel="noopener">
                        <p class="label"><?php echo htmlspecialchars($contact['label']); ?></p>
                        <p class="mt-2 break-words text-sm font-bold text-slate-950 dark:text-white"><?php echo htmlspecialchars($contact['value']); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
</section>
