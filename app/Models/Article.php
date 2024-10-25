<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable =["designation" , "marque" , "reference" , "qtestock" , "prix" , "scategorieID"] ;
    public function scategorie(){
        return $this -> belongsTo(scategorie::class , "scategorieID");
    }
}
