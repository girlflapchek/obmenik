<?php

require '../assets/php/db.php';

$order = R::findOne('orders', 'oid = ?', [$_GET['id']]);
$telegram = R::findOne('telegram', 1);

if (!$order)
    header('Location: /ru');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneChange</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/libs/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/css/libs/animate.min.css">
    <link rel="stylesheet" href="../assets/css/libs/fonts.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
</head>

<body>

    <div class="wrapper">
        <div class="preloader">
            <div class="preloader__circle"></div>
        </div>
        <header class="header wow animate__fadeInDown">
            <div class="container header__container">
                <div class="header__body">
                    <a class="header__logo header__logo-hide" href="../ru/">
                        <img src="../assets/img/logo.png" alt="logo">
                    </a>
                    <div class="header__hide">
                        <a class="header__logo" href="../ru/">
                            <img src="../assets/img/logo.png" alt="logo">
                        </a>
                        <nav class="header__nav">
                            <ul class="header__list">
                                <li class="header__item">
                                    <a class="header__link" href="../#about">О нас</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="../#exchange">Обмен</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="../#how-exchange">Как обменять</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="../#transactions">Транзакции</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="../#support">Поддержка</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__wrapper">
                            <div class="header__lang">
                                <div class="header__lang-lang">
                                    <a class="header__lang-wrapper" href="../ru/">
                                        <img src="../assets/img/header/lang/ru.svg" alt="ru">
                                        <div class="header__lang-text">
                                            Ru
                                        </div>
                                    </a>
                                    <a class="header__lang-wrapper header__lang-dropdown" href="../en/">
                                        <img src="../assets/img/header/lang/ua.svg" alt="ua">
                                        <div class="header__lang-text">
                                            Eng
                                        </div>
                                    </a>
                                </div>
                                <img class="header__lang-arrow" src="../assets/img/header/lang/arrow.svg" alt="arrow">
                            </div>
                            <a class="header__btn" href="../#exchange">
                                Обменять
                            </a>
                        </div>
                    </div>
                    <div class="header__burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="header__burger-content">
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <a class="header__link" href="../#about">О нас</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="../#exchange">Обмен</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="../#how-exchange">Как обменять</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="../#transactions">Транзакции</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="../#support">Поддержка</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__wrapper">
                        <div class="header__lang">
                            <div class="header__lang-lang">
                                <a class="header__lang-wrapper" href="../ru/">
                                    <img src="../assets/img/header/lang/ru.svg" alt="ru">
                                    <div class="header__lang-text">
                                        Ru
                                    </div>
                                </a>
                                <a class="header__lang-wrapper header__lang-dropdown" href="../en/">
                                    <img src="../assets/img/header/lang/ua.svg" alt="ua">
                                    <div class="header__lang-text">
                                        Eng
                                    </div>
                                </a>
                            </div>
                            <img class="header__lang-arrow" src="../assets/img/header/lang/arrow.svg" alt="arrow">
                        </div>
                        <a class="header__btn" href="../#exchange">
                            Обменять
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <section class="transaction">
                <div class="container transaction__container wow animate__fadeInUp">
                    <h1 class="transaction__title">
                        Обмен <br>
                        <?= $order->exchange; ?>
                    </h1>
                    <div class="transaction__order">
                        Номер заявки <span><?= $order->oid; ?></span>
                    </div>
                    <?php if ($order->step == 1) : ?>
                        <div class="transaction-1">
                            <div class="transaction__block">
                                <div class="transaction__block-title">
                                    Оплатите на данный кошелек
                                </div>
                                <div class="transaction__block-wrapper">
                                    <div class="transaction__block-text">
                                        Вы отправляете: <br><?= $order->fromCoinVal . " " . $order->fromCoin; ?>
                                    </div>
                                    <div class="transaction__block-text">
                                        Вы получаете: <?= $order->toCoinVal . " " . $order->toCoin; ?>
                                    </div>
                                </div>
                                <div class="transaction__block-input-wrapper">
                                    <div class="transaction__block-input-img">
                                        <img src="../assets/img/transaction/coin.svg" alt="coin">
                                    </div>
                                    <input class="transaction__block-input" type="text" value="<?= $order->fromCoinVal . " " . $order->fromCoin; ?>" data-value="<?= $order->fromCoinVal ?>" readonly>
                                    <div class="transaction__block-input-copy transaction__block-input-copy-val">
                                        Копировать
                                    </div>
                                </div>
                                <div class="transaction__block-input-wrapper">
                                    <div class="transaction__block-input-img">
                                        <img src="../assets/img/transaction/wallet.svg" alt="wallet">
                                    </div>
                                    <input class="transaction__block-input" type="text" value="Адрес кошелька" data-value="<?= $order->toWallet; ?>" readonly>
                                    <div class="transaction__block-input-copy transaction__block-input-copy-wallet">
                                        Копировать
                                    </div>
                                </div>
                                <a class="transaction__block-btn" href="#">Подтвердить</a>
                            </div>
                            <div class="transaction__block">
                                <div class="transaction__block-title">
                                    Оплатите, отсканировав QR-код!
                                </div>
                                <div class="transaction__block-qr">
                                    <img src="https://quickchart.io/qr?text=<?= $order->toWallet; ?>&amp;choe=UTF-8" alt="QR code">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($order->step == 2) : ?>
                        <div class="transaction-2">
                            <div class="transaction__status transaction__status_green">
                                УСПЕШНО
                            </div>
                            <div class="transaction__status-text">
                                Ваши средства успешно получены и обменены!
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($order->step == 3) : ?>
                        <div class="transaction-3">
                            <div class="transaction__status transaction__status_red">
                                ОПЛАТА НЕ НАЙДЕНА
                            </div>
                            <div class="transaction__status-text">
                                Мы не нашли ваш платеж, пожалуйста, перепроверьте свой кошелек!
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($order->step == 4) : ?>
                        <div class="transaction-4">
                            <div class="transaction__status transaction__status_blue">
                                ЖДЕМ ПОДТВЕРЖДЕНИЙ
                            </div>
                            <div class="transaction__status-text">
                                Ждем хотя бы одно подтверждение!
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="transaction__btns">
                        <a class="transaction__btn" href="/ru/">
                            <img src="../assets/img/transaction/home.svg" alt="home">
                            Вернуться
                        </a>
                        <?php if ($order->step == 3) : ?>
                            <a class="transaction__btn transaction__btn-search" href="#">
                                <img src="../assets/img/transaction/search.svg" alt="search">
                                Поиск
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="container footer__container">
                <div class="footer__start">
                    <img class="footer__logo" src="../assets/img/footer/logo.png" alt="logo">
                    <div class="footer__text">
                        Все права защищены © 2022
                    </div>
                </div>
                <div class="footer__end">
                    <a class="footer__link" href="https://t.me/<?= $telegram->telegram; ?>">
                        <img src="../assets/img/footer/tg.svg" alt="tg">
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="../assets/js/libs/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/libs/wow.min.js"></script>
    <script src="../assets/js/transaction.js"></script>

</body>

</html>