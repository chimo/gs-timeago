<?php

if (!defined('GNUSOCIAL')) {
    exit(1);
}

class TimeagoPlugin extends Plugin
{
    const VERSION = '0.0.1';

    function onEndShowScripts($action) {
        $action->script($this->path('js/jquery.timeago.js'));
        $action->script($this->path('js/gs-timeago.js'));

        return true;
    }

    function onPluginVersion(&$versions)
    {
        $versions[] = array('name' => 'Timeago',
                            'version' => self::VERSION,
                            'author' => 'chimo',
                            'homepage' => 'https://github.com/chimo/gs-timeago',
                            'description' =>
                            // TRANS: Plugin description.
                            _m('')); // TODO
        return true;
    }
}

