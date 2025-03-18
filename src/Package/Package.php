<?php
    namespace Ababilithub\FlexMultilingualLearningKit\Package;

    (defined( 'ABSPATH' ) && defined( 'WPINC' )) || exit();

	use Ababilitworld\{
		FlexTraitByAbabilitworld\Standard\Standard,
	};

	use Ababilithub\{
		FlexMultilingualLearningKit\Package\Plugin\Test\Test as MultillkTest,
	};

	use const Ababilithub\FlexMultilingualLearningKit\{
		PLUGIN_NAME,
		PLUGIN_DIR,
        PLUGIN_URL,
		PLUGIN_FILE,
		PLUGIN_VERSION
	};

	if ( ! class_exists( __NAMESPACE__.'\Package' ) ) 
	{
		/**
		 * Class Package
		 *
		 * @package Ababilithub\FlexMultilingualLearningKit\Package
		 */
		class Package 
		{
			use Standard;
	
			/**
			 * Package version
			 *
			 * @var string
			 */
			public $version = '1.0.0';

			private $test;
	
			/**
			 * Constructor
			 */
			public function __construct($data = []) 
			{
				$this->init($data);
				register_uninstall_hook(PLUGIN_FILE, array('self', 'uninstall'));                
			}

			public function init($data)
			{
				$this->test  = MultillkTest::instance();
			}
	
			/**
			 * Run the isntaller
			 * 
			 * @return void
			 */
			public static function run() 
			{
				$installed = get_option( PLUGIN_NAME.'-installed' );
	
				if ( ! $installed ) 
				{
					update_option( PLUGIN_NAME.'-installed', time() );
				}
	
				update_option( PLUGIN_NAME.'-version', PLUGIN_VERSION );
			}
	
			/**
			 * Activate The class
			 *
			 * @return void
			 */
			public static function activate(): void 
			{
				//flush_rewrite_rules();
                self::run();
			}
	
			/**
			 * Dectivate The class
			 *
			 * @return void
			 */
			public static function deactivate(): void 
			{
				flush_rewrite_rules();
			}
	
			/**
			 * Uninstall the plugin
			 *
			 * @return void
			 */
			public static function uninstall(): void 
			{
				delete_option(PLUGIN_NAME . '-installed');
				delete_option(PLUGIN_NAME . '-version');
				flush_rewrite_rules();
			}	
		}

	}
	