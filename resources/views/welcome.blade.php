<x-app-layout>

  <div class="flex flex-col">

    <x-dynamic-component :component="data_get($slider, 'componentName', 'banners.slider-wrapper')" :model="$slider" />


  </div>

  @foreach ($theme_blocks as $model)
    <x-dynamic-component :component="data_get($model, 'componentName', 'topic.block_base_card')" :model="$model" />
  @endforeach

</x-app-layout>
