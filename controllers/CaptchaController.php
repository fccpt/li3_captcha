<?php

namespace li3_captcha\controllers;
use lithium\storage\session;

class CaptchaController extends \lithium\action\Controller {

    public function captcha()
    {
        if ($this->request->is('post')) {
            $aResponse['error'] = false;


            if ($this->request->data['action'] && $this->request->data['qaptcha_key']) {

                Session::write('qaptcha_key', false);

                if (htmlentities($this->request->data['action'], ENT_QUOTES, 'UTF-8') == 'qaptcha') {
                    Session::write('qaptcha_key', $this->request->data['qaptcha_key']);

                    $response = $aResponse;
                } else {
                    $aResponse['error'] = true;
                    $response = $aResponse['error'];
                }
            } else {
                $aResponse['error'] = true;
                $response = $aResponse['error'];
            }
        }
        $this->render(array('json' => $response, 'status' => 200, 'layout' => false));
    }

    public function _checkCaptcha()
    {

        if (Session::read('qaptcha_key') && (Session::read('qaptcha_key'))) {
            $myVar = Session::read('qaptcha_key');
            if (isset($this->request->data['' . $myVar . '']) && $this->request->data['' . $myVar . ''] == '') {
                $return = true;

            } else {

                $return = false;

            }

            Session::delete('qaptcha_key');

            return $return;

        }


    }
}

?>