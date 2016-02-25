<?php

namespace NetherManiacsKingdom\Block-Hunt;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class main extends PluginBase {
  
  public function onEnable(){
    $this->getLogger()->info(TextFormat::GREEN."Block-Hunt Enabled");
  }

  public function onDisable(){
    $this->getLogger()->info(TextFormat::RED. "Block-Hunt Disabled");
  }

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() == "bh"){

    }
  }
}
