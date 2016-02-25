
<?php

namespace NetherManiacsKingdom\End-Generator;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class main extends PluginBase {
  
  public function onEnable(){
    $this->getLogger()->info(TextFormat::GREEN."End-Generator has been Enabled");
  }
  public function onDisable(){
    $this->getLogger()->info(TextFormat::RED. "End-Generator has been Disabled");
  }
  }
}
