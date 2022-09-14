<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
        	[
        		'id' => 101,
        		'slug' => 'kk',
        		'name' => 'Қазақша'
        	],[
        		'id' => 102,
        		'slug' => 'ru',
        		'name' => 'Русский'
        	],[
        		'id' => 101,
        		'slug' => 'en',
        		'name' => 'English'
        	]
        ];

        if (count($languages)) {
            for ($i = 0; $i < count($languages); $i++) { 
                $language = Language::query()
                    ->where('slug', $languages[$i]['slug'])
                    ->first();

                if ($language) {
                    # code...
                } else {
                    Language::create([
                        'slug' => $languages[$i]['slug'],
                        'name' => $languages[$i]['name'],
                    ]);
                }
            }
        }
    }
}
