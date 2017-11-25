<article>
  <div class="cookbook">
    <div class="cookbook-inner">
      <div class="cookbook-image">
        <?php print render($content['field_image']);?>
      </div>

      <div class="cookbook-text">
        <h1 class="cookbook-title"><?php print $title;?></h1>
        <?php print render($content['field_paypal']);?>
          <div class="cookbook-body">
          <?php print render($content['body']);?>
        </div>
      </div>
    </div>
  </div>
</article>