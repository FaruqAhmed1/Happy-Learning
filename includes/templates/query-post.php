

<div class="wrap">
<h1 class="wp-heading-inline">Posts</h1>

<div class="tablenav top">
    <div class="alignleft actions">
        <form action="<?php echo admin_url() ?>/admin.php" method="GET">
            <input type="hidden" name="page" value="query_post" >
            <select name="cat_filter" id="cat" class="postform">
                <?php foreach(  $terms as $term ): ?>
                <option value="<?php echo $term->term_id ?>" <?php echo  $cat_filter == $term->term_id ? 'selected': ''; ?> ><?php echo $term->name; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="filter_action" class="button" value="Filter">
        </form>
    </div>

</div>

<table class="wp-list-table widefat fixed striped table-view-list posts">
		
	<thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Date</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($posts as $post): ?>
        <tr>
            <td><?php echo $post->post_title ?></td>
            <td><?php
            $user = get_user_by( 'id', $post->post_author );
             echo $user->display_name;
              ?></td>
            <td><?php
            $terms = wp_get_post_terms( $post->ID,'category' );
              $terms_name = array_map( function($term){
                return $term->name;
              },$terms );
              echo implode(', ',$terms_name);
              ?></td>
            <td><?php echo wp_date('d F,Y', strtotime($post->post_date)) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
