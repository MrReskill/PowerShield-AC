<?php
namespace PowerShield\Manager;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use PowerShield\Loader;
use pocketmine\utils\TextFormat as T;

class PunishManager {

   const PERM = 'pocketmine.admin.broadcast';
   private $cheat;
   private $player;
   private $loader;
   public function __construct($cheat, $player, Loader $loader) 
   {
    $this->cheat = $cheat;
    $this->player = $player;
    $this->loader = $loader;
   }
   public function warnStaff()
   {
      foreach(Server::getInstance()->getOnlinePlayers() as $p)
      { 
       if($p->isOp()) $p->sendMessage("§3************************\n§3PowerShield|§e ".$this->player." §bare suspected to cheat with a§e ".$this->cheat."§b.\n§3************************");
      } 
      return;
   }

}