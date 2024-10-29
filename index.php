<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Megafon Киоск</title>
</head>

<body class="flex flex-col justify-between">
    <div id="bg" class="fixed t-0 l-0 w-100 h-100 mainImg"></div>
    <?php
    require 'vendor/autoload.php';
   // require_once 'src/SvgLoader.php';
   // require_once 'src/DatabaseConnection.php';
    
    use CustomPage\SvgLoader;
    use CustomPage\DatabaseConnection;
    
    $db = DatabaseConnection::getInstance()->getConnection();

?>
    <header>
        <div class="flex justify-between  pt-1 pb-1 container">
            <div class="logoMega">
                <?= SvgLoader::getSvg("logo_megafon.php"); ?>
            </div>
            <div class="age">
                <?= SvgLoader::getSvg("logo_age.php"); ?>
            </div>
        </div>
    </header>
    <main>
        <div class="container h-90">
            <div class="flex mt-2 mb-1 justify-between permis">
                <div>
                    <?= SvgLoader::getSvg("logo_720hd.php"); ?>
                </div>
                <div>
                    <?= SvgLoader::getSvg("logo_time.php"); ?>
                </div>
            </div>
            <div class="flex flex-col justify-center h-100">

                <div class="flex flex-col align-center">

                    <div class="mainText mb-1 familyInter">
                        Присоединяйтесь к <b>Мобильному Киоску</b> <br> и получайте доступ к огромному архиву журналов
                    </div>
                    <div class="containerBtn mb-05">
                        <a class="btn flex align-center justify-center">
                            <?= SvgLoader::getSvg("logo_play.php"); ?>
                            <span class=" familyInter">Смотреть</span>
                        </a>
                    </div>
                    <div class="price mb-2">50₽ в день </div>
                    <div class="flex justify-center align-center mb-1">
                        <a class="cancel">
                            Отмена
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="flex flex-col align-center justify-center pb-1">

        <div class="containerV2 mb-1">
            <div class="loaderUp"></div>
            <div class="loaderDown flex align-center">
                <div class="flex  align-center justify-between playerBlock">
                    <?= SvgLoader::getSvg("logo_playerblockLeft.php"); ?>
                </div>
                <div class="flex align-center playerBlock">
                    <?php  echo SvgLoader::getSvg("logo_playerblockRight.php"); ?>
                </div>

            </div>
        </div>
        <div class="container ">
            <span class="familyRoboto">Нажимая на кнопку «Смотреть», Вы соглашаетесь <br>
                <a href="https://rumf.kiosk-mobile.ru/rules">Правилами предоставления услуги</a> | <a
                    href="http://moy-m-portal.ru/moi_podpiski/" class="textUrl footer-text text-white">Личный
                    кабинет</a></span>
        </div>
    </footer>
    <?php  include './components/custom_nav/btnNav.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"
        charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"
        charset="utf-8"></script>
    <script type="module" src="./js/evol-colorpicker.js"></script>
    <script type="module" src="./js/jscolor.js"></script>
    <script type="module" src="./js/main.js" defer></script>
    <script>
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    /*
            window.addEventListener('loaded', () => {
            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            })
    */
    window.addEventListener("orientationchange", function() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }, false);
    // We listen to the resize event
    window.addEventListener('resize', () => {
        // We execute the same script as before
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

    function update(picker, selector) {
        $(`.${selector}`).colorpicker({
            color: `${picker}`,
        });
        document.documentElement.style.setProperty(selector, picker);
    }

    function saveFont(selector, value, units) {
        document.documentElement.style.setProperty(selector, value + units);
    }

    function sendGetRequest() {
        const url = window.location.href + 'src/RequestHandler.php?name=Ann';

        fetch(url, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.text())
            .then(data => {
                console.log('GET Response:', data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
    sendGetRequest();
    </script>


</body>

</html>