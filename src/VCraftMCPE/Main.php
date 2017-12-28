<?php
namespace VCraftMCPE;

use pocketmine\{Player, Server};
use pocketmine\plugin\PluginBase;

use pocketmine\utils\{TextFormat};

use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\Listener;
use pocketmine\command\{Command,CommandSender, CommandExecutor, ConsoleCommandSender};
use jojoe77777\FormAPI;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
        $this->getLogger()->info("Enchant GUI has been  enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
   public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        $player = $sender->getPlayer();
     $cd = strtolower($cmd->getName());
        switch ($cd){
            case "enchantui":
                $this->EnchantForm($player);
                break;
        }
        return true;
    }
  public function EnchantForm($player){
    $plugin = $this->getServer()->getPluginManager();
        $formapi = $plugin->getPlugin("FormAPI");
        $form = $formapi->createSimpleForm(function (Player $event, array $args){
            $result = $args[0];
            $player = $event->getPlayer();
            if($result === null){
            }
            switch($result){
                case 0:
                    return;
                case 1:
                    return;
               case 2:
                    return;
                case 3:
                    return;
                case 4:
                    return;
                case 5:
                    return;
                case 6:
                    return;
                case 7:
                    return;
                case 8:
                    return;
               case 9:
                    return;
                case 10:
                    return;
                case 11:
                    return;
                case 12:
                    return;
                case 13:
                    return;
                case 14:
                    return;
               case 15:
                    return;
                case 16:
                    return;
                case 17:
                    return;
                case 18:
                    return;
                case 19:
                    return;
                case 20:
                    return;
                case 21:
                    return;
                case 22:
                    return;
                case 23:
                    return;
                case 24:
                    return;
                case 25:
                    return;
                case 26:
                    return;
            }
        });
    $form->setTitle("enchant");
        $form->setContent("sdasdasdsa ");
        $form->addButton("Exit");
        $form->addButton("PROTECTION");
        $form->addButton("FIRE PROTECTION");
        $form->addButton("FEATHER FALLING");
        $form->addButton("BLAST PROTECTION");
        $form->addButton("PROJECTILE PROTECTION");
        $form->addButton("THORNS");
        $form->addButton("RESPIRATION");
        $form->addButton("DEPTH STRIDER");
        $form->addButton("AQUA AFFINITY");
        $form->addButton("SHARPNESS");
        $form->addButton("SMITE");
        $form->addButton("BANE OF ARTHROPODS");
        $form->addButton("KNOCKBACK");
        $form->addButton("FIRE_ASPECT");
        $form->addButton("LOOTING");
        $form->addButton("EFFICIENCY");
        $form->addButton("SILK_TOUCH");
        $form->addButton("UNBREAKING");
        $form->addButton("FORTUNE");
        $form->addButton("POWER");
        $form->addButton("PUNCH");
        $form->addButton("FLAME");
        $form->addButton("INFINITY");
        $form->addButton("LUCK_OF_THE_SEA");
        $form->addButton("LURE");
        $form->addButton("FROST_WALKER");
        $form->addButton("MENDING");
        $form->sendToPlayer($player);
  }
  public function BuyForm($id){
  }
  
}
