<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<html>
<head>
    <?php $view['assets']->outputHeadDeclarations(); ?>
    <style type="text/css">
    /* BUILDER CSS */
    div[data-slot-handle] {
        cursor: move!important;
        bottom: -5px;
        content: '';
        left: -15px;
        margin: 0;
        padding: 0;
        position: absolute;
        right: -15px;
        top: -5px;
        z-index: -1;
        border: 1px solid blue;
    }

    div[data-slot] {
        position: relative;
        z-index: 5;
    }

    .slot-placeholder {
        border: 1px solid red;
        margin: 20px 0;
    }

    body {
        overflow: auto;
    }


    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #ff6f6f;
      font-weight: bold;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .mini-block-container {
      padding: 30px 50px;
      width: 500px;
    }

    .mini-block {
      background-color: #ffffff;
      width: 498px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      padding: 45px 75px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-img {
      width: 480px;
      height: 1px !important;
    }

    .force-width-full {
      width: 600px;
      height: 1px !important;
    }

    .user-img img {
      width: 130px;
      border-radius: 5px;
      border: 1px solid #cccccc;
    }

    .user-img {
      text-align: center;
      border-radius: 100px;
      color: #ff6f6f;
      font-weight: 700;
    }

    .user-msg {
      padding: 10px 0;
      font-size: 14px;
      text-align: center;
      font-style: italic;
    }

    .mini-img {
      padding: 5px;
      width: 140px;
    }

    .mini-img img {
      border-radius: 5px;
      width: 140px;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .mini-imgs {
      padding: 25px 0 30px;
    }
  </style>

  <style type="text/css" media="screen">
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type="text/css" media="screen">
    @media screen {
      /* Thanks Outlook 2013! */
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="container-for-gmail-android"] {
        min-width: 290px !important;
        width: 100% !important;
      }

      table[class="w320"] {
        width: 320px !important;
      }

      img[class="force-width-gmail"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      td[class*="mobile-header-padding-left"] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*="mobile-header-padding-right"] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class="mobile-block"] {
        display: block !important;
      }

      td[class="mini-img"],
      td[class="mini-img"] img{
        width: 150px !important;
      }

      td[class="header-lg"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class="header-md"] {
        font-size: 18px !important;
        padding-bottom: 5px !important;
      }

      td[class="content-padding"] {
        padding: 5px 0 30px !important;
      }

      div[class="button"] {
        padding: 5px !important;
      }

      td[class*="free-text"] {
        padding: 10px 18px 30px !important;
      }

      img[class="force-width-img"],
      img[class="force-width-full"] {
        display: none !important;
      }

      td[class="info-block"] {
        display: block !important;
        width: 280px !important;
        padding-bottom: 40px !important;
      }

      td[class="info-img"],
      img[class="info-img"] {
        width: 278px !important;
      }

      td[class="mini-block-container"] {
        padding: 8px 20px !important;
        width: 280px !important;
      }

      td[class="mini-block"] {
        padding: 20px !important;
      }

      div[class="user-img"] {
        display: block !important;
        text-align: center !important;
        width: 100% !important;
        padding-bottom: 10px;
      }

      div[class="user-msg"] {
        display: block !important;
        padding-bottom: 20px;
      }
    }
  </style>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%">
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg" data-slot-container>
                <div data-slot="text">
                    You've received an invitation!
                </div>
            </td>
          </tr>
          <tr>
            <td class="free-text" data-slot-container>
                <div data-slot="text">
                    <span><a href="">@JaneDoe</a></span> has invited you to join Awesome inc!
                </div>
            </td>
          </tr>
          <tr>
            <td class="mini-block-container">
              <table cellspacing="0" cellpadding="0" width="100%"  style="border-collapse:separate !important;">
                <tr>
                  <td class="mini-block" data-slot-container>
                        <div class="user-img" data-slot="text">
                            <a href=""><img class="user-img" src="http://s3.amazonaws.com/swu-filepicker/Ei7o4zRgT561k4rLfzTz_profile_pic.jpg" alt="user img" /></a>
                            <br /><a href="">@JaneDoe</a>
                        </div>
                        <div class="user-msg" data-slot="text">
                            "Hey Bob,
                            here's your invite! Come check out my profile page when you have a chance. You'll love it!"
                        </div>
                        <div class="button" data-slot="button">
                          <div><!--[if mso]>
                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#ff6f6f">
                              <w:anchorlock/>
                              <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">Sign Up</center>
                            </v:roundrect>
                          <![endif]--><a href="http://"
                          style="background-color:#ff6f6f;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">Sign Up</a></div>
                        </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
      <center>
        <table cellpadding="0" cellspacing="0" width="600" class="w320">
          <tr>
            <td class="header-md" data-slot-container>
            <div data-slot="text">
              Come check us out!
              </div>
            </td>
          </tr>
          <tr>
            <td class="mini-imgs">
              <table cellpadding="0" cellspacing="0" width="0"  style="border-collapse:separate !important;">
                <tr>
                  <td class="mobile-block">
                    <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                      <tr>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                              <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/u3EYVdcIQo6dZiKefuLu_bracelet.jpg" alt="product" /></a>
                            </div>
                        </td>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                              <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/yyN7crRfTTW6l8fO0S0S_hat.jpg" alt="product" /></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                          <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/DXWZ4PzwQUGI0wQoABDt_jacket.jpg" alt="product" /></a>
                          </div>
                          </td>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                          <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/RPezUIwPRv8pjatAAH1E_item_images_19.jpg" alt="product" /></a>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="mobile-block">
                    <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                      <tr>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                          <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/9wRy50HQTg2CTyZA5Ozi_item_images_16.jpg" alt="product" /></a>
                          </div>
                          </td>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                          <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/RPezUIwPRv8pjatAAH1E_item_images_19.jpg" alt="product" /></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                          <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/DXWZ4PzwQUGI0wQoABDt_jacket.jpg" alt="product" /></a>
                          </div>
                          </td>
                        <td class="mini-img" data-slot-container>
                            <div data-slot="image">
                          <a href=""><img src="http://s3.amazonaws.com/swu-filepicker/u3EYVdcIQo6dZiKefuLu_bracelet.jpg" alt="product" /></a>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td style="padding: 25px 0 25px" data-slot-container>
            <div data-slot="text">
              <strong>Awesome Inc</strong><br />
              1234 Awesome St <br />
              Wonderland <br /><br />
              </div>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</body>
</html>