<!-- Bottom / Top Navigation -->
<nav class="fixed bottom-0 lg:top-0 lg:bottom-auto lg:relative w-full max-w-full lg:max-w-full bg-white px-4 py-5 lg:py-4 z-30 border-t lg:border-b border-gray-200 shadow-sm lg:shadow-md transition-all duration-300 flex justify-center">

      <ul class="flex justify-center items-center gap-10 sm:gap-12 lg:gap-16">
            <!-- Laporan (Halaman Utama) -->
            <li class="text-[#13181D] hover:text-[#F97316] transition-colors duration-300">
                  <a href="{{ url('/') }}" class="menu">
                        <div class="group flex flex-col lg:flex-row items-center text-center gap-[10px] lg:gap-2">
                              <div class="w-6 h-6 flex shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                          <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                                          <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                                    </svg>
                              </div>
                              <p class="font-semibold text-sm lg:text-base leading-[21px] transition-all duration-300 group-hover:text-[#F97316]">
                                    Laporan
                              </p>
                        </div>
                  </a>
            </li>

            <!-- Cek Status -->
            <li class="text-[#13181D] hover:text-[#F97316] transition-colors duration-300">
                  <a href="{{ route('laporan.cari') }}" class="menu">
                        <div class="group flex flex-col lg:flex-row items-center text-center gap-[10px] lg:gap-2">
                              <div class="w-6 h-6 flex shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                          <path d="M8.25 10.875a2.625 2.625 0 1 1 5.25 0 2.625 2.625 0 0 1-5.25 0Z" />
                                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.125 4.5a4.125 4.125 0 1 0 2.338 7.524l2.007 2.006a.75.75 0 1 0 1.06-1.06l-2.006-2.007a4.125 4.125 0 0 0-3.399-6.463Z" clip-rule="evenodd" />
                                    </svg>
                              </div>
                              <p class="font-semibold text-sm lg:text-base leading-[21px] transition-all duration-300 group-hover:text-[#F97316]">
                                    Cek Status
                              </p>
                        </div>
                  </a>
            </li>

            <!-- Q&Q -->
            <li class="text-[#13181D] hover:text-[#F97316] transition-colors duration-300">
                  <a href="#" class="menu cursor-not-allowed opacity-70">
                        <div class="group flex flex-col lg:flex-row items-center text-center gap-[10px] lg:gap-2">
                              <div class="w-6 h-6 flex shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                          <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                                          <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                    </svg>
                              </div>
                              <p class="font-semibold text-sm lg:text-base leading-[21px] transition-all duration-300 group-hover:text-[#F97316]">
                                    FAQ
                              </p>
                        </div>
                  </a>
            </li>
      </ul>
</nav>