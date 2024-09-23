<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Serif%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>OPAC</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fbf9f8] group/design-root overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
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
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#96684f] flex border-none bg-[#f3ebe8] items-center justify-center pl-4 rounded-l-lg border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Search for an eBook"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#1b130e] focus:outline-0 focus:ring-0 border-none bg-[#f3ebe8] focus:border-none h-full placeholder:text-[#96684f] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f3ebe8] pl-4 pr-4">
                <p class="text-[#1b130e] text-sm font-medium leading-normal">Fiction</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f3ebe8] pl-4 pr-4">
                <p class="text-[#1b130e] text-sm font-medium leading-normal">Non-fiction</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f3ebe8] pl-4 pr-4">
                <p class="text-[#1b130e] text-sm font-medium leading-normal">Science</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f3ebe8] pl-4 pr-4">
                <p class="text-[#1b130e] text-sm font-medium leading-normal">History</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f3ebe8] pl-4 pr-4">
                <p class="text-[#1b130e] text-sm font-medium leading-normal">Biography</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f3ebe8] pl-4 pr-4">
                <p class="text-[#1b130e] text-sm font-medium leading-normal">Technology</p>
              </div>
            </div>
            <h2 class="text-[#1b130e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">New Releases</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/bf996c88-8b38-41cd-a080-92fe68e9c5c4.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">The Art of War</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Sun Tzu</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/7cb406fe-b53c-4aa6-80cc-9a618de5b602.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">The Great Gatsby</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">F. Scott Fitzgerald</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/f51a90e7-40db-4bbd-aab3-2a6a826053be.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">The Catcher in the Rye</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">J.D. Salinger</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/70fd1300-01d0-4c73-a81b-439ac28e71d4.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">1984</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">George Orwell</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/01fe86d0-5626-40c9-8c16-f8fc2f5a072b.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">To Kill a Mockingbird</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Harper Lee</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/b82adb46-1af6-41de-b42b-a443f7dd00d9.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">Moby Dick</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Herman Melville</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#1b130e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Bestsellers</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/8db53c15-dcd7-44c4-85cc-f012b1464e02.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">The Da Vinci Code</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Dan Brown</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/64383388-4271-42b1-8d3f-ff33926c1b96.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">Harry Potter and the Sorcerer's Stone</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">J.K. Rowling</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/19a0a1e8-43da-4317-8f45-50262800850a.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">The Girl with the Dragon Tattoo</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Stieg Larsson</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/88b0dcca-eeb1-4947-bd4f-054c8b0a7fc5.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">The Hunger Games</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Suzanne Collins</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/0090ee30-1e21-453f-bf39-5992a0b68423.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">Gone Girl</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">Gillian Flynn</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/55228b32-6a2a-4f80-8ba1-8461a6fc3c94.png");'
                ></div>
                <div>
                  <p class="text-[#1b130e] text-base font-medium leading-normal">A Game of Thrones</p>
                  <p class="text-[#96684f] text-sm font-normal leading-normal">George R.R. Martin</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>