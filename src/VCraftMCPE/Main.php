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
                    $this->BuyForm(1, $player);
               case 2:
                    $this->BuyForm(2, $player);
                case 3:
                    $this->BuyForm(3, $player);
                case 4:
                    $this->BuyForm(4, $player);
                case 5:
                    $this->BuyForm(5, $player);
                case 6:
                    $this->BuyForm(6, $player);
                case 7:
                    $this->BuyForm(7, $player);
                case 8:
                    $this->BuyForm(8, $player);
               case 9:
                    $this->BuyForm(9, $player);
                case 10:
                    $this->BuyForm(10, $player);
                case 11:
                    $this->BuyForm(11, $player);
                case 12:
                    $this->BuyForm(12, $player);
                case 13:
                    $this->BuyForm(13, $player);
                case 14:
                    $this->BuyForm(14, $player);
                case 15:
                    $this->BuyForm(15, $player);
                case 16:
                    $this->BuyForm(16, $player);
                case 17:
                    $this->BuyForm(17, $player);
                case 18:
                    $this->BuyForm(18, $player);
                case 19:
                    $this->BuyForm(19, $player);
                case 20:
                    $this->BuyForm(20, $player);
                case 21:
                    $this->BuyForm(21, $player);
                case 22:
                    $this->BuyForm(22, $player);
                case 23:
                    $this->BuyForm(23, $player);
                case 24:
                    $this->BuyForm(24, $player);
                case 25:
                    $this->BuyForm(25, $player);
                case 26:
                    $this->BuyForm(26, $player);
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
  public function BuyForm($id, $player){
    $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createCustomForm(function (Player $event, array $data){
          var_dump($data);
            $result = $data[0];
            $player = $event->getPlayer();
         });
       $form->setTitle("Buy enchantment");
       $form->addSlider("Level", 1, 5, -1, -1);
  }
  
  function getCost($id)
{
    switch ($id){
         case 1:
                return 10000;
            break;
        case 2:
                return 20000;
            break;
        case 3:
                return 30000;
            break;
        case 4:
                return 40000;
            break;
        case 5:
                return 50000;
            break;
        case 6:
                return 60000;
            break;
        case 7:
                return 70000;
            break;
        case 8:
                return 80000;
            break;
        case 9:
                return 10000;
            break;
        case 10:
                return 20000;
            break;
        case 11:
                return 30000;
            break;
        case 12:
                return 40000;
            break;
        case 13:
                return 50000;
            break;
        case 14:
                return 60000;
            break;
        case 15:
                return 70000;
            break;
        case 16:
                return 80000;
            break;
        case 17:
                return 10000;
            break;
        case 18:
                return 20000;
            break;
        case 19:
                return 30000;
            break;
        case 20:
                return 40000;
            break;
        case 21:
                return 50000;
            break;
        case 22:
                return 60000;
            break;
        case 23:
                return 70000;
            break;
        case 24:
                return 80000;
            break;
        case 25:
                return 70000;
            break;
        case 26:
                return 80000;
            break;
            
        }
}
  
}
