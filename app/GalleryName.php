<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryName extends Model
{
      public function getImages()
      {
        return $this->hasMany('App\GalleryImages','galleryName','id');
      }
}
