<?php
namespace extas\components\plugins\scenarios;

use extas\components\plugins\Plugin;
use extas\interfaces\bots\dispatchers\IBotDispatcher;
use extas\interfaces\extensions\bots\IExtensionTgRequest;
use extas\interfaces\stages\IStageDefineScenario;

class TgMessage extends Plugin implements IStageDefineScenario
{
    /**
     * @param IBotDispatcher|IExtensionTgRequest $dispatcher
     */
    public function __invoke(IBotDispatcher $dispatcher, string &$scenario): bool
    {
        $message = $dispatcher->getMessage();

        if ($message) {
            $scenario = $message;
            return true;
        }

        return false;
    }
}
