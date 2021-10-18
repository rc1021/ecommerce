<div class="md:container mx-auto py-8">
    @if (data_get($model, 'title', false))
    <div class="block font-bold text-2xl my-4">
        {{ data_get($model, 'title') }}
    </div>
    @endif
    <div class="bg-blue-100 flex justify-center items-center p-4">
        <div class="bg-white h-56 rounded shadow-md flex text-grey-600">
            <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="Room Image">
            <div class="w-full flex flex-col">
                <div class="p-4 pb-0 flex-1">
                    <h3 class="font-light mb-1">Tower Hotel</h3>
                    <div class="text-xs flex items-center mb-4">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        Soho, London
                    </div>
                    <span class="text-5xl">£63.00<span class="text-lg">/PPPN</span></span>
                    <div class="flex items-center mt-4">
                        <div class="pr-2 text-xs flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg> 
                            Free WiFi
                        </div>
                        <div class="px-2 text-xs flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            2mins to center
                        </div>
                    </div>
                </div>
                <div class="bg-grey-lighter p-3 flex items-center justify-between transition-all duration-500 ease-out hover:bg-gray-300">
                    Book Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>