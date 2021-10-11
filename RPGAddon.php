<?php
declare(strict_types = 1);

/**
 * @name RPGAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\RPGAddon
 * @depend RPG
 */
namespace JackMD\ScoreHud\Addons
{
	use JackMD\ScoreHud\addon\AddonBase;
	use pvp\Main;
	use pocketmine\Player;

	class RPGAddon extends AddonBase{

		/** @var RPG */
		private $rpg;

		public function onEnable(): void{
			$this->rpg = $this->getServer()->getPluginManager()->getPlugin("RPG");
		}

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			return [
				"{canhgioi}" => $this->rpg->canhgioi($player)
			];
		}
	}
}