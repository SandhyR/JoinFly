<?php

namespace Fly;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function OnJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        if($player->hasPermission("join.fly")){
            $player->setAllowFlight(true);
        }
    }
}
