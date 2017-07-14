<?php
namespace PowerShield\Listeners;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\entity\{EntityDamageEvent,EntityDamageByEntityEvent};
use PowerShield\Loader;
use pocketmine\Player;
use pocketmine\utils\TextFormat as T;
use PowerShield\Manager\{ListenersManager, CommandsManager};

class ReachListeners implements Listeners {
    private $loader;
    public function __construct(Loader $loader)
    {
        $this->loader = $loader;
    }

    public function onDamage(EntityDamageEvent $event) {

    }

}