<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('首页');
        parent::initialize();
    }

    public function indexAction()
    {
        if (!$this->request->isPost()) {
            $this->flash->notice('这是采用 Phalcon PHP 框架开发的一个简单应用程序，请不要像我们提供您的任何个人信息，谢谢！');
        }
    }
}
