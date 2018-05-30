<div class="l-page">

<div class="row">
  <div class="head-wrapper">
    <header id="header">
  	  <h1><a href="/">Inside <span class="color-1 uppercase">Kellys</span> Kitchen</a></h1>
    </header>
    <div class="menu-expander">MENU</div>

    <div class="search-bar">
      <?php print render($page['search_bar']);?>
    </div>
    <nav id="navigation">
      <?php print render($page['navigation']);?>
    </nav>

    <nav id="mobile-navigation">
      <?php print render($page['mobile_navigation']);?>
    </nav>

  </div>
</div>

<div class="mobile-nav"></div>

<?php if($is_front):?>
  <div class="features-top-home">

    <div class="item">
      <a href="/cookbooks">
        <img src="/sites/all/themes/kelly/images/cookbooks.jpg" />
      </a>
    </div>

    <div class="item">
      <a href="/special-offers">
       <img src="/sites/all/themes/kelly/images/callout.jpg" />
      </a>
    </div>

    <div class="item">
      <a href="/oil-free-products">
        <img src="/sites/all/themes/kelly/images/oil-free-products.jpg" />
      </a>
    </div>

  </div>
<?php endif;?>

  <div class="l-main">

    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>

      <a id="main-content"></a>

      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>

      <?php if (!$is_front):?>
        <?php print render($page['content']); ?>
      <?php endif;?>
    </div>

    <div class="side">
      <?php print render($page['sidebar_second']);?>
    </div>
  </div>

  <div class="bottom">
    <?php print render($page['bottom']);?>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
