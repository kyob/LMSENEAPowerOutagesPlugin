<?php

/**
 * LMSENEAPowerOutagesPlugin
 * 
 * @author Łukasz Kopiszka <lukasz@alfa-system.pl>
 */
class LMSENEAPowerOutagesPlugin extends LMSPlugin
{
    const PLUGIN_NAME = 'LMS ENEA Power Outages Plugin';
    const PLUGIN_DESCRIPTION = 'Shows power outages in areas served by ENEA.';
    const PLUGIN_AUTHOR = 'Łukasz Kopiszka &lt;lukasz@alfa-system.pl&gt;';
    const PLUGIN_DIRECTORY_NAME = 'LMSENEAPowerOutagesPlugin';

    public function registerHandlers()
    {
        $this->handlers = array(
            'menu_initialized' => array(
                'class' => 'ENEAPowerOutagesHandler',
                'method' => 'menuENEAPowerOutages'
            ),
            'smarty_initialized' => array(
                'class' => 'ENEAPowerOutagesHandler',
                'method' => 'smartyENEAPowerOutages'
            ),
            'modules_dir_initialized' => array(
                'class' => 'ENEAPowerOutagesHandler',
                'method' => 'modulesDirENEAPowerOutages'
            ),
            'welcome_before_module_display' => array(
                'class' => 'ENEAPowerOutagesHandler',
                'method' => 'welcomeENEAPowerOutages'
            )
        );
    }
}
