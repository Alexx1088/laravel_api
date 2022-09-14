<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Language;
use App\Models\Word;

use DB;

class WordSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/*
		$words = [
			[
				'slug' => 'en',
				'name' => 'I',
				'translations' => [
					[
						'slug' => 'ru',
						'name' => 'Я'
					]
				]
			],[
				'slug' => 'en',
				'name' => 'You',
				'translations' => [
					[
						'slug' => 'ru',
						'name' => ''
					]
				]
			],[
				'slug' => 'en',
				'name' => 'You',
				'translations' => [
					[
						'slug' => 'ru',
						'name' => 'Я'
					]
				]
			]
		];

		if (count($words) > 0) {
			for ($i = 0; $i < count($words); $i++) { 
				$word = Word::query()
					->where('language_id', Language::where('slug', $words[$i]['slug'])->first()->id)
					->where('name', $words[$i]['name'])
					->first();

				if ($word) {
					# code...
				} else {
					DB::transaction(function() use ($words, $i) {
						$word = Word::create([
							'language_id' => Language::where('slug', $words[$i]['slug'])->first()->id,
							'name' => $words[$i]['name']
						]);

						if (count($words[$i]['translations']) > 0) {
							for ($j = 0; $j < count($words[$i]['translations']); $j++) { 
								$translation = Word::query()
									->where('language_id', Language::where('slug', $words[$i]['translations'][$j]['slug'])->first()->id)
									->where('name', $words[$i]['translations'][$j]['name'])
									->first();

								if (!$translation) {
									$translation = Word::create([
										'language_id' => Language::where('slug', $words[$i]['translations'][$j]['slug'])->first()->id,
										'name' => $words[$i]['translations'][$j]['name']
									]);

									$word->translations()->attach($translation);
								}
							}
						}
					});
				}
			}
		}
		*/

		
	}
}
