<?php
    ini_set('post_max_size', '1024M');
    require_once('partials/header.php');
?>
    <div class="content">
        <div class="dropdown">
            <select name="formshow" class="form-select" id="formshow">
                <option value="individual">Individual</option>
                <option value="group">Group</option>
            </select>
        </div>
        <br><br>
        <form action="mailer.php" method="post" class="form form-hide active" id='individual' enctype="multipart/form-data">
            <div class="head">
                <h3>Send Individual Email</h3>
            </div>
            <div class="body">
                <div class="input-group">
                    <input name="email" type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span class="input-group-text">Email</span>
                </div>
                
                <br>

                <div class="input-group">
                    <span class="input-group-text">Subject</span>
                    <input type="text" class="form-control" placeholder="Enter Subject" aria-label="subject" name="subject">
                </div>

                <br>

                <div class="mb-3">
                    <textarea class="form-control textarea-autosize" name="body" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="formFileLg" class="form-label text-primary">Attach Your file here</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="attachment[]" multiple>
                </div>
            </div>
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-primary" name="send">Send</button>
            </div>
        </form>
        <form action="group_mailer.php" method="post" class="form form-hide" id='group' enctype="multipart/form-data">
            <div class="head">
                <h3>Send Group Email</h3>
            </div>
            <div class="body">
                <!-- <div class="input-group">
                    <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span class="input-group-text">Email</span>
                </div> -->
                
                <br>

                <div class="input-group">
                    <span class="input-group-text">Subject</span>
                    <input type="text" class="form-control" placeholder="Enter Subject" aria-label="subject" name="subject">
                </div>

                <br>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextaread" rows='7' required name='body'></textarea>
                    <label for="floatingTextarea">Body</label>
                </div>
            </div>
            <br>
            <div>
                <label for="formFileLg" class="form-label text-primary">Attach Your file here</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="attachment[]" multiple>
            </div>
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-primary" name="send">Send</button>
            </div>
        </form>
    </div>
<?php require_once('partials/footer.php'); ?>