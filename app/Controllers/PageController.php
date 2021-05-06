<?php

namespace App\Controllers;

class PageController extends BaseController
{
  public function beranda()
  {
    return view('beranda');
  }

  public function alur()
  {
    return view('alur-seleksi');
  }

  public function ketentuan()
  {
    return view('ketentuan');
  }

  public function persyaratan()
  {
    return view('persyaratan');
  }
}
