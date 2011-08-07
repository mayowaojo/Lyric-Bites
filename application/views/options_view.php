<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lyric Bites</title>

 <style type="text/css" media="screen">
 	label {display:block;}
 </style>
</head>

<body>
	<header>
    
    </header>
    
    <section id="info">
    	<div id="upper">
    	
    	<div id="about">
        <div id="logoarea">
        </div>
        <p>The easiest way to discover, share, and interact with your favorite lines from any song.</p>
        
        <h3> Disclaimer </h3>  <p> This is just the barebones product. Expect more features soon! Meanwhile feel free to post your favorite bites, but keep this part of the site quiet :) <br/> If you mess up, let me know! contact@lyricbit.es <br/><br/> Also open to suggestions!</p>
        </div>
        
        <div id="form">

            <?php echo form_open('site/create');?>
            <p>
                <label for="bite">Bite:</label>
                <textarea rows="3" cols="40" name="bite" id="bite" placeholder="Keep it short and sweet."></textarea>
            </p>
            
            <p>
                <label for="artist">Artist:</label>
                <input type="text" name="artist" placeholder="Who said that?" id="artist" />
            </p>
             <p>
                <label for="song_title">Song Title:</label>
                <input type="text" name="song_title" id="song_title" placeholder="Title of the song" />
            </p>
             <p>
                <label for="song_artist">Song Artist:</label>
                <input type="text" name="song_artist" id="song_artist"  placeholder="Song artist" />
            </p>
            
            <p>
                <input type="submit" value="Submit"/>
            </p>
            <?php echo form_close(); ?>
		</div> 
       </div> 
	</section>



	<section id="lyrics">
    	
			<?php if(isset($records)) : foreach($records as $row) : ?>
         <article>   
            <p class="bite"><?php echo $row->bite; ?> </p>
            <p class="artist"><?php echo $row->artist; ?></p> 
      		<p class="song"> <span class="song_title"> <?php echo $row->song_title; ?> </span>-    
            <span class="song_artist"><?php echo $row->song_artist; ?> </span> </p> 
        </article>    

            <?php endforeach; ?>
            <?php else : ?>        
            <h2>No reocrds were returned. </h2>
                <?php endif; ?>
            
    
    </section>


</body>
</html>