<?php

use Illuminate\Support\Facades\DB;

$languageCode = 'en';

$translations = DB::table('translations')
    ->where('language_code', $languageCode)
    ->get();

$languageArray = [];
foreach ($translations as $translation) {
    $languageArray[$translation->key] = $translation->value;
}

return $languageArray;
