<!-- layouts/template.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Wikrama')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Be+Vietnam+Pro%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body>
    <!-- Navbar Section -->
    @section('navbar')
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] px-10 py-3">
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Wikrama" class="h-10 w-auto" />
                    <p class="text-[#0e141b] text-lg font-bold leading-normal ml-2">Perpustakaan Wikrama</p>
                </a>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="flex items-center gap-9">
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="profile">Profile</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="information">Information</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="opac">OPAC</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="contact">Contact</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="download">Download</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="ebook">eBook</a>
                </div>
                <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#e7edf3] text-[#0e141b] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                    <div class="text-[#0e141b]" data-icon="User" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </header>
    @show

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
