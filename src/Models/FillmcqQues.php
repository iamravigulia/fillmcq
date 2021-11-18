<?php
namespace Edgewizz\Fillmcq\Models;

use Illuminate\Database\Eloquent\Model;

class FillmcqQues extends Model{
    public function answers(){
        return $this->hasOne('Edgewizz\Fillmcq\Models\FillmcqAns', 'question_id');
    }
    protected $table = 'fmt_fillmcq_ques';
}