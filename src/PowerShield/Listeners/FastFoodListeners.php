<?php
namespace PowerShield\Listeners;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\player\{PlayerItemConsumeEvent, PlayerJoinEvent};
use PowerShield\Loader;
use pocketmine\Player;
use PowerShield\Task\{FastFoodTask};
use pocketmine\utils\TextFormat as T;
use PowerShield\Manager\{ListenersManager, PunishManager, CommandsManager};

class FastFoodListeners implements Listener {
    private $loader;
    public function __construct(Loader $loader)
    {
        $this->loader = $loader;
    }

    public function onJoin(PlayerJoinEvent $e) {
        $this->loader->cheatLevel['FastFood'][$e->getPlayer()->getName()] = 0;   
    }

    public function onEating(PlayerItemConsumeEvent $e) {          
         $taskRand = mt_rand(0,4);   
         if($taskRand == 2)
         {    
             $this->loader->cheatLevel['FastFood'][$e->getPlayer()->getName()] = 0;  
             $this->loader->getServer()->getScheduler()->scheduleDelayedTask(new FastFoodTask($this->loader,$e->getPlayer()->getName()), 20);
             $this->loader->cheatLevel['FastFood'][$e->getPlayer()->getName()] = 0; 
         }   
         $this->loader->cheatLevel['FastFood'][$e->getPlayer()->getName()]++;             
                
    }

}