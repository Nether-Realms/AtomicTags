<?php

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

    public function onEnable() {
        $this->getLogger()->info(TextFormat::GREEN."SimpleTagsUI Enabled");
    }
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED."SimpleTagsUI Disabled");
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
            $this->permPage($sender);
        }
        return true;
    }




    public function permPage(Player $player) {
    
    	
        $form = new SimpleForm(function (Player $player, $data){
            if ($data === null) {
                return;
            }
            switch ($data) {
                case 0: // Second button (to second page)

                            if (!$player->hasPermission("tags.Noob")) {
                                $player->sendMessage("§7[§a!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
        
								$player->setDisplayName($player->getName() . " §r§l§6#§eNoob§r");
        
								$player->sendMessage("§7[§a!§7]§7 §r§l§6#§eNoob§r§7 tag equiped!");
						}
                            return true;
                case 1: // Second button (to second page)

                            if (!$player->hasPermission("tags.alien")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
       
        
								$player->setDisplayName($player->getName() . " §l§2#§aA§2l§ai§2e§an§r");
        
								$player->sendMessage("§7[§a!§7]§7 §l§2#§aA§2l§ai§2e§an§r§7 tag equiped!");
                        }
                            return true;
                case 2: // Second button (to second page)

                            if (!$player->hasPermission("tags.bombom")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §l§4#§cBo§4mB§com§r");
        
								$player->sendMessage("§7[§a!§7] §l§4#§cBo§4mB§com§r§7 tag equiped!");
                        }
                            return true;
                case 3: // Second button (to second page)

                            if (!$player->hasPermission("tags.hacker")) {
                                $player->sendMessage("§7[§c!§7] This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §l§3#§bHa§3ck§ber§r");
        
								$player->sendMessage("§7[§a!§7] §l§3#§bHa§3ck§ber§r§7 tag equiped!");
                        }
                            return true;
                case 4: // Second button (to second page)

                            if (!$player->hasPermission("tags.uwu")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§5§l#§dU§5w§dU§r");
        
								$player->sendMessage("§7[§a!§7]§7 §r§5§l#§dU§5w§dU§r§7 tag equiped!");
                        }
                            return true;
                case 5: // Second button (to second page)

                            if (!$player->hasPermission("tags.darealaqua")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§3§l#§bDaRealAqua§r");
        
								$player->sendMessage("§7[§a!§7] §r§3§l#§bDaRealAqua§r§7 tag equiped!");
                        }
                            return true;
                case 6: // Second button (to second page)

                            if (!$player->hasPermission("tags.og")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§2§l#§o§aOG§r§7§r");
        
								$player->sendMessage("§7[§a!§7]§r§7 §r§2§l#§o§aOG§r§7§r§7 tag equiped!");
                        }
                            return true;
                case 7: // Second button (to second page)

                            if (!$player->hasPermission("tags.dragon")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§5§l#§dDragon§r");
        
								$player->sendMessage("§7[§a!§7] §r§5§l#§dDragon§r§7 tag equiped!");
                        }
                            return true;
 
                case 8: // Second button (to second page)

                            if (!$player->hasPermission("tags.nspenetwork")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§3#§bNspeNetwork§r");
        
								$player->sendMessage("§7[§a!§7] §r§l§3#§bNspeNetwork§r§7 tag equiped!");
                        }
                            return true;
				case 9: // Second button (to second page)

                            if (!$player->hasPermission("tags.propvp")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§3#§bProPvP§r");
        
								$player->sendMessage("§7[§a!§7] §r§l§3#§bProPvP§r tag equiped!");
                        }
                            return true;			
				case 10: // Second button (to second page)

                            if (!$player->hasPermission("tags.ed")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§5#§dE§5D§r");
        
								$player->sendMessage("§7[§a!§7] §r§l§5#§dE§5D§r§7 tag equiped!");
                        }
                            return true;
                
                    
            }
            }
        );
        $form->setTitle("§b§lTags");
        $form->setContent("§7Unlock tags from crates");
		
        $form->addButton($player->hasPermission("tags.noob") === true ? "§r§l§6#§eNoob§r\n§a§lUNLOCKED" : "§r§l§6#§eNoob§r\n§c§lLOCKED"); 
		
		$form->addButton($player->hasPermission("tags.alien") === true ? "§l§2#§aA§2l§ai§2e§an§r§7§r\n§a§lUNLOCKED" : "§l§2#§aA§2l§ai§2e§an§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.bombom") === true ? "§l§4#§cBo§4mB§com§r§7§r\n§r§a§lUNLOCKED" : "§l§4#§cBo§4mB§com§r§7§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.hacker") === true ? "§l§3#§bHa§3ck§ber§r§7§r\n§r§a§lUNLOCKED" : "§l§3#§bHa§3ck§ber§r§7§r\n§c§lLOCKED"); 
		
        $form->addButton($player->hasPermission("tags.uwu") === true ? "§r§5§l#§dU§5w§dU§r§7§r\n§r§a§lUNLOCKED" : "§r§5§l#§dU§5w§dU§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.dare") === true ? "§r§3§l#§bDaRealAqua§r\n§r§a§lUNLOCKED" : "§r§3§l#§bDaRealAqua§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.og") === true ? "§r§2§l#§o§aOG§r§7§r§7§r\n§r§a§lUNLOCKED" : "§r§2§l#§o§aOG§r§7§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.dragon") === true ? "§r§5§l#§dDragon§r§7§r\n§r§a§lUNLOCKED" : "§r§5§l#§dDragon§r§7§r\n§c§lLOCKED");

        $form->addButton($player->hasPermission("tags.nspenetwork") === true ? "§r§l§3#§bNspeNetwork§r\n§r§a§lUNLOCKED" : "§r§l§3#§bNspeNetwork§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.propvp") === true ? "§r§l§3#§bProPvP§r\n§r§a§lUNLOCKED" : "§r§l§3#§bProPvP§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.ed") === true ? "§r§l§5#§dE§5D§r\n§r§a§lUNLOCKED" : "§r§l§5#§dE§5D§r\n§c§lLOCKED");
        
        
        $form->addButton("§c§lClose");
        $form->sendToPlayer($player);
    }

    
}
