<div>
  <form id="ratingform">
    <div>
      <label class="ratinglabel" for="">Rating</label>
      <div class="ratings flex spacebetween">
        <button type="button">
          <img src="./../assets/star-regular.png" alt="Regular star">
        </button>
        <button type="button">
          <img src="./../assets/star-regular.png" alt="Regular star">
        </button>
        <button type="button">
          <img src="./../assets/star-regular.png" alt="Regular star">
        </button>
        <button type="button">
          <img src="./../assets/star-regular.png" alt="Regular star">
        </button>
        <button type="button">
          <img src="./../assets/star-regular.png" alt="Regular star">
        </button>
        <input type="hidden" id="rating" name="rating">
        <input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]?>">
      </div>
      <div><label class="com" for="">Comment</label><textarea name="comment" id="comment" cols="30" rows="10"></textarea></div>
    </div>
    <div>
      <button class="sub" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php get_comments()?>