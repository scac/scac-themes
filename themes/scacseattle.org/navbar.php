<?php
global $post;
$church_page = get_page_by_title('church')
?>

<div class="primary-nav-container">
  <table  id="primary-nav" role="navigation" class="site-navigation main-navigation  black-bar">
    <tr class="navbar clearfix">
      <td class="nav-item"><a href="<?php echo home_url("/church/our-vision/"); ?>">
        <span class="<?php echo (is_page('church') || $post->post_parent == $church_page->ID ? "active_tab" : "");?>"></span>
        Church</a>
      </td>
      <td class="nav-item">
        <a href="<?php echo home_url("/visit/"); ?>">
          <span class="<?php echo (is_page('visit') ? "active_tab" : "");?>"></span>
          Visit
        </a>
      </td>
      <td class="nav-item disabled"><a href="#">Ministries</a></td>
      <td class="nav-item"><a href="<?php echo home_url("/sermons/"); ?>">
        <span class="<?php echo (get_post_type() == 'ct_sermon' ? "active_tab" : "");?>"></span>
        Sermons</a>
      </td>
      <td class="nav-item disabled"><a href="#">Give</a></td>
    </tr>
  </table>
</div>