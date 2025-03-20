<?php

namespace Zahzah\LaravelHasProps\Models;

use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;

class ConfigProp extends BaseModel{
    use HasProps;

    protected $keyType        = "string";
    protected $fillable       = [
        'id','reference_type','reference_id',
        'subject_type','subject_id','props',
    ];

    public function reference(){return $this->morphTo();}
    public function subject(){return $this->morphTo();}
}