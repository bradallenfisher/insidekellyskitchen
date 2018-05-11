<article<?php print $attributes; ?>>

  <div<?php print $content_attributes; ?>>

    <div class="image">
      <?php print render($content['field_recipe_image']);?>
      <h1><?php print $title;?></h1>
    </div>

    <div class="widgets">
      <div class="add_to_any">
      <?php print render($content['addtoany']);?>
      </div>
      <?php print render($content['field_rate_this_recipe']);?>
    </div>

    <div class="phase">
      <?php if (!empty($content['field_phase'][0])):?>
        <?php print render($content['field_phase'][0]['#markup']);?>
        <?php if (!empty($content['field_phase'][1])):?>
          and
        <?php endif;?>
      <?php endif;?>

      <?php if (!empty($content['field_phase'][1])):?>
        <?php print render($content['field_phase'][1]['#markup']);?>
        <?php if (!empty($content['field_phase'][2])):?>
          and
        <?php endif;?>
      <?php endif;?>

      <?php if (!empty($content['field_phase'][2])):?>
        <?php print render($content['field_phase'][2]['#markup']);?>
      <?php endif;?>
    </div>

    <?php print render($content['field_calories_per_serving']);?>
    <?php print render($content['field_servings']);?>

  <div class="cookbook_ad">
    <a href="/cookbooks">
    <img alt="Buy The Cookbook from inside kellys kitchen - oil free recipes it's for sale by clicking this image" src="/sites/default/files/cookbookad.svg" /></a>
  </div>

    <div class="text">
      <?php print render($content['field_ingredients']);?>
      <?php print render($content['field_directions']);?>
      <?php print render($content['print_links']);?>
    </div>

  </div>

</article>