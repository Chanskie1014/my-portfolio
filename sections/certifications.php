<?php
$certifications = [
    [
        'title' => 'Ethical Hacker',
        'issuer' => 'Cisco Networking Academy',
        'year' => '2025',
        'image' => 'assets/images/cisco.jpg',
    ],
    [
        'title' => 'National Certificate II - Computer Systems Servicing',
        'issuer' => 'Technical Education and Skills Development Authority',
        'year' => '2021 - 2026',
        'image' => 'assets/images/css passer.jpg',
    ],
    [
        'title' => 'Python for Beginners with Hands-On Labs',
        'issuer' => 'Tutorials Dojo',
        'year' => '2026',
        'image' => 'assets/images/python.jpg',
    ],
];
?>
<!-- Certifications Section -->
<section id="certifications" class="section-shell">
    <article class="dashboard-card p-6" data-aos="fade-up">
        <h2 class="card-title">Certifications</h2>

        <div class="mt-5 grid gap-5 md:grid-cols-3">
            <?php foreach ($certifications as $index => $certification) : ?>
                <button
                    type="button"
                    class="certification-card inner-panel group flex h-full flex-col overflow-hidden text-left"
                    data-aos="fade-up"
                    data-aos-delay="<?php echo $index * 80; ?>"
                    data-certificate-trigger
                    data-certificate-title="<?php echo htmlspecialchars($certification['title']); ?>"
                    data-certificate-issuer="<?php echo htmlspecialchars($certification['issuer']); ?>"
                    data-certificate-image="<?php echo htmlspecialchars($certification['image']); ?>"
                    aria-label="View <?php echo htmlspecialchars($certification['title']); ?> certificate"
                >
                    <span class="block p-5">
                        <span class="mb-5 grid h-11 w-11 place-items-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-300">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M8 21h8m-4-4v4m7-11a7 7 0 1 1-14 0V4h14v6Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 5h2v4a3 3 0 0 1-3 3M5 5H3v4a3 3 0 0 0 3 3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                        </span>
                        <span class="block text-base font-bold leading-6 text-slate-950 dark:text-white"><?php echo htmlspecialchars($certification['title']); ?></span>
                        <span class="mt-3 block text-sm text-slate-500 dark:text-zinc-400"><?php echo htmlspecialchars($certification['issuer']); ?></span>
                        <span class="mt-4 block text-xs font-bold uppercase text-blue-600 dark:text-blue-400"><?php echo htmlspecialchars($certification['year']); ?></span>
                    </span>
                </button>
            <?php endforeach; ?>
        </div>
    </article>

    <div id="certificateModal" class="certificate-modal fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm" aria-hidden="true">
        <div class="certificate-modal__panel relative max-h-[92vh] w-full max-w-5xl overflow-hidden rounded-lg border border-white/15 bg-white shadow-2xl dark:border-zinc-800 dark:bg-black" role="dialog" aria-modal="true" aria-labelledby="certificateModalTitle">
            <div class="flex items-start justify-between gap-4 border-b border-slate-200 p-4 dark:border-zinc-800">
                <div>
                    <h3 id="certificateModalTitle" class="text-base font-extrabold text-slate-950 dark:text-white"></h3>
                    <p id="certificateModalIssuer" class="mt-1 text-sm text-slate-500 dark:text-zinc-400"></p>
                </div>
                <button type="button" class="certificate-modal__close grid h-10 w-10 shrink-0 place-items-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-100 dark:border-zinc-800 dark:text-zinc-300 dark:hover:bg-zinc-900" data-certificate-close aria-label="Close certificate preview">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </button>
            </div>
            <div class="max-h-[calc(92vh-5rem)] overflow-auto bg-slate-100 p-3 dark:bg-zinc-950 sm:p-5">
                <img id="certificateModalImage" src="" alt="" class="mx-auto h-auto max-h-[calc(92vh-8rem)] w-auto max-w-full rounded-md bg-white object-contain">
            </div>
        </div>
    </div>
</section>
