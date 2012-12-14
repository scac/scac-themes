<?php
global $post;
$church_page = get_page_by_title('church')
?>

<div class="primary-nav-container">
  <table  id="primary-nav" role="navigation" class="site-navigation main-navigation  black-bar">
    <tr class="navbar clearfix">
      <td class="nav-item"><a href="<?php echo home_url("/church/our-vision/"); ?>">
        <?php if(is_page('church') || $post->post_parent == $church_page->ID) : ?>
          <span class="active_tab"></span>
        <?php endif; ?>
        Church</a>
      </td>
      <td class="nav-item"><a href="<?php echo home_url("/visit/"); ?>">
        <?php if(is_page('visit')) : ?>
          <span class="active_tab"></span>
        <?php endif; ?>
        Visit</a>
      </td>
      <td class="nav-item disabled"><a href="#">Ministries</a></td>
      <td class="nav-item"><a href="<?php echo home_url("/sermons/"); ?>">
        <?php if(get_post_type() == 'ct_sermon') : ?>
          <span class="active_tab"></span>
        <?php endif; ?>
        Sermons</a>
      </td>
      <td class="nav-item disabled"><a href="#">Give</a></td>
    </tr>
  </table>
</div>