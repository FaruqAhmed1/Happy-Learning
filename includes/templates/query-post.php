

<div class="wrap ">
<h1 class="wp-heading-inline">Posts</h1>

<?php //print_r($posts); ?>

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
            <td><?php echo $post->post_author ?></td>
            <td><?php echo $post->ID ?></td>
            <td><?php echo wp_date('d F,Y', strtotime($post->post_date)) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
