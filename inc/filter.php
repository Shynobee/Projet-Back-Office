<?php

if(isset($_POST['ident'])){
    $listpage = tri($list,'id',$_POST['ident']);
 }


?>

<form action="" method="post">
    <h3>Trier par : </h3>
    <fieldset class="filter-content">
        <legend>ID - Nom</legend>
        <select name="ident" id="">
            <optgroup label='id'>
            <option value="desc">Descendant</option>
            <option value="asc">Ascendant</option>
            </optgroup>
            <optgroup label='client'>
            <option value="nasc">Ascendant</option>
            <option value="ndesc">Descendant</option>
            </optgroup>
        </select> 
    </fieldset>
    <fieldset class="filter-content">
        <legend>Post by</legend>
        <input type="text" name="postedby">
    </fieldset>
    <fieldset class="filter-content">
        <legend>Ajouter apres le</legend>
        <input type="date" name="since" id="">
    </fieldset>
    <fieldset class="filter-content">
        <legend>Ajouter avant le</legend>
        <input type="date" name="before" id="">
    </fieldset>
    <input type="submit" value="Filtrer">
</form>