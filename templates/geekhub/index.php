<?php echo '<?xml version="1.0" encoding="utf-8"?' .'>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{LANG_TAG}" lang="{LANG_TAG}" dir="{LANG_DIR}" >


<jdoc:include type="head" />
<link rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>


<?php $currentMenuId = JSite::getMenu()->getActive()->id ;  ?>

<body

<?php
if ( JURI::current() != JURI::base() ) { echo 'class="inner"'; }
if ( JURI::current() == JURI::base()."contacts.html" ) { echo 'onload="initialize()"'; }
?>

<?php echo $logo;?> <?php if ($this->params->get('sitedescription')) { echo '<div class="site-description">'. htmlspecialchars($this->params->get('sitedescription')) .'</div>'; } ?>
</a>

<div id="wrap">
    <div id="header">

             <h1><a href="/">GeekHub</a></h1>


        <jdoc:include type="modules" name="position-1" style="none" />


        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
            <li class="v"><a href="http://vimeo.com/user8452244">vimeo</a></li>
        </ul>

        <span class="line"></span>

        <class="registration"><jdoc:include type="modules" name="position-0" style="none" />



  </div>
    <div id="content">
        <div class="home">

            <jdoc:include type="modules" name="position-13" style="none" />



            <jdoc:include type="component" />


            <ul class="social_share">
                <li id="vk">
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="sertificates_list">
                    <h4><a href="/certified-professionals.html">Сертифiкованi професiонали</a></h4>
                </li>
                <li>
                    <h4>Наші Спонсори</h4>
                    <ul>
                        <li class="de"><a href="http://povnahata.com">Дім Євангелія</a></li>
                        <li class="moc"><a href="http://masterofcode.com">Masterofcode LTD</a></li>
                        <li class="sergium"><a href="http://sergium.net">SerGium.net</a></li>
                        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
                        <li class="youthog"><a href="http://yothog.com">Youthog.com</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- content -->
    <ul id="footer">
        <li>
            <ul class="nav">
                <li>  <jdoc:include type="modules" name="position-1" style="none" />  </li>
            </ul>
        </li>
        <li>  <jdoc:include type="modules" name="footer" style="none" /></li>
    </ul>
</div>

</body>
</html>
