
<?php 

  include "header.php";

?> 

<!-- Block 1 -->

<div class="col-lg-12">
	<div class="container block1">
		<div class="row">	
       
       <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-21by9 video" style="width: 100%;">
            <iframe class="embed-responsive-item" src="video/wrens-video.mp4" allowfullscreen></iframe>
          </div> 
        </div>
    
          <div class="col-lg-8">
              <h1 class="mt-5 text-center" style="font-weight:bold;">Wrens</h1>
              <br>
              <p class="text-center">Wrens, tek oyunculu online istemci ile çalışan 2D oyundur. 2018 yılının Şubat ayında yazilimheryerde.space sayfası tarafından Dumlupınar Üniversitesi Tavşanlı Meslek Yüksekokulu'nun proje kapsamında yayına başlatılmıştır. 
               </p>
               <p class="text-center">
               Birbirinden farklı karakterler ile eğlenceli ve zevkli bir serüvene hemen katılmak için daha ne bekliyorsun.
               </p>
               <br><br><br>
            <a style="text-decoration:none;" href="Wrens.rar"><button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">Wrens İndir</button></a>
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
		
    	
        
                       <!-- Resimler -->
                      <h1 class="my-4 text-center">Karakterler</h1>
                      <div class="row">
                        <div class="col-md-3 col-sm-6 mb-4">
                          <a href="#">
                            <img class="img-fluid img" src="img/bat.gif" width="150" height="150" alt="Bat" data-toggle="tooltip" data-placement="top" title="Yarasa; gövdesi sıçana benzeyen, ön ayakları perdeli kanat biçiminde gelişmiş, vücudu yumuşak sık kıllarla kaplı, iskeleti hafif yapılı, uçabilen memeli hayvan.">
                          </a>
                        </div>
                
                        <div class="col-md-3 col-sm-6 mb-4">
                          <a href="#">
                            <img class="img-fluid img" src="img/dragon.gif" width="150" height="150" alt="Dragon" data-toggle="tooltip" data-placement="top" title="Ejderha; aslan pençeli, kanatlı ve kuyruğu yılan kuyruğu gibi olduğu söylenen ve masallarda geçen korkunç bir düşsel canavar.">
                          </a>
                        </div>
                
                        <div class="col-md-3 col-sm-6 mb-4">
                          <a href="#">
                            <img class="img-fluid img" src="img/eagle.gif" width="150" height="150" alt="Eagle" data-toggle="tooltip" data-placement="top" title="Kartal; yeryüzünün her yerinde yaşayan, yuvasını sarp kayalıklarda kuran, birçok türü bulunan, çok iri ve güçlü, genel olarak kızıl siyah tüylü, güçlü kıvrık gagalı, yırtıcı bir kuştur.">
                          </a>
                        </div>
                
                        <div class="col-md-3 col-sm-6 mb-4">
                          <a href="#">
                            <img class="img-fluid img" src="img/Parrot.gif" width="150" height="150" alt="Parrot" data-toggle="tooltip" data-placement="top" title="Papağan;  çeşitli büyüklükte, tüyleri genellikle yeşili bol olmak üzere çok karışık renkli, birbirine çok yakın, çok benzeyen, eğitilebilen ve konuşmaya alıştırılabilen kuşlara verilen ortak ad.">
                          </a>
                        </div>
                            
                        <div class="col-md-3 col-sm-6 mb-4">
                          <a href="#">
                            <img class="img-fluid img" src="img/stork.gif" width="150" height="150" alt="Stork" data-toggle="tooltip" data-placement="top" title="Leylek, uzun bacaklı, uzun gagalı, bacakları ve gagası kırmızı renkte, beyaz tüylü, kanat uçları siyah telekli bir göçmen kuşudur.">
                          </a>
                        </div>
                           
                        <div class="col-md-3 col-sm-6 mb-4">
                          <a href="#">
                            <img class="img-fluid img" src="img/bird.gif" width="150" height="150" alt="Bird" data-toggle="tooltip" data-placement="top" title="Wrens oyununun varsayılan karakteridir. Hayal ürünüdür.">
                          </a>
                        </div>
                      </div>
                      <!-- /Resimler -->
        </div>	
	</div>
</div>

<!-- /.Block 2 -->
	
<?php 

  include "footer.php";

?> 
    
