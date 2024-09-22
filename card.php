<?php

class CardComponent {
  private $image;
  private $title;

  public function __construct($image, $title) {
    $this->image = $image;
    $this->title = $title;
    ?>
    <div class="card" style="width: 20rem;">
      <img src="<?= $this->image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $this->title; ?></h5>
      </div>
    </div>
    <?php
  }
}
