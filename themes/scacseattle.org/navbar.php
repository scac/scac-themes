<?php
global $post;
$church_page = get_page_by_title('church');
$ministries_page = get_page_by_title('ministries');
?>

<div class="primary-nav-container">
  <table  id="primary-nav" role="navigation" class="site-navigation main-navigation  black-bar">
    <tr class="navbar clearfix">
      <td class="nav-item-td">
        <div class="nav-item <?php echo (is_page('church') || $post->post_parent == $church_page->ID ? "active_tab" : "");?>">
          <a href="<?php echo home_url("/church/our-vision/"); ?>">
            <span class="<?php echo (is_page('church') || $post->post_parent == $church_page->ID ? "active_tab" : "");?>"></span>
            Church
          </a>
        </div>
      </td>
      <td class="nav-item-td">
        <div class="nav-item <?php echo (is_page('visit') ? "active_tab" : "");?>">
          <a href="<?php echo home_url("/visit/"); ?>">
            <span class="<?php echo (is_page('visit') ? "active_tab" : "");?>"></span>
            Visit
          </a>
        </div>
      </td>
      <td class="nav-item-td">
        <div class="nav-item <?php echo (is_page('ministries') || $post->post_parent == $ministries_page->ID ? "active_tab" : "");?>">
          <a href="<?php echo home_url("/ministries/"); ?>">
            <span class="<?php echo (is_page('ministries') || $post->post_parent == $ministries_page->ID ? "active_tab" : "");?>"></span>
            Ministries
          </a>
        </div>
      </td>
      <td class="nav-item-td">
        <div class="nav-item <?php echo (get_post_type() == 'ct_sermon' ? "active_tab" : "");?>">
          <a href="<?php echo home_url("/sermons/"); ?>">
            <span class="<?php echo (get_post_type() == 'ct_sermon' ? "active_tab" : "");?>"></span>
            Sermons
          </a>
        </div>
      </td>
      <td class="nav-item-td disabled">
        <div class="nav-item">
          <a href="#">Give</a></td>
        </div>
    </tr>
  </table>
</div>