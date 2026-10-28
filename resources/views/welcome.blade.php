<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body class=" bg-gradient-to-b from-slate-300 to-slate-500 text-[#1b1b18] flex p-6 lg:p-8 items-center min-h-screen flex-col">
    <div class="mt-26">
        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D" alt="profile" class="w-32 h-32 rounded-full mx-auto mb-4">
        <h1 class="text-2xl font-bold text-slate-100">Dwi Aji C. | Tabikpun.dev</h1>
    </div>
    <div class=" flex flex-row gap-4 my-5">
        <!-- ini adalah tiktok logo  -->
        <a href="https://www.instagram.com/tabikpun.dev/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                <defs>
                    <mask id="yesicon-line-md-tiktok-SVGgMs3O0ng">
                        <path fill="#fff" d="M16.6 5.82c-0.68 -0.78 -1.06 -1.78 -1.06 -2.82h-3.09v12.4c-0.02 0.67 -0.31 1.31 -0.79 1.77c-0.48 0.47 -1.13 0.73 -1.8 0.73c-1.42 0 -2.6 -1.16 -2.6 -2.6c0 -1.72 1.66 -3.01 3.37 -2.48v-3.16c-3.45 -0.46 -6.47 2.22 -6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69 -2.55 5.69 -5.7v-6.29c1.25 0.9 2.76 1.38 4.3 1.38v-3.09c0 0 -1.88 0.09 -3.24 -1.48Z" />
                        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                            <path stroke-dasharray="36" d="M11 11h-1c-2.21 0 -4.5 1.79 -4.5 4c0 2.21 1.5 4.5 4.5 4.5c2.21 0 4 -2.29 4 -4.5v-12.5">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="72;36" />
                            </path>
                            <path stroke-dasharray="10" stroke-dashoffset="20" d="M18 2.5v8">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.1s" to="10" />
                            </path>
                        </g>
                    </mask>
                </defs>
                <path fill="#ffffff" d="M0 0h24v24H0z" mask="url(#yesicon-line-md-tiktok-SVGgMs3O0ng)" />
            </svg>
        </a>
        <!-- ini adalah youtube logo  -->
        <a href="https://www.instagram.com/tabikpun.dev/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                <g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path stroke-dasharray="66" d="M16 3c2.76 0 5 2.24 5 5v8c0 2.76 -2.24 5 -5 5h-8c-2.76 0 -5 -2.24 -5 -5v-8c0 -2.76 2.24 -5 5 -5h4Z">
                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="66;0" />
                    </path>
                    <path stroke-dasharray="28" stroke-dashoffset="28" d="M12 8c2.21 0 4 1.79 4 4c0 2.21 -1.79 4 -4 4c-2.21 0 -4 -1.79 -4 -4c0 -2.21 1.79 -4 4 -4">
                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.6s" to="0" />
                    </path>
                </g>
                <circle cx="17" cy="7" r="1.5" fill="#ffffff" opacity="0">
                    <animate fill="freeze" attributeName="opacity" begin="1.3s" dur="0.2s" to="1" />
                </circle>
            </svg>
        </a>
        <a href="https://www.instagram.com/tabikpun.dev/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                <path fill="#ffffff" d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
            </svg>
        </a>
        <a href="https://www.instagram.com/tabikpun.dev/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                <path fill="#ffffff" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.23 8.23 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.2 8.2 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18s.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01" />
            </svg>
        </a>

    </div>

    <div class="flex flex-col gap-6 justify-center items-center">
        <a class="bg-[#1b1b18] text-slate-100 px-4 py-2 rounded-lg text-center w-80 md:w-100 shadow-xl shadow-slate-500" href="https://www.instagram.com/tabikpun.dev/">Instagram</a>
        <a class="bg-[#1b1b18] text-slate-100 px-4 py-2 rounded-lg text-center w-80 md:w-100 shadow-xl shadow-slate-500" href="https://www.instagram.com/tabikpun.dev/">Instagram</a>
    </div>


</body>

</html>