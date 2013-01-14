<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
        $view->headMeta()->setCharset('UTF-8');
    }

    protected function _initJquery()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        ZendX_JQuery::enableView($view);
        $view->jQuery()->setVersion('1.9.0')->enable();
        $view->addScriptPath(APPLICATION_PATH . '/views/scripts');
    }


}

// {{{ Modeline
// vim:set ts=4 sts=4 sw=4 expandtab:
// vim600: fdm=marker
// }}}
