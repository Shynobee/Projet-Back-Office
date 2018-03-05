<form action="reference.php?page=CLIENT LIST&num=0" method="post">
    <div class="search">
    <input type="search" name="searchclient" placeholder="Client" value="<?= $_SESSION['search'] ?>"> 
    <i></i>
    
    </div>
    <div class="filter">
        <select id="Published">
            <option name='published' value="Published">Published</option>
            <option name='published' value="Not published">Not published</option>
            <option name='published' value="Draft">Draft</option>
        </select> 
        <label for="postedby">Posted By</label>
        <input type="text" name="postedby">

    </div>
    <input type="submit" value="search">
</form>


