<center>
    <form method="post" action="" >
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" value="<?php echo $_POST['email']; ?>" name="email">
                </div><br />
                <div class="input-group">
                    <span class="input-group-addon">Objet : </span>
                    <input type="text" class="form-control" value="<?php echo $_POST['name']; ?>" name="name">
                </div><br />
                <div class="input-group">
                    <span class="input-group-addon">Message : </span>
                    <input type="text" class="form-control" value="<?php echo $_POST['message']; ?>" name="message" style="height:50px;">
                </div><br />
                <input type="submit" class="btn btn-default"  value="Envoyer !" /><br />
            </div>
        </div>
    </form>
    <div class="alert alert-danger" role"alert"><strong>Attention !</strong> Un champ est vide, merci de le remplir pour envoyer le mail.</div>
</center>