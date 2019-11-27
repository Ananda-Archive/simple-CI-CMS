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
                                    <input type="hidden" name="create-post-id" id="create-post-id">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="create-post-title" id="create-post-title" placeholder="Enter Your Title" required >
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea id="create-post-desc" name="create-post-desc"></textarea>
                                </div>
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <div id="draftsaved"></div>
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
        <script>
            $(document).ready(function() {
                function autoSave() {
                    var postId = $('#create-post-id').val();
                    var postTitle = $('#create-post-title').val();
                    var postContent = tinymce.get('create-post-desc').getContent();
                    if(postTitle != '') {
                        $.ajax({
                            url:"<?=base_url('User/auto_save')?>",
                            method: "POST",
                            data: {
                                post_id: postId,
                                post_title: postTitle,
                                post_content: postContent                              
                            },
                            dataType:"text",
                            success:function(response) { 
                                console.log(response);
                                if(response != '') {
                                    $('#create-post-id').val(response);
                                }
                                $('#draftsaved').text("Drafted");
                            }
                        })
                    }
                }
                setInterval(function() {
                    autoSave();
                }, 2000)
            })
        </script>
    </body>
</html>