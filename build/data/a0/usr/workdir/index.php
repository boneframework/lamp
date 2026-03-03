<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Zero - Modern Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .glass { @apply bg-white/80 backdrop-blur-md; }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans selection:bg-blue-100 selection:text-blue-700">

    <!-- Header -->
    <header class="sticky top-0 z-50 w-full border-b border-gray-200 glass">
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2 font-bold text-xl tracking-tight">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white text-xs">
                    AZ
                </div>
                <span>Agent<span class="text-blue-600">Zero</span></span>
            </div>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
                <a href="#" class="hover:text-blue-600 transition-colors">Home</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Features</a>
                <a href="#status" class="hover:text-blue-600 transition-colors">Status</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Contact</a>
            </nav>
            <div class="flex items-center gap-4">
                <button class="md:hidden text-gray-600 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition-shadow shadow-sm">
                    Get Started
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="py-20 md:py-32">
            <div class="container mx-auto px-4 text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-bold mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    System Operational
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-6">
                    Hello from <span class="text-blue-600">Agent Zero!</span>
                </h1>
                <p class="max-w-2xl mx-auto text-lg text-gray-600 mb-10">
                    Welcome to your modernized landing page. This interface is powered by Tailwind CSS and remains fully dynamic with PHP backend logic.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#status" class="bg-gray-900 text-white px-8 py-3 rounded-xl font-bold hover:bg-gray-800 transition-all shadow-lg shadow-gray-200">
                        View Dashboard
                    </a>
                    <a href="#" class="bg-white border border-gray-200 text-gray-900 px-8 py-3 rounded-xl font-bold hover:bg-gray-50 transition-all">
                        Documentation
                    </a>
                </div>
            </div>
        </section>

        <!-- Status Grid -->
        <section id="status" class="py-20 bg-white border-y border-gray-100">
            <div class="container mx-auto px-4">
                <div class="mb-12 text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-2">System Status</h2>
                    <p class="text-gray-500">Real-time metrics from your server environment.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- PHP Version Card -->
                    <div class="group p-6 rounded-2xl bg-gray-50 border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">PHP Version</h3>
                        <p class="text-2xl font-bold text-gray-900"><?php echo phpversion(); ?></p>
                    </div>

                    <!-- Server Time Card -->
                    <div class="group p-6 rounded-2xl bg-gray-50 border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Current Server Time</h3>
                        <p class="text-2xl font-bold text-gray-900"><?php echo date('Y-m-d H:i:s'); ?></p>
                    </div>

                    <!-- Memory Usage Card -->
                    <div class="group p-6 rounded-2xl bg-gray-50 border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl hover:shadow-blue-500/5 transition-all">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Memory Usage</h3>
                        <p class="text-2xl font-bold text-gray-900"><?php echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB'; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-12 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2 font-bold opacity-50">
                <div class="w-6 h-6 bg-gray-400 rounded flex items-center justify-center text-white text-[10px]">
                    AZ
                </div>
                <span>AgentZero</span>
            </div>
            <p class="text-sm text-gray-500">
                &copy; <?php echo date('Y'); ?> Agent Zero. All rights reserved.
            </p>
            <div class="flex items-center gap-6 text-gray-400">
                <a href="#" class="hover:text-blue-600 transition-colors italic text-sm underline-offset-4 decoration-1 decoration-dotted">Twitter</a>
                <a href="#" class="hover:text-blue-600 transition-colors italic text-sm underline-offset-4 decoration-1 decoration-dotted">GitHub</a>
            </div>
        </div>
    </footer>

</body>
</html>
