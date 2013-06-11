<?php

namespace li3_captcha\extensions\helper;

class Captcha extends \lithium\template\Helper
{
    public function init(array $translateCaptcha)
    {
        return "<script type='text/javascript' src='http://code.jquery.com/ui/1.10.2/jquery-ui.min.js'></script>
                <script type='text/javascript' src='/li3_captcha/js/jquery.ui.touch.js'></script>
                <script type='text/javascript' src='/li3_captcha/js/QapTcha.jquery.js'></script>
                <link rel='stylesheet' type='text/css' href='/li3_captcha/css/QapTcha.jquery.css' />

                <script>
                    $(document).ready(function () {
                        $('.QapTcha').QapTcha({
                            disabledSubmit: true,
                            autoRevert: true,
                            autoSubmit: false,
                            txtLock: '{$translateCaptcha['txtLock']}',
                            txtUnlock: '{$translateCaptcha['txtUnlock']}',
                            PHPfile: '/Captcha/captcha'
                        });
                    });
               </script>";
    }
    public function show(){
       return  '<div class="QapTcha"></div>';
    }
}

?>