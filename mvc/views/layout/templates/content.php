<div class="clear"> </div>
<div class="wrap">
  <div class="content">
    <?php    
    /**
     * @var Core/Data $data
     */    
    if ($data->getContentPage() != null) {
      $content = $data->getContentPage();
      if (file_exists('./mvc/views/layout/' . $content . '.php')) {
        require_once('./mvc/views/layout/' . $content . '.php');
      }
    }
    ?>
  </div>
  <div class="clear"> </div>
</div>