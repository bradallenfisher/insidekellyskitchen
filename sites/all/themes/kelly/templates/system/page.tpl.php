<div class="l-page">

<div class="row">
  <div class="head-wrapper">
    <header id="header">
  	  <a href="/"><img src="/sites/all/themes/kelly/images/logo.svg" /></a>
    </header>
    <div class="search-expander"><i class="fa fa-search"></i></div>
    <div class="menu-expander">MENU</div>

    <nav id="navigation">
      <?php print render($page['navigation']);?>
    </nav>

    <nav id="mobile-navigation">
      <?php print render($page['mobile_navigation']);?>
    </nav>

  </div>
</div>
<div class="mobile-nav"></div>


  <div class="l-main">
    <div class="search-bar">
      <?php print render($page['search_bar']);?>
    </div>

    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>

      <a id="main-content"></a>

      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
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
