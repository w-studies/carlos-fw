<?php

if (is_file($View['path'])) {
  require $View['path'];
} else {
  echo '<div class="alert alert-danger">Oops! View not found!</div>';
}
