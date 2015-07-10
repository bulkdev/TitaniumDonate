<?php

namespace TitaniumDonate;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::BLUE."Enabled!");
		$this->getLogger()->info(TextFormat::GREEN."Created By Bulk!");
	}
	
	public function onDisable(){
		$this->getLogger()->info(TextFormat::RED."Disabled!");
	}
	
public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if($sender instanceof Player) {
			if(strtolower($command->getName('donate'))) {
					$sender->sendMessage(TextFormat::RED."-----------------------------------------");
					$sender->sendMessage(TextFormat::GOLD."         Donate To TitaniumPE:         ");
					$sender->sendMessage(TextFormat::BLUE."- Visit:");
					$sender->sendMessage(TextFormat::BLUE."- www.titaniumpe.buycraft.net");
					$sender->sendMessage(TextFormat::RED."------------------------------------------");
          return true;
          }
          }else{
          $this->getLogger()->info(TextFormat::RED."RUN THIS COMMAND IN GAME!");
          }
          }
          }
