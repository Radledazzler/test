<?php

namespace Radledazzler;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\PlayerJoinEvent;

class Main extends PluginBase implements Listener {

public function onEnable(){
    $this->getLogger()->info("enabled");
}

public function onDisable(){
    $this->getLogger()->info("disabled");
}
public function onJoin(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    switch($cmd->getName()){
       case "hi":
        if($sender instanceof Player){
           $sender->sendMessage("u were healed boi");
           $sender->sendMessage("u r bully");
           } else {
           $sender->sendMessage("u can't be healed u dumb");      
           }
}
return true;
} 
}
