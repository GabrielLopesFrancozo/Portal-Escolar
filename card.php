<?php

class CardComponent
{
  private $image;
  private $title;
  private $icon;

  public function __construct($image, $title, $icon)
  {
    $this->image = $image;
    $this->title = $title;
    $this->icon = $icon;
?>
    <div class="card card-1" style="width: 20rem;">
      <img src="<?= $this->image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $this->icon; ?> <?= $this->title; ?></h5>
      </div>
    </div>
<?php
  }
}
