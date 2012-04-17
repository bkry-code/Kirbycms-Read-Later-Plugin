# Read later plugin

This is a plugin for [Kirby](http://getkirby.com/) that let´s you save the page for later reading.
It currently supports [Instapaper](http://www.instapaper.com/) and [Pocket](http://getpocket.com/).
## Installation

Put the `readlater.php` file in your `site/plugins` folder.

## How to use it

Simple! Put `<?php echo readlater($page->title(),'instapaper') ?>` in your template and it will echo the a link that let´s you save the page to Instapaper. Do you want to use Pocket? Then you use `<?php echo readlater($page->title(),'pocket') ?>` in your template. 

You can pass any other page variable to use fot the title. I asume that you use `$page->title()` for the title but you are free the change it. 

## Example usage

  <?php snippet('header') ?>
    <?php snippet('menu') ?>
    <?php snippet('submenu') ?>

    <section class="content">

        <article>
            <?php echo readlater($page->title(),'pocket') ?>
            <h1><?php echo html($page->title()) ?></h1>
            <?php echo kirbytext($page->text()) ?>
        </article>

    </section>

    <?php snippet('footer') ?>

## Link text

The plugin let's you change the link text with ease. The default format for Instapaper is `Add to Instapaper`. For Pocket we use `Save to Pocket`.

  <?php 
  
  $defaults = array(
    'instapaper'  => 'Add to Instapaper',
    'pocket'      => 'Save to Pocket',
  );

  ?>

## Author

Author: Roy Lodder <http://roylodder.com>