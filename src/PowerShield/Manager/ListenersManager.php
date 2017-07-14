<?php
namespace PowerShield\Manager;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use PowerShield\Loader;
use pocketmine\utils\TextFormat as T;
use PowerShield\Manager\{ListenersManager, CommandsManager};

class ListenersManager implements Listener {

    public function __construct(Loader $loader)
    {
       // $this->loader->getServer()->getPluginManager()->registerEvents(new ClassName($this),$this);
    }

}