<div class="md:container mx-auto py-8">
    @if (data_get($model, 'title', false))
    <div class="block font-bold text-2xl my-4">
        {{ data_get($model, 'title') }}
    </div>
    @endif
    <div x-data="{ ind: 0 }" class="block_discovery_card flex justify-between items-center">
        @foreach (data_get($model, 'groups', []) as $group)
        @foreach (data_get($group, 'banners', []) as $index => $banner )
        <a x-on:mouseover="ind = {{ $index }}"
             href="{{ data_get($banner, 'url') }}"
             title="{{ data_get($banner, 'title') }}"
             style="background-image: url({{ data_get($banner, 'image') }})"
             x-bind:class="{ active: (ind == {{ $index }}) }"
             class="relative overflow-hidden rounded-lg mx-2 shadow-md bg-cover bg-center h-80 group">
             <div class="absolute -bottom-10 left-0 w-full text-white p-3 space-y-1">
                <div class="font-bold text-2xl">{{ data_get($banner, 'title') }}</div>
                <div class="flex flex-nowrap space-x-2 mt-4">
                    @foreach (data_get($banner, 'tags', []) as $tag)
                    <span class="inline-block rounded-full border border-white text-base p-2 py-0">{{ $tag }}</span>
                    @endforeach
                </div>
             </div>
        </a>
        @endforeach
        @endforeach
    </div>
</div>

