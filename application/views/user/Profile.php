        <div class="container-fluid vh-75">
            <div class="row vh-75">
                <div class="col-12 d-flex justify-content-center mt-3">
                    <div class="row crud-box p-4">
                        <div class="col-12 profile-post-header">
                            <div class="row">
                                <div class="col-6">
                                    <h1>My Post</h1>
                                </div>
                                <div class="col-6 d-flex align-items-center justify-content-end">
                                    <a href="<?=base_url('create_post')?>">
                                        <button type="button" class="btn btn-success">+ Create Post</button>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-12">
                            <table class="user-post-table">
                                <thead>
                                    <td>Title</td>
                                    <td>Status</td>
                                    <td>Created at</td>
                                    <td>Updated at</td>
                                    <td>Action</td>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($data->result_array() as $i):
                                            $id = $i['id'];
                                            $title = $i['title'];
                                            $status = $i['posted'];
                                            $date_c_full = $i['date_created'];
                                            $date_u_full = $i['date_updated'];
                                            $query = $this->db->query("SELECT DATE(date_created) AS date_only FROM post WHERE id='".$id."'");
                                            $date_c_date_only = $query->row()->date_only;
                                            $query = $this->db->query("SELECT TIME(date_created) AS time_only FROM post WHERE id='".$id."'");
                                            $date_c_time_only = $query->row()->time_only;
                                            $query = $this->db->query("SELECT DATE(date_updated) AS date_only FROM post WHERE id='".$id."'");
                                            $date_u_date_only = $query->row()->date_only;
                                            $query = $this->db->query("SELECT TIME(date_updated) AS time_only FROM post WHERE id='".$id."'");
                                            $date_u_time_only = $query->row()->time_only; ?>
                                            <tr>
                                                <td><?=$title?></td>
                                                <td align="center">
                                                    <?php
                                                        if($status == 1) {
                                                            ?>
                                                            <button class="btn btn-success" disabled>Posted</button>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <button class="btn btn-secondary" disabled>Draft</button>
                                                            <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td align="center"><?=$date_c_date_only?></td>
                                                <td align="center"><?=$date_u_date_only?></td>
                                                <td align="center">
                                                    <a href="">
                                                        <button type="button" class="btn btn-warning">E</button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button" class="btn btn-danger">D</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>