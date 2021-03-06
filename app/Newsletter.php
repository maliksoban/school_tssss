<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newsletter extends Model
{
    use SoftDeletes;

    public $table = 'newsletter';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';

    public $fillable = [
        'title',
        'notice',
        'link',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'notice' => 'string',
        'link' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'title' => 'required',
        'notice' => 'required',
        'link' => 'required',
    ];

}
