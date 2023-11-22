<?php

namespace Kanboard\Plugin\TaskRemoveAfterMentionDayAction;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskRemoveAfterMentionDayAction\Action\RemovingTask;

class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new RemovingTask($this->container));
    }

    public function getPluginName()
    {
        return 'Removing Task Action';
    }

    public function getPluginDescription()
    {
        return t('Removing Task at Column after mention days.');
    }

    public function getPluginAuthor()
    {
        return 'Ikhlas Firlana';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/ikhlas-firlana/plugin-example-automatic-action';
    }
}
