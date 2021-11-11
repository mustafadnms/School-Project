
<?php 

  include "header.php";

?> 

<!-- Block 1 -->

<div class="col-lg-12">
	<div class="container block1">
		<div class="row">	
       
       <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-21by9 video" style="width: 100%;">
            <iframe class="embed-responsive-item" src="video/space_math.mp4" allowfullscreen></iframe>
          </div> 
        </div>
    
          <div class="col-lg-8">
              <h1 class="mt-5 text-center" style="font-weight:bold;">Space Math</h1>
              <br>
              <p class="text-center">Space Math, online istemci ile çalışan 2D oyundur. 2018 yılının Şubat ayında yazilimheryerde.space sayfası tarafından Dumlupınar Üniversitesi Tavşanlı Meslek Yüksekokulu'nun proje kapsamında yayına başlatılmıştır. 
               </p>
               <p class="text-center">
               Birbirinden farklı zihinsel oyunlar ile eğlenceli ve zevkli bir serüvene hemen katılmak için daha ne bekliyorsun.
               </p>
               <br><br><br>
            <a style="text-decoration:none;" href="SpaceMath.rar"><button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">Space Math İndir</button></a>
      	  </div>
        </div> 
	</div>    
</div>

<!-- /.Block 1 -->



<!-- Block 3 -->

<div class="col-lg-12">
  <div class="row">
    <div class="container block2">
    
      <h1 class="mt-4 text-center">Best Top 5</h1>
      <br>

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

<!-- /.Block 3 -->




<!-- Block 2 -->

<div class="col-lg-12">
	<div class="row">
		<div class="container block2">
		

<!-- Footer -->

    <footer class="py-5 bg footer">
      <div class="container">
      	<div class="row">
          
            <div class="col-lg float-left">
            <br><br><br>
             	<h6 class="text-center" style="color:#FFF; font-weight:bold;">PROJE HAKKINDA</h6>
                <p class="text-left" style="color:#FFF;">Bu proje Dumlupınar Üniversitesi Tavşanlı Meslek Yüksekokulu Bilgisayar Programcılığı bölümü 2. sınıf Hüseyin AR, Hasan AR, Mustafa DÖNMÜŞ, Sabri Emre DAĞLI, Emre ATALAY, Halil SEZER tarafından Sistem Analizi ve Tasarımı Dersi için 18.02.2018 tarihinde yayına sunulmuştur.</p>
            </div>
   			
            <div class="col-lg-3 float-right text-center">
             <br><br>
            <h6 class="text-center mt-4" style="color:#FFF; font-weight:bold;">YAPIMCILAR</h6>
              <ul class="list-group list-group-flush" style="list-style:none; color:#FFF;">
                  <li>Hüseyin AR & Halil SEZER</li>
                  <li>Hasan AR & Sabri Emre DAĞLI</li>
                  <li>Mustafa DÖNMÜŞ & Emre ATALAY</li>
               </ul>  
            </div>
          
        </div>
        <p class="text-center mt-5" style="color:#FFF;">Copyright &copy; yazilimheryerde.space 2018</p>
      </div>
    </footer>

<!-- /.Footer -->

		</div>	
	</div>
</div>

<!-- /.Block 2 -->
       
    <!-- JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script>
    	$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		});		
    </script>
  
  </body>
</html>

<?php $db = null; ?>
    
   		