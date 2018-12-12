<div class="comments_form_container">
    <form class="form_views create_views_container form_views_comments" action="../includes/create_comment.php" method="POST">

        <label for="description" class="comment">LÄMNA EN KOMMENTAR</label>
        <textarea type="text" placeholder="Skriv din kommentar..." name="description" id="description"></textarea>
        <input type="hidden" value="<?=$_GET['post']?>" name="post_id">
        <input type="hidden" value="<?=$_SESSION['user_id']?>" name="created_by">
        <input type="submit" value="Lägg till kommentar" class="submit submit_comments">
    
    </form>
</div>