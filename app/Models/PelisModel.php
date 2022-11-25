<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PelisModel extends Model
{
    protected $table = 'peliculas';
    protected $primaryKey = 'cod_pelicula';
    protected $allowedFields = ['titulo','genero','pais','anyo'];
}