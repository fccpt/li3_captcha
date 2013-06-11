slide-captcha
=============

lithium slide-captcha

# Captcha plugin for lithium framework

## Installation

Include the library in in your `/app/config/bootstrap/libraries.php`

        Libraries::add('li3_captcha');

## Configuration

Create a controller and add the foollowing code:
        
        //at the top of the controller file add:        
        use li3_captcha\controllers\CaptchaController;
        
        //inside your public function add:
        $captcha = new CaptchaController(array('request' => $this->request));

        if ($this->request->data && $captcha->_checkCaptcha()){
            //logic here
        }

At your view add the following code where you want the capctha to appear (inside the form):

        <?= $this->captcha->show();?>
        <?=$this->captcha->init(array('txtLock'=>'Locked Text','txtUnlock'=>'Unlocked Text'));?>
