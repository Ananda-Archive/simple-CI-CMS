		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col-10 home-post-list px-5 pt-5 mb-5">
					<?php
					foreach ($data->result_array() as $i):
						$id = $i['id'];
						$title = $i['title'];
						$content = $i['content'];
						$date_c = $i['date_created'];
						$date_u = $i['date_updated'];
						$userid = $i['userid'];
						$query = $this->db->query("SELECT name FROM user WHERE id='".$userid."'");
						$username = $query->row()->name;
						$query = $this->db->query("SELECT DATE(date_created) AS date_only FROM post");
						$datetime_c = $query->row()->date_only; ?>

						<div class="post-list p-4 mb-5">
							<div class="post-list-header">
								<h1><?=$title?></h1>
								<p>Created by <?=$username?> | <?=$datetime_c?></p>
								<hr>
							</div>
							<div class="post-list-content text-justify">
								<p><?=substr($content, 0, 600);?><a href=<?php echo base_url("pages/view_post/".$id) ?>> Read More</a></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</body>
</html>
