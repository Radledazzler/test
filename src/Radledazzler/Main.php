<?php

namespace Radledazzler;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

public function onEnable(){
    $this->getLogger()->info("enabled");
}

public function onDisable(){
    $this->getLogger()->info("disabled");
}
public function onCommabd(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    switch($cmd->getName()){
       case "test":
        if($sender instanceof Player){
           $sender->sendMessage("hi Player");
}
return true;
} 
}
