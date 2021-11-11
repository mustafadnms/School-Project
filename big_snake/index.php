<?php
  
  include "header.php";

?>


<!-- Block 1 -->

<div class="col-lg-12">
	<div class="container block1">
		<div class="row">	
       
       <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-16by9" style="width: 100%; height: 100%">
            <iframe class="embed-responsive-item" src="video/big-snake.mp4" allowfullscreen></iframe>
          </div> 
        </div>
    
          <div class="col-lg-8">
              <h1 class="mt-5 text-center" style="font-weight:bold;">Big Snake</h1>
              <br>
              <p class="text-center">Big Snake, tek oyunculu online istemci 2D oyundur. 2018 yılının Şubat ayında yazilimheryerde.space sayfası tarafından Dumlupınar Üniversitesi Tavşanlı Meslek Yüksekokulu'nun proje kapsamında yayına başlatılmıştır. 
               </p>
               <p class="text-center">
               Birbirinden farklı yiyecekleri yemek için eğlenceli ve zevkli bir serüvene hemen katılmak için daha ne bekliyorsun.
               </p>
               <br><br><br>
            <a style="text-decoration:none;" href="BigSnake.rar"><button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">Big Snake İndir</button></a>
      	  </div>
          
        </div> 
	</div>    
</div>

<!-- /.Block 1 -->



<!-- Block 2 -->

<div class="col-lg-12">
	<div class="row">
		<div class="container block2">
		
            <h3 class="my-4 text-center">Best Top 5</h3>


            <table class="table table-bordered text-center">
                <thead>
                  
                  <tr>
                    
                    <th scope="col">Nickname</th>
                    <th scope="col">Score</th>
                    <th scope="col">Yorumlar</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 

                      $sorgu = $db -> prepare("SELECT * FROM users order by score DESC LIMIT 5");
                      $sorgu -> execute();
                      while($ayarcek = $sorgu -> fetch(PDO::FETCH_ASSOC))
                        {
                  ?>
                  <tr>
                    
                    <td><?php echo $ayarcek['adi']; ?></td>
                    <td><?php echo $ayarcek['score']; ?></td>
                    <td><?php echo $ayarcek['yorum']; ?></td>

                  </tr>
                  <?php } ?>
                </tbody>

              </table>

                      
    </div>	
	</div>
</div>

<!-- /.Block 2 -->


<?php
  
  include "footer.php";

?>

