<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perpustakaan Wikrama</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            .mobile-menu {
                transition: max-height 0.3s ease-out;
                overflow: hidden;
                max-height: 0;
            }

            .mobile-menu.open {
                max-height: 500px; 
            }
        </style>
    </head>

    <body class="bg-gray-100">
        <nav class="bg-[#795548] shadow-lg text-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-auto mr-2"
                                onerror="console.error('Error loading image:', this.src);">
                        </div>
                        <span class="text-xl font-semibold">Perpustakaan SMK Wikrama</span>
                    </div>
        
                    <div class="hidden md:flex">
                        <div class="ml-4 flex items-center space-x-4">
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Beranda</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Profil</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Informasi</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">OPAC</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Kontak</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Unduh</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Ebook</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Galeri</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Masuk</a>
                            <a href="#" class="hover:bg-[#6D4C41] hover:text-white px-3 py-2 rounded-md text-sm font-medium transition delay-100 duration-300 ease-in-out ...">Daftar Tamu</a>
                        </div>
                    </div>
        
                    <div class="-mr-2 flex md:hidden">
                        <button id="mobile-menu-button" type="button"
                            class="bg-[#6D4C41] inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-[#5D4037] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#6D4C41] focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- Mobile menu, show/hide based on menu state -->
            <div id="mobile-menu" class="mobile-menu md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Beranda</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Profil</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Informasi</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">OPAC</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Kontak</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Unduh</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Ebook</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Galeri</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Masuk</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#6D4C41] hover:text-white transition delay-150 duration-300 ease-in-out ...">Daftar Tamu</a>
                </div>
            </div>
        </nav>
        

        <div class="flex justify-center items-center h-64 bg-gray-400">
            <div class="text-center text-white">
                <h1 class="text-3xl font-bold">Banner</h1>
                <p class="mt-2 text-lg">Info Banner</p>
            </div>
        </div>

        <div class="bg-gray-300 py-2">
            <marquee behavior="scroll" scrollamount="20" direction="left" class="text-gray-700 font-semibold">
                Selamat datang di perpustakaan Wikrama "Melayani dengan hati dan teknologi"
            </marquee>
        </div>

        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center mb-8">A Glimpse of Wikrama Library</h1>
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/dummy.jpeg') }}" alt="Wikrama Library" class="w-full h-64 object-cover">
                
                <div class="p-6">
                    <p class="text-gray-700 mb-6 flex text-center">
                        Wikrama Library offers a rich collection of books across various genres, providing 
                        a serene environment for reading and research. Discover our most active classes, 
                        students, and rayons, along with our most favorite books.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-2">Most Active Class</h3>
                            <div class="flex items-center justify-center">
                                <span class="text-2xl font-bold mr-2">PPLG XII-1</span>
                                <svg class="w-16 h-8 text-red-500" viewBox="0 0 32 16">
                                    <path d="M0,8 Q8,0 16,8 T32,8" fill="none" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <p class="text-red-500">▼ 8%</p>
                        </div>
                        
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-2">Most Active Student</h3>
                            <div class="relative inline-block">
                                <svg class="w-24 h-24" viewBox="0 0 36 36">
                                    <path d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                        fill="none"
                                        stroke="#4338ca"
                                        stroke-width="2"
                                        stroke-dasharray="85, 100"
                                    />
                                </svg>
                                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-lg font-semibold">85%</span>
                            </div>
                            <p class="mt-2">Yazid Wiliadi</p>
                            <p class="text-green-500">▲ 25%</p>
                        </div>
                        
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-2">Most Popular Rayon</h3>
                            <div class="relative inline-block">
                                <svg class="w-24 h-24" viewBox="0 0 36 36">
                                    <path d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                        fill="none"
                                        stroke="#8b5cf6"
                                        stroke-width="2"
                                        stroke-dasharray="82, 100"
                                    />
                                </svg>
                                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-lg font-semibold">82%</span>
                            </div>
                            <p class="mt-2">Cisarua 6</p>
                            <p class="text-green-500">▲ 18%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center mb-8">Popular Book This Week</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=HUNGRY+FOR+LOVE" alt="Hungry for Love" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">HUNGRY FOR LOVE</h2>
                        <p class="text-gray-700">William Carry</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=1897+Missing+Piece" alt="1897 Missing Piece" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">1897 MISSING PIECE</h2>
                        <p class="text-gray-700">Kevin Kurt</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=THE+BIG+SHORT" alt="The Big Short" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">THE BIG SHORT</h2>
                        <p class="text-gray-700">Adison Mark</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Left column -->
                <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center justify-center">
                            <svg class="w-10 h-10 text-blue-400 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">eBooks</span>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center justify-center">
                            <svg class="w-10 h-10 text-blue-400 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Audiobooks</span>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center justify-center">
                            <svg class="w-10 h-10 text-blue-400 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Videos</span>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center justify-center">
                            <svg class="w-10 h-10 text-blue-400 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Music</span>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center justify-center col-span-2">
                            <svg class="w-10 h-10 text-blue-400 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                            </svg>
                            <span class="text-gray-700 font-medium">Magazines</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right column -->
                <div class="w-full md:w-1/2 px-4">
                    <div class="space-y-6">
                        <h2 class="text-4xl font-bold text-gray-800">Stream and Download</h2>
                        <p class="text-gray-600">Stream and download audiobooks from anywhere in the world.</p>
                        <p class="text-gray-600">Search our database for a huge collection of popular ebooks. Watch book trailers, author interviews, and much more.</p>
                        <div class="space-x-4">
                            <button class="bg-blue-400 text-white px-6 py-2 rounded-md font-medium">STREAM VIDEOS</button>
                            <button class="bg-blue-100 text-blue-600 px-6 py-2 rounded-md font-medium">DOWNLOAD BOOKS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-blue-200">
            <div class="flex justify-center space-x-12 py-20">
                <!-- eBooks -->
                <div class="text-center">
                    <div class="bg-blue-300 p-4 rounded-full">
                        <!-- eBooks Icon (SVG) -->
                        <svg class="w-16 h-16 mx-auto text-blue-600" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 2H6C4.897 2 4 2.897 4 4V20C4 21.103 4.897 22 6 22H18C19.103 22 20 21.103 20 20V4C20 2.897 19.103 2 18 2ZM6 20V4H8V20H6ZM10 20V4H18L18.002 20H10Z" />
                            <path d="M14 6H16V8H14V6ZM14 10H16V12H14V10ZM14 14H16V16H14V14Z" />
                        </svg>
                    </div>
                    <div class="text-2xl font-bold text-white mt-4">52,345</div>
                    <div class="text-lg text-white">eBooks</div>
                </div>
                <!-- eAudio -->
                <div class="text-center">
                    <div class="bg-blue-300 p-4 rounded-full">
                        <!-- eAudio Icon (SVG) -->
                        <svg class="w-16 h-16 mx-auto text-blue-600" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 4H16V3H14V4H10V3H8V4H6C4.897 4 4 4.897 4 6V18C4 19.103 4.897 20 6 20H18C19.103 20 20 19.103 20 18V6C20 4.897 19.103 4 18 4ZM18 18H6V9H18V18ZM18 7H6V6H18V7Z" />
                            <path d="M9 13H11V15H9V13ZM13 13H15V15H13V13ZM11 7H13V9H11V7Z" />
                        </svg>
                    </div>
                    <div class="text-2xl font-bold text-white mt-4">12,345</div>
                    <div class="text-lg text-white">eAudio</div>
                </div>
                <!-- Magazine -->
                <div class="text-center">
                    <div class="bg-blue-300 p-4 rounded-full">
                        <!-- Magazine Icon (SVG) -->
                        <svg class="w-16 h-16 mx-auto text-blue-600" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 3H5C3.897 3 3 3.897 3 5V19C3 20.103 3.897 21 5 21H19C20.103 21 21 20.103 21 19V5C21 3.897 20.103 3 19 3ZM19 19H5V5H19V19Z" />
                            <path d="M7 17H17V19H7V17ZM7 12H14V14H7V12ZM7 7H10V9H7V7Z" />
                        </svg>
                    </div>
                    <div class="text-2xl font-bold text-white mt-4">945</div>
                    <div class="text-lg text-white">Magazine</div>
                </div>
                <!-- Videos -->
                <div class="text-center">
                    <div class="bg-blue-300 p-4 rounded-full">
                        <!-- Videos Icon (SVG) -->
                        <svg class="w-16 h-16 mx-auto text-blue-600" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 5H5C3.897 5 3 5.897 3 7V17C3 18.103 3.897 19 5 19H19C20.103 19 21 18.103 21 17V7C21 5.897 20.103 5 19 5ZM19 17H5V7H19V17Z" />
                            <path d="M10 9L14 12L10 15V9Z" />
                        </svg>
                    </div>
                    <div class="text-2xl font-bold text-white mt-4">3,234</div>
                    <div class="text-lg text-white">Videos</div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center mb-8">Kemitraan</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=IDS" alt="IDS" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">IDS</h2>
                        <p class="text-gray-700">William Carry</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=SMK+Wikrama+Garut" alt="SMK Wikrama Garut" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">SMK Wikrama Garut</h2>
                        <p class="text-gray-700">Kevin Kurt</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=SMK+Wikrama+Banjarmasin" alt="SMK Wikrama Banjarmasin" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">SMK Wikrama Banjarmasin</h2>
                        <p class="text-gray-700">Adison Mark</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center mb-8">Testimoni</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=Testimoni" alt="IDS" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">Testimoni 1</h2>
                        <p class="text-gray-700">Pengirim</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=Testimoni" alt="SMK Wikrama Garut" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">Testimoni 2</h2>
                        <p class="text-gray-700">Pengirim</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x600?text=Testimoni" alt="SMK Wikrama Banjarmasin" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">Testimoni 3</h2>
                        <p class="text-gray-700">Pengirim</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sliding Cards Container -->
        <div class="relative overflow-hidden">
            <div id="card-container" class="flex transition-transform duration-300 ease-in-out">
                <!-- Card 1 -->
                <div class="flex-shrink-0 w-full px-4">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-center mb-4">
                            <i class="material-icons" alt="Monograph" class="w-16 h-16">description</i>
                        </div>
                        <h3 class="text-xl font-semibold text-center text-gray-800">Monograf</h3>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="flex-shrink-0 w-full px-4">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-center mb-4">
                            <i class="material-icons" alt="Rekaman Suara" class="w-16 h-16">article</i>
                        </div>
                        <h3 class="text-xl font-semibold text-center text-gray-800">Rekaman Suara</h3>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="flex-shrink-0 w-full px-4">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-center mb-4">
                            <i class="material-icons" alt="Bahan Kartografis" class="w-16 h-16">receipt_long</i>
                        </div>
                        <h3 class="text-xl font-semibold text-center text-gray-800">Bahan Kartografis</h3>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Dots -->
            <div class="absolute bottom-0 left-0 right-0 flex justify-center space-x-2 pb-4">
                <button class="w-3 h-3 rounded-full bg-gray-300 focus:outline-none" onclick="showCard(0)"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 focus:outline-none" onclick="showCard(1)"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 focus:outline-none" onclick="showCard(2)"></button>
            </div>
        </div>

        <footer class="bg-blue-900 text-white pt-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Jam Operasional Layanan -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Jam Operasional Layanan</h4>
                        <ul>
                            <li>Senin-Jumat 08.00 - 19.00 WIB</li>
                            <li>Sabtu-Minggu 09.00 - 15.30 WIB</li>
                            <li>Cuti Bersama dan Libur Nasional Tutup</li>
                        </ul>
                        <div class="mt-4 flex space-x-4">
                            <!-- Social Media Icons -->
                            <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <!-- Layanan Unggulan -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Layanan Unggulan</h4>
                        <ul>
                            <li><a href="#" class="hover:underline">ISBN</a></li>
                            <li><a href="#" class="hover:underline">OPAC</a></li>
                            <li><a href="#" class="hover:underline">IOS</a></li>
                            <li><a href="#" class="hover:underline">K-OL</a></li>
                            <li><a href="#" class="hover:underline">IPUSNAS</a></li>
                            <li><a href="#" class="hover:underline">BintangPusnas Edu</a></li>
                            <li><a href="#" class="hover:underline">E-RES</a></li>
                        </ul>
                    </div>

                    <!-- Koleksi Unggulan -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Koleksi Unggulan</h4>
                        <ul>
                            <li><a href="#" class="hover:underline">Manuscript</a></li>
                            <li><a href="#" class="hover:underline">Sumber Elektronik</a></li>
                            <li><a href="#" class="hover:underline">Monograf</a></li>
                            <li><a href="#" class="hover:underline">Rekaman Suara</a></li>
                            <li><a href="#" class="hover:underline">Bahan Kartografis</a></li>
                            <li><a href="#" class="hover:underline">Bentuk Mikro</a></li>
                        </ul>
                    </div>

                    <!-- Kontak Kami -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
                        <ul>
                            <li class="flex items-center mb-2">
                                <i class="fas fa-phone mr-2"></i>
                                <span>085717147303</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <i class="fas fa-envelope mr-2"></i>
                                <span>persuratan[at]perpusnas.go.id</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>Jl. Medan Merdeka Selatan No.11, Jakarta 10110</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-blue-800 mt-8 py-4">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center">
                        <p class="text-sm">&copy; 2022 Perpustakaan Nasional Republik Indonesia</p>
                        <p class="text-sm">Jumlah pengunjung</p>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            let currentCard = 0;
    const cardContainer = document.getElementById('card-container');
    const totalCards = 3;
    let autoSlideInterval;

    function showCard(index) {
        currentCard = index;
        cardContainer.style.transform = translateX(-${index * 100}%);
        updateDots();
        resetAutoSlide();  // Reset the auto-slide interval when user interacts
    }

    function updateDots() {
        const dots = document.querySelectorAll('.bottom-0 button');
        dots.forEach((dot, index) => {
            if (index === currentCard) {
                dot.classList.add('bg-blue-500');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.add('bg-gray-300');
                dot.classList.remove('bg-blue-500');
            }
        });
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            const nextCard = (currentCard + 1) % totalCards;
            showCard(nextCard);
        }, 2000); // Change card every 2 seconds
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();  // Restart the auto-slide interval
    }

    // Optional: Add touch/swipe functionality
    let touchStartX = 0;
    let touchEndX = 0;

    cardContainer.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    });

    cardContainer.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        if (touchStartX - touchEndX > 50 && currentCard < totalCards - 1) {
            showCard(currentCard + 1);
        } else if (touchEndX - touchStartX > 50 && currentCard > 0) {
            showCard(currentCard - 1);
        }
    }

    // Start auto-slide on page load
    startAutoSlide();
        </script>
    </body>

    </html>