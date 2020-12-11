<?php

class ENEAPowerOutagesHandler
{
    public function menuENEAPowerOutages(array $hook_data = array())
    {
        $submenus = array(
            array(
                'name' => trans('ENEA power outages'),
                'link' => '?m=eneapoweroutages',
                'tip' => trans('ENEA power outages'),
                'prio' => 150,
            ),
        );
        $hook_data['admin']['submenu'] = array_merge($hook_data['admin']['submenu'], $submenus);
        return $hook_data;
    }

    public function smartyENEAPowerOutages(Smarty $hook_data)
    {
        $template_dirs = $hook_data->getTemplateDir();
        $plugin_templates = PLUGINS_DIR . DIRECTORY_SEPARATOR . LMSENEAPowerOutagesPlugin::PLUGIN_DIRECTORY_NAME . DIRECTORY_SEPARATOR . 'templates';
        array_unshift($template_dirs, $plugin_templates);
        $hook_data->setTemplateDir($template_dirs);
        return $hook_data;
    }

    public function modulesDirENEAPowerOutages(array $hook_data = array())
    {
        $plugin_modules = PLUGINS_DIR . DIRECTORY_SEPARATOR . LMSENEAPowerOutagesPlugin::PLUGIN_DIRECTORY_NAME . DIRECTORY_SEPARATOR . 'modules';
        array_unshift($hook_data, $plugin_modules);
        return $hook_data;
    }

    public function welcomeENEAPowerOutages(array $hook_data = array())
    {
        // uncomment if you have current LMS version
        $SMARTY = LMSSmarty::getInstance();

        // uncomment if you have old LMS version
        //$SMARTY = $hook_data['smarty'];

        $feed_url = ConfigHelper::getConfig('enea.feed_url', 'https://www.wylaczenia-eneaoperator.pl/rss/rss_unpl_7.xml');
        $feed = implode(file($feed_url));
        $xml = simplexml_load_string($feed);
        $json = json_encode($xml);

        $SMARTY->assign('enea_power_outages', json_decode($json, true));
        return $hook_data;
    }
}
