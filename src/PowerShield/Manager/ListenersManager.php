<?php
namespace PowerShield\Manager;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use PowerShield\Loader;
use pocketmine\utils\TextFormat as T;
use PowerShield\Listeners\{ReachListeners, FastFoodListeners};
use PowerShield\Manager\{ListenersManager, CommandsManager};

class ListenersManager implements Listener {
    private $loader;
    public function __construct(Loader $loader)
    {
       $this->loader = $loader;
       $this->loader->getServer()->getPluginManager()->registerEvents(new ReachListeners($this->loader),$this->loader);
       $this->loader->getServer()->getPluginManager()->registerEvents(new FastFoodListeners($this->loader),$this->loader);
    }

}