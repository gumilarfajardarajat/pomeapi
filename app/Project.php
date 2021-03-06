<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_project','name','project_manager','start_at','ended_at','deadline_at','status','price'];


    public function steps()
    {
        return $this->belongsToMany('App\Step','project_structures','id_project','id_project');
    }

}
