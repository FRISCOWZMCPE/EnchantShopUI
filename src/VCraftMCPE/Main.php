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
                    $this->BuyForm(1);
               case 2:
                    $this->BuyForm(2);
                case 3:
                    $this->BuyForm(3);
                case 4:
                    $this->BuyForm(4);
                case 5:
                    $this->BuyForm(5);
                case 6:
                    $this->BuyForm(6);
                case 7:
                    $this->BuyForm(7);
                case 8:
                    $this->BuyForm(8);
               case 9:
                    $this->BuyForm(9);
                case 10:
                    $this->BuyForm(10);
                case 11:
                    $this->BuyForm(11);
                case 12:
                    $this->BuyForm(12);
                case 13:
                    $this->BuyForm(13);
                case 14:
                    $this->BuyForm(14);
                case 15:
                    $this->BuyForm(15);
                case 16:
                    $this->BuyForm(16);
                case 17:
                    $this->BuyForm(17);
                case 18:
                    $this->BuyForm(18);
                case 19:
                    $this->BuyForm(19);
                case 20:
                    $this->BuyForm(20);
                case 21:
                    $this->BuyForm(21);
                case 22:
                    $this->BuyForm(22);
                case 23:
                    $this->BuyForm(23);
                case 24:
                    $this->BuyForm(24);
                case 25:
                    $this->BuyForm(25);
                case 26:
                    $this->BuyForm(26);
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
