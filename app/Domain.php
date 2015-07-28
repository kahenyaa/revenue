<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'domains';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'docket_id', 'form_id'];

    # service form
    public function form()
    {
        return $this->belongsTo('App\DomainForm');
    }

    # departments in this domain
    public function departments()
    {
        return $this->hasMany('App\Department');
    }

    # services in this domain
    public function services()
    {
        return $this->hasManyThrough('App\Service', 'App\Department');
    }

    public function setNameAttribute($value)
    {
      $this->attributes['name'] = strtolower($value);
    }
}
