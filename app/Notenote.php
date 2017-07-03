<?php

namespace App;



class Notenote extends Model
{
    //
    public function post(){
        return $this ->belongsTo(Notenote::class);
    }
    public function user(){ //$post->user
        return $this ->belongsTo(User::class);
    }
}
