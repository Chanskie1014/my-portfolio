<?php
$navItems = [
    ['label' => 'About', 'href' => '#about'],
    ['label' => 'Stack', 'href' => '#tech-stack'],
    ['label' => 'Experience', 'href' => '#experience'],
    ['label' => 'Projects', 'href' => '#projects'],
    ['label' => 'Contact', 'href' => '#contact'],
];
?>
<!-- Navbar -->
<header class="fixed inset-x-0 top-0 z-50 px-4 pt-4">
    <nav class="mx-auto max-w-6xl rounded-xl border border-slate-200 bg-white/90 px-4 py-3 shadow-sm backdrop-blur-xl transition-colors duration-300 dark:border-zinc-800 dark:bg-black/85">
        <div class="flex items-center justify-between gap-4">
            <a href="#home" class="group flex items-center gap-3" aria-label="Go to home section">
                <span class="grid h-10 w-10 place-items-center overflow-hidden rounded-xl bg-black shadow-glow transition-transform duration-300 group-hover:-translate-y-0.5">
                    <img src="assets/images/cg_logo.png" alt="CG logo" class="h-full w-full object-cover">
                </span>
                <span>
                    <span class="block text-sm font-bold leading-tight text-slate-950 dark:text-white"><?php echo htmlspecialchars($fullName); ?></span>
                    <span class="block text-xs font-medium text-slate-500 dark:text-zinc-400">Portfolio Dashboard</span>
                </span>
            </a>

            <div class="hidden items-center gap-1 rounded-xl border border-slate-200 bg-white p-1 dark:border-zinc-800 dark:bg-black lg:flex">
                <?php foreach ($navItems as $item) : ?>
                    <a class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-blue-600 dark:text-zinc-300 dark:hover:bg-zinc-900 dark:hover:text-blue-400" href="<?php echo htmlspecialchars($item['href']); ?>">
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="flex items-center gap-2">
                <button id="themeToggle" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:text-blue-600 dark:border-zinc-800 dark:bg-black dark:text-zinc-300 dark:hover:border-blue-500/40 dark:hover:text-blue-400" aria-label="Toggle dark mode">
                    <svg class="h-5 w-5 dark:hidden" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 4V2m0 20v-2m8-8h2M2 12h2m14.95 6.95 1.41 1.41M3.64 3.64l1.41 1.41m13.9-1.41-1.41 1.41M5.05 18.95l-1.41 1.41M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                    <svg class="hidden h-5 w-5 dark:block" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20.25 14.15A7.5 7.5 0 0 1 9.85 3.75 8.5 8.5 0 1 0 20.25 14.15Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>

                <button id="mobileMenuButton" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:border-blue-200 hover:text-blue-600 dark:border-zinc-800 dark:bg-black dark:text-zinc-300 dark:hover:border-blue-500/40 lg:hidden" aria-label="Open mobile menu" aria-expanded="false">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/></svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" class="hidden border-t border-slate-200 pt-3 dark:border-zinc-800 lg:hidden">
            <div class="grid gap-1">
                <?php foreach ($navItems as $item) : ?>
                    <a class="mobile-link rounded-xl px-3 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-blue-600 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-blue-400" href="<?php echo htmlspecialchars($item['href']); ?>">
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>
</header>
