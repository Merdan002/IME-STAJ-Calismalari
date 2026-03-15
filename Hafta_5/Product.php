<?php

namespace App\Models;//bu satır dosya adresim.

use Illuminate\Database\Eloquent\Factories\HasFactory;//hasfactory ile kafadan veri ürettik.
use Illuminate\Database\Eloquent\Model;//model ile veritabanı ile bağlantı kurduk.

class Product extends Model//product(ürün)dosyasını olusturduk ve extends Model demek veri tabanı ile bağlantısı olan bir model dosyası.
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;//hasfactory kullanarak veri üretme işlemi yapacağız.
}
