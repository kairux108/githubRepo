<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcipe | Post Assignment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        /* Dark Glass Effect */
        .glass-dark {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .gradient-text {
            background: linear-gradient(90deg, #818cf8, #c084fc, #f472b6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-[#020617] text-slate-200 selection:bg-indigo-500/30">

    <nav class="sticky top-0 z-50 glass-dark border-b border-white/5 mb-8">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-tight gradient-text">Dev.Log</h1>
            <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-400">
                <a href="#" class="hover:text-white transition">Archives</a>
                <a href="#" class="hover:text-white transition">Projects</a>
                <a href="#" class="hover:text-white transition">Contact</a>
            </div>
            <button class="bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2 rounded-xl transition shadow-lg shadow-indigo-900/20 text-sm font-bold">
                Follow
            </button>
        </div>
    </nav>

    <main class="container mx-auto px-6 max-w-7xl">
        <header class="py-16">
            <h2 class="text-5xl md:text-7xl font-bold tracking-tight mb-4">
                Latest <span class="text-slate-500 italic font-light">Insights</span>
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl">Exploring the intersection of Laravel MVC architecture and high-end frontend design.</p>
        </header>

        @if($posts->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="group bg-slate-900/50 border border-white/5 p-1 rounded-3xl hover:border-indigo-500/50 transition-all duration-300">
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-[10px] tracking-[0.2em] font-black uppercase text-indigo-400 px-2 py-1 bg-indigo-500/10 rounded">Article</span>
                                <span class="text-xs text-slate-500 font-medium">{{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                            
                            <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-indigo-300 transition-colors">
                                {{ $post->title }}
                            </h3>
                            
                            <p class="text-slate-400 leading-relaxed mb-6 line-clamp-3">
                                {{ $post->content }}
                            </p>
                            
                            <div class="pt-4 border-t border-white/5 flex items-center text-sm font-semibold text-slate-300 group-hover:text-white transition">
                                Read Article
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="py-24 text-center bg-slate-900/30 rounded-3xl border border-dashed border-white/10">
                <p class="text-slate-500 text-lg">No posts in the database yet. Time to seed!</p>
            </div>
        @endif
    </main>

    <footer class="mt-32 pb-16 border-t border-white/5 pt-12">
        <div class="container mx-auto px-6 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-8">
            <div>
                <p class="text-