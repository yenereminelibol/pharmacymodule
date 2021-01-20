# pharmacymodule

pharmacy-module

Eczane ve depo eşleştirme modülü
Yener Emin Elibol 180202054
# Pharmacy Module Nedir

Pharmacy modül giriş yapan eczane sahipleri ve depo firmalarının; **eczaneler** için eczane adları, bulundukları şehir, çalışan sayıları, **depo firmaları** için firma adları, bulundukları sehir, sahip oldukları ilaç miktarı, çalışan sayılarıyla sisteme kayıt olduktan sonra eczaneler ve depolar arasında bağ kurabilirsiniz.


## Vagrant İle Kurulum

Modülün kurulumu **vagrant** ve **yii2-advanced** template'i için anlatılacaktır. Blog modülünü kullanmak için ilk olarak vagrant aracılığıyla bir makine kurulmalı ve bir domain verilmelidir. Vagrant ile kurulmuş makinaya ssh ile bağlanılmalıdır. Linux makinaya girdikten sonrasında makinamızı kurarken verdiğimiz domaine ait klasörün bulunduğu konuma gitmemiz gerekmektedir.

```
cd /var/www/...

```

**ls** komutunu kullanıldığında sitemize ait klasörün orda olduğunu görülmektedir. ilk olarak yii2-advanced proje şablonunu kurmamız gerekir. Sitemize ait klasörün boş olduğundan emin olun ve packagist aracılığı ile yii2-advanced proje şablonunu indirin.

## Kurulum
Modülü kullanmak için ilk olarak **Yii2** projesinin bilgisayarınıza kurulu olması gerekmektedir. Yii2 projenizin bulunduğu dizine gidip **"composer"** aracıyla modülü gerekli paket olarak ekleyin. Bunun için aşağıdaki komutu kullanın.

```
composer create-project yiisoft/yii2-app-advanced ['Sitenizin Adı']

```

yii2-advanced proje şablonu kurulduktan sonra klasörün içine girin.

```
cd ['Sitenizin Adı']

```

Pharmacy modülünü kullanmak için ilk önce composer aracılığı ile **packagist**ten sitenizin bulunduğu yere dosyaları indirmeniz gerekmektedir.
```
composer require --prefer-dist yenereminelibol/pharmacymodule "dev-main"

```

Bu komutu proje dosyalarının bulunduğu yerde terminalde çalıştırılması gerekmektedir. Packagist komutunu çalıştırdıktan sonra vendor altında yenereminelibol klasörü içinde modüle ait klasör oluşmaktadır.

Modülümüz için configration ayarları yapmamız gerekmektedir :

1.  İlk olarak proje klasörü içindeyken /backend/config/main.php dosyasına veya /frontend/config/main.php girerek aşağıda bulunan kodları eklememiz gerekmektedir.

```
// Eğer ki main.php dosyamızın içindeyken 'modules' başlığı altında bir ayar satırı bulunmaktaysa 
// aşağıda modules'in içinde bulunan kodları taşımamız yeterli olucaktır.

'modules' => [
    'pharmacymodule' =>[
        'class' => 'yenereminelibol\pharmacymodule\Module'
    ]
],

```

2.  Projenizin ana dizinine giderek aşağıda bulunan kodları çalıştırmamız gerekmektedir.

```
php yii migrate/up --migrationPath=@vendor/yenereminelibol/pharmacymodule/src/migrations

```

Artık migration işlemimiz gerçekleştirilmiştir. Modülümüz çalışır hale gelmiştir.

Modülü test etmek için tarayıcınıza giderek url bölümüne aşağıda bulunan adresi girmeniz gerekmektedir

```
// main.php dosyasını backend veya frontend dizinlerinden hangisinde ayarladıysanız
// o linke ait url adresini kopyalamanız gerekmektedir.

http://pharmacymodule/backend/web/index.php?r=pharmacymodule/home/index

```
# Modül Nasıl Kullanılır

**Modül tarayıcıda url üstünden çalıştırıldığı zaman ekrana 3 adet buton gelmektedir.**
![butons](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/mod%C3%BClhomeekran.png?raw=true)
> 1. Eczane Ekle
> 2. Depo Ekle
 >3. Depo Seç

## Eczane Ekle
Bu buton üzerinden tabloda var olan eczaneleri görebilirsiniz. Eczane eklemek için **create eczaneler** butonuna bastıktan sonra Eczane Ad, Eczane Sehir, Eczane Calisan Sayisi alanlarına girişleri yaparak yeni eczane girişi yapabilirsiniz.
 ![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/eczanlerBa%C5%9Fland%C4%B1%C3%A7Ekran%C4%B1.PNG?raw=true)

**Create Eczanelere basıldıktan sonra**
![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/createEczaneler.PNG?raw=true)


## Depo Ekle
Bu buton üzerinden tabloda var olan depoları görebilirsiniz. Eczane eklemek için **create depolar** butonuna bastıktan sonra Depo Ad, Depo Sehir, Depo Ilac Miktar, Depo Calisan Sayisi alanlarına girişleri yaparak yeni depo girişi yapabilirsiniz. 
![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/depolarBa%C5%9Flang%C4%B1%C3%A7.PNG?raw=true)

**Create Depolara basıldıktan sonra**
![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/createDepolar.PNG?raw=true)

## Depo Seç
Bu buton üzerinden tabloda var olan eczane ve depo bağlantılarını görebilirsiniz. Yeni bağlantı eklemek için **create deposecme** butonuna bastıktan sonra Depo Ad, Eczane Ad alanlarına girişleri yaparak yeni bağlantı girişi yapabilirsiniz. 

**Depo Ad ve Eczane Ad sadece önceden eklenmiş eczane ve depolar için geçerlidir alanlar boş geçilemez** 
![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/depoSe%C3%A7me.PNG?raw=true)

**Create Deposecme basıldıktan sonra**
![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/createDepoSecme.PNG?raw=true)


## Return Main Menu
Return Main Menu butonu ana ekrana dönmeyi sağlar

# Modül Projesi ER Diyagramı 
Modül içerisinde bulunan migration dosyasında modül de kullanılacak  deposecme,  depolar, eczaneleradında 3 adet tablo oluşturulmuştur. Tablolar arasında foreign key ile ilişki kurulmuştur.
![enter image description here](https://github.com/yenereminelibol/pharmacymodule/blob/main/readmeImages/proje%20tablo%20ba%C4%9Flant%C4%B1lar%C4%B1.PNG?raw=true)








 



