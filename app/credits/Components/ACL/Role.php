<?php namespace credits\Components\ACL;


class Role extends \Eloquent{

    protected $fillable = array('name');

    public function permissionsRole()
    {
        return $this->belongsToMany('credits\Components\ACL\Permission')->withTimestamps();
    }
}