<?php

namespace Ababilithub\FlexMultilingualLearningKit\Package\Plugin\Alphabet\Presentation;

(defined('ABSPATH') && defined('WPINC')) || die();

use Ababilitworld\FlexTraitByAbabilitworld\Standard\Standard;

if (!class_exists(__NAMESPACE__.'\Presentation')) 
{
    class Presentation 
    {
        use Standard;

        private $package;

        public function __construct() 
        {
            //
        }
    }
}

?>
