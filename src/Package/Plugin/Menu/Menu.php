<?php
namespace Ababilithub\FlexMultilingualLearningKit\Package\Plugin\Menu;

use Ababilithub\{
    FlexWordpress\Package\Menu\Base\Menu as BaseMenu,
    FlexMultilingualLearningKit\Package\Plugin\Language\Arabic\Alphabet\Presentation\Template\Template as AlphabetTemplate,
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

if (!class_exists(__NAMESPACE__.'\Menu')) 
{
    /**
     * Concrete Class ThemeSettingsMenu
     * Implements the WordPress admin menu for theme settings
     */
    class Menu extends BaseMenu
    {
        /**
         * Constructor to define menu properties and submenus
         */
        public function __construct()
        {
            $this->page_title    = 'Flex Learning Kit';
            $this->menu_title    = 'Flex Learning Kit';
            $this->capability    = 'manage_options';
            $this->menu_slug     = 'flex-multilingual-learning-kit';
            $this->callback      = [$this, 'render_page'];
            $this->menu_icon     = 'dashicons-admin-customizer';
            $this->menu_position = 9;

            parent::__construct();

            // Add submenus dynamically
            $this->add_submenu([
                'page_title' => 'Arabic',
                'menu_title' => 'Arabic',
                'capability' => 'manage_options',
                'slug'       => 'flex-multilingual-learning-kit-arabic',
                'callback'   => [$this, 'render_submenu']
            ]);

            $this->add_submenu([
                'page_title' => 'English',
                'menu_title' => 'English',
                'capability' => 'manage_options',
                'slug'       => 'flex-multilingual-learning-kit-english',
                'callback'   => [$this, 'render_submenu']
            ]);

            $this->add_submenu([
                'page_title' => 'Bangla',
                'menu_title' => 'Bangla',
                'capability' => 'manage_options',
                'slug'       => 'flex-multilingual-learning-kit-bangla',
                'callback'   => [$this, 'render_submenu']
            ]);

        }

        /**
         * Renders the main settings page
         */
        public function render_page(): void
        {
            $template = new AlphabetTemplate();
            echo AlphabetTemplate::alphabet_grid([]);
        }

        /**
         * Renders the submenu pages
         */
        public function render_submenu(): void
        {
            $template = new AlphabetTemplate();
            echo AlphabetTemplate::alphabet_grid([]);
        }

        /**
         * Get the page title
         */
        protected function get_page_title(): string
        {
            return $this->page_title;
        }

        /**
         * Get the menu title
         */
        protected function get_menu_title(): string
        {
            return $this->menu_title;
        }

        /**
         * Get the menu capability
         */
        protected function get_menu_capability(): string
        {
            return $this->capability;
        }

        /**
         * Get the menu slug
         */
        protected function get_menu_slug(): string
        {
            return $this->menu_slug;
        }

        /**
         * Get the callback function
         */
        protected function get_callback(): callable 
        {
            return is_callable($this->callback) ? $this->callback : '__return_false';
        }
    }
}
