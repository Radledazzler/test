<?php

namespace Radledazzler;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener {

public function onEnable(){
    $this->getLogger()->info("enabled");
}

public function onDisable(){
    $this->getLogger()->info("disabled");
}
public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    switch($cmd->getName()){
       case "hi":
        if($sender instanceof Player){
           $sender->sendMessage("u were healed boi");
           $player->setHealth(20);
           } else {
           $sender->sendMessage("hi console");      
           }
}
return true;
} 
}
