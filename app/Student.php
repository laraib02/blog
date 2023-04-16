<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded=[];

    // ya modal ha jo studmnets ki tbale ka sy attch ha// data leleny kliy hm lihkyu hn
    //koi b naam dey skty hain
    // ya as  jopin kaam krta ha ya function jo nmy ha course ya hmy is couse id kja sara data dey ga Studenmt ka mosdal ma..

    function course_get(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
}

