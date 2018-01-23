## ReaktivStudios Disable Comments

This is a Reaktiv plugin used for client sites where comments are not needed. This removes:
 - the comments
 - any ability to comment
 - comment editing options in the dashboard
 
This is helpful because it removes one potential vector for attack and spam on sites where comments will not be used.

This also simplifies the dashboard so there is less potential for clicking the wrong menu item.

## Usage

Add to plugin folder and active the plugin. There is no setup required.

For maximum effect the comment template can be replaced with:

```php
<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package {package}
 */

/**
 * Comments are disabled so this template is empty.
 */

```
