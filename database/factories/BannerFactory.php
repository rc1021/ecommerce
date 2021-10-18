<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    public function image($width = 640, $height = 480, bool $random = false)
    {
        return $this->state(function (array $attributes) use ($width, $height, $random) {
            $t = '';
            if($random) {
                $base62 = new \Tuupola\Base62;
                $t = $base62->encode(random_bytes(128));
            }
            return [
                'image' => sprintf('https://source.unsplash.com/random/%dx%d?t=%s', $width, $height, $t),
            ];
        });
    }

    public function description()
    {
        return $this->state(function (array $attributes) {
            return [
                'description' => $this->faker->sentence(5, true),
            ];
        });
    }

    public function tags()
    {
        return $this->state(function (array $attributes) {
            return [
                'tags' => $this->faker->randomElements($this->faker->words(10, false), rand(1, 3)),
            ];
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url,
            'image' => sprintf('https://source.unsplash.com/random/%dx%d?t=%s', 250, 250, time()),
            'title' => $this->faker->word,
        ];
    }
}
