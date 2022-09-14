<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V1\LanguageResource;

use App\Models\Word;

use Validator;
use Cache;
use DB;

class WordController extends Controller
{
    public function index(Request $request)
    {
        if (Cache::has('user')) {
            dd(Cache::get('user'));
        } else {
            dd('--------');
        }
    	


        $words = Word::query();

    	if ($request->has('filter.language.id')) {
    		$words->where('language_id', $request->filter['language']['id']);
    	}

    	$words = $words->paginate();

    	return LanguageResource::collection($words);
    }

    public function store(Request $request)
    {
    	/*
    	$validator = Validator::make($request->all(), [
    		''
    		'name' => [
    			'required',
    			'string',
    			'max:255'
    		],
    		''
    	]);
    	*/

        Cache::put('user', [
            'surname' => 'Baubek',
            'name' => 'Maksat'
        ]);
    }
}
