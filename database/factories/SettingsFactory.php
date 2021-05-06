<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => 'Ayicik.Net',
            'desc'      => 'Ayicik.Net topluma birşeyler katmaya çalışan, fikirleri projelendiren ve open source fikrini benimsemiş her alandan öğrencileri birleştiren bir öğrenci topluluğudur.',
            'en_desc'   => 'Ayicik.Net is a student community that tries to add something to the society, projects ideas and unites students from all fields who have adopted the open source idea.',
            'slogan'    => 'Ayicik.Net Slogan',
            'en_slogan' => 'Ayicik.Net Slogan',
            'email'     => 'contact@ayicik.net',
        ];
    }
}
