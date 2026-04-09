 # 1. Hafta: Docker Altyapısı ve Kurulum Çalışmaları

Bu hafta, geliştirme ortamlarının standartlaştırılması ve taşınabilir hale getirilmesi amacıyla Docker altyapısı üzerine çalışmalar gerçekleştirilmiştir. Çalışmalara başlamadan önce konteyner tabanlı mimari hakkında genel bir ön inceleme yapılmış ve Docker’ın yazılım geliştirme süreçlerindeki rolü incelenmiştir.

## Yapılan Çalışmalar:

- Docker Desktop uygulamasının kurulumu ve temel konfigürasyon işlemleri tamamlanmıştır.
- `ubuntu:22.04` imajı kullanılarak izole bir Docker konteyneri oluşturulmuş ve konteyner içerisinde Linux tabanlı terminal komutları ile dosya sistemi üzerinde çeşitli işlemler yapılmıştır.
- Konteyner ortamında `echo` komutu kullanılarak **merdo.php** adlı bir dosya oluşturulmuş, `cat` komutu ile dosya içeriği kontrol edilerek işlemin doğruluğu test edilmiştir.
- Cihazlar arasında güvenli ve özel bir ağ bağlantısı sağlamak amacıyla **Tailscale** kurulumu gerçekleştirilmiş ve Mesh VPN yapısı test edilmiştir.
- Docker altyapısının genel durumu ve çalışan konteynerler ilgili Docker komutları kullanılarak kontrol edilmiştir.

## Öğrenilen Bilgiler:

- Docker konteyner mantığı ve temel çalışma prensibi  
- Linux terminal komutları ile dosya sistemi yönetimi  
- Docker imaj ve konteyner kavramları  
- Konteynerlerin izole çalışma yapısı  
- Tailscale ile güvenli ağ (Mesh VPN) oluşturma  

## Kullanılan Teknolojiler ve Araçlar:

- Docker  
- Ubuntu 22.04  
- Linux Terminal Komutları  
- Tailscale
