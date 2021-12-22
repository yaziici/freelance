**İletişim : yaziici.ua@gmail.com**

# Projenin Kurulumu
## Dosyaları Çıkartma
Rar ‘la sıkıştırılmış dosyayı masaüstünde uygun bir klasöre çıkartıyoruz
### Veritabanı ve Sunucu Programı
PHP ve SQL dosyamısı çalıştırmak için WampServer programını işletim sistemine kuruyoruz.
### Veritabanı Düzenleme İşlemleri
- WampServer programı kurulduktan sonra http://localhost/phpmyadmin/ adresine giriyoruz.
- Kullanıcı Adı : root
- Şifre : (boş) olarak giriş yaptıktan sonra 
- “freelance” adında tablo oluşturuyoruz. Karşılaştırmayı “utf8_turkish_ci” olarak  ayarladıktan sonra tabloyu oluşturuyoruz.
- Tabloyu oluşturduktan sonra tabloyu giriş “İçe Aktar” ı seçip SQL dosyasından çıkan “freelance.sql” isimli dosyayı seçip içeri aktarıyoruz.
### Veritabanı Bağlantı İşlemleri
- İndirdiğimiz dosyanın içinde bulunan “\php\bağlan.php” dosyasını açıyoruz
- “$con = mysqli_connect("hostname "," username "," password "," database ");”  olacak şekilde bilgileri yazıyoruz. 
- Wamp kurulduktan sonra eğer default ayardaysak projenin içinki gibi; “$con = mysqli_connect("localhost","root","","freelance");” kodu işimizi görecektir.
### Localhost’a Taşıma
- İndirdiğimiz proje RAR’ının içindeki alsat klasörünü “C:\wamp64\www” dizininin  içine taşıyoruz.
- Daha sonra tarayıcıyı açıp http://localhost/freelance/ adresinden internet sitesine hatasız erişim sağlayabiliriz.
## Proje Tanıtımı
### Giriş sayfasında 3 bölüm vardır;
1. Kayıt / Giriş: Sitemizde yeni bir üyelik açabilir veya mevcut üyeliğinizle giriş yapabilirsiniz.
2. Kategoriler: Sitedeki ilan kategorileri ve açıklamaları eklenmiştir.
3. Son Eklenen İlanlar: Son eklenen 5 Adet ilanın sergilendiği bölüm.
4. Üst kısımda “Üye Girişi” ve “Üye Ol” kısımlarından giriş yapılabilir veya kayıt olabilir.
5. Üye ol kısmından üye olduktan sonra üyeliğiniz yöneticinin paneline düşecektir. Yönetici üyeliğinizi yetkilendirmediği sürece, ilanlara teklif veremeyeceksiniz. Yönetici onayladıktan sonra üyeliğiniz “Yetkili Üyelik” statüsüne girecek ve artık “Ücretsiz İlan Ver” butonu aktif hale gelecektir.
6. Daha sonra (Yönetici onay verdikten sonra) teklif verip, iş almayı deneyebilirsiniz.
## Proje Kullanım Kılavuzu
Panelde tanımlı 3 adet üyelik mevcuttur;
- (İşveren): Kullanıcı adı: isveren1@gmail.com & Şifre: 123456789
-	(Yetkili Çalışan): Kullanıcı adı: calisan1@gmail.com & Şifre: 123456789
-	(Yetkisiz Çalışan): Kullanıcı adı: calisan2@gmail.com & Şifre: 123456789

### Yönetici paneline erişmek için http://localhost/freelance/freeadmin/ adresine giriyoruz.
- Kullanıcı Adı: admin@nkufreelance.com & Şifre: admin
