<?php
$categories = get_categories();
$tags = get_tags();

$sort_options = array(
  'date-asc' => 'Date (Newest First)',
  'date-desc' => 'Date (Oldest First)',
  'title-asc' => 'Title'
);
?>

<div class="amsource-blog-index__filters">
  <div class="container">
    <div class="amsource-blog-index__filters__left">
      <ul class="amsource-blog-index__filters__categories">
        <li>Categories</li>
        <li class="<?php print empty( $_GET['category_name'] ) ? 'active' : ''; ?>"><a href="?category_name=">All</a></li>
        <?php foreach ( $categories as $cat ) : if ( $cat->name == 'Uncategorized' ) continue; ?>
          <li class="<?php print ( $_GET['category_name'] == $cat->slug ) ? 'active' : ''; ?>"><a href="?category_name=<?php print $cat->slug; ?>"><?php print $cat->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="amsource-blog-index__filters__right">
      <div class="field-group">
        <select name="tag" class="js-redirect-on-change">
          <option value="">Tags</option>
          <?php foreach ( $tags as $tag ) : ?>
          <option value="<?php print $tag->slug ?>" <?php print $tag->slug == $_GET['tag'] ? 'selected="selected"' : ''; ?>><?php print ( $_GET['tag'] == $tag->slug ) ? 'Tag: ' : '';?><?php print $tag->name; ?></option>
          <?php endforeach; ?>
        </select>

        <select name="sort" class="js-redirect-on-change">
          <option value="">Sort By</option>
          <?php foreach ( $sort_options as $k => $v ) : ?>
            <option value="<?php print $k?>" <?php print ( $_GET['sort'] == $k || $k === 'date-asc' && empty($_GET['sort']) ) ? 'selected="selected"' : '';?>><?php print ( $_GET['sort'] == $k || $k === 'date-asc' && empty($_GET['sort']) ) ? 'Sort By: ' : '';?><?php print $v; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
  </div>
</div>
