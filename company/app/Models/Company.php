<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
    protected $table = 'employee';
    protected $fillable = ["name_first","name_last"];
}