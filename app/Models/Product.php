<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function carts (){

        return $this->hasMany(Cart::class);
      }


      public function images (){

        return $this->hasMany(ProductPhoto::class);
      }

    //   public function category (){

    //     return $this->belongsTo(Product::class,'category_id');
    //   }
      public function category (){
        return $this->belongsTo(Category::class,'category_id');
    }



}
// Full texts
// id
// name
// description
// price
// quantity
// category_id
// imagepath

// Edit Edit
// Copy Copy
// Delete Delete
// 1
// بورجر
// NULL
// 200
// 50
// 2
// assets\img\br.jpeg

// Edit Edit
// Copy Copy
// Delete Delete
// 2
// روج ومسكرة
// NULL
// 250
// 20
// 3
// assets\img\ms.jpeg

// Edit Edit
// Copy Copy
// Delete Delete
// 3
// ساعة روليكس
// NULL
// 7000
// 4
// 5
// assets\img\ro.jpeg

// Edit Edit
// Copy Copy
// Delete Delete
// 4
// لابتوب
// NULL
// 15000
// 55
// 4
// assets\img\el.jpeg

// Edit Edit
// Copy Copy
// Delete Delete
// 5
// شنطة سفر
// NULL
// 1000
// 5
// 6
// assets\img\b.jpeg

// Edit Edit
// Copy Copy
// Delete Delete
// 6
// كاميرة الكترونية
// NULL
// 7000
// 5
// 1
// assets\img\images.jpeg
// -->
