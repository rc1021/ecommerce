<div class="relative slider-wrapper" x-data="getBanners()">
    <div class="relative md:min-h-100">
        <template x-for="(banner, index) in data" :key="'sw-img-'+index" hidden>
        <a :href="banner.url" class="transition-opacity opacity-0 duration-1250 ease-in-out"
            x-bind:class="(ind == index) ? 'opacity-100 static block' : 'absolute left-0 top-0'">
            <img class="h-48 object-cover object-center md:h-full md:max-w-none md:-translate-x-2/4 md:ml-1/2"
                 x-bind:src="banner.image" />
        </a>
        </template>
    </div>
    <div class="w-full overflow-hidden flex absolute bottom-0 md:bottom-auto md:top-1/6">
        <div class="flex flex-grow md:mx-auto md:container">
            <div class="min-w-full flex bg-white bg-opacity-60 md:min-w-min md:rounded-lg md:py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 self-auto flex-none md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     x-on:click.prevent="prev()">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
                <div class="flex flex-grow flex-row flex-nowrap md:divide-y md:flex-col md:w-44">
                    <template x-for="(banner, index) in data" :key="'sw-txt-'+index" hidden>
                        <div class="relative text-bar flex-1 items-center justify-center py-1 text-sm md:block md:order-none md:text-lg md:w-auto"
                             x-bind:class="getTextClass(index)"
                             x-on:mouseenter="play = false; ind = index" x-on:mouseleave="play = true">
                            <a class="flex justify-center" :href="banner.url" x-text="banner.title" />
                        </div>
                    </template>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 self-auto flex-none md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     x-on:click.prevent="next();start();">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function getBanners() {
            return {
                play: true,
                ind: 0,
                data: [
                    {
                        title: '瘋搶$199一日遊',
                        url: 'https://event.liontravel.com/zh-tw/factorytour/index?fr=cg451C0101M01',
                        image: 'https://static.liontech.com.tw/ConsoleAPData/PublicationStatic/lion_tw_b2c/zh-tw/_ModelFile/PrimaryVisual/150504/b45d041df1394f8c85a66ec350db5db9.jpg',
                    },
                    {
                        title: '五倍券來了！',
                        url: 'https://event.liontravel.com/zh-tw/campaign/hotsale/5000?fr=cg451C0101M01',
                        image: 'https://static.liontech.com.tw/ConsoleAPData/PublicationStatic/lion_tw_b2c/zh-tw/_ModelFile/PrimaryVisual/150504/9557648594914013a03986b4a1ab5203.jpg',
                    },
                    {
                        title: '藍皮解憂觀光列車',
                        url: 'https://event.liontravel.com/zh-tw/railroad/breezyblue/products?fr=cg451C0101M01',
                        image: 'https://static.liontech.com.tw/ConsoleAPData/PublicationStatic/lion_tw_b2c/zh-tw/_ModelFile/PrimaryVisual/150504/33166dd84f79496fba1ff718b127f17b.jpg',
                    },
                    {
                        title: '10/2出發 3萬有找',
                        url: 'https://event.liontravel.com/zh-tw/palau/tour?fr=cg451C0101M01',
                        image: 'https://static.liontech.com.tw/ConsoleAPData/PublicationStatic/lion_tw_b2c/zh-tw/_ModelFile/PrimaryVisual/150504/655452e29f624b21b2da80832348309c.jpg',
                    },
                    {
                        title: '山林相遇6種玩法',
                        url: 'https://www.liontravel.com/category/zh-tw/forest/index?fr=cg451C0101M01#ali',
                        image: 'https://static.liontech.com.tw/ConsoleAPData/PublicationStatic/lion_tw_b2c/zh-tw/_ModelFile/PrimaryVisual/150504/526792dae2bb46b99b004dd04083aa96.jpg',
                    }
                ],
                puse() {
                    this.play = false;
                },
                start() {
                    this.play = true;
                    if(this.timer)
                        clearInterval(this.timer);
                    this.timer = setInterval(() => {
                        if(this.play) {
                            this.next();
                        }
                    }, 5000);
                },
                prev() {
                    this.ind = (--this.ind < 0) ? this.data.length - 1 : this.ind;
                },
                next() {
                    this.ind = ++this.ind % this.data.length;
                },
                getTextClass(index) {
                    if (this.ind == index)
                        return 'active order-2';
                    else if ((this.ind - 1 == index) || (this.ind - 1 < 0) && (index == this.data.length - 1))
                        return 'order-1';
                    else if ((this.ind + 1 == index) || (this.ind + 1 >= this.data.length) && ((this.ind + 1) % this.data.length == index))
                        return 'order-3';
                    return 'hidden';
                },
                init() {
                    this.start();
                }
            };
        }
    </script>
@endpush
