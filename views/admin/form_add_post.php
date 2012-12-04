<h1>New Posts</h1>
<form action="actions/add_post.php" method="post" class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="post_title">Post Title</label>
		<div class="controls">
			<input class="span10" type="text" name="post_title" placeholder="required" value=""/>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<textarea rows="20" class="span10" name="post_text"></textarea>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Publish</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>