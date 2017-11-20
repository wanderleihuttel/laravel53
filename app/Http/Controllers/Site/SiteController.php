<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SiteController extends Controller
{
    public function __construct()
    {
       //$this->middleware('auth');
       //$this->middleware('auth')->only(['contato', 'categoria']);
       //$this->middleware('auth')->except(['index', 'contato']);
    }
   
   public function index()
    {
       $nome = "Wanderlei";
       $sobrenome = "Hüttel";
       $title = "Título Teste";
       $xss = '<script>alert("Ataque XSS");</script>';
       $var1 = 1234;
       $var2 = ['wanderlei', 'fabiane', 'tatiane', 'andriele', 'ana paula', 'angela', 'claudia', 'joelma', 'jéssica'];
       $var2 = array();
       return view('site.home.index', compact('nome', 'sobrenome', 'xss', 'title', 'var1', 'var2'));
       
    }
   
   public function contato()
   {
      return view('site.contato.index');
   }
   
   public function categoria($id)
   {
      return "Lista posts da categoria {$id}";
   }
   
   public function categoria2($id = 1)
   {
      return "Lista posts da categoria {$id}";
   }
   
}
