<?php
namespace Ababilithub\FlexMultilingualLearningKit\Package\Plugin\Test;

use Ababilitworld\{
    FlexTraitByAbabilitworld\Standard\Standard,
};

use Ababilithub\{
    FlexMultilingualLearningKit\Package\Plugin\Menu\Menu as TestMenu,
};

use const Ababilithub\{
    FlexMultilingualLearningKit\PLUGIN_NAME,
    FlexMultilingualLearningKit\PLUGIN_DIR,
    FlexMultilingualLearningKit\PLUGIN_URL,
    FlexMultilingualLearningKit\PLUGIN_FILE,
    FlexMultilingualLearningKit\PLUGIN_PRE_UNDS,
    FlexMultilingualLearningKit\PLUGIN_PRE_HYPH,
    FlexMultilingualLearningKit\PLUGIN_VERSION
};

(defined( 'ABSPATH' ) && defined( 'WPINC' )) || exit();

if (!class_exists(__NAMESPACE__.'\Test')) 
{
    class Test 
    {
        use Standard;
        private $menu;

        public function __construct($data = []) 
        {
            $this->init($data); 
            
        }

        public function init($data) 
        {
            $this->menu = TestMenu::instance();      
        }
    }
}