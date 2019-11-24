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
			$datetime_c = $query->row()->date_only;
			$query = $this->db->query("SELECT DATE(date_updated) AS date_only FROM post");
			$datetime_u = $query->row()->date_only;
			endforeach;

		?>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col-10 post-list-detail px-5 pt-5 mb-5">
					<div class="post-list-detail-header text-center">
						<h1><?=$title?></h1>
						<p>Creator <span class="text-primary"><?=$username?></span> | Created on <span class="text-primary"><?=$datetime_c?></span>  | Updated on <span class="text-primary"><?=$datetime_u?></span></p>
						<hr>
					</div>
					<div class="post-list-detail-content text-justify">
						<p><?=$content?></p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
