<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'category_id' ,
        'description' ,
        'image' ,
        'min_budget',
        'company_id', 
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

public function category(){

    return $this->belongsTo(Category::class);
}


}
  


