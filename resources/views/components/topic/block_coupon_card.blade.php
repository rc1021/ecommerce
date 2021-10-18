<div class="md:container mx-auto py-8">
    @if (data_get($model, 'title', false))
    <div class="block font-bold text-2xl my-4">
        {{ data_get($model, 'title') }}
    </div>
    @endif
    <div class="block_coupon_card owl-carousel autoload owl-theme content-center">
        @foreach (data_get($model, 'groups', []) as $group)
        @if (data_get($group, 'title', false))
        <div class="bg-white rounded overflow-hidden shadow-md w-full flex items-center">
            <div class="flex-grow font-bold text-xl text-center">{{ data_get($group, 'title') }}</div>
        </div>
        @endif
        @foreach (data_get($group, 'banners', []) as $index => $banner )
        <div class="relative bg-white rounded-lg overflow-hidden shadow-md w-full group">
            <img class="w-full transition duration-200 ease-in-out blur-none scale-100 group-hover:blur-sm group-hover:scale-105" src="{{ data_get($banner, 'image') }}" alt="{{ data_get($banner, 'title') }}">
            <a href="{{ data_get($banner, 'url') }}" class="absolute left-0 top-0 bottom-0 right-0 gap-1 px-8 py-10 flex flex-col transition duration-200 ease-in-out  text-white bg-transparent group-hover:bg-black bg-opacity-0 group-hover:bg-opacity-25 opacity-0 group-hover:opacity-100">
                @if (data_get($banner, 'title', false))
                <div class="font-bold text-xl flex-none">{{ data_get($banner, 'title') }}</div>
                @endif
                @if (data_get($banner, 'description', false))
                <p class="text-base flex-grow">
                {{ data_get($banner, 'description') }}
                </p>
                <div class="text-sm">{!! htmlentities('> ') . __('read more') !!}</div>
                @endif
            </a>
        </div>
        @endforeach
        @endforeach
    </div>
    @if (data_get($model, 'owl', false))
    <script type="application/json">{{ data_get($model, 'owl') }}</script>
    @else
    <script type="application/json">
        {
            "loop": false,
            "margin": 16,
            "nav": true,
            "slideBy": "page",
            "rewind": false,
            "dots": false,
            "navText": [
                "<svg xmlns='http://www.w3.org/2000/svg' class='h-8 w-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 19l-7-7 7-7' /></svg>",
                "<svg xmlns='http://www.w3.org/2000/svg' class='h-8 w-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' /></svg>"
            ],
            "navClass": [
                "nav-prev bg-white rounded-full shadow-lg p-2 ring-gray-300 absolute top-2/5 -left-16 hover:ring hover:text-gray-600",
                "nav-next bg-white rounded-full shadow-lg p-2 ring-gray-300 absolute top-2/5 -right-16 hover:ring hover:text-gray-600"
            ],
            "navContainerClass": "owl-nav text-gray-400 hidden md:block mx-auto",
            "stageOuterClass": "owl-stage-outer py-4 px-1 -my-4 -mx-1",
            "stageClass": "owl-stage flex items-stretch",
            "responsive":{
                "0":{
                    "margin": 0,
                    "items":1
                },
                "1000":{
                    "items":3
                }
            }
        }
    </script>
    @endif
</div>

