<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;
    protected $table = 'service_requests';
    protected $primaryKey ='id';
    public $timestamps ='true';
    public $dateFormat = 'Y-m-d H:i:s';
}
