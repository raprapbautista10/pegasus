<?php

  include("../assets/incs/config.php");

?>
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'>
<meta name="robots" content="noindex">
<style class="cp-pen-styles"> #draggablePanelList .panel-heading {
        cursor: move;
    }
</style></head><body>
<html>
  <head>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
  </body>
<div class="container">
<div style="text-align:center;margin:40px;">Please use page to update, add and delete News articles. Drag to order and remember to save once done!</div>
  <ul id="draggablePanelList" class="list-unstyled">
      <li class="panel panel-info">
          <div class="panel-heading">You can drag this panel.</div>
          <div class="panel-body">Content here ...</div>
      </li>
  </ul>

</div>
  </body>
</html>

<script>    jQuery(function($) {
        var panelList = $('#draggablePanelList');

        panelList.sortable({
            // Only make the .panel-heading child elements support dragging.
            // Omit this to make then entire <li>...</li> draggable.
            handle: '.panel-heading', 
            update: function() {
                $('.panel', panelList).each(function(index, elem) {
                     var $listItem = $(elem),
                         newIndex = $listItem.index();

                     // Persist the new indices.
                });
            }
        });
    });


</script>
</body></html>