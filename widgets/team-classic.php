<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_WidgetCraft_Widget extends \Elementor\Widget_Base
{
    /*
     * Get widget name.
     */
    public function get_name()
    {
        return 'teamClassic';
    }

    /*
     * Get widget title.
     */
    public function get_title()
    {
        return esc_html__('Team Classic', 'widgetcraft');
    }

    /*
     * Get widget icon.
     */
    public function get_icon()
    {
        return 'eicon-info-box';
    }

    /**
     * Get custom help URL.
     */
    public function get_custom_help_url()
    {
        return 'https://developers.elementor.com/docs/widgets/';
    }

    /**
     * Get widget categories.
     */
    public function get_categories()
    {
        return ['general'];
    }

    /**
     * Get widget keywords.
     */
    public function get_keywords()
    {
        return ['team', 'widgetcraft', 'craft', 'widget', 'classic'];
    }



    /**
     * Register widget controls.
     */
    protected function register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Team Card', 'widgetcraft'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'name',
            [
                'label' => esc_html__('Name', 'widgetcraft'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Jhon Doe', 'widgetcraft'),
            ]
        );

        $this->add_control(
            'designation',
            [
                'label' => esc_html__('Designation', 'widgetcraft'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Managing Director', 'widgetcraft'),
            ]
        );

        $this->add_control(
            'profile_pic',
            [
                'label' => esc_html__('Profile Picture', 'widgetcraft'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'social_list',
            [
                'label' => esc_html__('Social Links', 'widgetcraft'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'selected_icon',
                        'label' => esc_html__('Icon', 'widgetcraft'),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fab fa-facebook-f',
                            'library' => 'fa-solid',
                        ],
                    ],

                    [
                        'name' => 'list_title',
                        'label' => esc_html__('Link', 'widgetcraft'),
                        'type' => \Elementor\Controls_Manager::URL,
                        'placeholder' => esc_html__('https://your-link.com', 'widgetcraft'),
                        'options' => ['url', 'is_external', 'nofollow'],
                        'default' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => true,
                        ],
                        'label_block' => true,
                    ]
                ],
                'default' => [
                    [
                        'selected_icon' => [
                            'value' => 'fab fa-facebook-f',
                            'library' => 'fa-solid',
                        ],
                        'list_title' => esc_html__('List Item #1', 'elementor'),
                    ],
                    [
                        'selected_icon' => [
                            'value' => 'fab fa-instagram',
                            'library' => 'fa-solid',
                        ],
                        'list_title' => esc_html__('List Item #1', 'elementor'),
                    ],
                    [
                        'selected_icon' => [
                            'value' => 'fab fa-twitter',
                            'library' => 'fa-solid',
                        ],
                        'list_title' => esc_html__('List Item #1', 'elementor'),
                    ],
                    [
                        'selected_icon' => [
                            'value' => 'fab fa-linkedin',
                            'library' => 'fa-solid',
                        ],
                        'list_title' => esc_html__('List Item #1', 'elementor'),
                    ],
                ],
                'title_field' => '{{{ elementor.helpers.renderIcon( this, selected_icon, {}, "i", "panel" ) || "<i class=\'{{ selected_icon.value }}\' aria-hidden=\'true\'></i>" }}}',
            ]
        );

        $this->end_controls_section();
    }


    /**
     * Render widget controls.
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <div class="team-block">
            <div class="inner-box">
                <ul class="social-icons">
                    <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fab fa-skype"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <div class="image">
                    <a href="javascript:void(0);"><img src="assets/images/ourTeam/1.jpg" alt=" <?php echo $settings['name']; ?>"></a>
                </div>
                <div class="lower-content">
                    <h3><?php echo $settings['name']; ?></h3>
                    <div class="designation"> <?php echo $settings['designation']; ?></div>
                </div>
            </div>
        </div>
    <?php
    }

}
