# 7. Hafta – Yazılım Geliştirme Süreçleri ve Ekip Çalışması

## Yapılan Çalışmalar
Bu hafta proje geliştirme sürecinde sadece kod yazmaya değil, aynı zamanda ekip çalışması, versiyon kontrol sistemleri ve performans optimizasyonu konularına odaklanılmıştır. Özellikle Git kullanımı, cache mekanizması ve ekip içi işbirliği standartları üzerine çalışmalar yapılmıştır.

Çalışmalar kapsamında ekip olarak aynı proje üzerinde düzenli ve çakışmasız çalışabilmek için Git iş akışları aktif şekilde uygulanmıştır. Yapılan her değişiklik anlamlı commit mesajları ile kayıt altına alınmış ve proje geçmişinin takip edilebilir olması sağlanmıştır. Bunun yanında doğrudan ana koda müdahale etmek yerine Pull Request (PR) süreçleri kullanılarak geliştirilen özellikler önce incelenmiş, ardından onaylanarak projeye dahil edilmiştir.

Ayrıca merge işlemleri sırasında oluşabilecek çakışmalar (conflict) üzerinde çalışılmış ve bu çakışmaların nasıl çözüleceği uygulamalı olarak öğrenilmiştir. Böylece ekip içinde aynı dosya üzerinde çalışırken ortaya çıkabilecek sorunlara karşı çözüm geliştirilmiştir.

Performans açısından sistemin daha verimli çalışması için cache (önbellekleme) mekanizması ele alınmıştır. Sık değişmeyen verilerin (örneğin ders listesi gibi) sürekli veritabanından çekilmesi yerine cache sisteminde tutulması sağlanarak uygulamanın hızlandırılması hedeflenmiştir. Veri güncellendiğinde cache’in temizlenmesi ve yeniden oluşturulması süreçleri uygulanarak veri tutarlılığı korunmuştur.

Ekip çalışması kapsamında ortak kod yazım standartları belirlenmiş ve herkesin aynı kurallara uygun kod yazması sağlanmıştır. Proje yapısı modüler hale getirilerek Controller, Model ve View katmanlarına ayrılmış ve ekip üyelerinin farklı modüller üzerinde paralel çalışabilmesi mümkün hale getirilmiştir. Ayrıca yapılan çalışmalar Markdown formatında dökümante edilerek proje için kalıcı bir bilgi kaynağı oluşturulmuştur.

## Not: Stajer Takip Programı
bu çalışmalar geliştirilen Stajer Takip Programı üzerinden görev dağılımlarıyla ortak bir proje olarak yürütülmüş herkese atanılan görevler kendi branch i üzerinden yürütülüp proje yöneticisi tarafından attığımız "pr" kontrol edilip merge edilerek ortak bir proje geliştirilmiştir. 
---

## Kullanılan Uygulamalar
• Laravel  
• Visual Studio Code  
• Git & GitHub  
• SQLite  


---

## Karşılaşılan Sorunlar ve Çözümler

**Hata:** Tarih verilerinin düzenleme ekranında boş gelmesi  
**Çözüm:** Carbon kütüphanesi kullanılarak tarih formatı HTML5 input formatına (Y-m-d) uygun hale getirildi.

**Hata:** Merge sırasında dosya çakışmaları (conflict)  
**Çözüm:** Git conflict çözme yöntemleri öğrenildi ve manuel düzenleme ile sorun giderildi.

---

## Kazanımlar
Bu hafta yapılan çalışmalar sonucunda yazılım geliştirme sürecinin yalnızca kod yazmaktan ibaret olmadığı, aynı zamanda ekip çalışması, versiyon kontrolü ve sistem optimizasyonu gibi önemli unsurları da içerdiği anlaşılmıştır.

Git kullanımı ile proje üzerinde yapılan değişikliklerin düzenli şekilde yönetilmesi, Pull Request süreçleri ile kod kalitesinin artırılması ve ekip içi koordinasyonun sağlanması öğrenilmiştir. Ayrıca cache mekanizması sayesinde uygulama performansının nasıl artırılabileceği ve veri tutarlılığının nasıl korunacağı kavranmıştır.

Bunun yanında modüler yazılım geliştirme yaklaşımı sayesinde projenin daha düzenli, okunabilir ve sürdürülebilir hale getirilebileceği görülmüştür. Yapılan çalışmalar sırasında farklı kaynaklardan ve yapay zeka destekli araçlardan yararlanılarak konular pekiştirilmiştir.

---
