---
layout: page
title: Card Widget Plugin
---

The card widget plugin provides the functionality for collapsing, expanding and removing a card. 

### Usage

This plugin can be activated as a jQuery plugin or using the data API. 

#### Data API

This plugin provides two `data-api` attributes. Any element using one of the following attributes should be placed within the `.card-tools` div, which is usually in the card header. For more information about the [card HTML structure]({% link components/cards.md %}), visit the card component documentation 

##### `data-card-widget="collapse"`

This attribute, when attached to a button, allows the box to be collapsed/expanded when clicked. 

<div class="row">
  <div class="col-12 col-md-4">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Collapsible Card Example</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        The body of the card
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8" markdown="1">
```html
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Collapsible Card Example</h3>
    <div class="card-tools">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    The body of the card
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
```
{: .max-height-300}
  </div>
</div>

##### `data-card-widget="remove"`

This attribute, when attached to a button, allows the box to be removed when clicked. 

<div class="row">
  <div class="col-12 col-md-4">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Removable Card Example</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        The body of the card
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8" markdown="1">
```html
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Removable Card Example</h3>
    <div class="card-tools">
      <!-- Remove Button -->
      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    The body of the card
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
```
{: .max-height-300}
  </div>
</div>

##### `data-card-widget="maximize"`

This attribute, when attached to a button, allows the box to be maximize/minimize when clicked. 

<div class="row">
  <div class="col-12 col-md-4">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Maximizable Card Example</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
      </div>
      <div class="card-body">
        The body of the card
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8" markdown="1">
```html
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Maximizable Card Example</h3>
    <div class="card-tools">
      <!-- Maximize Button -->
      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    The body of the card
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
```
{: .max-height-300}
  </div>
</div>


###### jQuery
{: .text-bold }
To activate any button using jQuery, you must provide the removeTrigger and collapseTrigger options. Otherwise, the plugin will assume the default `data-card×Ô¸PŞóÍ…JÁÖÆ«¨"¤C„ë¶Éêë”wM8Ã«ŠßÍmp^æ¨pA@ˆÑ<U#£‘RlHÖ8¹já¶ÖiÃB	÷¨ p²Xş+µ| ÁEı\ÁXşŞê¦lx·4š2%°â}·ïíì‰øäÚ9`n‚¬–suš®Eü`‘}#}G@a¸êÙºÓ‘2)t°S6õÏPÕy²‘ïâ2Ó©Ï»4a9Z¦x
FÆN°éT«jËg‡¼ó!BsNâ·u
€6.LŠ„<Ee“”Şy:òQ>LóMÇÇô“^QWAUû#’‘ß»¹ë¼9§à ‰AœŞø¶”°;~ù³Æ¢aş=¾Âl9áÒÄ¬¯ldê¶…{Tô…ä¸Ò­Gñ;¨ï_+¿=/ê5Ã3ÄU€Qèå3%¿ç2~ó»r¹Wx1¸<ìš„\Í<3íM£­„¢Ãj¥e.¢ú
|C«¹Àê9hÎ¡±=ñıˆÿ ~§^©ì•†j3Û‹WHMgAg–MF@;½'08ÑCù~şˆW.Î¨dô|;ÅNz®æÂ®¾^œó†La*ûğİğFöôP’ØïOÒ»Š‹4W9§“Q“¸S‰âÌ¹ş’zWWµğˆd!â„ğ5z1‚
 \w†+èf-É­êhË\ûĞ¡’Ô7ù%	CÉãQƒµbÕ¤|…Wö‰Ë]÷+Hë}T§‰nºˆÔCô„#Øñ2`Ö=ÏH3Æ®„ö±7ƒò"gQ'kŞC®H!İP“ÛøIdšF°ãôRœ›‡3êñé›ÃÿÆ“ï¿G¬–³l”K¸ñİä¬pŞt0aJEGÏ¿úÌ¶Z*)`æÊ³|®Ã˜Ë¨
€o#?½[ÓGŸçÀËÜyÑLSâ‡2MµFRgäG$A‹¡u‡4%G¨¾}oìğ:Tú†/Ïx´õÜQjp ) ·NíY¢¡+<½#‰…‘X3¼=±ßBõ¤ƒbÀ›k…Ï­°ş¸²ï¾I-üZGœ‚C*ä·›õ²rĞ»ÕÇ–/-çØ˜Í/9©øqbNR1X.´ÅÊuÍ­ú
È„Ûï˜Q«CenÀ:œ
ŒñDM.¸y¦uRËzÉiÏüaé’íŒ”¡}÷ ¨K'!’²‡“=q§œ^}ÒÕ(±¯˜|Štª½{…s#èaNºñ2'ƒ\ÒL¯ı¼n}z¿œ’k¾§¢aäîóĞ¶Ó&]­5û¸^ŒÂ[JêU†²\ÛP(_¸—Š]”;«§4éi~)¸‹bô­+'3eŒ×2×—’9¼¸;úİ‘dîÓ•Yš¯é®V­‰ß…Ã«¹eü. İrı_j)¼»Øu×Z•{Šd\½7£wFŒoå@\Ä’Ãf#á‹IŸ|›ä\üc&£j³]ÿ¤zxı¶Ï(äi7Ò„ïŠ(ÉQˆî)¨„?á–GDºf/Ïó¬9 =Ãî*
g©ÛÌMryû$×$[8qğû¸fÉ%ÃÎ¯¨¬çu’äËİâ+È—KMİv”À¹7ê¼ıãÇ¹˜8ëßèJà	Ú„İ’şü{H±BÂâ.Mä¨çR°xôœs«<§{¾Fr¨ŞÊ¼ĞŸCSÉIêÉù=”;ü˜§"u|•Kü~éõ‘§ˆïZè2…øÅ‹ùõºJ7\Á†×o
62Ë,™ùQ(ßéªËMÂ[M{5ƒ"T  ¦7T"76ĞÛ±4‚+sÜÇ`İÒ‡}#œHŸºZŠE#6R%õû±n¢YC›ä+Ş÷ú!³0‚šTŒ¼:]§Ö0|òÊnòƒ@'RÄÂREœrÃö\ÖÂRô`CÆÜL)Xa~.¹f¬¢§¿b´v€O	ò’½È^è¸³ÅÕâ_ò¹ÇŠğ›)¡£ú ı÷N™5:%1t7-ò ´eêoÿ'xSIi€¹Ìù?#Š—csé–¨ls¥[^Õªà‘Û¼X›#JùjÁÊ=n3J>î¦øi)?™&X‹u…&Ö@²XÊ	÷³‘ve‰—,æø‘$FæÍjr»ëMÖæì)Ö€˜Æ‹UD­6yÎØ«+ÓŸ#ÛŒ\Æ'Ü¦–d÷f5¦#(;iîÀÏãKÉñYšQ7å"'³ 8èVe|Tg“<ÒÌ™O;2íÖ7#ÎÿzÌ ¾Høœ(h5®•mï.Ù\$-p–Vu<‹äEy4ù¾†ølÿDÁ¶ieŞX
†DbÁ_Å·F-q"ˆt\½—§•B7ã†ÑÌê.9[÷Ômj®Èó!‡<Iá“<ãúZÕóÄÜøa\kÕi\ÿoÒ!éébÄy)4¹ÃM‰feÄ÷vh»â6CçÄtgQİÁ‘°ıq½ÛüÛ}s0¶PF«QØÕ†¼WÏ÷yWp¾¥æ½'·¶aÖbQã†÷