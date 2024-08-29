<?php

declare(strict_types=1);

namespace yoraze;

use pocketmine\plugin\PluginBase;

final class ServerStop extends PluginBase{
	public function onEnable() : void{
		$this->getServer()->shutdown();
	}
}
