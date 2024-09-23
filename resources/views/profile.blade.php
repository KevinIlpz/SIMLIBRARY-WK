<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#FBF8EF] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#F5EFDB] px-10 py-3">
            <div class="flex items-center gap-4 text-[#201A09]">
              <div class="size-4">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_6_535)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z"
                      fill="currentColor"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_6_535"><rect width="48" height="48" fill="white"></rect></clipPath>
                  </defs>
                </svg>
              </div>
              <h2 class="text-[#201A09] text-lg font-bold leading-tight tracking-[-0.015em]">Library</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
              <div class="flex items-center gap-9">
                <a class="text-[#201A09] text-sm font-medium leading-normal" href="/">Beranda</a>
                <a class="text-[#201A09] text-sm font-medium leading-normal" href="profile">Profile</a>
                <a class="text-[#201A09] text-sm font-medium leading-normal" href="information">Information</a>
                <a class="text-[#201A09] text-sm font-medium leading-normal" href="opac">OPAC</a>
                <a class="text-[#201A09] text-sm font-medium leading-normal" href="#">Download</a>
                <a class="text-[#201A09] text-sm font-medium leading-normal" href="#">Ebook</a>
              </div>
              <div class="flex gap-2">
                <button
                  class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#F5EFDB] text-[#201A09] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
                >
                  <div class="text-[#201A09]" data-icon="MagnifyingGlass" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                </button>
                <button
                  class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#F5EFDB] text-[#201A09] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
                >
                  <div class="text-[#201A09]" data-icon="User" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                      ></path>
                    </svg>
                  </div>
                </button>
              </div>
            </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex p-4 @container">
              <div class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
                <div class="flex gap-4">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                    style='background-image: url("https://cdn.usegalileo.ai/stability/c1f16476-b870-4ec2-8501-d660d507616a.png");'
                  ></div>
                  <div class="flex flex-col justify-center">
                    <p class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">The Library</p>
                    <p class="text-[#A07D1C] text-base font-normal leading-normal">
                      A public library in the heart of the city, offering a comprehensive collection of books and resources
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#EFE3C3] px-4 justify-between">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#201A09] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#201A09] text-sm font-bold leading-normal tracking-[0.015em]">History</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Vision &amp; Mission</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Our Portfolio</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Organisational Structure</p>
                </a>
              </div>
            </div>
            <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">History</h2>
            <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
              The Library has been serving the city since 1973, with its main branch located at 1000 Main Street. It was established through a partnership between the city
              government and a group of local philanthropists. Over the years, the library has expanded its services to include digital resources, maker spaces, and community
              programs. The Library is committed to providing equitable access to knowledge and fostering a love of learning in the community.
            </p>
            <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Vision &amp; Mission</h2>
            <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
              Our vision is a city where every resident has the tools they need to learn, create, and grow. Our mission is to provide free and open access to information,
              resources, and opportunities that inspire curiosity, build skills, and enrich lives.
            </p>
            <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Portfolio</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/3b0257ad-4962-46a8-a671-65f6c27a7c9e.png");'
                ></div>
                <div>
                  <p class="text-[#201A09] text-base font-medium leading-normal">Main Branch</p>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">1000 Main Street</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c1762990-992e-4a1d-9e90-a05d52ad6db2.png");'
                ></div>
                <div>
                  <p class="text-[#201A09] text-base font-medium leading-normal">Digital Resources</p>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">E-books, audiobooks, databases, and more</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/e4d638d1-bbf2-4869-a3dd-8157f0e7dc14.png");'
                ></div>
                <div>
                  <p class="text-[#201A09] text-base font-medium leading-normal">Community Programs</p>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">Storytimes, book clubs, workshops, and events</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c0c7ebdd-2978-47dc-99f1-a41d00f1a87c.png");'
                ></div>
                <div>
                  <p class="text-[#201A09] text-base font-medium leading-normal">Maker Spaces</p>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">3D printers, laser cutters, sewing machines, and more</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Organisational Structure</h2>
            <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
              The Library is governed by a board of directors, which is responsible for setting policies, managing finances, and hiring the library director. The library director
              oversees the day-to-day operations of the library, including staff management, program development, and collection management. The library has a team of professional
              librarians, paraprofessional staff, and volunteers who work together to provide excellent service to the community.
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>