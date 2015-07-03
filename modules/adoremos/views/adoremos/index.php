<?php
$this->title = 'Adoremos Escola De Musica';
?>
 
  <div class="row">
            <div class="slide"></div>
        </div>
        <br/>

<div class="row grid">

<?php 
  foreach ($servico as $data):
  
?>
<div class="col-md-4">
   <img  src="<?php echo $this->assets($theme) ?>images/servicos/<?php echo $data->imagem ?>">
   <div class="texto">
    <span><?php echo $data->nome ?></span>
    <p>
     <?php echo $data->descricao ?>
    </p>
</div>
</div>
<?php endforeach ?>
 

</div><!-- row-->

<br/>

<div class="row">
<?php 
  foreach ($video as $data):
  
?>
<div class="col-md-4">
   <img  src="<?php echo $this->assets($theme) ?>images/video/<?php echo $data->foto ?>">
   <div class="texto">
    <span><?php echo $data->nome ?></span>
    <p>
     <?php echo $data->descricao ?>
    </p>
    <p>
     <?php echo $data->video ?>
    </p>
</div>
</div>
<?php endforeach ?>


  
</div>






