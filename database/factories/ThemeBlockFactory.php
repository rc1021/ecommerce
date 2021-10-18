<?php

namespace Database\Factories;

use App\Models\ThemeBlock;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThemeBlockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ThemeBlock::class;

    public function makeBlocks(array $types = [])
    {
        $blocks = null;
        foreach($types as $type) {
            $block = $this->block($type)->count(1)->make();
            if(is_null($blocks)) {
                $blocks = $block;
                continue;
            }
            $blocks = $blocks->concat($block);
        }
        return $blocks;
    }

    public function block($type = '')
    {
        return $this->state(function (array $attributes) use ($type) {
            switch($type)
            {
                case 'base_card':
                    return [
                        'title' => '熱門活動分類',
                        'groups' => [[
                            'title' => null,
                            'banners' => Banner::factory()->count(rand(6, 17))->image(177, 133)->make(),
                        ]],
                        'componentName' => 'topic.block_base_card',
                    ];
                    break;
                case 'coupon_card':
                    return [
                        'title' => '最新旅遊優惠',
                        'groups' => [[
                            'title' => null,
                            'banners' => Banner::factory()->count(rand(4, 13))->image(370, 165)->description()->make(),
                        ]],
                        'componentName' => 'topic.block_coupon_card',
                    ];
                    break;
                case 'discovery_card':
                    return [
                        'title' => '探索熱門城市',
                        'groups' => [[
                            'title' => null,
                            'banners' => Banner::factory()->count(5)->image(628, 472)->tags()->make(),
                        ]],
                        'componentName' => 'topic.block_discovery_card',
                    ];
                    break;
                case 'star_card':
                    return [
                        'title' => 'Top 10 熱門商品',
                        'groups' => [[
                            'title' => null,
                            'banners' => Banner::factory()->count(10)->image(370, 165)->tags()->description()->make(),
                        ]],
                        'componentName' => 'topic.block_star_card',
                    ];
                    break;
                case 'djordje_card':
                    return [
                        'title' => 'Djordje',
                        'groups' => [[
                            'title' => null,
                            'banners' => [],
                        ]],
                        'componentName' => 'topic.block_djordje_card',
                    ];
                    break;
                case 'matt_tonks_card':
                    return [
                        'title' => 'matt-tonks',
                        'groups' => [[
                            'title' => null,
                            'banners' => [],
                        ]],
                        'componentName' => 'topic.block_matt_tonks_card',
                    ];
                    break;
                case 'sanjay_sanjel_card':
                    return [
                        'title' => 'Sanjay Sanjel',
                        'groups' => [[
                            'title' => null,
                            'banners' => [],
                        ]],
                        'componentName' => 'topic.block_sanjay_sanjel_card',
                    ];
                    break;
            }
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $grps = [];
        $grp_num = rand(1, 3);
        for ($i=0; $i < $grp_num; $i++) {
            array_push($grps, [
                'title' => $this->faker->word,
                'banners' => Banner::factory()->count(rand(6, 17))->image(178, 133)->description()->tags()->make(),
            ]);
        }

        return [
            'title' => $this->faker->word(3, true),
            'url' => $this->faker->url,
            'groups' => $grps,
            'componentName' => $this->faker->randomElement([
                'topic.block_base_card',
                'topic.block_coupon_card',
            ]),
        ];
    }
}
