<?php
/*
  ____        ____            _    _                     
 |  _ \  __ _|  _ \ ___  __ _| |  / \   __ _ _   _  __ _ 
 | | | |/ _` | |_) / _ \/ _` | | / _ \ / _` | | | |/ _` |
 | |_| | (_| |  _ <  __/ (_| | |/ ___ \ (_| | |_| | (_| |
 |____/ \__,_|_| \_\___|\__,_|_/_/   \_\__, |\__,_|\__,_|
                                          |_|            
*/
declare(strict_types=1);

namespace DaRealAqua\SimpleTagsUI;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\command\{Command,CommandSender};
use pocketmine\utils\Config;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    public const PREFIX = "§l§8(§dATMCTAGS§8)§r§7 ";
		
    public function onEnable() {
        $this->getLogger()->info(self::PREFIX .TextFormat::GREEN."TagsUI Enabled");
    }
    public function onDisable() {
        $this->getLogger()->info(self::PREFIX .TextFormat::RED."TagsUI Disabled");
    }

	public function runAsOp(Player $player, String $cmd){
		if ($player->isOp()) {
                    $this->getServer()->dispatchCommand($player, $cmd);
                } else {
                    $this->getServer()->addOp($player->getName());                     $this->getServer()->dispatchCommand($player, $cmd);
                    $this->getServer()->removeOp($player->getName());
                  }
              }


	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if ($sender instanceof Player and $command->getName() == "tags") {
            $this->tagsForm($sender);
        }
        return true;
    }




    public function tagsForm(Player $player) {
    
    	
        $form = new SimpleForm(function (Player $player, $data){
            if ($data === null) {
                return;
            }
            switch ($data) {
                
               case 0: // Second button (to second page)

                            if (!$player->hasPermission("tags.venity")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§6#§eVenity§r");
        
								$player->sendMessage(self::PREFIX ."#Venity tag equiped!");
                        }
                        // }
                            return true;
		  case 1: // Second button (to second page)

                            if (!$player->hasPermission("tags.alien")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
       
        
								$player->setDisplayName($player->getName() . " §l§2#§aA§2l§ai§2e§an§r");
        
								$player->sendMessage(self::PREFIX ."#Alien tag equiped!");
                        }
                            return true;

                case 2: // Second button (to second page)

                            if (!$player->hasPermission("tags.uwu")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§5§l#§dU§5w§dU§r");
        
								$player->sendMessage(self::PREFIX ."#Uwu tag equiped!");
                        }
                            return true;
                case 3: // Second button (to second page)

                            if (!$player->hasPermission("tags.dragon")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§5§l#§dDragon§r");
        
								$player->sendMessage(self::PREFIX ."#Dragon tag equiped!");
                        }
                            return true;

		case 4: // Second button (to second page)

                            if (!$player->hasPermission("tags.propvp")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§3#§bProPvP§r");
        
								$player->sendMessage(self::PREFIX ."#ProPvP tag equiped!");
                        }
                            return true;
                case 5: // Second button (to second page)

                            if (!$player->hasPermission("tags.bombom")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §l§4#§cBo§4mB§com§r");
        
								$player->sendMessage(self::PREFIX ."#BomBom tag equiped!");
                        }
                            return true;
		 case 6: // Second button (to second page)

                            if (!$player->hasPermission("tags.hacker")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §l§3#§bHa§3ck§ber§r");
        
								$player->sendMessage(self::PREFIX ."#Hacker tag equiped!");
                        }
                            return true;


			
                    
            }
	}
           
        );
        $form->setTitle("§b§lTags");
        $form->setContent("Show off your chat tags!");
        		
	$form->addButton($player->hasPermission("tags.venity") === true ? "§r§l§6#§eVenity§r\n§r§a§lUNLOCKED" : "§r§l§3#§r§l§6#§eVenity§r\n§c§lLOCKED");
	$form->addButton($player->hasPermission("tags.alien") === true ? "§l§2#§aA§2l§ai§2e§an§r§7§r\n§a§lUNLOCKED" : "§l§2#§aA§2l§ai§2e§an§r§7§r\n§c§lLOCKED");
        $form->addButton($player->hasPermission("tags.uwu") === true ? "§r§5§l#§dU§5w§dU§r§7§r\n§r§a§lUNLOCKED" : "§r§5§l#§dU§5w§dU§r§7§r\n§c§lLOCKED");
        $form->addButton($player->hasPermission("tags.dragon") === true ? "§r§5§l#§dDragon§r§7§r\n§r§a§lUNLOCKED" : "§r§5§l#§dDragon§r§7§r\n§c§lLOCKED");
 	$form->addButton($player->hasPermission("tags.propvp") === true ? "§r§l§3#§bProPvP§r\n§r§a§lUNLOCKED" : "§r§l§3#§bProPvP§r\n§c§lLOCKED");
	$form->addButton($player->hasPermission("tags.bombom") === true ? "§l§4#§cBo§4mB§com§r§7§r\n§r§a§lUNLOCKED" : "§l§4#§cBo§4mB§com§r§7§r\n§c§lLOCKED");
	$form->addButton($player->hasPermission("tags.hacker") === true ? "§l§3#§bHa§3ck§ber§r§7§r\n§r§a§lUNLOCKED" : "§l§3#§bHa§3ck§ber§r§7§r\n§c§lLOCKED"); 
        
        $form->addButton("§c§lClose");
        $form->sendToPlayer($player);
    }

    
}
