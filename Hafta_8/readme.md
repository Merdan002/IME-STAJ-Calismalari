# 📌 10. Hafta – Yazılım Mimarisi ve Tasarım Kalıpları

## 🛠️ Yapılan Çalışmalar

Bu hafta yazılım geliştirme sürecinde daha profesyonel ve sürdürülebilir projeler geliştirebilmek için yazılım mimarisi, tasarım kalıpları (Design Patterns) ve temiz kod prensipleri üzerine çalışmalar yapılmıştır. Özellikle SOLID prensipleri, katmanlı mimari yapılar ve yaygın kullanılan tasarım kalıpları uygulamalı olarak öğrenilmiştir.

İlk olarak yazılım geliştirmede sıkça kullanılan tasarım kalıpları incelenmiştir.

- **Factory Pattern**: Nesne oluşturma işlemini merkezi bir yapıya alarak kodun daha esnek ve yönetilebilir olmasını sağlar. Bu sayede nesne üretimi doğrudan yapılmak yerine bir fabrika sınıfı üzerinden gerçekleştirilmiştir.

- **Repository Pattern**: Veritabanı işlemlerini soyutlayarak veri erişimini düzenli hale getirmek için kullanılmıştır. Bu yapı sayesinde Controller katmanı doğrudan veritabanı ile iletişim kurmak yerine repository üzerinden veri işlemlerini gerçekleştirmiştir.

- **Singleton Pattern**: Uygulama boyunca yalnızca tek bir nesnenin kullanılmasını sağlar. Özellikle ortak kullanılan servislerde tercih edilmiştir.

- **Unit of Work Pattern**: Birden fazla veritabanı işlemini tek bir işlem (transaction) olarak yönetir. Bu sayede veri bütünlüğü korunur ve hata durumlarında işlemler geri alınabilir.

Ayrıca veri dönüşümlerini kolaylaştırmak amacıyla **AutoMapper** kütüphanesi kullanılmıştır. Bu yapı sayesinde DTO (Data Transfer Object) ile entity sınıfları arasında manuel veri aktarımı yapılmadan dönüşüm sağlanmıştır.

Yazılım mimarisi tarafında **Domain Driven Design (DDD)** yaklaşımı incelenmiştir. Bu yaklaşımda iş kuralları (business logic) uygulamanın merkezine alınarak daha anlamlı ve sürdürülebilir bir yapı oluşturulmuştur.

Bunun yanında yazılım geliştirme yaklaşımlarından:

- **Code First**: Veritabanı kod üzerinden oluşturulur  
- **Database First (Data First)**: Mevcut veritabanı üzerinden model oluşturulur  

Frontend tarafında ise **Standalone yapısı** incelenmiş ve Angular projelerinde modül bağımlılığını azaltarak daha sade bir yapı oluşturmanın avantajları görülmüştür.

### 🔑 SOLID Prensipleri

- **Single Responsibility** → Her sınıfın tek bir görevi olmalıdır  
- **Open/Closed** → Kodlar geliştirilebilir olmalı, mevcut yapı değiştirilmemelidir  
- **Liskov Substitution** → Alt sınıflar üst sınıfların yerine geçebilmelidir  
- **Interface Segregation** → Büyük arayüzler küçük parçalara bölünmelidir  
- **Dependency Inversion** → Bağımlılıklar soyutlamalar üzerinden kurulmalıdır  

Ayrıca **Clean Code** prensipleri ile daha okunabilir, anlaşılır ve sürdürülebilir kod yazmanın önemi kavranmıştır.

- **DRY (Don’t Repeat Yourself)** prensibi uygulanarak kod tekrarının önüne geçilmiştir.

---

## 💻 Kullanılan Teknolojiler

- C#  
- ASP.NET Core  
- Entity Framework Core  
- Angular  
- Visual Studio / Visual Studio Code  

---

## ⚠️ Karşılaşılan Sorunlar ve Çözümler

**Hata:** Repository yapısında veri çekme işlemlerinde karmaşa oluşması  
**Çözüm:** Generic repository yapısı kurularak tüm entity’ler için ortak bir yapı oluşturuldu  

**Hata:** DTO ve entity arasında veri aktarımının uzun ve karmaşık olması  
**Çözüm:** AutoMapper kullanılarak otomatik veri dönüşümü sağlandı  

**Hata:** Birden fazla veritabanı işleminin yönetilememesi  
**Çözüm:** Unit of Work pattern uygulanarak işlemler tek merkezden kontrol edildi  

---

## 🎯 Kazanımlar

Bu hafta yapılan çalışmalar sonucunda yazılım geliştirme sürecinde doğru mimari ve tasarım kalıplarının kullanılmasının ne kadar önemli olduğu anlaşılmıştır.

- Kodun sadece çalışmasının yeterli olmadığı, aynı zamanda **okunabilir**, **sürdürülebilir** ve **geliştirilebilir** olması gerektiği kavranmıştır.  
- SOLID prensipleri sayesinde daha düzenli ve esnek bir kod yapısı oluşturulabileceği görülmüştür.  
- Repository ve Unit of Work yapıları ile veritabanı işlemlerinin daha kontrollü yönetilebileceği öğrenilmiştir.  
- AutoMapper ile veri dönüşüm süreçlerinin kolaylaştırılabileceği anlaşılmıştır.  
- DDD yaklaşımı ile daha profesyonel projeler geliştirilebileceği görülmüştür.  

---

