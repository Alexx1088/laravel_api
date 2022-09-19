<?php

namespace App\Traits;

trait Translationable
{
    public function getNameAttribute()
    {
        if (app()->getLocale() == 'kk') return $this->name_kk;
        if (app()->getLocale() == 'ru') return $this->name_ru;
        if (app()->getLocale() == 'en') return $this->name_en;
    }

    public function getJobTitleAttribute()
    {
        if (app()->getLocale() == 'kk') return $this->job_title_kk;
        if (app()->getLocale() == 'ru') return $this->job_title_ru;
        if (app()->getLocale() == 'en') return $this->job_title_en;
    }
}
