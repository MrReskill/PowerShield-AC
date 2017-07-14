<?php
namespace PowerShield\Manager;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat as T;

class CheatManager {

    private $cheat = [
        'Killaura' => true,
        'Fly' => true,
        'FastFood' => true,
        'Reach' => true,
        'ForceGamemode' => true,
        'AutoBlock' => true
    ];

    public function isEnable($cheat)
    {
        if($this->isCheat($cheat) == false) return false;
        return $this->cheat[$cheat]; 
    }

    public function isCheat($cheat)
    {
        if(in_array($cheat,$this->cheat)) return true;
        return false;
    }   

}