<?php echo file_get_contents("header.html"); ?>
<?php $numero=0;?>


<div class="container-fluid bg-tonique" style="height:100vh;">
  <div class="container p-4"  >
    <div class="bg-image landing">
      <a href="#projets">
      <span class="link-spanner"></span>
      </a>
    </div>
  </div>
</div>


<div class="" style="height:20vh;"></div>


<div class="container-fluid p-4" id="projets">


  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-fl.php?">Place Fontaine Lestang</a></h2>
      </div>
      <div class="col-md-6">
        <p> Concevoir un écosystème graphique pour la place Fontaine Lestang, avec les habitants et usagers du lieu. Projet de diplôme.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-place.jpg);" href="projet-fl.php">
      <a href="projet-fl.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php
        $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>


  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-altdelacapa.php">Alt de la Capa</a></h2>
      </div>
      <div class="col-md-6">
        <p> Résultat d’une exploration graphique et poétique autour de la carte de randonnée et du relief montagneux qu’elle représente.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-altdelacapa.jpg);">
      <a href="projet-altdelacapa.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>

  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-placedalquier.php">Cartographie sensible : place Parfait Dalquier</a></h2>
      </div>
      <div class="col-md-6">
        <p> Les habitants du quartier on été invités à représenter leurs cheminements au travers de la place sur carte papier. L'inventaire de la signalisation verticale de l'espace interroge son influence sur la perception de l'espace.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-dalquier.jpg);">
      <a href="projet-placedalquier.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>

  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-horizon.php">Horizon après le dernier souffle</a></h2>
      </div>
      <div class="col-md-6">
        <p>Gravure expérimentale à l'aide de déchets d'emballages allimentaires faisant récit de la fin de notre monde. Réalisée lors d'un workshop mené par Edith Mercier.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-gravure.jpg);">
      <a href="projet-horizon.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>

  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-memoire.php">Pour ne pas finir seul à faire des graffitis</a></h2>
      </div>
      <div class="col-md-6">
        <p> Quels choix le designer graphique peut-il faire pour trouver sa place dans l'espace public urbain, autrement que par la publicité ou la signalétique commerciale ?</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-memoire.jpg);">
      <a href="projet-memoire.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>

  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-photographie.php">Photographie</a></h2>
      </div>
      <div class="col-md-6">
        <p>Au centre de ma pratique, la photographie est à la fois une base à retravailler, à composer et à éditer ainsi qu'une façon de figer un regard sur le monde. Je photographie en argentique et en numérique.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-photo.JPG);">
      <a href="projet-photographie.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>


  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-voeux.php">Carte de vœux</a></h2>
      </div>
      <div class="col-md-6">
        <p>Conception et fabrication de cartes de vœux à quatre mains avec Maurane Lupiac.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-cartevoeux.jpg);">
      <a href="projet-voeux.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>

  <div class="container-fluid p-4 position-relative projet">
    <div class="row">
      <div class="col-md-4">
        <h2><a href="projet-stenopes.php">Sténopés</a></h2>
      </div>
      <div class="col-md-6">
        <p>Expérimentations sténopéïques à l'aide d'une machine cylindrique percée en trois points.
          Ce procédé remet en question la planéité des images de notre quoditien et interroge le support de l'image.</p>
      </div>
    </div>
    <div class="bg-image thumbnail" style="background-image: url(img/thumbnail-stenopes.jpg);">
      <a href="projet-stenopes.php">
      <span class="link-spanner"></span>
      </a>
    </div>
    <div class="position-relative end-0 p-1 text-end">
      <?php $numero=$numero+1;
      echo "<h4><b>$numero</b></h4>";
       ?>
    </div>
  </div>

</div>

<div class="" style="height:10vh;"></div>

<div class="container-fluid" id="contact">
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-lg-4 mb-4">
        <h2>

          Au croisement entre l'architecture, l'urbanisme et le design graphique, je cultive un lien de proximité avec le terrain, le territoire, l'espace. J'imagine des dispositifs visuels, éditions imprimées, cartographies et photographies qui
          permettent au plus grand nombre d'agir efficacement sur ce qui nous entoure mais aussi de faire un pas de côté vis à vis de nos expériences quotidiennes de l'espace urbain.<br><br>

          Diplômé d'un DN MADe graphisme en 2023, je poursuis un master en design graphique à l'isdaT à Toulouse.<br><br>

        </h2>
      </div>
      <div class="col-md-6 ms-4">
        <ul>
          <li> <a href="https://instagram.com/adria_sr"><i class="bi bi-instagram"></i> <i>Instagram</i></a></li>
          <li> <a href="https://www.linkedin.com/in/adria-soubias/"><i class="bi bi-linkedin"></i> <i>Linkedin</i></a></li>

          <li> <a href="https://instagram.com/adria_sr"><i class="bi bi-envelope-at"></i> <i>adria.soubias[arobase]orange[point]fr</i></a></li>

        </ul>
      </div>
      <div class="col">




      </div>
    </div>
  </div>
</div>

<?php echo file_get_contents("footer.html"); ?>
