# 5. Hafta – Laravel ile Dinamik Ürün Yönetimi ve Veritabanı Entegrasyonu

## Yapılan Çalışmalar
Bu hafta Laravel framework kullanılarak veritabanı tabanlı bir ürün listeleme sistemi geliştirilmiştir. Çalışma sırasında Laravel’in **MVC (Model–View–Controller)** mimarisi uygulanmış ve uygulamanın daha düzenli bir yapıda geliştirilmesi sağlanmıştır.

Projede geliştirme ortamı olarak **Laravel Herd** kullanılmış ve veritabanı tarafında hafif ve taşınabilir yapısı nedeniyle **SQLite** tercih edilmiştir. SQLite kullanılarak ürün bilgilerini saklayan bir veritabanı oluşturulmuş ve Laravel ile bağlantısı sağlanmıştır.

Veritabanı mimarisi oluşturulurken Laravel’in **Migration** yapısı kullanılmış ve `products` adlı tablo oluşturulmuştur. Bu tabloda **id**, **name** ve **timestamps** alanları tanımlanarak veritabanı şeması migrate edilmiştir.

Daha sonra uygulama ile veritabanı arasında bağlantı kurmak amacıyla **Product Modeli** oluşturulmuştur. Test aşamasında kullanılmak üzere **Factory ve Faker** kütüphanesi yardımıyla 50 adet rastgele ürün verisi üretilmiş ve veritabanına eklenmiştir.

Backend tarafında **ProductController** oluşturularak verilerin sayfalar halinde gösterilmesi sağlanmıştır. Bunun için Laravel’in `paginate(10)` metodu kullanılarak ürünlerin her sayfada 10 adet olacak şekilde listelenmesi sağlanmıştır.

Son olarak kullanıcıların bu verilere web arayüzünden erişebilmesi için **/odev-sonuc** adlı bir rota tanımlanmış ve sistem tarayıcı üzerinden test edilmiştir.

---

## Kullanılan Uygulamalar
- Laravel Herd  
- Visual Studio Code  
- GitHub  
- SQLite  

---

## Kazanımlar
Bu hafta yapılan çalışmalar sonucunda Laravel framework’ünde **MVC mimarisi**, **veritabanı göçleri (Migration)** ve **Model yapısı** hakkında bilgi edinilmiştir.

Ayrıca **Eloquent ORM** kullanılarak veritabanından veri çekme, veri üretme ve sayfalama (**Pagination**) işlemleri konusunda uygulamalı deneyim kazanılmıştır.

Bunun yanında Laravel Herd kullanarak modern bir geliştirme ortamı kurma ve SQLite veritabanı ile entegrasyon sağlama konularında da pratik yapılmıştır.

---

## GitHub
https://github.com/Merdan002/IME-STAJ-Calismalari
