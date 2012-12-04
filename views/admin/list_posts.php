<?php 
// Connect to the database
$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);

// Get order, if any is present in QS
if(isset($_GET['order'])) {
	$order = $_GET['order'];
} else {
	$order = 'post_datepublished DESC';
}

// Construct the query (SQL)
$sql = "SELECT * FROM posts ORDER BY $order";

// Execute the query
$results = $conn->query($sql);

// Initialize empty array of posts
$posts = array();

// Loop over results
while($post = $results->fetch_assoc()) {
	$posts[] = $post;
}

// Close connection
$conn->close();
?>
<h1>All Posts</h1>
<table class="table">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
<?php foreach($posts as $post):?>

<?php endforeach;?>
</table>