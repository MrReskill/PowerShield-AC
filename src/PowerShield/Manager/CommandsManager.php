<?php
namespace PowerShield\Manager;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use PowerShield\Loader;
use pocketmine\utils\TextFormat as T;
use PowerShield\Manager\{ListenersManager, CommandsManager};

class CommandsManager implements Listener {

    private $loader;
    public function __construct(Loader $loader)
    {   
        $this->loader = $loader;
        //$this->getServer()->getCommandMap()->register("staff", new Commands\StaffCommands($this, "staff"));
    }

}