<?php
/**
 * Main setup for WP Enforcer, using GitHook'd
 *
 * @package WP-Enforcer
 */

namespace WPEnforcer;

use cli;

class Setup extends \GitHookd\Setup
{

    /**
     * @var array $flags Flags that should be recognized by the CLI script.
     * @link https://github.com/wp-cli/php-cli-tools/blob/master/examples/arguments.php
     */
    protected $flags = [
        'help' => [
            'description' => 'Show this help screen',
            'aliases'     => ['h'],
        ],
        'version' => [
            'description' => 'Show the current version of WP Enforcer',
            'aliases'     => ['v'],
        ],
        'vip' => [
            'description' => 'Configure the project to use the WordPress.com VIP coding standards',
        ],
    ];

    /**
     * @var array $options Options that should be recognized by the CLI script.
     * @link https://github.com/wp-cli/php-cli-tools/blob/master/examples/arguments.php
     */
    protected $options = [];
}
