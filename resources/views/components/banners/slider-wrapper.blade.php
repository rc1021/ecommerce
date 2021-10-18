<div class="relative">
    <div class="slider_wrapper owl-carousel autoload owl-theme content-center relative">
        @foreach (data_get($model, 'banners', []) as $index => $banner )
        <div class="w-full" data-url data-title="{{ data_get($banner, 'title') }}">
            <img class="h-48 md:h-full md:max-w-max md:ml-1/2 md:-translate-x-1/2" style="width: max-content;" src="{{ data_get($banner, 'image') }}" alt="{{ data_get($banner, 'title') }}">
        </div>
        @endforeach
    </div>
    @if (data_get($model, 'owl', false))
    <script type="application/json">{{ data_get($model, 'owl') }}</script>
    @else
    <script type="application/json">  
        {
            "autoplay": true,
            "autoplayHoverPause": false,
            "autoplaySpeed": 1000,
            "animateIn": "fadeIn",
            "animateOut": "fadeOut",
            "autoWidth": false,
            "items": 1,
            "loop": true,
            "nav": false,
            "rewind": false,
            "dots": false
        }
    </script>
    @endif
</div>

@once
    @push('scripts')
        <script>
            window.addEventListener("load", function(event) {
                $('.slider_wrapper.owl-carousel')
                    .on('initialized', function (event, owl) {
                        let wrapper_class = 'slider-wrapper md:left-2/4 md:-translate-x-102 text-center flex flex-grow flex-row flex-nowrap min-w-full flex bg-white bg-opacity-60 absolute bottom-0 md:bottom-auto md:top-1/6 md:divide-white md:divide-y md:flex-col md:w-44 md:min-w-min md:rounded-lg md:py-2';
                        let item_class = 'slider-wrapper-item relative text-bar flex-1 items-center justify-center py-1 text-sm md:block md:order-none md:text-lg md:w-auto';
                        let $items = $('.owl-item:not(.cloned) > div', owl.$element);
                        $(owl.$element).data('count', $items.length);
                        $(owl.$element).append($('<div />').addClass(wrapper_class).append($items.map(function (ind) {
                            let c = ' hidden';
                            if (ind == 0)
                                c = ' order-2 active';
                            else if (ind == 1)
                                c = ' order-3';
                            else if (ind == $items.length-1)
                                c = ' order-1';
                            let $dom = $('<div data-index="' + ind + '" />').addClass(item_class + c);
                            $dom.text($(this).data('title'));
                            return $dom;
                        }).get()));
                    })
                    .on('change', function (event, owl, property) {
                        console.log([owl, property]);
                        if(property.item.index == 0)
                            return ;
                        let index = property.item.index;
                        index = property.item.index - Math.floor(property.item.count/2);
                        $('.slider-wrapper-item', owl.$element).addClass('hidden');
                        $('.slider-wrapper-item', owl.$element).removeClass('active order-1 order-2 order-3');
                        $('.slider-wrapper-item:nth-child(' + ((index == 0) ? property.item.count : index) + ')', owl.$element).removeClass('hidden').addClass('order-1');
                        $('.slider-wrapper-item:nth-child(' + (index + 1) + ')', owl.$element).removeClass('hidden').addClass('order-2 active');
                        $('.slider-wrapper-item:nth-child(' + (((index + 2) >= property.item.count) ? 1 : (index + 2))  + ')', owl.$element).removeClass('hidden').addClass('order-3');
                    })
                    // .on('mouseenter', '.slider-wrapper-item', function (event) {
                    //     $(event.delegateTarget).trigger('change', [{ $element: $(event.delegateTarget)}, {
                    //         item: {
                    //             count: $(event.delegateTarget).data('count'),
                    //             index: $(this).data('index')
                    //         }
                    //     }])
                    // })
            });
        </script>
    @endpush
@endonce
