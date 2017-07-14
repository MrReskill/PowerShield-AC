<?php
namespace PowerShield\Task;

use pocketmine\scheduler\PluginTask;
use PowerShield\Loader;
use pocketmine\Player;
use pocketmine\math\Vector3;
use pocketmine\Server;
use PowerShield\Manager\{ListenersManager, PunishManager, CommandsManager};

class FastFoodTask extends PluginTask {
	public function __construct(Loader $loader, $joueur){
		$this->loader = $loader;
        $this->joueur = $joueur;
		parent::__construct($loader);
	}
	public function onRun($currentTick){
        if($this->loader->cheatLevel['FastFood'][$this->joueur] > 1)
        {
            $punish = new PunishManager('FastFood', $this->joueur, $this->loader);
            $punish->warnStaff();                
            return;
        }
		$this->loader->cheatLevel['FastFood'][$this->joueur] = 0;  
	}
}
