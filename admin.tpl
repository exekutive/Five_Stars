<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2>{'Five Stars'|@translate}</h2>
</div>

<form name="image_choice" method="post"> {* use inputs an image *}
    <fieldset> {* draw a box around the form elements *}
    <legend>{'Choose a photo:'|@translate}</legend> {*put a caption in it *}
        

        {* drop-down menu with all images *}
        <select name="image_list"> 
			<option value="-1">-----</option>
		    {foreach from=$info_photos item=infophoto}
			<option value="{$infophoto.PHOTOID}">{$infophoto.PHOTOINFO}</option>
            {/foreach}
		</select>

        &emsp;{'   or enter an ID number:   '|@translate}&emsp;

        <input type="number" name="image_id" value="{$read.RM_ID}"><br><br>
        
        <input type="submit" name="submit_image_choice" value={'Submit'|@translate}>

    </fieldset> 
    
</form> 

<fieldset>
 <legend>{'XMP data read from file:'|@translate}</legend>
 
 {'XMP content goes here'}
</fieldset>
