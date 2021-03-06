<?php

namespace App\Observers;

use App\Tag;
use Illuminate\Support\Facades\DB;

class TagObserver
{
    public function deleted(Tag $tag)
    {
        DB::table('taggables')
            ->where('tag_id', $tag->id)
            ->delete();
    }
}
