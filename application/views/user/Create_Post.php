        <div class="container-fluid vh-75">
            <div class="row vh-75">
                <div class="col-12 d-flex justify-content-center mt-3">
                    <div class="row create-box p-4">
                        <div class="col-12">
                            <h1>Create a Post</h1>
                            <hr>
                        </div>
                        <div class="col-12">
                            <form action="<?=base_url('user/create_post');?>" method="POST">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="create-post-title" placeholder="Enter Your Title" required >
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea id="create-post-desc" name="create-post-desc"></textarea>
                                </div>
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <a href="#">
                                            <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                        </a>
                                        <button type="submit" class="btn btn-success ml-3">Create Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'#create-post-desc'});</script>
    </body>
</html>