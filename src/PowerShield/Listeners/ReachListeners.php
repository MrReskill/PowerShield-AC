<?php
namespace PowerShield\Listeners;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\entity\{EntityDamageEvent,EntityDamageByEntityEvent};
use PowerShield\Loader;
use pocketmine\Player;
use pocketmine\utils\TextFormat as T;
use PowerShield\Manager\{ListenersManager, PunishManager, CommandsManager};

class ReachListeners implements Listener {
    private $loader;
    public function __construct(Loader $loader)
    {
        $this->loader = $loader;
    }

    public function onDamage(EntityDamageEvent $e) {
        if($e instanceof EntityDamageByEntityEvent){
            $damager = $e->getDamager();
            $damaged = $e->getEntity();
            if($damager instanceof Player && $damaged instanceof Player) {
                if($damager->distance($damaged) > 6){
                    $punish = new PunishManager('Reach', $damager->getName(), $this->loader);
                    $punish->warnStaff();                
                    return;
                }
            }
        }
    }

}