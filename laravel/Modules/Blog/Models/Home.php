<?php

namespace Modules\Blog\Models;

use Carbon\Carbon;

//------services---------
//--- TRAITS ---

class Home extends BaseModel {
    protected $fillable = ['post_id', 'article_type', 'published_at'/*, 'category_id'*/];
    protected $appends = [];
    protected $casts = [];
    protected $dates = ['published_at'/* 'created_at', 'updated_at'*/];
    protected $primaryKey = 'post_id';
    public $incrementing = true;
    //--------- relationship ---------------

    //---------- mututars -----------
    public function setPublishedAtAttribute($value) {
        if (\is_string($value)) {
            $value = Carbon::parse($value);
        }
        $this->attributes['published_at'] = $value;
    }

    public function setArticleTypeAttribute($value) {
        $this->setCategoryIdAttribute(\Request::input('category_id'));
        $this->attributes['article_type'] = $value;
    }
}//end model
