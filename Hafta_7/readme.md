 # 7. Hafta – Yazılım Geliştirme Süreçleri ve Ekip Çalışması

## Yapılan Çalışmalar
Bu hafta proje geliştirme sürecinde yalnızca kod yazmaya değil, aynı zamanda ekip çalışması, versiyon kontrol sistemleri ve performans optimizasyonu konularına odaklanılmıştır. Özellikle Git kullanımı, cache (önbellekleme) stratejileri ve ekip içi işbirliği standartları üzerine çalışmalar yapılmıştır.

Ekip olarak aynı proje üzerinde düzenli ve çakışmasız çalışabilmek için Git iş akışları aktif olarak uygulanmıştır. Yapılan her değişiklik, anlamlı ve açıklayıcı commit mesajları ile kayıt altına alınmış ve proje geçmişinin takip edilebilir olması sağlanmıştır. Ayrıca doğrudan ana koda müdahale etmek yerine Pull Request (PR) süreçleri kullanılarak geliştirilen özellikler önce incelenmiş, ardından onaylanarak projeye dahil edilmiştir.

Merge (birleştirme) işlemleri sırasında oluşabilecek çakışmalar (conflict) üzerinde çalışılmış ve bu çakışmaların nasıl çözüleceği uygulamalı olarak öğrenilmiştir. Böylece ekip üyelerinin aynı dosya üzerinde çalışırken oluşabilecek sorunlara karşı çözüm üretme becerileri geliştirilmiştir.

Performans açısından sistemin daha verimli çalışması için cache mekanizması uygulanmıştır. Sık değişmeyen verilerin (örneğin ders listesi gibi) sürekli veritabanından çekilmesi yerine önbellekte saklanması sağlanarak sistemin hızlandırılması hedeflenmiştir. Veri güncellendiğinde cache’in temizlenmesi ve yeniden oluşturulması işlemleri uygulanarak veri tutarlılığı korunmuştur.

Ekip çalışması kapsamında ortak kod yazım standartları belirlenmiş ve herkesin bu standartlara uygun kod yazması sağlanmıştır. Proje yapısı modüler hale getirilerek Controller, Model ve View katmanlarına ayrılmış ve ekip üyelerinin farklı modüller üzerinde paralel çalışabilmesi mümkün hale getirilmiştir. Ayrıca yapılan çalışmalar Markdown formatında dökümante edilerek proje için kalıcı bir bilgi kaynağı oluşturulmuştur.

**Not:** Bu süreçler, Stajyer Takip Programı projesi üzerinden ekip içinde görev dağılımı yapılarak uygulanmıştır. Her ekip üyesi kendi sorumlu olduğu modül üzerinde çalışmış, yapılan geliştirmeler Pull Request (PR) kontrolünden geçtikten sonra proje yöneticisi tarafından ana projeye dahil edilmiştir.

---

## Kullanılan Uygulamalar
• Laravel  
• Visual Studio Code  
• Git ve GitHub  
• SQLite  
. Herd.

---

## Karşılaşılan Sorunlar ve Çözümler

**Hata:** Tarih verilerinin düzenleme ekranında boş gelmesi  
**Çözüm:** Carbon kütüphanesi kullanılarak tarih formatı HTML5 input formatına (Y-m-d) uygun hale getirilmiştir.

**Hata:** Merge sırasında dosya çakışmaları (conflict)  
**Çözüm:** Git conflict çözme yöntemleri öğrenilmiş ve manuel düzenleme ile sorun giderilmiştir.

---

## Kazanımlar
Bu hafta yapılan çalışmalar sonucunda yazılım geliştirme sürecinin yalnızca kod yazmaktan ibaret olmadığı, aynı zamanda ekip çalışması, versiyon kontrolü ve performans optimizasyonu gibi önemli unsurları da içerdiği anlaşılmıştır.

Git kullanımı sayesinde proje üzerindeki değişikliklerin düzenli bir şekilde yönetilmesi, Pull Request süreçleri ile kod kalitesinin artırılması ve ekip içi koordinasyonun sağlanması öğrenilmiştir. Ayrıca cache mekanizması sayesinde uygulama performansının nasıl artırılabileceği ve veri tutarlılığının nasıl korunacağı kavranmıştır.

Bunun yanında modüler yazılım geliştirme yaklaşımı sayesinde projelerin daha düzenli, okunabilir ve sürdürülebilir hale getirilebileceği görülmüştür. Yapılan çalışmalar sırasında farklı kaynaklar ve yapay zeka destekli araçlardan yararlanılarak konular pekiştirilmiştir.
