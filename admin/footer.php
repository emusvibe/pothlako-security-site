<center>
		<footer>
		<?php
                                        $mission_query = mysqli_query($con,"select * from content where title  = 'footer' ")or die(mysql_error());
                                        $mission_row = mysqli_fetch_array($mission_query);
                                        echo $mission_row['content'];
                 ?>
	
<!--                 <div class="container">
	<div class="address">
            
                <br/>
		<a href="https://facebook.com/FaithBibleCollegeSA/" target="_blank">
			<img src="../website/images/facebook.png" width="45" height="45" alt="facebook"></a>
		<a href="https://twitter.com" target="_blank">
			<img src="../website/images/twitter.png" width="45" height="45" alt="twitter"></a>
		<a href="https://www.linkedin.com" target="_blank">
			<img src="../website/images/linked.png" width="45" height="45" alt="linked"></a>
		<a href="https://vimeo.com" target="_blank">
			<img src="../website/images/vimeo.png" width="45" height="45" alt="vimeo"></a>
	</div>
	
</div>   -->
                    
		</footer>
</center>

<div class="pull-right">
		<footer>
           <p>Powered by: Motifs Digital Communications</p>
        <footer>
</div>

