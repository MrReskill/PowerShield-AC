<?php
namespace PowerShield;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat as T;
use PowerShield\Manager\{ListenersManager, CommandsManager};

class Loader extends PLuginBase implements Listener {

    public $cheatLevel = [];
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
        $this->getServer()->getPluginManager()->registerEvents(new ListenersManager($this), $this);
        $this->getServer()->getPluginManager()->registerEvents(new CommandsManager($this), $this);

        $this->getLogger()->info(T::GRAY.'['.T::AQUA.'PowerShield'.T::GRAY.'] '.T::YELLOW.'The anticheat plugin are enabled');
        $this->cheatlevel = [];
    }

    public function onDisable() {
        $this->getLogger()->info(T::GRAY.'['.T::AQUA.'PowerShield'.T::GRAY.'] '.T::YELLOW.'The anticheat plugin are disabled');
    }

}