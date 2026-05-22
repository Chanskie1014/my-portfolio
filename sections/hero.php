<!-- Hero Section -->
<section id="home" class="px-4 pb-8 pt-12 sm:pt-16">
    <div class="relative mx-auto max-w-6xl px-4" data-aos="fade-up">
        <button id="themeToggle" type="button" class="absolute right-0 top-0 inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:text-blue-600 dark:border-zinc-800 dark:bg-black dark:text-zinc-300 dark:hover:border-blue-500/40 dark:hover:text-blue-400" aria-label="Toggle dark mode">
            <svg class="h-5 w-5 dark:hidden" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 4V2m0 20v-2m8-8h2M2 12h2m14.95 6.95 1.41 1.41M3.64 3.64l1.41 1.41m13.9-1.41-1.41 1.41M5.05 18.95l-1.41 1.41M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            <svg class="hidden h-5 w-5 dark:block" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20.25 14.15A7.5 7.5 0 0 1 9.85 3.75 8.5 8.5 0 1 0 20.25 14.15Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <div class="flex flex-col items-start gap-5 pr-14 sm:flex-row sm:items-center">
            <img src="assets/images/CG%20PROFILE.png" alt="Christian Gamao profile photo" class="h-32 w-32 rounded-lg border border-slate-200 object-cover shadow-sm dark:border-zinc-800 sm:h-36 sm:w-36">

            <div class="min-w-0">
                <div class="flex flex-wrap items-center gap-2">
                    <h1 class="text-xl font-extrabold text-slate-950 dark:text-white sm:text-2xl">
                        <?php echo htmlspecialchars($fullName); ?>
                    </h1>
                    <span class="grid h-5 w-5 place-items-center rounded-full bg-blue-600 text-white" aria-label="Verified">
                        <svg class="h-3 w-3" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="m3.5 8.2 2.7 2.7 6.3-6.8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                </div>
                <p class="mt-1 text-sm font-medium text-slate-500 dark:text-zinc-400">Davao, Philippines</p>
                <p class="mt-3 text-sm font-bold text-slate-900 dark:text-zinc-100"><?php echo htmlspecialchars($role); ?></p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="https://docs.google.com/document/d/1IezrTbw_YZh3C41YZYxXO3ZJAu8zrgtogVrJu6S7Xb0/edit?usp=sharing" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 rounded-lg bg-slate-950 px-4 py-2.5 text-sm font-bold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-blue-600 dark:bg-white dark:text-black dark:hover:bg-blue-500 dark:hover:text-white">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 3h7l3 3v15H7V3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M14 3v4h4M9.5 12h5M9.5 16h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                        View CV
                    </a>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2.5 text-sm font-bold text-slate-800 shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:text-blue-600 dark:border-zinc-800 dark:bg-black dark:text-zinc-100 dark:hover:border-blue-500/50 dark:hover:text-blue-400">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Send Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
