<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Become a Candidate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="candidateEntranceHandler.php" enctype="multipart/form-data">

          <div class="imagecontainer" style="width: 224px;margin: auto;"><img src="images/profilepicture.jpg" alt="" style="border-radius: 50%;border: 4px solid black;padding: 5px;"></div>

          <div class="form-group">
            <label for="photo" id="labelphoto" style="padding: 8px 12px;
    margin: 21px 2px;
    position: relative;
    left: 9.5rem;
    background: linear-gradient(45deg, #1ad5ff, #0eff6f);
    border-radius: 4px;
    font-family: montserrat;">Choose your logo</label>
            <input type="file" name="photo" id="photo" class="photo" style="width: 100px; margin: 10px 183px; display : none;">
            <div class="text-center">Please upload low resolution picture otherwise the logo will not going to be displayed.</div>
          </div>
          <div class="form-group">



            <label for="exampleInputEmail1">Candidate name</label>
            <input type="text" id="candidatename" name="candidatename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Slogan</label>
            <input type="text" id="slogan" name="slogan" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Your promises</label>
            <textarea class="form-control" id="promise" name="promise" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>