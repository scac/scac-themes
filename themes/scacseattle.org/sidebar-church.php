
<div class="sidebar sidebar-right">
  <div class="col-right">
    <div class="sidebar-church">
      <h3 class="sidebar-title"><a href="<?php echo home_url("/church/our-vision/"); ?>">Church</a></h3>
      <ul class="sidebar-page-listing">
        <?php 
          $page = get_page_by_title('church');
          wp_list_pages(array(
            'title_li'    => '',
            'child_of'    => $page->ID,
            'link_before' => '<span class="active-box"></span>'
          ));
        ?>
      </ul>
    </div>
  </div>
</div>