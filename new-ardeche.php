<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MonModule extends Module
{
    public function __construct()
    {
        $this->name = 'monmodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Ardèche MOKOKO';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

        parent::__construct();

        $this->displayName = $this->l('Ard-Newsletter Module');
        $this->description = $this->l('Module personnalisé pour gérer la newsletter.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayFooter');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayFooter($params)
    {
        $this->context->smarty->assign(array(
            'module_dir' => $this->_path
        ));

        return $this->display(__FILE__, 'views/templates/hook/newsletter_form.tpl');
    }
}
